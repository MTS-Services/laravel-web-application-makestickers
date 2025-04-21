@extends('frontend.layouts.app', ['page_slug' => 'contact'])
@section('title', 'Contact US')

@push('styles')
@endpush

@section('content')
  <section class="bg-gray-100 text-gray-800">

    <!-- Header Section -->
    {{-- <div class="w-full h-1 bg-tertiary mx-auto"></div> --}}
    <section class="bg-primary py-10 text-center px-4">
      <p class="text-xl text-tertiary font-bold uppercase tracking-widest mb-2">Contact Us</p>
      <h2 class="text-3xl font-bold text-gray uppercase tracking-tight mb-4">How can we help?</h2>
      <div class="w-12 h-1 bg-tertiary mx-auto"></div>
    </section>

    <!-- Support Hours Section -->
    <section class="bg-white py-12 px-4">
      <div class="max-w-3xl mx-auto text-center">
        <h3 class="text-sm font-semibold uppercase tracking-wider mb-2">
          Our customer support hours are
        </h3>
        <h2 class="text-2xl font-bold text-secondary uppercase tracking-wide">
          Mon-Fri 8am - 4:30pm (CT)
        </h2>
      </div>
    </section>

    <!-- Contact Cards -->
    <section class="bg-white py-10 px-4">
      <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6">

        <!-- Call -->
        <div class="bg-white border shadow-[0_4px_6px_rgba(0,0,0,0.5)] p-8 text-center rounded-md">
          <i class="fa-solid fa-mobile text-3xl"></i>
          <div class="text-tertiary text-2xl font-bold mb-2 mt-2">CALL</div>
          <p class="text-tertiary text-xl font-semibold">1-800-347-2744</p>
        </div>

        <!-- Message -->
        <div class="bg-white border shadow-[0_4px_6px_rgba(0,0,0,0.5)] p-8 text-center rounded-md">
          <i class="fa-solid fa-message text-2xl"></i>
          <div class="text-primary-hover text-2xl font-bold mb-2 mt-2">MESSAGE</div>
          <button class="mt-2 bg-primary-hover hover:bg-primary-hover text-white px-4 py-2 rounded font-semibold text-sm">
            SEND A MESSAGE
          </button>
        </div>

        <!-- Fax -->
        <div class="bg-white border shadow-[0_4px_6px_rgba(0,0,0,0.5)] p-8 text-center rounded-md">
          <i class="fa-solid fa-fax text-2xl"></i>
          <div class="text-gray-700 text-2xl font-bold mb-2 mt-2">FAX</div>
          <p class="text-gray-700 text-xl font-semibold">708-614-1974</p>
        </div>

      </div>
    </section>

    <!-- Location Section -->
    <section class="py-12 bg-white px-4">
      <div class="max-w-xl mx-auto text-center">
        <h2 class="text-3xl font-semibold uppercase tracking-wide mb-4">Our Location</h2>
        <p class="text-sm font-medium text-gray uppercase mb-1">18621 81st Ave</p>
        <p class="text-sm font-medium text-gray uppercase">Tinley Park, IL 60487</p>
      </div>
    </section>

  </section>


@endsection

@push('scripts')
@endpush
