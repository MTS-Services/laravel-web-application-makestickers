@extends('frontend.layouts.app', ['page_slug' => 'account_settings'])
@section('title', 'User Dashboard')
@section('content')
    <div class="bg-gray-100 min-h-screen py-8">
        <div class="max-w-7xl mx-auto px-4 flex flex-row-reverse gap-4">

            <!-- Sidebar -->
            <aside class="w-80  bg-white rounded shadow overflow-hidden">
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
                <div class="mb-6">
                    <h1 class="text-3xl font-bold text-gray-800">Account Settings</h1>
                    <h2 class="text-xl font-semibold text-gray-800 mt-10">Personal Information</h2>
                </div>
                <form action="#" method="POST" class="space-y-4 mt-10 ml-20">
                    <div class="flex items-center">
                        <label class="w-40 text-gray-700 font-medium">First Name</label>
                        <input type="name" name="name"
                            class="flex-1 border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-500" />
                    </div>

                    <div class="flex items-center">
                        <label class="w-40 text-gray-700 font-medium">Last Name</label>
                        <input type="name" name="name"
                            class="flex-1 border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-500" />
                    </div>

                    <div class="flex items-center">
                        <label class="w-40 text-gray-700 font-medium">Phone</label>
                        <input type="text" name="phone"
                            class="flex-1 border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-500" />
                    </div>

                    <div class="flex items-center">
                        <label class="w-40 text-gray-700 font-medium">Email</label>
                        <input type="email" name="email"
                            class="flex-1 border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-500" />
                    </div>

                    <button type="submit" class="bg-red-500 text-white px-6 py-2 rounded hover:bg-red-600 shadow mt-20">Update Information</button>
                </form>


                <!-- Change Password Form -->
                <h2 class="text-2xl font-semibold text-gray-800 mt-12 mb-4">Password</h2>
                <form action="#" method="POST" class="space-y-4 mt-10 ml-20">
                    <div class="flex items-center">
                        <label class="w-40 text-gray-700 font-medium">Current Password</label>
                        <input type="password" name="current_password"
                            class="flex-1 border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-500" />
                    </div>
                    <div class="flex items-center">
                        <label class="w-40 text-gray-700 font-medium">New Password</label>
                        <input type="password" name="new_password"
                            class="flex-1 border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-500" />
                    </div>
                    <button type="submit" class="bg-red-500 text-white px-6  py-2 rounded hover:bg-red-600 shadow ">Change
                        Password</button>
                </form>
            </main>
        </div>
    </div>
@endsection
