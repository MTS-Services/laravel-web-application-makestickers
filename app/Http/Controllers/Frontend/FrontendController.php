<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\MainCategory;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        
        $data['main_categories'] = MainCategory::with('secondCategories')->get();
        return view('frontend.pages.home', $data);
    }

    public function about()
    {
        return view('frontend.pages.about');
    }

    public function career()
    {
        return view('frontend.pages.careers');
    }

    public function pouch()
    {
        return view('frontend.pages.pouch');
    }
    public function faq()
    {
        return view('frontend.pages.faq');
    }
    public function shipping()
    {
        return view('frontend.pages.shipping');
    }
    public function return(){
        return view('frontend.pages.returns');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }
    public function designs()
    {
        return view('frontend.pages.designs');
    }

    public function customSticker()
    {
        return view('frontend.pages.custom_sticker');
    }
    public function customLabel()
    {
        return view('frontend.pages.custom_labels');
    }
}
