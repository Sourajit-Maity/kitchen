<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Recipe;
use App\Models\User;
use App\Models\RecipeWishlist;
use App\Models\Notification;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
/**
 * @group  Recipe Wishlist Manamgement
 *
 * APIs for managing wishlist
 */
class RecipeWishlistController extends Controller
{
     /**
     * Recipe Wishlist 
     *
     * @authenticated
     * @bodyParam recipe_id number required Example: 3
     * @response{
    "status": true,
    "message": "Success! Recipe listed in Wishlist"
}
     * @response  401 {
     *   "message": "Unauthenticated."
     *}
     */

    public function recipewishliststore(Request $request)
    {

        $validator      =   Validator([
            "recipe_id"      =>      "required"
        ]);

        if ($validator->fails())
            return response()->json(["status" => false, "validation_errors" => $validator->errors()]);
         $recipeid = $request->recipe_id;

        $recipe = new Recipe;
        $recipe->wishlistrecipeToUsers()->attach($recipeid, [
            'recipe_id' => $recipeid,
            'user_id' => auth()->user()->id
        ]);

        return response()->json(["status" => true, "message" => "Success! Recipe listed in Wishlist"]);
    }

    // public function recipewishlistremove(Request $request)
    // {
 
    //     $productid = $request->product_id;
    //     $product = Auth::Wishlist()->wishlistToUsers()->find($productid);
    //     if ($product) {
    //         Auth::Wishlist()->wishlistToUsers()->detach($productid);
    //         return response()->json(["status" => true, "message" => "Success! Product removed from wishlist"]);
    //     }
    // }


 /**
     * Recipe Wishlist View
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


    public function recipewishlistview($id)
    {
        $recipe = new Recipe;
        $recipe->wishlistrecipeToUsers()->attach($id, [
            'recipe_id' => $id,
            'user_id' => auth()->user()->id
        ]);

        return response()->json(["status" => true, "message" => "Success! Wishlist view successfully"]);
    }
}
