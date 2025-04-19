@extends('frontend.layouts.app', ['page_slug' => 'shipping'])
@section('title', 'Shipping and Turnaround')

@push('styles')
@endpush

@section('content')

    {{-- Hero Area --}}
    <div class="bg-gray/30 w-full border-t-2 border-primary">
        <div class="container mx-auto py-16 text-center">
            <h4 class="text-font-24px font-semibold text-primary uppercase">Common Questions</h4>
            <h2 class="text-font-32px font-bold text-gray mt-5">How can we help?</h2>
        </div>
    </div>

    <div class="container py-5">
        <div class="card bg-white max-w-screen-xl mx-auto shadow-sm border border-gray/30">
            <div class="card-body">
                <div class="flex flex-col md:flex-row space-y-5 md:space-y-0">
                    <div class="w-full md:basis-2/3">
                        <h4 class="text-font-24px font-medium capitalize">Shipping Options</h4>
                        <div class="card card-md shadow-sm w-full md:w-11/12 bg-light-gray/10 border border-dark/10 mt-5">
                            <div class="card-body">
                                <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 items-center justify-between">
                                    <p class="text-font-20px text"><i class="fa-solid fa-calendar-days pr-2"></i>
                                        <span class="text-primary font-semibold uppercase">Free</span> Standard Shipping
                                    </p>
                                    <div class="flex flex-col items-center text-tertiary">
                                        <p class="text-font-20px font-semibold">2-5</p>
                                        <p>Business days</p>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 items-center justify-between">
                                    <p class="text-font-20px text"><i class="fa-solid fa-calendar-days pr-2"></i>
                                        Overnight Shipping
                                    </p>
                                    <div class="flex flex-col items-center text-tertiary">
                                        <p class="text-font-20px font-semibold">1</p>
                                        <p>Business days</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-md shadow-sm w-full md:w-11/12 bg-light-gray/10 border border-dark/10 mt-5">
                            <div class="card-body">
                                <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 items-center justify-between">
                                    <p class="text-font-20px text"><i class="fa-solid fa-calendar-days pr-2"></i>
                                        International Shipping
                                    </p>
                                    <div class="flex flex-col items-center text-tertiary">
                                        <p class="text-font-20px font-semibold">2-14</p>
                                        <p>Business days</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p class="mt-5 md:w-11/12">Specific delivery dates and costs will be shown during checkout and will be based
                            on your order
                            and shipping address.</p>
                    </div>
                    <div class="w-full md:basis-1/3">
                        <img src="{{ asset('frontend/images/stickers-group.png') }}" alt="Stickers" class="w-full h-auto" />
                        <div class="card bg-primary/40 shadow-sm mt-5 border border-primary">
                            <div class="card-body text-center">
                                <p class="italic text-font-20px">Order today and get your stickers by:</p>
                                <h3 class="text-font-28px font-bold">Friday, April 25</h3>
                                <div class="w-full h-[1px] bg-primary my-2"></div>
                                <p class="italic text-font-18px">Need them sooner?</p>
                                <p class="italic font-semibold">With <span
                                        class="text-tertiary italic font-medium text-font-18px"><i
                                            class="fa-solid fa-bolt"></i>Rush Service</span> get them Wednesday, April 23
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card max-w-screen-xl mx-auto bg-primary/40 shadow-sm border border-primary mt-5">
            <div class="card-body">
                <p class=""><strong>Note:</strong> Delivery times are in addition to production time.</p>
            </div>
        </div>

        <div class="card max-w-screen-xl mx-auto bg-white shadow-sm border border-gray/30 mt-5">
            <div class="card-body">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                    <div class="flex flex-col items-center text-center p-5">
                        <i class="fa-solid fa-box text-font-48px text-orange"></i>
                        <h4 class="text-font-24px font-medium capitalize text-orange">International Shipping</h4>
                        <p><strong>We only ship to the USA and Canada.</strong> The price and estimated delivery date will
                            be shown during
                            checkout after you have provided your shipping address.</p>
                    </div>
                    <div class="flex flex-col items-center text-center p-5">
                        <i class="fa-regular fa-clock text-font-48px text-tertiary"></i>
                        <h4 class="text-font-24px font-medium capitalize text-tertiary">Production Time</h4>
                        <p>Our bumper stickers are printed within 2 business days of the time they're ordered. If for some reason there is a delay in creating your sticker, we will attempt to contact you immediately.</p>
                    </div>
                    <div class="flex flex-col items-center text-center p-5">
                        <i class="fa-solid fa-file-invoice-dollar text-font-48px text-secondary"></i>
                        <h4 class="text-font-24px font-medium capitalize text-secondary">Return Policy</h4>
                        <p>MakeStickers is committed to customer satisfaction, and we intend to exceed your expectations. If you’re not head-over-heels thrilled with your product, give us a call at <a href="tel:1-800-555-5555" class="text-primary">1-800-555-5555</a> (Mon-Fri 8am-4:30pm CT) and talk with a real person who will do their best to correct any issues. <a href="" class="text-primary">View our return policy.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
