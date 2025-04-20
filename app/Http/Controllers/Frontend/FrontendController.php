<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('frontend.pages.home');
    }

    public function about()
    {
        return view('frontend.pages.about');
    }
    public function pouch()
    {
        return view('frontend.pages.pouch');
    }
    public function faq()
    {
        return view('frontend.pages.faq');
    }
    public function return(){
        return view('frontend.pages.returns');
    }
}
