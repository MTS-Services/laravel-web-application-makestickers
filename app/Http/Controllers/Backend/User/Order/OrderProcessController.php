<?php

namespace App\Http\Controllers\Backend\User\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderProcessRequest;
use App\Models\BillingAddress;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\PaymentMethod;
use App\Models\ShippingAddress;
use Illuminate\Support\Facades\DB;

class OrderProcessController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth:web');
    }


    public function cart()
    {
        $data['orders'] = Order::all();
        $data['carts'] = Cart::all();
        $data['products'] = Product::all();
        return view('backend.user.order.index', $data);
    }

    public function cartRemove(Request $request)
    {
        Cart::where('user_id', user()->id)
            ->where('product_id', $request->product_id)
            ->delete();

        return response()->json(['message' => 'Product removed from cart']);
    }

    public function address(Request $request)
    {
        $data['orders'] = Order::all();
        $data['carts'] = Cart::all();
        $data['orderSummary'] = $request->all();
        return view('backend.user.address.shipping_address', $data);
    }

    public function payment(Request $request)
    {
        $data['orders'] = Order::all();
        $data['shippingAddress'] = $request->all();
        $data['billingAddress'] = $request->all();
        return view('backend.user.order.odder', $data);
    }
    public function store(Request $request)
    {

        DB::transaction(function () use ($request) {

            $data = new ShippingAddress();
            $data->creater_id = user()->id;
            $data->country = $request->country ?? 'US';
            $data->first_name = $request->first_name;
            $data->last_name = $request->last_name;
            $data->street_address = $request->street_address;
            $data->phone = $request->phone;
            $data->company = $request->company;
            $data->state = $request->state;
            $data->city = $request->city;
            $data->zip_code = $request->zip_code;
            $data->save();


            $billing = new BillingAddress();
            $billing->creater_id = user()->id;
            $billing->first_name = $request->first_name;
            $billing->last_name = $request->last_name;
            $billing->street_address = $request->street_address;
            $billing->state = $request->state;
            $billing->city = $request->city;
            $billing->zip_code = $request->zip_code;
            $billing->save();

            $order = new Order();
            $order->creater_id = user()->id;
            $order->total_items = $request->total_items;
            $order->amount = $request->amount;
            $order->tax_total = $request->tax_total ?? 0;
            $order->discount_total = $request->discount_total ?? 0;
            $order->shipping_total = $request->shipping_total ?? 0;
            $order->save();


            $paymentMethod = new PaymentMethod();
            $paymentMethod->order_id = $order->id;
            $paymentMethod->name = $request->name ?? 'Unknown';
            $paymentMethod->account_number = $request->account_number ?? null;
            $paymentMethod->exp_month = $request->exp_month ?? null;
            $paymentMethod->exp_year = $request->exp_year ?? null;
            $paymentMethod->cvc = $request->cvc ?? null;
            $paymentMethod->save();

            // if order successfully placed the clear the cart items for this user
            Cart::where('user_id', user()->id)->delete();
        });

        return redirect()->route('backend.user.order.odder');
    }

    public function orderHistory(Order $order)
    {

        return view('backend.user.order.orderHistory');
    }
    public function orderDetails(Order $order)
    {

        return view('backend.user.order.order_detail');
    }
    public function status(Order $order)
    {
        return view('backend.user.order.status');
    }
}
