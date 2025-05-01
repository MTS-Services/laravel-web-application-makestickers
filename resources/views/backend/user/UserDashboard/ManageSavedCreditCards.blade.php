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
                    <h1 class="text-3xl font-bold text-gray-800">MANAGE STORED CREDIT CARDS</h1>

                </div>

                <!-- Order Status -->
                <div>
                    <h2 class="text-xl font-semibold text-gray-800 mt-10">No Saved Credit Cards</h2>
                </div>

            </main>


        </div>
    </div>
@endsection
