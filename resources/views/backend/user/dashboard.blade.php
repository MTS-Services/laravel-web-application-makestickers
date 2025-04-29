@extends('frontend.layouts.app', ['page_slug' => 'dashboard'])
@section('title', 'User Dashboard')
@section('content')
    {{-- Dashboard design --}}
    <div class="bg-gray-100 min-h-screen py-8">
        <div class="max-w-7xl mx-auto px-4 flex flex-row-reverse gap-4">

            <!-- Sidebar -->
            <aside class="w-80 bg-white rounded shadow overflow-hidden">
                <div class="bg-sky-500 text-white text-lg font-semibold p-4 rounded-t">
                    Account Dashboard
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
            <main class="flex-1 bg-white shadow rounded p-12">

                <!-- Header -->
                <div class="flex items-center justify-between mb-8">
                    <h1 class="text-3xl font-bold text-gray-800">WELCOME</h1>
                    <a href="" class="bg-gray text-black px-4 py-2 rounded shadow hover:bg-gray-800">
                        Log Out
                    </a>
                </div>

                <!-- Account Sections -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                    <!-- Account Settings -->
                    <div>
                        <div class="flex justify-between items-center mb-2">
                            <h2 class="font-semibold text-lg text-gray-800">Account Settings</h2>
                            <a href="{{route('user.AccountSettings')}}" class="bg-red-500 text-white text-sm px-4 py-1 rounded hover:bg-red-600">Edit</a>
                        </div>
                        <hr class="mb-4 border-gray-300">
                        <p class="text-gray-700 mb-1">rez01khan07@gmail.com</p>
                        <a href="#" class="text-blue-600 text-sm flex items-center hover:underline mt-2">
                            <i class="fa-solid fa-lock mr-2"></i>
                            Change Password
                        </a>
                    </div>

                    <!-- Address Book & Favorites -->
                    <div>
                        <!-- Address Book -->
                        <div class="mb-16">
                            <div class="flex justify-between items-center mb-2">
                                <h2 class="font-semibold text-lg text-gray-800">Address Book</h2>
                                <a href="{{route('user.AddressBook')}}" class="bg-red-500 text-white text-sm px-4 py-1 rounded hover:bg-red-600">Manage</a>
                            </div>
                            <hr class="border-gray-300 mb-4">
                            <p class="text-gray-700">Click <span class="font-semibold ">Manage</span> to enter addresses.</p>
                        </div>

                        <!-- My Favorites -->
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <h2 class="font-semibold text-lg text-gray-800">My Favorites</h2>
                                <a href="{{route('user.MyFavoriteDesigns')}}" class="bg-red-500 text-white text-sm px-4 py-1 rounded hover:bg-red-600">Manage</a>
                            </div>
                            <hr class="border-gray-300 mb-2">
                            <p class="text-gray-700">Save your favorite customized designs so you can reorder later.</p>
                        </div>
                    </div>
                </div>

                <!-- Recent Orders -->
                <div class="mt-10">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-2">Recent Orders</h2>
                    <p class="text-gray-600 mb-4">No Order History</p>
                    <div class="flex justify-center mt-4">
                        <a href="#" class="text-blue-600 border border-blue-600 px-4 py-2 rounded hover:bg-blue-50">
                            See All Orders
                        </a>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
