<?php

namespace App\Http\Controllers\Backend\User\OrderManage;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Requests\Order\OrderRequest;

class OrderController extends Controller
{
    public function index()
    {
        $orders=Order::all();
        return view('backend.user.order.index',compact('orders'));
    }
    public function show(Order $order)
    {
        return view('backend.user.order.view');
    }
    public function create()
    {
        return view('backend.user.order.create');
    }
    public function store(OrderRequest $request)
    {

        $data= new Order();
         $data->order_number=$request->order_number;
         $data->status=$request->status;
         $data->total_items=$request->total_items;
         $data->amount=$request->amount;
         $data->tax_total=$request->tax_total;
         $data->user_id=$request->user_id;
         $data->product_id=$request->product_id;
         $data->payment_method_id=$request->payment_method_id;
         $data->billing_address_id=$request->billing_address_id;
         $data->shipping_address_id=$request->shipping_address_id;
         $data->save();
         return redirect()->route('user.order.index');
    }
    public function edit(Order $order)
    {
        return view('backend.user.order.edit');
    }
    public function update(OrderRequest $request, Order $order)
    {

    }
    public function destroy(Order $order)
    {

    }
}
