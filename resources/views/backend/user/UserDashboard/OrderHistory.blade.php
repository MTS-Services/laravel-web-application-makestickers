@extends('frontend.layouts.app', ['page_slug' => 'dashboard'])
@section('title', 'Order History')
@section('content')

    <div class="bg-gray-100 min-h-screen py-8">
        <div class="max-w-7xl mx-auto px-4 flex flex-row-reverse gap-4">

            <!-- Sidebar -->
            <aside class="w-80 bg-white rounded shadow overflow-hidden">
                <div class="bg-sky-500 text-white text-lg font-semibold p-4 rounded-t">
                    Order History
                </div>
                <nav class="divide-y divide-gray-200 mb-0">
                    <a href="{{route('user.OrderHistory')}}" class="block p-4 hover:bg-gray-100">Order History</a>
                    <a href="{{route('user.AccountSettings')}}" class="block p-4 hover:bg-gray-100">Account Settings</a>
                    <a href="{{route('user.ManageSavedCreditCards')}}" class="block p-4 hover:bg-gray-100">Manage Saved Credit Cards</a>
                    <a href="{{route('user.AddressBook')}}" class="block p-4 hover:bg-gray-100">Address Book</a>
                    <a href="{{route('user.MyFavoriteDesigns')}}" class="block p-4 hover:bg-gray-100 rounded-b">My Favorite Designs</a>
                </nav>
            </aside>
            <!-- Main Content -->
            <main class="flex-1 bg-white shadow rounded p-6">

                <!-- Header + Search -->
                <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
                    <h1 class="text-3xl font-bold text-gray-800">Order History</h1>

                    <!-- Search Form -->
                    <form action="#" method="GET" class="flex mt-4 md:mt-0">
                        <div class="relative">
                            <input type="text" name="search" placeholder="Search..."
                                class="pl-10 pr-4 py-2 rounded-l border border-gray-300 focus:outline-none focus:ring-2 focus:ring-red-500">
                            <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-r hover:bg-red-600">
                            Search
                        </button>
                    </form>
                </div>

                <!-- Order Status -->
                <div>
                    <h2 class="text-xl font-semibold text-gray-800 mt-10">No Order History</h2>
                </div>

            </main>


        </div>
    </div>
@endsection
