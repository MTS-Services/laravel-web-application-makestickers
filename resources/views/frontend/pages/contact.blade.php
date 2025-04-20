@extends('frontend.layouts.app', ['page_slug' => 'contact'])
@section('title', 'contact Page')

@push('styles')
@endpush

@section('content')

<div class="w-25 h-0.5 bg-tertiary mx-auto my-0"></div>
<div class="text-center bg-gray-200 py-10">
    <p class="text-tertiary text-xl font-semibold uppercase">Contact Us</p>
    <h2 class="text-3xl font-bold mt-2 text-gray-800">HOW CAN WE HELP YOU?</h2>
    <div class="w-24 h-0.5 bg-tertiary mx-auto my-2"></div>
</div>

<div class="text-center py-6">
    <p class="text-gray-600">Our customer support hours are</p>
    <p class="text-lime-300 text-xl font-semibold secondary">MON–FRI 8AM–4:30PM <span class="text-gray-500">(CT)</span></p>
</div>

<div class="container">
    <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-6 mt-10 px-6 md:px-20 ">
        <!-- CALL -->
        <div class="bg-white p-6 rounded-md shadow-md text-center border border-gray-200">
            <div class="text-tertiary text-3xl mb-2">
                <i class="fas fa-phone-alt"></i>
            </div>
            <h3 class="text-xl font-bold text-tertiary">CALL</h3>
            <p class="text-tertiary text-2xl font-bold mt-2">1-800-347-2744</p>
        </div>

        <!-- MESSAGE -->
        <div class="bg-white p-6 rounded-md shadow-md text-center border border-gray-200">
            <div class="text-primary text-3xl mb-2">
                <i class="fas fa-envelope"></i>
            </div>
            <h3 class="text-xl font-bold text-primary">MESSAGE</h3>
            <button class="btn-primary mt-2 px-2 py-1">
                SEND A MESSAGE
            </button>
        </div>

        <!-- FAX -->
        <div class="bg-white p-6 rounded-md shadow-md text-center border border-gray-200">
            <div class="text-black text-3xl mb-2">
                <i class="fas fa-fax"></i>
            </div>
            <h3 class="text-xl font-bold text-black">FAX</h3>
            <p class="text-black text-2xl font-bold mt-2">708-614-1974</p>
        </div>
    </div>
</div>

<!-- Location -->
<div class="text-center mt-12 my-10">
    <h3 class="text-2xl font-bold text-black">Our Location</h3>
    <p class="text-black mt-2">18621 81<sup>st</sup> Ave</p>
    <p class="text-black">Tinley Park, IL 60487</p>
</div>
</div>

@endsection

@push('scripts')
@endpush