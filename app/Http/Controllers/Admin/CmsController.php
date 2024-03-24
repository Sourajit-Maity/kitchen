<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cms;
use App\Models\Pages;
class CmsController extends Controller
{
    public function index() {
        return view('admin.pages.list');
    }

    public function edit($id)
    {        
        $cms = Pages::findOrFail($id);
        if( !empty($cms) ) {
            // echo $cms->slug;die;
            if($cms->slug=='home_page') {
               $details = Pages::with(['home','about','contact'])->findOrFail($id);
               return view('admin.cms.home-page-edit',compact('details'));
            }
        } 
        // return view('admin.industry.create-edit',compact('industry'));
    }
}
