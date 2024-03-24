<?php

namespace App\Http\Controllers\API;

use App\Models\Order;
use App\Models\Product;
use App\Models\UserCart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

/**
 * @group  User cart Management
 *
 * APIs for managing basic auth functionality
 */
class UserCartController extends Controller
{

  private  $per_page = 10;

     /** 
      *@group user cart and orders
 * @authenticated
 * @response  {
    "status": true,
    "message": "",
    "data": {
        "total_price": 1100,
        "products": {
            "current_page": 1,
            "data": [
                {
                    "id": 3,
                    "product_id": 2,
                    "product": {
                        "id": 2,
                        "product_name": "abc2",
                        "price": "600.00"
                    }
                }
            ],
            "first_page_url": "http://127.0.0.1:8000/api/user-cart-products?page=1",
            "from": 1,
            "last_page": 1,
            "last_page_url": "http://127.0.0.1:8000/api/user-cart-products?page=1",
            "links": [
                {
                    "url": null,
                    "label": "&laquo; Previous",
                    "active": false
                },
                {
                    "url": "http://127.0.0.1:8000/api/user-cart-products?page=1",
                    "label": "1",
                    "active": true
                },
                {
                    "url": null,
                    "label": "Next &raquo;",
                    "active": false
                }
            ],
            "next_page_url": null,
            "path": "http://127.0.0.1:8000/api/user-cart-products",
            "per_page": 10,
            "prev_page_url": null,
            "to": 2,
            "total": 2
        }
    }
}
 * @response  401 {
 *   "message": "Unauthenticated."
*}
 */

    public function index()
    {
       try{
        $user = Auth::user();
        $products = UserCart::select('id','product_id')->where('user_id',$user->id)->with('product:id,product_name,price')->orderBy('id','DESC')->paginate($this->per_page);
        $total_price = 0;

        $get_all_product = UserCart::select('id','product_id')->where('user_id',$user->id)->with('product:id,price')->get();
            foreach ($get_all_product as $product) {
                $total_price += $product->product->price;
            }

        
        $data['total_price'] = $total_price;
        $data['products'] = $products;
        if($products->count() == 0){
         return Response()->Json(["status"=>true,"message"=> 'No data found','data'=>$data]);
        }
         return Response()->Json(["status"=>true,"message"=> '','data'=>$data]);


       }catch(\Exception $e) {
           return Response()->Json(["status"=>false,"message"=> 'Something went wrong. Please try again.']);
      }
    }

/** 
 * Cart-add
 * @authenticated
 * @bodyParam product_id string required Example: 1
 * @bodyParam quantity string optional Example: 2
 * @response  {
    "status": true,
    "message": "Product successfully added your cart."
  }
 * @response  401 {
 *   "message": "Unauthenticated."
*}
 */
    public function addToCart(Request $request)
    {
       try{

        $validator = Validator::make($request->all(), [ 
            "product_id" =>  "required",
            "quantity" =>  "",
        ]);

        if($validator->fails()) {
            return response()->json(["validation_errors" => $validator->errors()]);
        }

        $products = UserCart::where('product_id',$request->product_id)->where('user_id',Auth::user()->id)->first();
        if($products) {
            return Response()->Json(["status"=>false,"message"=> 'Already added this product.']);
        }

        $user_cart = new UserCart;
        $user_cart->user_id = Auth::user()->id;
        $user_cart->product_id = $request->product_id;
        $user_cart->quantity = $request->quantity ?? 1;
        $user_cart->save();

        return Response()->Json(["status"=>true,"message"=> 'Product successfully added your cart.']);

       }catch(\Exception $e) {
           return Response()->Json(["status"=>false,"message"=> 'Something went wrong. Please try again.']);
      }
    }


    /** 
     * Remove from cart
 * @authenticated
 * @bodyParam item_id string required Example: 5
 * @response  {
    "status": true,
    "message": "Product successfully Removed from your cart."
}
 * @response  401 {
 *   "message": "Unauthenticated."
*}
 */

    public function removeFromCart(Request $request)
    {
       try{

        $validator = Validator::make($request->all(), [
            "item_id" =>  "required",
        ]);

        if($validator->fails()) {
            return response()->json(["validation_errors" => $validator->errors()]);
        }

        $item = UserCart::find($request->item_id);
        $item->delete();
        
        return Response()->Json(["status"=>true,"message"=> 'Product successfully Removed from your cart.']);

       }catch(\Exception $e) {
           return Response()->Json(["status"=>false,"message"=> 'Something went wrong. Please try again.']);
      }
    }


      /** 
       * Make Order
 * @authenticated
 * @bodyParam products string required Example: [
        {
        "product_id": 1,
        "quantity":1
        },
        {
        "product_id": 2,
        "quantity":1
        }
    ]
 * @response  {
    "status": true,
    "message": "Your order has been successfully Placed."
}
 * @response  401 {
 *   "message": "Unauthenticated."
*}
 */

