@extends('frontend.layouts.app', ['page_slug' => 'order'])

@section('title', 'User Order')

@section('content')
    <div class="bg-gray-50 font-sans text-gray-800 max-w-6xl mx-auto p-4 sm:p-6">
        <h1 class="text-2xl font-bold mb-6">Shopping Cart</h1>

        <form action="{{ route('user.op.address.form') }}" method="POST">
            @csrf

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

                {{-- Product Section --}}
                <section class="bg-gray-100 p-4 rounded shadow-sm">
                    <h2 class="text-lg font-semibold mb-4">Your Products</h2>
                    <div class="space-y-6">
                        @forelse ($products as $product)
                            <div class="border-b pb-6">
                                <div class="flex flex-col sm:flex-row justify-between gap-4 text-sm">
                                    <div class="flex-1 overflow-hidden">
                                       <img src="{{ storage_url($product->preview_image) }}" alt="{{ $product->title }}">
                                        <p>{{ $product->title }}</p>
                                        <p>{{ ($product->materialCategory->title)}}</p>
                                    </div>

                                    <div class="flex flex-col items-end text-right min-w-[100px]">
                                        <div>
                                            Quantity
                                            <input type="number" value="" min="1"
                                                class="quantity-input" data-id=""
                                                data-price="{{ $product->unit_price }}"
                                                data-original-price="{{ $product->unit_price }}" style="width: 50px;" />
                                        </div>
                                        <div>
                                            <label>Price</label>
                                            <p class="mt-1 price-text">${{ $product->unit_price }}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3 flex flex-wrap gap-4">
                                    <button class="text-blue-600 font-semibold text-sm">EDIT DESIGN</button>
                                    <a href="{{ route('user.op.cart.remove', ['id' => $product->id]) }}"
                                    class="text-red-600 font-semibold text-sm">
                                    <span class="font-bold">x</span> REMOVE DESIGN
                                    </a>
                                </div>
                            </div>
                        @empty
                            <p>No products found</p>
                        @endforelse

                    </div>
                </section>

                {{-- Order Summary --}}
                {{-- <section class="space-y-8">
                    @forelse ($orders as $order)
                        <div class="bg-gray-100 p-4 rounded shadow-sm">
                            <h2 class="text-lg font-semibold mb-4">Order Summary</h2>
                            <div class="space-y-3 text-sm">
                                <div class="flex justify-between">
                                    <span>Order Number</span>
                                    <span>{{ $order->id }}</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Total Items</span>
                                    <span>{{ $order->total_items }}</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>List Price</span>
                                    <span>{{ $order->amount }}$</span>
                                </div>
                                <div class="flex justify-between font-semibold border-t pt-3">
                                    <span>Taxes</span>
                                    <span>{{ $order->tax_total }}$</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Discount</span>
                                    <span>{{ $order->discount_total }}$</span>
                                </div>

                                <div class="text-xs text-gray-500">
                                    Delivery dates and costs will be shown during checkout
                                </div>

                                <div class="flex justify-between font-bold text-base border-t pt-3">
                                    <span>Total</span>
                                    <span>{{ $order->shipping_total }}$</span>
                                </div>

                                <button type="submit"
                                    class="w-full bg-green-600 hover:bg-green-700 text-white py-2 rounded font-bold mt-5">
                                    CHECK OUT NOW
                                </button>
                            </div>
                        </div>

                        {{-- Rush Service --}}
                {{-- <div class="bg-blue-50 p-4 rounded mt-4">
                            <p class="font-semibold text-sm">Need yours ASAP?</p>
                            <p class="mt-1 text-sm">Order now and they can be delivered on</p>
                            <p class="font-semibold mt-2 text-sm">Saturday, Apr 26</p>
                            <button class="mt-2 text-blue-600 font-semibold text-sm">SELECT * RUSH SERVICE*</button>
                        </div>
                    @empty
                        <p class="text-red-500">No order summary available.</p>
                    @endforelse
                </section>  --}}

            </div>
        </form>
    </div>

@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Listen for quantity input changes
            $('.quantity-input').on('change', function() {
                var quantity = $(this).val();
                var productId = $(this).data('id');
                var originalPrice = $(this).data('original-price');

                // Calculate new price
                var newPrice = originalPrice * quantity;

                // Update the price on the page
                $(this).closest('.flex').find('.price-text').text('$' + newPrice.toFixed(2));

                // Send the updated quantity and price to the server via AJAX
                $.ajax({
                    url: '{{ route('user.op.cart.update') }}', // Update route
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: productId,
                        quantity: quantity,
                        price: newPrice
                    },
                    success: function(response) {
                        // Optionally, update any other part of the page based on the response
                        console.log(response);
                        // You can update the cart total, taxes, etc. here if needed
                    },
                    error: function() {
                        alert('Error updating the cart.');
                    }
                });
            });
        });
    </script>
@endpush
