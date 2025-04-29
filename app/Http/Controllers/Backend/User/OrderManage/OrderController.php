<?php

namespace App\Http\Controllers\Backend\User\OrderManage;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Requests\Order\OrderRequest;
use App\Models\BillingAddress;
use App\Models\PaymentMethod;
use App\Models\ShippingAddress;

class OrderController extends Controller
{
    public function index()
    {
        // $orders = Order::all();
        // return view('backend.user.order.index', compact('orders'));
    }
    public function show(Order $order)
    {
        return view('backend.user.order.view');
    }
    public function status(Order $order)
    {
        return view('backend.user.order.status');
    }
    public function orderHistory(Order $order)
    {

        return view('backend.user.order.orderHistory');
    }
     public function orderDetails(Order $order)
    {

        return view('backend.user.order.order_detail');
    }

   




    public function store(Request $request)
    {
        $order = new Order();
        $order->creater_id = user()->id;
        $order->total_items=$request->total_items;
        $order->amount=$request->amount;
        $order->tax_total = $request->tax_total ?? 0;
        $order->discount_total = $request->discount_total ?? 0;
        $order->shipping_total = $request->shipping_total ?? 0;
        $order->save();

        $data=new ShippingAddress();
        $data->creater_id = user()->id;
        $data->country = $request->country;
        $data->first_name = $request->first_name;
        $data->last_name = $request->last_name;
        $data->street_address = $request->street_address;
        $data->phone = $request->phone;
        $data->company = $request->company;
        $data->state = $request->state;
        $data->city = $request->city;
        $data->zip_code = $request->zip_code;
        $data->save();

        $billing=new BillingAddress();
        $billing->creater_id = user()->id;
        $billing->first_name = $request->first_name;
        $billing->last_name = $request->last_name;
        $billing->street_address = $request->street_address;
        $billing->state = $request->state;
        $billing->city = $request->city;
        $billing->zip_code = $request->zip_code;
        $billing->save();

        $paymentMethod = new PaymentMethod();
        $paymentMethod->order_id = $order->id;
        $paymentMethod->name = $request->name ?? 'Unknown';
        $paymentMethod->account_number = $request->account_number ?? null;
        $paymentMethod->exp_month = $request->exp_month ?? null;
        $paymentMethod->exp_year = $request->exp_year ?? null;
        $paymentMethod->cvc = $request->cvc ?? null;
        $paymentMethod->save();

        return redirect()->route('backend.user.order.odder');
    }


    public function edit(Order $order)
    {
        return view('backend.user.order.edit');
    }
    public function update(OrderRequest $request, Order $order) {}
    public function destroy(Order $order) {}
}
