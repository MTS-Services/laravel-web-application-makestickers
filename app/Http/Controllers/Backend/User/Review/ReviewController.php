<?php

namespace App\Http\Controllers\Backend\User\Review;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Review;

class ReviewController extends Controller
{
    public function productReview(Order $order)
    {
        $reviews=Review::all();
        $orders=Order::get();
        return view('backend.user.review.product_review',compact('orders','reviews'));
    }
    public function store(Request $request)
    {

      $review=new Review();
      $review->creater_id = user()->id;
      $review->product_id=$request->product_id;
      $review->order_id=$request->order_id;
      $review->rating=$request->rating;
      $review->title=$request->title;
      $review->comment=$request->comment;
      $review->save();
      return redirect()->route('user.review.index');
    }
}
