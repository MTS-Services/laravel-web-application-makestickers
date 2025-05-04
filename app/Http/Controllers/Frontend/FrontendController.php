<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\LabelCategory;
use App\Models\Product;
use App\Models\Blog;
use App\Models\MainCategory;
use App\Models\StickerCategory;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $sticker_categories = StickerCategory::all();
        return view('frontend.pages.home', compact('sticker_categories'));
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
    public function return()
    {
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
        $data['custom_stickers'] = StickerCategory::all();

        return view('frontend.pages.custom_sticker', $data);
    }
    public function customLabel()
    {
        return view('frontend.pages.custom_labels');
    }
    public function review()
    {
        return view('frontend.pages.review');
    }

    public function blog()
    {        
        return view('frontend.pages.blog');
    }
}
