@extends('frontend.layouts.app', ['page_slug' => 'order'])
@section('title', 'User Order')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#2563eb',
                        'success': '#16a34a',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 font-sans text-gray-800">
    <div class="max-w-6xl mx-auto p-4 sm:p-6 ">
        <!-- Header -->
        <h1 class="text-2xl font-bold mb-6">Shopping Cart</h1>

        <!-- Product Section -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 w-500">
            <!-- Product Section -->
            <section class="bg-gray-200 p-4 rounded shadow-sm">

                <!-- Design Items -->
                <div class="mt-4 space-y-6">
                    <!-- Design 1 -->
                    <div class="border-b border-white pb-6">
                        <h3 class="font-semibold text-sm">Design #: 25042106ZDWF</h3>


                        <table class="w-full mt-3 text-sm">
                            <tr>
                                <td class="py-2 align-top w-2/3">
                                    <p class="font-medium">Product: Stickers</p>
                                    <p>Material: Glossy Stickers</p>
                                    <p>Shape: Die Cut</p>
                                    <p>Size: W: 8.001 x H: 2.004</p>
                                </td>
                                <td class="py-2 text-right align-top">10</td>
                                <td class="py-2 text-right align-top">
                                    <p>$23.36</p>
                                    <p class="text-xs">($2.34 / each)</p>
                                </td>
                            </tr>
                        </table>
                        <div class="mt-3">
                            <button class="text-primary font-semibold text-sm">EDIT DESIGN</button>
                        </div>
                        <div class="mt-3 remove">
                            <button class="text-danger font-semibold text-sm"><span class="font-bold">x</span> REMOVE DESIGN</button>
                        </div>
                    </div>

                    <!-- Design 2 -->
                    <div class="border-b border-white pb-6">
                        <h3 class="font-semibold text-sm">Design #: 25042122ZP6</h3>


                        <table class="w-full mt-3 text-sm">
                            <tr>
                                <td class="py-2 align-top w-2/3">
                                    <p class="font-medium">Product: Stickers</p>
                                    <p>Material: Glossy Stickers</p>
                                    <p>Shape: Die Cut</p>
                                    <p>Size: W: 6.401 x H: 3.365</p>
                                </td>
                                <td class="py-2 text-right align-top">10</td>
                                <td class="py-2 text-right align-top">

                                    <p>$25.98</p>
                                    <p class="text-xs">($2.60 / each)</p>
                                </td>
                            </tr>
                        </table>
                        <div class="mt-3">
                            <button class="text-primary font-semibold text-sm">EDIT DESIGN</button>
                        </div>
                        <div class="mt-3 remove">
                            <button class="text-danger font-semibold text-sm"><span class="font-bold">x</span> REMOVE DESIGN</button>
                        </div>
                    </div>
                    <div class="border-b border-white pb-6">
                        <h3 class="font-semibold text-sm">Design #: 25042122ZP6</h3>


                        <table class="w-full mt-3 text-sm">
                            <tr>
                                <td class="py-2 align-top w-2/3">
                                    <p class="font-medium">Product: Stickers</p>
                                    <p>Material: Glossy Stickers</p>
                                    <p>Shape: Die Cut</p>
                                    <p>Size: W: 6.401 x H: 3.365</p>
                                </td>
                                <td class="py-2 text-right align-top">10</td>
                                <td class="py-2 text-right align-top">
                                    <p>$25.98</p>
                                    <p class="text-xs">($2.60 / each)</p>
                                </td>
                            </tr>
                        </table>
                        <div class="mt-3">
                            <button class="text-primary font-semibold text-sm">EDIT DESIGN</button>
                        </div>
                        <div class="mt-3 remove">
                            <button class="text-danger font-semibold text-sm"><span class="font-bold">x</span> REMOVE DESIGN</button>
                        </div>
                    </div>

                    <!-- Design 3 -->

                </div>


            </section>

            <!-- Order Summary -->
            <section class="bg-gray-200 p-4 rounded shadow-sm">
                <h2 class="text-lg font-semibold mb-3">Order Summary</h2>
                @foreach ($orders as $order)


                <div class="space-y-3 text-sm">
                    <div class="flex justify-between">
                        <span>Order Number</span>
                        <span>{{ $order->order_number }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Totle Items</span>
                        <span>{{ $order->total_items }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span>List Price</span>
                        <span>${{ $order->amount }}</span>
                    </div>


                    <div class="flex justify-between font-semibold border-t pt-3">
                        <span>Taxes</span>
                        <span>${{ $order->tax_totatl }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Descount</span>
                        <span>${{ $order->discount_total }}%</span>
                    </div>
                    <p class="text-xs text-gray-500">Delivery dates and costs will be shown during checkout</p>

                    <div class="flex justify-between border-t pt-3">
                        <span>Taxes</span>
                        <span>$8.14</span>
                    </div>

                    <div class="flex justify-between font-bold text-base border-t pt-3">
                        <span>Total</span>
                        <span></span>
                    </div>
                </div>
                 <div class="flex justify-between">
                        <span>List Price</span>
                        <span>${{ $order->shipping_total }}</span>
                    </div>
                    @endforeach

                <button class="w-full bg-green-600 hover:bg-green-700 text-white py-2.5 rounded font-bold mt-4">
                    CHECK OUT NOW
                </button>
                  <!-- Rush Service -->
        <section class="p-4 bg-blue-50 rounded">
            <p class="font-semibold text-sm">Need yours ASAP?</p>
            <p class="mt-1 text-sm">Order now and they can be delivered on</p>
            <p class="font-semibold mt-2 text-sm">Saturday, Apr 26</p>
            <button class="mt-2 text-primary font-semibold text-sm">SELECT * RUSH SERVICE*</button>
        </section>
            </section>
        </div>



    </div>
</body>
</html>



{{-- <div class="container mt-5">
<div class="relative overflow-x-auto py-2">
    <a href="{{route('user.order.show')}}" class="inline-block bg-yellow-400 hover:bg-yellow-500 text-black text-font-14px font-semibold px-4 py-1 rounded">Order View</a>
    <a href="{{route('user.order.index')}}" class="inline-block bg-yellow-400 hover:bg-yellow-500 text-black text-font-14px font-semibold px-4 py-1 rounded">Order Cancel</a>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 rounded-s-lg">
                    Order
                </th>
                <th scope="col" class="px-6 py-3 rounded-s-lg">
                    Total Items
                </th>
                <th scope="col" class="px-6 py-3 rounded-s-lg">
                    Amount
                </th>
                <th scope="col" class="px-6 py-3 rounded-s-lg">
                   Taxt
                </th>
                <th scope="col" class="px-6 py-3 rounded-s-lg">
                    Discount
                </th>
                <th scope="col" class="px-6 py-3 rounded-s-lg">
                    Shipping  Total
                </th>
                <th scope="col" class="px-6 py-3 rounded-e-lg">
                    Note
                </th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order )


            <tr class="bg-white dark:bg-gray-800">

                 <td class="px-6 py-4">{{ $order->order_number }} </td>
                <td class="px-6 py-4">{{ $order->total_items }}</td>
                <td class="px-6 py-4">{{ $order->amount }}</td>
                <td class="px-6 py-4">{{ $order->tax_totatl }} </td>
                <td class="px-6 py-4">{{ $order->discount_total }}</td>
                <td class="px-6 py-4">{{ $order->shipping_total }}</td>
                <td class="px-6 py-4">{{ $order->notes }}</td>
                <td>
                    <span
                        class="badge badge-{{ $order->status_bg_color }}">{{ $order->status_text }}</span>
                </td>
                <td> <div class="dropdown">
                    <a href="javascript:void(0)" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="icon-settings fs-3 setting"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end"
                        aria-labelledby="dropdownMenuButton1">
                        <li>
                            <a class="dropdown-item" href="#">
                                {{ __('Details') }}
                            </a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-item dropdown-toggle" href="javascript:void(0)"
                                id="status" role="button" aria-expanded="false">
                                {{ __('Status') }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="status">

                                @foreach ($order->getStatusBtnText($order->status) as $status)
                                <li class="dropdown-item">
                                    <a href="{{ route('user.order.status', [encrypt($order->id), encrypt(array_search($status['text'], $order->getStatus()))]) }}"
                                        class="text-{{ $status['class'] }}">
                                        {{ $status['text'] }}
                                    </a>
                                </li>
                            @endforeach

                            </ul>
                        </li>
                    </ul>
                </div></td>

            </tr>
            @endforeach

 </tbody>

    </table>
    <button type="button" class="btn-secondary w-full mt-4 my-2">Checkout</button>
</div>
</div> --}}

@endsection
