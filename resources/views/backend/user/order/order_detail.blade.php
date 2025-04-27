@extends('frontend.layouts.app', ['page_slug' => 'order-detail'])
@section('title', 'Order Detail')
@section('content')
<div class="bg-gray-100 min-h-screen text-gray-800 flex flex-col md:flex-row max-w-7xl mx-auto p-4">
    <!-- Sidebar -->
    <aside class="w-full md:w-1/4 mb-6 md:mb-0">
      <div class="bg-white rounded-lg shadow p-4">
        <p class="text-lg font-semibold mb-4">Hello, {{Auth::user()->name}}</p>
        <nav class="space-y-3 text-sm">
          <div class="font-bold text-gray-700">Manage My Account</div>
          <a href="#" class="block text-gray-600 hover:text-blue-600">My Profile</a>
          <a href="#" class="block text-gray-600 hover:text-blue-600">Address Book</a>
          <a href="#" class="block text-gray-600 hover:text-blue-600">My Payment Options</a>
          <a href="#" class="block text-gray-600 hover:text-blue-600">Daraz Wallet</a>

          <div class="mt-6 font-bold text-gray-700">My Orders</div>
          <a href="#" class="block text-blue-600 font-semibold">My Orders</a>
          <a href="#" class="block text-gray-600 hover:text-blue-600">My Returns</a>
          <a href="#" class="block text-gray-600 hover:text-blue-600">My Cancellations</a>

          <div class="mt-6 font-bold text-gray-700">My Reviews</div>
          <a href="#" class="block text-gray-600 hover:text-blue-600">My Reviews</a>

          <div class="mt-6 font-bold text-gray-700">My Wishlist & Followed Stores</div>

          <div class="mt-6 font-bold text-gray-700">Sell On Daraz</div>
        </nav>
      </div>
    </aside>

    <!-- Main Content -->
    <main class="w-full md:w-3/4 md:pl-6">
      <div class="bg-white rounded-lg shadow p-4">
        <h2 class="text-2xl font-bold mb-4">Order Details</h2>

        <!-- Seller Info -->
        <div class="flex justify-between items-center border p-4 rounded mb-4 bg-gray-50">
          <div class="flex items-center space-x-2">
            <div class="w-5 h-5 bg-purple-600 rounded-full"></div>
            <span class="font-semibold">Bata</span>
            <a href="#" class="text-blue-500 text-sm">Chat with Seller</a>
          </div>
          <div class="flex items-center space-x-2">
            <span class="bg-gray-200 text-gray-600 px-2 py-1 rounded text-xs">Payment Pending</span>
            <button class="text-orange-500 font-bold">Pay Now</button>
          </div>
        </div>

        <!-- Delivery Info -->
        <div class="flex items-center space-x-2 bg-gray-100 rounded p-3 mb-4 text-sm">
          <div class="flex items-center space-x-1">
            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7l6 6-6 6M21 7l-6 6 6 6"/>
            </svg>
            <span>Standard Delivery</span>
          </div>
          <span class="ml-auto font-semibold">৳ 599</span>
        </div>

        <!-- Product Info -->
        <div class="flex flex-col md:flex-row p-4 border-b">
          <img src="https://static-01.daraz.com.bd/p/2066a2f2c17ee6620e55c5a71d82c8b2.jpg" alt="Product" class="w-24 h-24 object-cover rounded mb-4 md:mb-0">
          <div class="flex-1 md:pl-4">
            <h3 class="font-semibold">Bata Rugged TRAINER Lace-Up Shoe for Men</h3>
            <p class="text-sm text-gray-500 mt-1">Color Family: Olive, Size: UK 10</p>
          </div>
          <div class="flex flex-col items-end justify-between mt-2 md:mt-0">
            <p class="font-semibold">৳ 599</p>
            <p class="text-sm text-gray-600">Qty: 1</p>
            <button class="text-blue-500 text-sm">Cancel</button>
          </div>
        </div>

        <!-- Order Info -->
        <div class="p-4 text-sm text-gray-600 border-b">
          <p><span class="font-semibold">Order 673278452608687</span></p>
          <p>Placed on 27 Apr 2025 16:57:34</p>
        </div>

        <!-- Address and Summary -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-4">
          <!-- Address -->
          <div class="bg-gray-50 p-4 rounded">
            <p class="font-semibold">jewel</p>
            <p class="flex items-center mt-1">
              <span class="bg-orange-500 text-white text-xs px-2 py-1 rounded mr-2">HOME</span>
              Senbag Beezbag, maishai, gazir hat, senbag, noakhali, Bangladesh
            </p>
            <p class="mt-2">1795235482</p>
          </div>

          <!-- Total Summary -->
          <div class="bg-gray-50 p-4 rounded">
            <h3 class="font-semibold mb-2">Total Summary</h3>
            <div class="flex justify-between text-sm py-1">
              <span>Subtotal (1 Item)</span>
              <span>৳ 599</span>
            </div>
            <div class="flex justify-between text-sm py-1">
              <span>Shipping Fee</span>
              <span>৳ 150</span>
            </div>
            <div class="flex justify-between text-sm py-1">
              <span>Shipping Fee Promotion</span>
              <span>-৳ 150</span>
            </div>
            <hr class="my-2">
            <div class="flex justify-between font-bold text-lg">
              <span>Total</span>
              <span>৳ 599</span>
            </div>
          </div>
        </div>

      </div>
    </main>
  </div>
  @endsection
