<?php

namespace App\Http\Controllers\Backend\User\Cart;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {
        $data['carts'] = Cart::all();
        $data['products'] = Product::all();
        return view('backend.user.order.index', $data);
    }

    public function store(Request $request)
    {
        

    }
    public function removeFromCart(Request $request)
    {
        Cart::where('user_id', Auth::id())
            ->where('product_id', $request->product_id)
            ->delete();

        return response()->json(['message' => 'Product removed from cart']);
    }
}
