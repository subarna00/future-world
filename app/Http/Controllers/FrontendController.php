<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $siteInfo = SiteSetting::where('status','active')->first();
        return view('frontend.pages.home',compact('siteInfo'));
    }
}
