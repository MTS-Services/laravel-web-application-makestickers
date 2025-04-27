@extends('frontend.layouts.app', ['page_slug' => 'My order'])
@section('title', 'My Order')
@section('content')




  <div class="bg-gray-100 min-h-screen text-gray-800 flex flex-col md:flex-row max-w-7xl mx-auto p-4">
    <!-- Sidebar -->
    <aside class="w-full md:w-1/4 mb-6 md:mb-0">
      <div class="bg-white rounded-lg shadow p-4">
        <p class="text-lg font-semibold mb-4">Hello, {{ Auth::user()->name }}</p>
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
        <h2 class="text-xl font-bold mb-4">My Orders</h2>

        <!-- Tabs -->
        <div class="flex space-x-4 border-b mb-4 text-sm font-medium">
          <button class="pb-2 border-b-2 border-blue-600 text-blue-600">All</button>
          <button class="pb-2 hover:border-b-2 hover:border-blue-600">To Pay (1)</button>
          <button class="pb-2 hover:border-b-2 hover:border-blue-600">To Ship</button>
          <button class="pb-2 hover:border-b-2 hover:border-blue-600">To Receive</button>
          <button class="pb-2 hover:border-b-2 hover:border-blue-600">To Review</button>
        </div>

        <!-- Search Bar -->
        <div class="mb-4">
          <input type="text" placeholder="Search by seller name, order ID or product name"
                 class="w-full border rounded px-4 py-2 text-sm focus:outline-none focus:border-blue-500">
        </div>

        <!-- Order Card -->
        <div class="border rounded-lg mb-4 overflow-hidden">
          <div class="flex items-center justify-between bg-gray-50 p-3 text-sm font-semibold">
            <div class="flex items-center space-x-2">
              <div class="w-4 h-4 bg-purple-600 rounded-full"></div>
              <span>Bata</span>
            </div>
            <div class="flex items-center space-x-2">
              <span class="bg-gray-200 text-gray-600 px-2 py-1 rounded text-xs">Payment Pending</span>
              <button class="text-orange-500 font-bold">Pay Now</button>
            </div>
          </div>

          <div class="flex flex-col md:flex-row p-4 space-y-4 md:space-y-0 md:space-x-4">
            <img src="https://static-01.daraz.com.bd/p/2066a2f2c17ee6620e55c5a71d82c8b2.jpg" alt="Product" class="w-24 h-24 object-cover rounded">
            <div class="flex-1">
              <h3 class="font-semibold"><a href="{{ route('user.order.details') }}">Bata Rugged TRAINER Lace-Up Shoe for Men</a></h3>
              <p class="text-sm text-gray-500 mt-1">Color Family: Olive, Size: UK 10</p>
            </div>
            <div class="flex flex-col items-end">
              <p class="font-semibold text-lg">৳ 599</p>
              <p class="text-sm text-gray-600 mt-1">Qty: 1</p>
            </div>
          </div>

        </div>

      </div>
    </main>
  </div>

@endsection
