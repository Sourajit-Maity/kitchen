<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Banner;
use App\Models\HomePage;
use App\Models\Footer;
use App\Models\Header;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
/**
 * @group  CMS Management
 *
 * APIs for managing basic auth functionality
 */
class CMSController extends Controller
{
   /** 
 * CMS Header
 * @response {
    "status": true,
    "data": {
        "id": 2,
        "slogan": "test",
        "logo": "test.jpg",
        "created_at": "2021-08-24T17:08:44.000000Z",
        "updated_at": "2021-08-25T17:08:44.000000Z"
    }
}
 * @response  401 {
 *   "message": "Unauthenticated."
*}
 */


public function getheader(){

    $header = Header::first();          
    return response()->json(["status" => true, "data" => $header]);
   
    
}
/** 
 * CMS Footer
 * @response {
    "status": true,
    "data": {
        "id": 1,
        "email": "test@gmail.com",
        "phone": "46546565",
        "address": "test,test address",
        "copyright": "test@2020",
        "terms_condition": "test test",
        "logo": "test.png",
        "created_at": "2021-08-18T17:20:52.000000Z",
        "updated_at": "2021-08-18T17:20:52.000000Z"
    }
}
 * @response  401 {
 *   "message": "Unauthenticated."
*}
 */
public function getfooter(){

    $footer = Footer::first();       
    return response()->json(["status" => true, "data" => $footer]);

}

/** 
 * CMS Banner
 * @response {
    "status": true,
    "data": [
        {
            "id": 1,
            "show_order": "1",
            "title": "test",
            "tagline": "test line",
            "btn_name": "testbtn",
            "btn_link": "test_link",
            "image": "test.png",
            "created_at": "2021-08-18T17:25:04.000000Z",
            "updated_at": "2021-08-18T17:25:04.000000Z"
        },
        {
            "id": 2,
            "show_order": "2",
            "title": "test1",
            "tagline": "test line",
            "btn_name": "testbtn",
            "btn_link": "test_link",
            "image": "test.png",
            "created_at": "2021-08-18T17:25:04.000000Z",
            "updated_at": "2021-08-18T17:25:04.000000Z"
        }
    ]
}
 * @response  401 {
 *   "message": "Unauthenticated."
*}
 */
public function getbanner(){

    $banner = Banner::get();
    return response()->json(["status" => true, "data" => $banner]);

}

/** 
 * CMS Homepage
 * @response{
    "status": true,
    "data": {
        "id": 1,
        "cms_id": 1,
        "banner_heading": "Home page heading",
        "banner_sub_heading": "Home page sub heading",
        "banner_description": "<p>Home page Description&nbsp;</p>\n",
        "banner_image": "cms_images/436c35208ced04ea9dec31bd037036fc.png",
        "created_at": "2021-08-18T10:15:38.000000Z",
        "updated_at": "2021-08-19T11:02:44.000000Z"
    }
}
 * @response  401 {
 *   "message": "Unauthenticated."
*}
 */


public function gethomepage(){

    $home = Homepage::first();          
    return response()->json(["status" => true, "data" => $home]);
   
    
}

}
