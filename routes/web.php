<?php

use App\Http\Controllers\Admin\AdminDashboard;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RegisteredMemberController;
use App\Http\Controllers\Admin\RecipeCategoryController;
use App\Http\Controllers\Admin\AccountManagementController;
use App\Http\Controllers\Admin\FaqMasterController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\PaymentPercentageController;
use App\Http\Controllers\Admin\RecipeController;
use App\Http\Controllers\Admin\HomepageController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\HeaderController;
use App\Http\Controllers\Admin\CmsController;
use Illuminate\Support\Facades\Route;
 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::redirect('/','admin');
Route::redirect('admin','admin/login');

Route::group(['prefix' => 'admin', 'middleware'=> 'auth:sanctum'], function(){
    Route::get('profile',[ProfileController::class,'getProfile'])->name('admin.profile');
    Route::get('/dashboard',[AdminDashboard::class,'getDashboard'])->name('admin.dashboard');
    Route::resources([
        'users' => UserController::class,
        'registered-member' => RegisteredMemberController::class,
        'categoryrecipe' => RecipeCategoryController::class,
        'account-management' => AccountManagementController::class,
        'faq-master' => FaqMasterController::class,
        'country' => CountryController::class,
        'state' => StateController::class,
        'city' => CityController::class,
        'product' => ProductController::class,
        'payment-percentage' => PaymentPercentageController::class,
        'recipe' => RecipeController::class,
        'header' => HeaderController::class,
        'footer' => FooterController::class,
        'homepage' => HomepageController::class,
        'pages' => CmsController::class,
    ]);
});

Route::get('clear', function () {
    Artisan::call('optimize:clear');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('clear-compiled');
    return 'Cleared.';
});