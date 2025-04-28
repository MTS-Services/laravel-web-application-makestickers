@extends('frontend.layouts.app', ['page_slug' => 'check_out'])
@section('title', 'User Check Out')
@section('content')

    <div class="container bg-gray-100 font-sans mx-auto px-4 py-8 max-w-7xl">
        <div class="flex flex-col lg:flex-row gap-8">

            <!-- Left Column: Shipping Address (50%) -->
            <div class="w-full lg:w-1/2">
                <div class="bg-white p-6 rounded-lg shadow-sm mb-6">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Shipping Address</h2>

                    <!-- Your Shipping Form here -->
                    <p class="text-gray-600 mb-6">{{ Auth::user()->email }}</p>

                    <!-- Country -->
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2">Country</label>
                        <select class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                            <option selected>United States</option>
                            <option>Canada</option>
                            <option>United Kingdom</option>
                        </select>
                    </div>

                    <!-- Name Fields -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-gray-700 mb-2">First Name</label>
                            <input type="text"
                                class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500"
                                id="shippingFirstName">
                        </div>
                        <div>
                            <label class="block text-gray-700 mb-2">Last Name</label>
                            <input type="text"
                                class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500" id="shippingLastName">
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2">Phone</label>
                        <input type="tel" class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Company (optional) -->
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2">Company Name (optional)</label>
                        <input type="text" class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Street Address -->
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2">Street Address</label>
                        <input type="text" class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500" id="shippingAddress">
                    </div>

                    <!-- Apartment (optional) -->
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2">Apartment/Suite/Unit# (optional)</label>
                        <input type="text" class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- City, State, Zip -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                        <div>
                            <label class="block text-gray-700 mb-2">City</label>
                            <input type="text"
                                class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500" id="shippingCity">
                        </div>
                        <div>
                            <label class="block text-gray-700 mb-2">State</label>
                            <select class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500" id="shippingState">
                                <option>Select a State</option>
                                <option>California</option>
                                <option>New York</option>
                                <option>Texas</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-gray-700 mb-2">Zip Code</label>
                            <input type="text"
                                class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500" id="shippingZip">
                        </div>
                    </div>

                    <!-- Save Address Checkbox -->
                    <div class="flex items-center mb-6">
                        <input type="checkbox" id="saveAddress"
                            class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                        <label for="saveAddress" class="ml-2 text-gray-700">Save address for future orders</label>
                    </div>

                    <!-- Navigation Buttons -->
                    <div class="flex flex-col sm:flex-row justify-between gap-4">
                        <button
                            class="px-6 py-3 border border-gray-300 text-gray-700 rounded-md hover:bg-gray-50 transition font-medium">
                            RETURN TO CART
                        </button>
                        <a href="{{ route('user.cart.index') }}"
                            class="px-6 py-3 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition font-medium text-center">
                            Back
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Column: Billing Address + Order Summary (50%) -->
            <div class="w-full lg:w-1/2">
                <div class="bg-white p-6 rounded-lg shadow-sm sticky top-4">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Billing Address</h2>

                    <!-- Billing Address Form -->
                    <div class="mb-8">
                        <div class="flex items-start mb-4">
                            <input type="radio" id="sameAsShipping" name="billingOption" checked
                                class="mt-1 h-4 w-4 text-blue-600 border-gray-300 focus:ring-blue-500">
                            <div class="ml-3">
                                <label for="sameAsShipping" class="block text-gray-700 font-medium">Same as Shipping
                                    Address</label>
                                <div class="mt-2 text-gray-600">Dhaka, Bangladesh</div>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <input type="radio" id="newAddress" name="billingOption"
                                class="mt-1 h-4 w-4 text-blue-600 border-gray-300 focus:ring-blue-500">
                            <label for="newAddress" class="ml-3 block text-gray-700 font-medium">Enter a new Billing
                                Address</label>
                        </div>
                    </div>

                    <!-- Optional New Billing Form -->
                    <div class="space-y-4 mb-8">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <input type="text" placeholder="First Name"
                                class="px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500" id="billingFirstName">
                            <input type="text" placeholder="Last Name"
                                class="px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500" id="billingLastName">
                        </div>
                        <input type="text" placeholder="Street Address"
                            class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500" id="billingAddress">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <input type="text" placeholder="City"
                                class="px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500" id="billingCity">
                            <input type="text" placeholder="State"
                                class="px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500" id="billingState">
                            <input type="text" placeholder="Zip Code"
                                class="px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500" id="billingZip">
                        </div>
                    </div>

                    <!-- Order Summary -->
                    <div class="border-t pt-6">
                        <h2 class="text-lg font-bold text-gray-800 mb-4">Order Summary</h2>

                        <div class="flex justify-between mb-2">
                            <span class="text-gray-600">Item</span>
                            <span class="text-gray-800 font-medium">$19.75</span>
                        </div>
                        <div class="flex justify-between mb-2">
                            <span class="text-gray-600">Shipping</span>
                            <span class="text-gray-800 font-medium">$0.00</span>
                        </div>
                        <div class="flex justify-between mb-2">
                            <span class="text-gray-600">Taxes</span>
                            <span class="text-gray-800 font-medium">$0.00</span>
                        </div>

                        <div class="flex justify-between font-bold text-lg mt-4 pt-4 border-t">
                            <span>Total</span>
                            <span>$19.75</span>
                        </div>
                         <form action="{{ route('user.order.payment') }}" method="POST">
                            @csrf
                        <button
                            class="mt-6 w-full py-3 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition font-bold">
                            CONTINUE TO DELIVERY
                        </button>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <button id="click">click Me</button>

@endsection

@push('scripts')
<script>
    $(document).ready(function() {
    $('#shippingFirstName').on('input', function() {
        $('#billingFirstName').val($(this).val());
    });

});
$(document).ready(function() {
    $('#shippingLastName').on('input', function() {
        $('#billingLastName').val($(this).val());
    });

});
$(document).ready(function() {
    $('#shippingAddress').on('input', function() {
        $('#billingAddress').val($(this).val());
    });

});
$(document).ready(function() {
    $('#shippingCity').on('input', function() {
        $('#billingCity').val($(this).val());
    });

});
$(document).ready(function() {
    $('#shippingState').on('input', function() {
        $('#billingState').val($(this).val());
    });

});
$(document).ready(function() {
    $('#shippingZip').on('input', function() {
        $('#billingZip').val($(this).val());
    });

});

</script>

@endpush
