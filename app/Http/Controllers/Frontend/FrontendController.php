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

        return view('frontend.pages.home');
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
        $data['products'] = Product::where('sticker_category_id', '!=', null)->get();

        return view('frontend.pages.custom_sticker', $data);
    }
    public function customLabel()
    {
        $data['custom_labels'] = LabelCategory::all();
        $data['products'] = Product::where('label_category_id', '!=', null)->get();
        return view('frontend.pages.custom_labels', $data);
    }
    public function review()
    {
        return view('frontend.pages.review');
    }

    public function blog()
    {
        $blogs = Blog::where('status', Blog::STATUS_PUBLISH)->with('createdBy')->get();        
        return view('frontend.pages.blog', compact('blogs'));
    }
}