    public function order(Request $request)
    {
        try{

            $validator = Validator::make($request->all(), [
              
                'products' => 'array|min:1',
                'products.*.product_id' => 'required',
                'products.*.quantity' => 'required',
        
            ]);
    
            if($validator->fails()) {
                return response()->json(["validation_errors" => $validator->errors()]);
            }
            $products = collect($request->products);
               
               DB::beginTransaction();
            foreach ($products as $product) {
                 
                $get_product= Product::find($product['product_id']);
               $order = new Order;
               $order->order_id = 'OD'.Auth::user()->id.$get_product->id.time();
               $order->user_id = Auth::user()->id;
               $order->product_id = $get_product->id;
               $order->quantity = $product['quantity'] ?? 1;
               $order->original_price = $get_product->price;
               $order->payment_price = $get_product->price;
               $order->save();
            }
            DB::commit();
            return Response()->Json(["status"=>true,"message"=> 'Your order has been successfully Placed.']);
    
           }
           catch(\Exception $e) {
            DB::rollback();
               return Response()->Json(["status"=>false,"message"=> 'Something went wrong. Please try again.']);
          }
    }

/** 
 * Order List
 * @authenticated
 
 * @response  {
    "status": true,
    "message": "",
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 2,
                "order_id": "OD221627653552",
                "user_id": 2,
                "product_id": 2,
                "quantity": 1,
                "original_price": "600.00",
                "payment_price": "600.00",
                "status": "processing",
                "created_at": "2021-07-30T13:59:12.000000Z",
                "updated_at": "2021-07-30T13:59:12.000000Z",
                "deleted_at": null,
                "product": {
                    "id": 2,
                    "product_name": "abc2"
                }
            },
            {
                "id": 1,
                "order_id": "OD211627653552",
                "user_id": 2,
                "product_id": 1,
                "quantity": 1,
                "original_price": "500.00",
                "payment_price": "500.00",
                "status": "processing",
                "created_at": "2021-07-30T13:59:12.000000Z",
                "updated_at": "2021-07-30T13:59:12.000000Z",
                "deleted_at": null,
                "product": {
                    "id": 1,
                    "product_name": "abc"
                }
            }
        ],
        "first_page_url": "http://127.0.0.1:8000/api/order-list?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http://127.0.0.1:8000/api/order-list?page=1",
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http://127.0.0.1:8000/api/order-list?page=1",
                "label": "1",
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "next_page_url": null,
        "path": "http://127.0.0.1:8000/api/order-list",
        "per_page": 10,
        "prev_page_url": null,
        "to": 2,
        "total": 2
    }
}
 * @response  401 {
 *   "message": "Unauthenticated."
*}
 */
    public function orderlist()
    {
        try{
        $orders = Order::where('user_id',Auth::user()->id)->where(function($query){
            $query->where('status',1)->orWhere('status',2)->orWhere('status',4);
        })->with('product:id,product_name')->orderBy('id','DESC')->paginate($this->per_page);
        if($orders->count() == 0){
            return Response()->Json(["status"=>true,"message"=> 'No data found','data'=>$orders]);
           }
        return Response()->Json(["status"=>true,"message"=> '','data'=>$orders]);

    }catch(\Exception $e) {
           return Response()->Json(["status"=>false,"message"=> 'Something went wrong. Please try again.']);
      }
    }


 /** 
    * My Sales 
    * @authenticated
    * @response {
    "status": true,
    "data": [
        {
            "id": 1,
            "order_id": "OD181628061400",
            "user_id": 1,
            "product_id": 8,
            "quantity": 1,
            "original_price": "147.00",
            "payment_price": "147.00",
            "status": "processing",
            "created_at": "2021-08-04T07:16:40.000000Z",
            "updated_at": "2021-08-04T07:16:40.000000Z",
            "deleted_at": null
        }
    ]
}
 * @response  401 {
 *   "message": "Unauthenticated."
*}
 */
public function usersales()
{
    $product_id = Order::where(['status'=>1])->value('product_id');
    $user_id = Product::where("id", $product_id)->value('user_id');  
    if($user_id ==  auth()->user()->id ){
        $mysale = Order::where("user_id", $user_id)->get();
        if(count($mysale) > 0){
            return response()->json(["status" => true, "data" => $mysale]);
        }
        else{
            return response()->json(["status" => true, "message" => "Sales not found"]);
        }
    }
    else{
        return response()->json(["status" => true, "message" => "Not found any sales item"]);
    }
   
    //Log::debug("mysale".print_r($mysale,true));
   
}

/** 
    * My purchase
    * @authenticated
    * @response {
    "status": true,
    "data": [
        {
            "id": 1,
            "order_id": "OD181628061400",
            "user_id": 1,
            "product_id": 8,
            "quantity": 1,
            "original_price": "147.00",
            "payment_price": "147.00",
            "status": "processing",
            "created_at": "2021-08-04T07:16:40.000000Z",
            "updated_at": "2021-08-04T07:16:40.000000Z",
            "deleted_at": null
        }
    ]
}
 * @response  401 {
 *   "message": "Unauthenticated."
*}
 */
public function userpurchase()
{
    $mypurchase = Order::where("user_id", auth()->user()->id)->where(['status'=>4])->get();
    
    if(count($mypurchase) > 0){
        return response()->json(["status" => true, "data" => $mypurchase]);
    }
    else{
        return response()->json(["status" => true, "message" => "Purchase product not found"]);
    }
    
}


}
