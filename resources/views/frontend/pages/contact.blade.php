@extends('frontend.layouts.app', ['page_slug' => 'contact'])
@section('title', 'Profile')

@push('styles')
@endpush

@section('content')
  <section class="bg-light-gray">

    <!-- Header Section -->
    {{-- <div class="w-full h-1 bg-tertiary mx-auto"></div> --}}
    <section class="bg-primary py-10 text-center px-4">
      <p class="text-font-20px text-tertiary font-bold uppercase tracking-widest mb-2">Contact Us</p>
      <h2 class="text-font-28px font-bold text-gray uppercase tracking-tight mb-4">How can we help?</h2>
      <div class="w-12 h-1 bg-tertiary mx-auto"></div>
    </section>

    <!-- Support Hours Section -->
    <section class="bg-white py-12 px-4">
      <div class="max-w-3xl mx-auto text-center">
        <h3 class="text-font-14px font-semibold uppercase tracking-wider mb-2">
          Our customer support hours are
        </h3>
        <h2 class="text-font-24px font-bold text-secondary uppercase tracking-wide">
          Mon-Fri 8am - 4:30pm (CT)
        </h2>
      </div>
    </section>

    <!-- Contact Cards -->
    <section class="bg-white py-10 px-4">
      <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6">

        <!-- Call -->
        <div class="bg-white border border-gray/10 shadow-[0_4px_6px_rgba(0,0,0,0.2)] p-8 text-center rounded-md">
          <i class="fa-solid fa-mobile text-font-28px"></i>
          <div class="text-tertiary text-font-24px font-bold mb-2 mt-2">CALL</div>
          <a href="tel:{{siteSetting()->phone ?? ''}}" class="text-tertiary text-font-20px font-semibold">{{siteSetting()->phone ?? '000-000-0000'}}</a>
        </div>

        <!-- Message -->
        <div class="bg-white border border-gray/10 shadow-[0_4px_6px_rgba(0,0,0,0.2)] p-8 text-center rounded-md">
          <i class="fa-solid fa-message text-font-24px"></i>
          <div class="text-primary-hover text-font-24px font-bold mb-2 mt-2">MESSAGE</div>
          <a href="mailto:{{siteSetting()->email ?? ''}}" class="mt-2 bg-primary-hover hover:bg-primary-hover text-white px-4 py-2 rounded font-semibold text-font-14px">
            SEND A MESSAGE
          </a>
        </div>

        <!-- Fax -->
        <div class="bg-white border border-gray/10 shadow-[0_4px_6px_rgba(0,0,0,0.2)] p-8 text-center rounded-md">
          <i class="fa-solid fa-fax text-font-24px"></i>
          <div class="text-gray text-font-24px font-bold mb-2 mt-2">FAX</div>
          <a href="{{siteSetting()->fax ?? ''}}" class="text-gray text-font-20px font-semibold">{{siteSetting()->fax ?? '000-000-0000'}}</a>
        </div>

      </div>
    </section>

    <!-- Location Section -->
    <section class="py-12 bg-white px-4">
      <div class="max-w-xl mx-auto text-center">
        <h2 class="text-font-28px font-semibold uppercase tracking-wide mb-4">Our Location</h2>
        <p class="text-font-14px font-medium text-gray uppercase mb-1">{{siteSetting()->address ?? 'Address'}}</p>
      </div>
    </section>

  </section>


@endsection

@push('scripts')
@endpush
