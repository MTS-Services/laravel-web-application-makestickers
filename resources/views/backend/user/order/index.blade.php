@extends('frontend.layouts.app', ['page_slug' => 'order'])
@section('title', 'User Order')
@section('content')
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
    <div class="bg-gray-50 font-sans text-gray-800 max-w-6xl mx-auto p-4 sm:p-6">
        <!-- Header -->
        <h1 class="text-2xl font-bold mb-6">Shopping Cart</h1>

        <!-- Product & Summary Section -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

            <!-- Product Section -->
            <section class="bg-gray-100 p-4 rounded shadow-sm">
                <div class="space-y-6">
                    @forelse ($products as $cart)
                        <div class="border-b pb-6">
                            <h3 class="font-semibold text-sm mb-2">Product</h3>

                            <div class="flex flex-col sm:flex-row justify-between gap-4 text-sm">
                                <div class="flex-1">
                                    <p class="font-medium">{{ $cart->preview_image }}</p>
                                    <p>{{ $cart->title }}</p>
                                    <p>{{ $cart->description }}</p>
                                    <p>{{ $cart->size }}</p>
                                </div>
                                <div class="flex flex-col items-end text-right min-w-[100px]">
                                    <div class="">Quantity <input type="number" value="{{ $cart->quantity }}"></div>
                                    <div class="">
                                        <label>Price</label>
                                        <p class="mt-1">${{ $cart->price }}</p>
                                        <p class="text-xs text-gray-500"></p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3 flex flex-wrap gap-4">
                                <button class="text-blue-600 font-semibold text-sm">EDIT DESIGN</button>
                                <a href="{{ route('user.cart.remove', ['id' => $cart->id]) }}" class="text-red-600 font-semibold text-sm">
                                    <span class="font-bold">x</span> REMOVE DESIGN
                                </a>
                            </div>
                        </div>
                    @empty
                        <p>No product found</p>
                    @endforelse
                </div>
            </section>

            <!-- Order Summary -->
            <section class="bg-gray-100 p-4 rounded shadow-sm">
                <div class="max-w-3xl mx-auto p-6 ">
                    <h2 class="text-2xl font-semibold mb-6">Payment Method</h2>

                    <form class="space-y-6" action="{{ route('user.order.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <!-- Type -->
                        <div>
                            <label for="type" class="block font-medium mb-1">Payment Type</label>
                            <select id="type" name="type" class="w-full border rounded p-2">
                                <option value="credit_card">Credit Card</option>
                                <option value="debit_card">Debit Card</option>
                                <option value="paypal">PayPal</option>
                                <option value="apple_pay">Apple Pay</option>
                            </select>
                        </div>

                        <!-- Name on Card -->
                        <div>
                            <label for="name_on_card" class="block font-medium mb-1">Name on Card</label>
                            <input type="text" id="name_on_card" name="name_on_card" class="w-full border rounded p-2"
                                placeholder="John Doe">
                        </div>

                        <!-- Card Number -->
                        <div>
                            <label for="card_number" class="block font-medium mb-1">Card Number</label>
                            <input type="text" id="card_number" name="card_number" class="w-full border rounded p-2"
                                placeholder="**** **** **** 1234">
                        </div>

                        <!-- Expiration Date -->
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="exp_month" class="block font-medium mb-1">Exp Month</label>
                                <input type="number" id="exp_month" name="exp_month" min="1" max="12"
                                    class="w-full border rounded p-2" placeholder="MM">
                            </div>
                            <div>
                                <label for="exp_year" class="block font-medium mb-1">Exp Year</label>
                                <input type="number" id="exp_year" name="exp_year" min="2024" max="2100"
                                    class="w-full border rounded p-2" placeholder="YYYY">
                            </div>
                        </div>

                        <!-- CVC -->
                        <div>
                            <label for="cvc_encrypted" class="block font-medium mb-1">CVC</label>
                            <input type="password" id="cvc_encrypted" name="cvc_encrypted" class="w-full border rounded p-2"
                                placeholder="***">
                        </div>

                        <!-- Submit -->
                        {{-- <div>
                        <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 font-semibold">
                          Save Payment Method
                        </button>
                      </div> --}}


                </div>

                <h2 class="text-lg font-semibold mb-4">Order Summary</h2>

                {{-- @foreach ($orders as $order)
                    <div class="space-y-3 text-sm">
                        <div class="flex justify-between">
                            <span>Order Number</span>
                            <span>{{ $order->order_number }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Total Items</span>
                            <span>{{ $order->total_items }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span>List Price</span>
                            <span>${{ $order->amount }}</span>
                        </div>
                        <div class="flex justify-between font-semibold border-t pt-3">
                            <span>Taxes</span>
                            <span>${{ $order->tax_total }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Discount</span>
                            <span>${{ $order->discount_total }}%</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Shipping</span>
                            <span>${{ $order->shipping_total }}</span>
                        </div>

                        <div class="text-xs text-gray-500">
                            Delivery dates and costs will be shown during checkout
                        </div>

                        <div class="flex justify-between font-bold text-base border-t pt-3">
                            <span>Total</span>
                            <span>${{ $order->shipping_total }}</span>
                        </div>
                    </div>
                @endforeach --}}

                <button type="submit"
                    class="w-full bg-green-600 hover:bg-green-700 text-white py-2.5 rounded font-bold mt-5">
                    CHECK OUT NOW
                </button>
                </form>

                <!-- Rush Service -->
                <section class="mt-6 p-4 bg-blue-50 rounded">
                    <p class="font-semibold text-sm">Need yours ASAP?</p>
                    <p class="mt-1 text-sm">Order now and they can be delivered on</p>
                    <p class="font-semibold mt-2 text-sm">Saturday, Apr 26</p>
                    <button class="mt-2 text-blue-600 font-semibold text-sm">SELECT * RUSH SERVICE*</button>
                </section>
            </section>
        </div>
    </div>
@endsection
