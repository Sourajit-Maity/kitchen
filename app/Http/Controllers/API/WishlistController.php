<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\User;
use App\Models\Wishlist;
use App\Models\Notification;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

/**
 * @group  Product Wishlist Manamgement
 *
 * APIs for managing wishlist
 */
class WishlistController extends Controller
{
     /**
     *Product Wishlist 
     *
     * @authenticated

     * @bodyParam product_id number required Example: 3
     * @response{
    "status": true,
    "message": "Success! Product listed in Wishlist"
}
     * @response  401 {
     *   "message": "Unauthenticated."
     *}
     */

    public function wishliststore(Request $request)
    {

        $validator      =   Validator([
            "product_id"      =>      "required"
        ]);

        if ($validator->fails())
            return response()->json(["status" => false, "validation_errors" => $validator->errors()]);
         $productid = $request->product_id;

        $product = new Product;
        $product->wishlistToUsers()->attach($productid, [
            'product_id' => $productid,
            'user_id' => auth()->user()->id
        ]);

  

        return response()->json(["status" => true, "message" => "Success! Product listed in Wishlist"]);
    }

    // public function wishlistremove(Request $request)
    // {
 
    //     $productid = $request->product_id;
    //     $product = Auth::Wishlist()->wishlistToUsers()->find($productid);
    //     if ($product) {
    //         Auth::Wishlist()->wishlistToUsers()->detach($productid);
    //         return response()->json(["status" => true, "message" => "Success! Product removed from wishlist"]);
    //     }
    // }


 /**
     * Wishlist View
     *
     * @authenticated
     * @urlParam product_id number required Example: 126
     * @response{
        "status": true,
        "message": "Success! Wishlist view successfully"
    }
     * @response  401 {
     *   "message": "Unauthenticated."
     *}
     */


    public function wishlistview($id)
    {
        $product = new Product;
        $product->wishlistToUsers()->attach($id, [
            'product_id' => $id,
            'user_id' => auth()->user()->id
        ]);

        return response()->json(["status" => true, "message" => "Success! Wishlist view successfully"]);
    }
}
