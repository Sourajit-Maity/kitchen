<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Product;
use App\Models\RecipeCategory;
use App\Models\PaymentPercentage;
use Illuminate\Http\Request;

class AdminDashboard extends Controller
{
    public function getDashboard(){
        $count['userCount'] = User::role('CLIENT')->count();
        $count['activeUserCount'] = User::role('CLIENT')->whereActive(1)->count();
        $count['blockedUserCount'] = User::role('CLIENT')->whereActive(0)->count();

        $count['registeruserCount'] = User::role('REGISTERED-MEMBER')->count();
        $count['registeractiveUserCount'] = User::role('REGISTERED-MEMBER')->whereActive(1)->count();
        $count['registerblockedUserCount'] = User::role('REGISTERED-MEMBER')->whereActive(0)->count();

        $count['productCount'] = Product::count();
        $count['activeProductCount'] = Product::whereActive(1)->count();
        $count['blockedProductCount'] = Product::whereActive(0)->count();


        $count['recipeCount'] = RecipeCategory::count();
        $count['activeRecipeCount'] = RecipeCategory::whereActive(1)->count();
        $count['blockedRecipeCount'] = RecipeCategory::whereActive(0)->count();


        return view('admin.dashboard',compact('count'));
    }
    public function userCreateShow(){
        return view('admin.user-create');
    }
}
