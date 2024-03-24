<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Rating;
use App\Models\User;
use App\Models\PostLike;
use App\Models\PostShare;
use App\Models\Notification;
use Illuminate\Support\Facades\File;

/**
 * @group  Products
 *
 * APIs for managing products
 */

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     /** 
 * Get-All-Products
 * @authenticated
 * @response  {
    "status": true,
    "data": [
        {
            "id": 1,
            "product_name": "Product1",
            "product_details": "test",
            "price": "147.00",
            "active": 1,
            "created_at": "2021-07-22T15:34:31.000000Z",
            "updated_at": "2021-07-27T06:11:21.000000Z",
            "deleted_at": null
        },
        {
            "id": 2,
            "product_name": "Product2",
            "product_details": "test",
            "price": "147.00",
            "active": 1,
            "created_at": "2021-07-22T15:46:07.000000Z",
            "updated_at": "2021-07-27T06:11:09.000000Z",
            "deleted_at": null
        }
    ]
}
 * @response  401 {
 *   "message": "Unauthenticated."
*}
 */
    public function getproducts()
    {
        //$products = Product::where("user_id", auth()->user()->id)->where(['active'=>1])->get();
        $products = Product::where(['active'=>1])->get();
        
        if(count($products) > 0){
            return response()->json(["status" => true, "data" => $products]);
        }
        else{
            return response()->json(["status" => true, "message" => "Product not found"]);
        }
    }

     /** 
 * Get-All-Products
 * @authenticated
 * @response  {
    "status": true,
    "data": [
        {
            "id": 4,
            "product_name": "test",
            "product_details": "test details",
            "price": "656.00",
            "product_photo_path": "attachFile/de8ed9348a7f2162258bc5b6ea445e09.jpg",
            "product_video_path": null,
            "user_id": 1,
            "active": 1,
            "created_at": "2021-07-30T11:44:13.000000Z",
            "updated_at": "2021-08-02T09:55:41.000000Z",
            "deleted_at": null
        },
        {
            "id": 5,
            "product_name": "product11",
            "product_details": "productdetails",
            "price": "147.00",
            "product_photo_path": "1627648408.jpg",
            "product_video_path": null,
            "user_id": 1,
            "active": 1,
            "created_at": "2021-07-30T12:33:28.000000Z",
            "updated_at": "2021-07-30T12:33:28.000000Z",
            "deleted_at": null
        },
        {
            "id": 6,
            "product_name": "product117",
            "product_details": "productdetails",
            "price": "147.00",
            "product_photo_path": "1627648947.jpg",
            "product_video_path": "1627648947.asf",
            "user_id": 1,
            "active": 1,
            "created_at": "2021-07-30T12:42:27.000000Z",
            "updated_at": "2021-07-30T12:42:27.000000Z",
            "deleted_at": null
        }
    ]
}
 * @response  401 {
 *   "message": "Unauthenticated."
*}
 */
public function getmyproducts()
{
    //$products = Product::where("user_id", auth()->user()->id)->where(['active'=>1])->get();
    $products = Product::where(['active'=>1])->get();
    
    if(count($products) > 0){
        return response()->json(["status" => true, "data" => $products]);
    }
    else{
        return response()->json(["status" => true, "message" => "Product not found"]);
    }
}


         /** 
 * Get-New-Products
 * @authenticated
 * @response  {
    "status": true,
    "data": [
        {
            "id": 1,
            "product_name": "Product1",
            "product_details": "<p><strong>test</strong></p>\n",
            "price": "147.00",
            "active": 1,
            "created_at": "2021-07-22T15:34:31.000000Z",
            "updated_at": "2021-07-27T06:11:21.000000Z",
            "deleted_at": null
        },
        {
            "id": 2,
            "product_name": "Product2",
            "product_details": "<p>test</p>\n",
            "price": "147.00",
            "active": 1,
            "created_at": "2021-07-22T15:46:07.000000Z",
            "updated_at": "2021-07-27T06:11:09.000000Z",
            "deleted_at": null
        }
    ]
}
 * @response  401 {
 *   "message": "Unauthenticated."
*}
 */
