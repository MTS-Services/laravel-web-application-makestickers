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
                                <a href="{{ route('user.cart.remove', ['id' => $cart->id]) }}"
                                    class="text-red-600 font-semibold text-sm">
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


                <h2 class="text-lg font-semibold mb-4">Order Summary</h2>


                <div class="space-y-3 text-sm">
                    <div class="flex justify-between">
                        <span>Order Number</span>
                        <span>567</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Total Items</span>
                        <span>5</span>
                    </div>
                    <div class="flex justify-between">
                        <span>List Price</span>
                        <span>$547</span>
                    </div>
                    <div class="flex justify-between font-semibold border-t pt-3">
                        <span>Taxes</span>
                        <span>$678</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Discount</span>
                        <span>$546%</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Shipping</span>
                        <span>$546</span>
                    </div>

                    <div class="text-xs text-gray-500">
                        Delivery dates and costs will be shown during checkout
                    </div>

                    <div class="flex justify-between font-bold text-base border-t pt-3">
                        <span>Total</span>
                        <span>$67867</span>
                    </div>

                    <form action="{{ route('user.checkout.form') }}" method="POST">
                        @csrf
                        <input type="text" name="name" value="Shahidul">
                        <button type="submit"
                            class="w-full bg-green-600 hover:bg-green-700 text-white items-center py-2 rounded font-bold mt-5">
                            CHECK OUT NOW</button>
                    </form>


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
