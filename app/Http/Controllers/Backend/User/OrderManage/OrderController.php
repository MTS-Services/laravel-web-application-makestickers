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
    public function status(Order $order)
    {
      return view('backend.user.order.status');
    }
    public function create()
    {

    }
    public function store(OrderRequest $request)
    {

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
