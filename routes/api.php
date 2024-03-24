<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\TaskController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\RecipeController;
use App\Http\Controllers\API\CommentController;
use App\Http\Controllers\API\ContactController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\FollowerController;
use App\Http\Controllers\API\WishlistController;
use App\Http\Controllers\API\UserCartController;
use App\Http\Controllers\API\RecipeCommentController;
use App\Http\Controllers\API\RecipeWishlistController;
use App\Http\Controllers\API\CMSController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// user controller routes
Route::post("register", [UserController::class, 'register']);
Route::post("registermember", [UserController::class, 'registermember']);
Route::post("login", [UserController::class, 'login']);
Route::post("social-login", [UserController::class, 'socialsignup']);
Route::post("email-verification", [UserController::class, 'emailverification']);
Route::post("forgot-password", [UserController::class, 'forgot_password']);
Route::post("createContact", [ContactController::class, 'createcontact']);

Route::get("get-header", [CMSController::class, 'getheader']);
Route::get("get-footer", [CMSController::class, 'getfooter']);
Route::get("get-banner", [CMSController::class, 'getbanner']);
Route::get("get-homepage", [CMSController::class, 'gethomepage']);

// sanctum auth middleware routes
Route::middleware('auth:api')->group(function() {
    Route::get("user", [UserController::class, "user"]);
    Route::resource('tasks', TaskController::class);    //patch/put   =>  x-www-form-urlencode
    Route::patch('/updatemember/{member}',[UserController::class,'updatemember']);
    Route::get("getRegisterMemberList", [UserController::class, 'getRegisterMemberList']);
    Route::get("getMonthlyMemberList", [UserController::class, 'getMonthlyMemberList']);
    Route::post("change_password", [UserController::class, "password_change"]);
    Route::post("user-block/{user}", [UserController::class, "userblock"]);

    //Route::resource('products', ProductController::class);
    Route::get("products/all", [ProductController::class, 'getproducts']);
    Route::get("products/own", [ProductController::class, 'getmyproducts']);
    Route::get("products/new", [ProductController::class, 'getnewproducts']);
    Route::get("products/used", [ProductController::class, 'getusedproducts']);
    Route::post("products/create", [ProductController::class, 'createproduct']);
    Route::patch('/products/update/{product}',[ProductController::class,'updateproduct']);
    Route::delete('/destroyProduct/{product}',[ProductController::class,'destroyproduct']);
    Route::post('product-rating', [ProductController::class,'productrating']);
    Route::post('product-like-dislike',[ProductController::class, 'productlike']);
    Route::post('product-share',[ProductController::class, 'productshare']);
    Route::get('product-like-count',[ProductController::class, 'countUserProductLike']);

    Route::get("recipe/all", [RecipeController::class, 'getrecipe']);
    Route::get("recipe/own", [RecipeController::class, 'getmyRecipe']);
    Route::get("getRecipeCategory", [RecipeController::class, 'getrecipecategory']);
    Route::post("recipe/create", [RecipeController::class, 'createrecipe']);
    Route::patch('/recipe/update/{recipe}',[RecipeController::class,'updaterecipe']);
    Route::delete('/destroyRecipe/{recipe}',[RecipeController::class,'destroyrecipe']);

    Route::post('user-report', [UserController::class,'userreport']);
    Route::post('user-block', [UserController::class,'userblock']);
    Route::post('user-review', [UserController::class,'reviewstore']);
    Route::post('user-favorite', [UserController::class,'userfavoritestore']);

    Route::get('user-sales', [UserCartController::class,'usersales']);
    Route::get('user-purchase', [UserCartController::class,'userpurchase']);


    Route::resource('comments', CommentController::class); 
    Route::resource('recipecomments', RecipeCommentController::class);  

    Route::resource('followers', FollowerController::class);

    Route::post('wishlist-create',[WishlistController::class, 'wishliststore']);
    //Route::delete('/wishlist-remove',[WishlistController::class,'wishlistremove']);
    Route::get('wishlist-view/{product_id}',[WishlistController::class, 'wishlistview']);
    Route::post('user-card-products', [UserCartController::class,'index']);
    

    Route::get('user-cart-products', [UserCartController::class,'index']); 
    Route::post('add-to-cart', [UserCartController::class,'addToCart']);
    Route::delete('remove-from-cart', [UserCartController::class,'removeFromCart']);
    Route::post('order', [UserCartController::class,'order']);
    Route::get('order-list', [UserCartController::class,'orderlist']);


    Route::post('recipe-rating', [RecipeController::class,'reciperating']);
    Route::post('recipe-like-dislike',[RecipeController::class, 'recipelike']);
    Route::post('recipe-share',[RecipeController::class, 'recipeshare']);
    Route::get('recipe-like-count',[RecipeController::class, 'countUserrecipeLike']);


    Route::post('recipewishlist-create',[RecipeWishlistController::class, 'recipewishliststore']);
    //Route::delete('/recipewishlist-remove',[RecipeWishlistController::class,'recipewishlistremove']);
    Route::get('recipewishlist-view/{recipe_id}',[RecipeWishlistController::class, 'recipewishlistview']);




    
});