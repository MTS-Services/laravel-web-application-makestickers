<?php

namespace App\Http\Controllers\Backend\User\Order;

use App\Http\Controllers\Controller;
use App\Models\BillingAddress;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
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
    public function update(Request $request)
    {
        // Validate the incoming data
        dd($request->all());
        $validated = $request->validate([
            'id' => 'required|exists:cart,id',  // Ensure the cart  exists
            'quantity' => 'required|integer|min:1',  // Quantity must be an integer greater than 0
            'price' => 'required|numeric',           // Ensure price is numeric
        ]);

        // Find the product in the cart by its ID
        $cart = Cart::find($validated['id']);

        // Update the cart  quantity and price
        $cart->quantity = $validated['quantity'];
        $cart->price = $validated['price']; // Update price if needed
        $cart->save();

        // Optionally, you can recalculate the total amount, taxes, or other cart data

        // Return a JSON response confirming the update
        return response()->json([
            'success' => true,
            'message' => 'Cart updated successfully',
            'new_price' => $cart->price,
            'new_total' => $cart->quantity * $cart->price // Calculate new total if needed
        ]);
    }
    public function cartStore(Request $request)
    {
        $cartStore = new Cart();
        $cartStore->create_id = user()->id;
        $cartStore->product_id = $request->product_id;
        $cartStore->material_categorie_id = $request->material_categorie_id;
        $cartStore->size_categorie_id = $request->sisize_categorie_id;
        $cartStore->price = $request->price;
        $cartStore->quantity = $request->quantity;
        $cartStore->image = $request->image;
        $cartStore->save();
        return redirect()->route('user.cart.index');
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

        DB::transaction(function () use ($request) {
            $shippingAddress = new ShippingAddress();
            $shippingAddress->creater_id = user()->id;
            $shippingAddress->country = $request->country;
            $shippingAddress->first_name = $request->first_name;
            $shippingAddress->last_name = $request->last_name;
            $shippingAddress->street_address = $request->street_address;
            $shippingAddress->phone = $request->phone;
            $shippingAddress->company = $request->company;
            $shippingAddress->state = $request->state;
            $shippingAddress->city = $request->city;
            $shippingAddress->zip_code = $request->zip_code;
            $shippingAddress->save();
            //blilling address
            $billing = new BillingAddress();
            $billing->creater_id = user()->id;
            $billing->first_name = $request->first_name;
            $billing->last_name = $request->last_name;
            $billing->street_address = $request->street_address;
            $billing->state = $request->state;
            $billing->city = $request->city;
            $billing->zip_code = $request->zip_code;
            $billing->save();
        });
        $data['shippingAddress'] = ShippingAddress::all();
        $data['orders'] = Order::all();
        $data['orderSummary'] = $request->all();
        return view('backend.user.order.odder', $data);
    }
    public function store(Request $request)
    {

        DB::transaction(function () use ($request) {

            $shippingAddress = ShippingAddress::where('creater_id', user()->id)->firstOrFail();
            $billingAddress = BillingAddress::where('creater_id', user()->id)->firstOrFail();


            $order = new Order();
            $order->creater_id = user()->id;
            $order->total_s = $request->total_s;
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

            // if order successfully placed the clear the cart s for this user
            Cart::where('creater_id', user()->id)->delete();
            ShippingAddress::where('creater_id', user()->id)->delete();
            BillingAddress::where('creater_id', user()->id)->delete();
        });

        return redirect()->route('backend.user.order.index');
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
