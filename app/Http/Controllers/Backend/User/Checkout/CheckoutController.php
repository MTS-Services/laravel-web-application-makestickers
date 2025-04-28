<?php

namespace App\Http\Controllers\Backend\User\Checkout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {
     $data['shahidul'] = $request->name;
     return view('backend.user.check_out.index', $data);
    }

    public function billing(Request $request)
    {
        return view('backend.user.check_out.billing');
    }
}