public function getnewproducts()
{
    $products = Product::where(['active'=>1])->latest()->get();
    
    if(count($products) > 0){
        return response()->json(["status" => true, "data" => $products]);
    }
    else{
        return response()->json(["status" => true, "message" => "Product not found"]);
    }
}


        /** 
 * Get-used-Products
 * @authenticated
 * @response  {
    "status": true,
    "data": [
        {
            "id": 1,
            "product_name": "Product1",
            "product_details": "<p><strong>test</strong></p>\n",
            "price": "147.00",
            "active": 1,
            "created_at": "2021-07-22T15:34:31.000000Z",
            "updated_at": "2021-07-27T06:11:21.000000Z",
            "deleted_at": null
        },
        {
            "id": 2,
            "product_name": "Product2",
            "product_details": "<p>test</p>\n",
            "price": "147.00",
            "active": 1,
            "created_at": "2021-07-22T15:46:07.000000Z",
            "updated_at": "2021-07-27T06:11:09.000000Z",
            "deleted_at": null
        }
    ]
}
 * @response  401 {
 *   "message": "Unauthenticated."
*}
 */
public function getusedproducts()
{
    $products = Product::where(['active'=>1])->orderBy('created_at', 'ASC')->get();
    
    if(count($products) > 0){
        return response()->json(["status" => true, "data" => $products]);
    }
    else{
        return response()->json(["status" => true, "message" => "Product not found"]);
    }
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

         /**
     * Product-Create 
      * @bodyParam product_name string required Example: demo comment
 * @bodyParam product_details number required Example: 480
 *  @bodyParam price string required Example: demo comment
 * @bodyParam product_photo_path number required Example: 480
 *  @bodyParam comment string required Example: demo comment
 * @bodyParam product_id number required Example: 480
 * @response  {
    "status": true,
    "message": "Success! product uploaded",
    "data": {
        "product_name": "Product1",
        "product_details": "productdetails",
        "price": "147",
        "offer_price": "1",
        "product_photo_path": "1628003559.jpg",
        "product_video_path": "1628003559.asf",
        "user_id": 1,
        "updated_at": "2021-08-03T15:12:39.000000Z",
        "created_at": "2021-08-03T15:12:39.000000Z",
        "id": 9
    }
}
 */
    public function createproduct(Request $request)
    {
        $validator  =   Validator::make($request->all(), [
            "product_name"  =>  "required|unique:products",
            "product_details"  =>  "required",
            "price"  =>  "required",
            "product_photo_path"  =>  "required|image:jpeg,png,jpg,gif,svg|max:2048",
            //"active" =>  "required",

        ]);
    
        if($validator->fails()) {
            return response()->json(["status" => false, "validation_errors" => $validator->errors()]);
        }
 
        $product = new Product($request->all());
        $product->user_id=auth()->user()->id;
        
        $fileName = time().'.'.$request->product_photo_path->extension();  
    
        $request->product_photo_path->move(public_path('/storage/attachFile/'), $fileName);
        $product->product_photo_path= $fileName;

        if ($request->hasFile('product_video_path')) {
            $videofile = time().'.'.$request->product_video_path->extension();  
            $request->product_video_path->move(public_path('/storage/attachFile/'), $videofile);
            $product->product_video_path= $videofile;
          }
        
      

        $product->save();
    
        if(!is_null($product)) {
            return response()->json(["status" => true, "message" => "Success! product uploaded", "data" => $product]);
        }
        else {
            return response()->json(["status" => false, "message" => "Product upload failed!"]);
        }   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
/** 
 * Update-Product
 * @authenticated
 * @response  {
    "status": true,
    "message": "Success! Product updated",
    "data": {
        "id": 4,
        "product_name": "testpro",
        "product_details": "testproducts",
        "active": "0",
        "created_at": "2021-07-27T07:42:02.000000Z",
        "updated_at": "2021-07-27T08:10:12.000000Z",
        "deleted_at": null
    }
}
 * @response  401 {
 *   "message": "Unauthenticated."
*}
 */

    public function updateproduct(Request $request,  Product $product)
    {
        $validator      =       Validator::make($request->all(), [
            "product_name"  =>  "required",
            "product_details"  =>  "required",
            "price"  =>  "required",
            "active" =>  "required",
        ]);
        if($validator->fails()) 
            return response()->json(["status" => false, "validation_errors" => $validator->errors()]);
    
        
        $product->update($request->all());


    //    $product = ['product_name' => $request->product_name, 'product_details' => $request->product_details];
    //     if ($files = $request->file('product_photo_path')) {
    //     $destinationPath = '/storage/attachFile/';
    //     $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
    //     $files->move($destinationPath, $profileImage);
    //     $product['product_photo_path'] = "$profileImage";
    //     }
    //     $product['product_name'] = $request->get('product_name');
    //     $product['price'] = $request->get('price');
    //     $product['product_details'] = $request->get('product_details');
    //     $product['active'] = $request->get('active');
    //     Product::where('id',$product)->update($product);

        
    
        return response()->json(["status" => true, "message" => "Success! Product updated", "data" => $product]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   /** 
    * Destroy-Product
 * @authenticated
 * @urlParam task number required Example: 5
 * @response  {
    "status": true,
    "message": "Success! Product deleted"
}
 * @response  401 {
 *   "message": "Unauthenticated."
*}
 */
public function destroyproduct(Product $product)
{
    $product->delete();
    return response()->json(["status" => true, "message" => "Success! product deleted"], 200);
}


/**
     * User-Product Rating
     *
     * @authenticated
     * @bodyParam id number required Example: 126
     * @response {
    "status": true,
    "message": "Success! rated successfully",
    "data": {
        "rating": "1",
        "product_id": "1",
        "user_id": 1,
        "updated_at": "2021-07-29T10:38:48.000000Z",
        "created_at": "2021-07-29T10:38:48.000000Z",
        "id": 1
    }
}
 
     * @response  401 {
     *   "message": "Unauthenticated."
     *}
     */

    public function productrating(Request $request)
    {

        $validator      =   Validator::make($request->all(), [
            "rating"   =>      "required",
            "product_id"   =>      "required",         
        ]);

        if($validator->fails())
            return response()->json(["status" => false, "validation_errors" => $validator->errors()]);

        $rating=new Rating($request->all());
        $rating->user_id=auth()->user()->id;
        $rating->save();

        return response()->json(["status" => true, "message" => "Success! rated successfully", "data" => $rating]);
    }


     /**
     * Product Like/Dislike
     *
     * @authenticated
     * @bodyParam product_id number required Example: 126
     * @bodyParam rating number required Example: 2
     * @response{
    {
        "status": true,
        "message": "Success! Product liked"
    }
 }
     * @response  401 {
     *   "message": "Unauthenticated."
     *}
     */

    public function productlike(Request $request)
    {
        $productid = $request->product_id;
       
            if ($request->rating == '') {
                $product = new Product;
                $product->likedByUsers()->attach($productid, [
                    'product_id' => $productid,
                    'user_id' => auth()->user()->id
                ]);
            } else {
                $product = new Product;
                $product->likedByUsers()->attach($productid, [
                    'rating' => $request->rating,
                    'product_id' => $productid,
                    'user_id' => auth()->user()->id
                ]);
            }
            return response()->json(["status" => true, "message" => "Success! Product liked"]);
        
    }

    /**
     * Product Share
     *
     * @authenticated
     * @bodyParam user_id number required Example: 50
     * @bodyParam product_id number required Example: 3
     * @response{
    "status": true,
    "message": "Success! Product shared"
}
     * @response  401 {
     *   "message": "Unauthenticated."
     *}
     */

    public function productshare(Request $request)
    {

        $validator      =   Validator([
            "user_id"   =>      "required",
            "product_id"      =>      "required"
        ]);

        if ($validator->fails())
            return response()->json(["status" => false, "validation_errors" => $validator->errors()]);
        $productid = $request->product_id;
        $product = Product::find($productid);
        $product->sharedToUsers()->attach($request->user_id);

        return response()->json(["status" => true, "message" => "Success! Product shared"]);
    }


     /**
     * Product Like Count
     *
     * @authenticated
     * @response{
    "status": true,
    "message": "1 number of likes found.",
    "data": 1
}
     * @response  401 {
     *   "message": "Unauthenticated."
     *}
     */

    public function countUserProductLike()
    {
       
        $products = Product::withcount('likedByUsers')->where('user_id', auth()->user()->id)->get();
      

        return response()->json(["status" => true, "message" => count($products) . " number of likes found.", "data" => count($products)]);
    }


}
