@extends('frontend.layouts.app', ['page_slug' => 'shipping_address'])
@section('title', 'User Shipping Address')
@section('content')



    <div class="container bg-gray-100 font-sans mx-auto px-4 py-8 max-w-7xl">
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" hidden name="carts" value="{{ json_encode($carts) }}">
            <input type="hidden" hidden name="orderSummary" value="{{ json_encode($orderSummary) }}">

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
                            <select name="country"  class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                                <option value="" disabled {{ old('country') ? '' : 'selected' }}>Select Country</option>
                                <option value="USA" {{ old('country') == 'USA' ? 'selected' : '' }}>United States</option>
                                <option value="Canada" {{ old('country') == 'Canada' ? 'selected' : '' }}>Canada</option>
                            </select>
                        </div>


                        <!-- Name Fields -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div class="mb-4">
                                <label class="block text-gray-700 mb-2">First Name</label>
                                <input type="text" name="first_name" value="{{ old('first_name') }}" class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div>
                                <label class="block text-gray-700 mb-2">Last Name</label>
                                <input type="text"
                                    class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500"
                                    name="last_name" value="{{ old('last_name') }}" id="shippingLastName">
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="mb-4">
                            <label class="block text-gray-700 mb-2">Phone</label>
                            <input type="tel"
                                class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500" name="phone">
                        </div>

                        <!-- Company (optional) -->
                        <div class="mb-4">
                            <label class="block text-gray-700 mb-2">Company Name (optional)</label>
                            <input type="text"
                                class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500" name="company">
                        </div>

                        <!-- Street Address -->
                        <div class="mb-4">
                            <label class="block text-gray-700 mb-2">Street Address</label>
                            <input type="text"
                                class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500"
                                name="street_address" id="shippingAddress">
                        </div>
                        <!-- City, State, Zip -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                            <div>
                                <label class="block text-gray-700 mb-2">City</label>
                                <input type="text"
                                    class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500"
                                    id="shippingCity" name="city">
                            </div>
                            <div>
                                <label class="block text-gray-700 mb-2">State</label>
                                <select class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500"
                                    id="shippingState" name="state">
                                    <option>Select a State</option>
                                    <option>California</option>
                                    <option>New York</option>
                                    <option>Texas</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-gray-700 mb-2">Zip Code</label>
                                <input type="text"
                                    class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500"
                                    id="shippingZip" name="zip_code">
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

                            <a href=""
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
                                    class="px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500"
                                    id="billingFirstName" name="billing_first_name">
                                <input type="text" placeholder="Last Name"
                                    class="px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500"
                                    id="billingLastName" name="billing_last_name">
                            </div>
                            <input type="text" placeholder="Street Address"
                                class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500"
                                id="billingAddress" name="billing_street_address">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <input type="text" placeholder="City"
                                    class="px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500"
                                    name="billing_city" id="billingCity">
                                <input type="text" placeholder="State"
                                    class="px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500"
                                    name="billing_state" id="billingState">
                                <input type="text" placeholder="Zip Code"
                                    class="px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500"
                                    name="billing_zip" id="billingZip">
                            </div>
                        </div>

                        <!-- Order Summary -->


                        @foreach ($orders as $index => $card)
                        @if ($loop->first)
                        <div class="border-t pt-6">
                            <h2 class="text-lg font-bold text-gray-800 mb-4">Order Summary</h2>

                            <div class="flex justify-between mb-2">
                                <span class="text-gray-600">Item</span>
                                <span class="text-gray-800 font-medium">{{ $card->total_items }}</span>
                            </div>
                            <div class="flex justify-between mb-2">
                                <span class="text-gray-600">Shipping</span>
                                <span class="text-gray-800 font-medium">{{ $card->amount }}$</span>
                            </div>
                            <div class="flex justify-between mb-2">
                                <span class="text-gray-600">Taxes</span>
                                <span class="text-gray-800 font-medium">{{ $card->tax_total }}$</span>
                            </div>

                            <div class="flex justify-between font-bold text-lg mt-4 pt-4 border-t">
                                <span>Total</span>
                                <span>{{ $card->shipping_total }}$</span>
                            </div>

                            <button type="submit"
                                class="mt-6 w-full py-3 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition font-bold">
                                CONTINUE TO DELIVERY
                            </button>
                        </div>
                        @break
                        @endif
                    @endforeach




                    </div>
                </div>

            </div>
        </form>
    </div>

@endsection


@push('scripts')
    <script>
        $(document).ready(function() {
            function syncBillingWithShipping() {
                $('#billingFirstName').val($('#shippingFirstName').val());
                $('#billingLastName').val($('#shippingLastName').val());
                $('#billingAddress').val($('#shippingAddress').val());
                $('#billingCity').val($('#shippingCity').val());
                $('#billingState').val($('#shippingState').val());
                $('#billingZip').val($('#shippingZip').val());
            }

            // Initially sync values if "Same as Shipping" is selected
            if ($('#sameAsShipping').is(':checked')) {
                $('#newBillingForm').hide();
                syncBillingWithShipping();
            }

            // Listen to radio button changes
            $('input[name="billingOption"]').change(function() {
                if ($('#sameAsShipping').is(':checked')) {
                    $('#newBillingForm').hide();
                    syncBillingWithShipping();
                    // Make billing fields read-only
                    $('#newBillingForm input').prop('disabled', true);
                } else {
                    $('#newBillingForm').show();
                    // Enable billing input fields
                    $('#newBillingForm input').prop('disabled', false);
                }
            });

            // Sync on input change only when same as shipping is selected
            $('#shippingFirstName, #shippingLastName, #shippingAddress, #shippingCity, #shippingState, #shippingZip')
                .on('input', function() {
                    if ($('#sameAsShipping').is(':checked')) {
                        syncBillingWithShipping();
                    }
                });
        });
    </script>
@endpush
