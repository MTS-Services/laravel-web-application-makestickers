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
                    <a href="{{ route('user.OrderHistory') }}" class="block p-4 hover:bg-gray-100">Order History</a>
                    <a href="{{ route('user.AccountSettings') }}" class="block p-4 hover:bg-gray-100">Account Settings</a>
                    <a href="{{ route('user.ManageSavedCreditCards') }}" class="block p-4 hover:bg-gray-100">Manage Saved
                        Credit Cards</a>
                    <a href="{{ route('user.AddressBook') }}" class="block p-4 hover:bg-gray-100">Address Book</a>
                    <a href="{{ route('user.MyFavoriteDesigns') }}" class="block p-4 hover:bg-gray-100 rounded-b">My
                        Favorite Designs</a>
                </nav>
            </aside>
            <!-- Main Content -->
            <main class="flex-1 bg-white shadow rounded p-6">

                <!-- Header + Search -->
                <div class=" mb-6">
                    <h1 class="text-3xl font-bold text-gray-800 mb-8">My Favorites</h1>
                    <p class="text-gray-600 mt-8 mb-8">(Here you can manage your favorite designs)</p>
                    <p class="text-gray-600 mt-2 ">"My favorites" lets you establish and maintain a collection of
                        designs (previews made from our online templates).</p>
                        <p class="text-gray-600 mt-4"> You can save a design (a preview made from our online templates) for later and order it when you're
                        ready—if you weren't finished designing, you can go back and edit before ordering.</p>
                </div>
                <!-- Order Status -->
                <div>
                    <h2 class="text-xl font-semibold text-gray-800 mt-10">No Saved Design</h2>
                </div>

            </main>


        </div>
    </div>
@endsection
