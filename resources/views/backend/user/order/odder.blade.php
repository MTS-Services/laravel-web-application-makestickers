@extends('frontend.layouts.app', ['page_slug' => 'order'])
@section('title', 'User Order')
@section('content')

    <div class="container bg-gray-100 font-sans mx-auto px-4 py-8 max-w-6xl">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Left Column - Delivery/Payment Form -->
            <div class="lg:w-2/3">

                <!-- Information Section -->
                <div class="bg-white p-6 rounded-lg shadow-sm mb-6">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Information</h2>
                    <p class="text-gray-600 mb-6">dhg@gmail.com</p>

                    <!-- Shipping Address -->
                    <div class="mb-6 pb-6 border-b border-gray-200">
                        <div class="flex justify-between items-center mb-2">
                            <h3 class="font-bold text-gray-800">Ship To</h3>
                            <button class="text-blue-600 hover:text-blue-800">Change</button>
                        </div>
                        <p class="text-gray-800">MD JEWEL Brooklyn Botanic Garden</p>
                        <p class="text-gray-600">Brooklyn Botanic Garden, NEW YORK USA, no., NEW YORK USA, NY, 06390,</p>
                        <p class="text-gray-600">United States</p>
                        <p class="text-gray-600">054756363</p>
                    </div>

                    <!-- Delivery Date -->
                    <div class="mb-6 pb-6 border-b border-gray-200">
                        <div class="flex justify-between items-center mb-2">
                            <h3 class="font-bold text-gray-800">Delivery Date</h3>
                            <button class="text-blue-600 hover:text-blue-800">Change</button>
                        </div>
                        <p class="text-gray-800">Wednesday, April 30 - $22.28</p>
                    </div>

                    <!-- Payment Method -->
                    <div class="mb-6">
                        <h3 class="font-bold text-gray-800 mb-4">Payment Method</h3>

                        <div class="space-y-4">
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





                </div>
                            <div class="flex items-center">
                                <input id="paypal" name="payment" type="radio" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300">
                                <label for="paypal" class="ml-3 block text-gray-700">PayPal</label>
                            </div>
                        </div>

                        <p class="text-gray-600 mt-4">More Options</p>
                    </div>

                    <!-- Other Information -->
                    <div class="mb-6">
                        <h3 class="font-bold text-gray-800 mb-4">Other Information</h3>

                        <div class="space-y-4">
                            <div class="flex items-center">
                                <input id="feature-promotions" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                <label for="feature-promotions" class="ml-3 block text-gray-700">Allow my designs to be featured in promotions</label>
                            </div>
                            <div class="flex items-center">
                                <input id="email-discounts" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                <label for="email-discounts" class="ml-3 block text-gray-700">Email me occasional discounts</label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <div class="flex flex-col sm:flex-row justify-between gap-4 mb-8">
                    <a href="{{ route('user.cart.index') }}" class="px-6 py-3 border border-gray-300 text-gray-700 rounded-md hover:bg-gray-50 transition font-medium">
                        RETURN TO CART
                    </a>
                    <form action="{{ route('user.order.store') }}" method="POST">
                        @csrf
                    <button class="px-6 py-3 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition font-medium">
                        PLACE ORDER
                    </button>
                    </form>
                </div>
            </div>

            <!-- Right Column - Order Summary -->
            <div class="lg:w-1/3">
                <div class="bg-white p-6 rounded-lg shadow-sm sticky top-4">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-lg font-bold text-gray-800">Order Summary: #17574616</h2>
                        <span class="text-gray-600">1 item</span>
                    </div>

                    <!-- Product Info -->
                    <div class="mb-4 pb-4 border-b border-gray-200">
                        <div class="flex justify-between">
                            <p class="font-medium text-gray-800">Glossy Die Cut Stickers</p>
                            <p class="text-gray-800">$19.75</p>
                        </div>
                        <p class="text-sm text-gray-600">10 - 3 x 3 - Glossy Stickers</p>
                    </div>

                    <!-- Promo Code -->
                    <div class="flex gap-2 mb-4">
                        <input
                            type="text"
                            placeholder="Promo Code"
                            class="flex-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        >
                        <button class="px-4 py-2 bg-gray-800 text-white rounded-md hover:bg-gray-700 transition">
                            APPLY
                        </button>
                    </div>

                    <!-- Price Breakdown -->
                    <div class="space-y-2 mb-4">
                        <div class="flex justify-between">
                            <span class="text-gray-600">List Price</span>
                            <span class="text-gray-800">$19.75</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Subtotal</span>
                            <span class="text-gray-800">$19.75</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Shipping</span>
                            <span class="text-gray-800">$22.28</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Taxes</span>
                            <span class="text-gray-800">$3.68</span>
                        </div>
                        <div class="pt-2">
                            <a href="#" class="text-blue-600 text-sm hover:text-blue-800">Add a tax exempt certificate for New York</a>
                        </div>
                    </div>

                    <!-- Total -->
                    <div class="flex justify-between pt-4 border-t border-gray-200">
                        <span class="font-bold text-gray-800">Total</span>
                        <span class="font-bold text-gray-800">$45.71</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
