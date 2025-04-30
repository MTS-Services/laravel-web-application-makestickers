@extends('frontend.layouts.app', ['page_slug' => 'custom-sticker'])
@section('title', 'Custom Sticker')

@push('styles')
@endpush

@section('content')
    <div class="bg-white">
        <div class="header  pt-5 md:pb-6 pb-2 ">
            <div class="container mx-auto">
                <div class="flex flex-col md:flex-row items-center">
                    <h1 class="font-alt me-2 text-font-32px md:text-font-40px">Custom Stickers</h1>

                    <div class="mb-3 flex justify-center items-center mt-2" role="progressbar" aria-valuenow="4.9"
                        aria-label="Average Sticker Review">
                        <div class="flex flex-col sm:flex-row items-center">
                            <div
                                class="inline-flex flex-wrap items-center justify-center py-1 px-3 border rounded-full text-orange-400">
                                {{-- Full Stars font awesome --}}
                                <div class="relative mr-1 inline-flex items-center text-font-24px text-orange">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                {{-- Rating Text --}}
                                <div class="px-3 flex items-center text-gray text-base">
                                    <strong class="mr-1">4.9</strong> out of 5
                                </div>
                            </div>

                            {{-- Review Count --}}
                            <p class="flex pl-3 text-gray m-0">
                                <span>72,528 reviews</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="text-dark text-font-20px md:text-font-24px font-semibold">Fast, Easy, and Waterproof</p>
                </div>
            </div>
        </div>
        {{-- Categories --}}
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 my-[50px]">
                @foreach ($custom_stickers as  $custom_sticker)
                <div class="text-center p-2 bg-light-gray rounded-md">
                    <div class="p-3">
                        <img class="w-full mx-auto" src="{{ storage_url($custom_sticker->image) }}"
                            alt="" style="width: 300px">
                    </div>
                    <div class="p-3">
                        <h4 class="text-font-20px font-extrabold uppercase text-dark">{{ $custom_sticker->title }}</h4>
                        <p class="text-font-16px text-gray p-2">{{ $custom_sticker->description }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        {{-- The MakeStickers Way --}}
        <div class="">
            <div class="container mx-auto">
                <div class="flex flex-col md:flex-row  justify-center gap-4 my-[50px]">
                    <div class="w-[40%]">
                        <p class="text-[14px] text-primary text-bold">The MakeStickers Way</p>
                        <h2 class="text-font-24px md:text-font-28px text-dark font-semibold py-2">The Fastest and Easiest
                            way to buy custom stickers</h2>
                        <p class="text-font-16px text-gray py-5">Order today and get a free digital proof to approve or
                            revise until you're happy. We'll print and ship your stickers within two business days after you
                            place your order.</p>
                        <p class="text-font-16px text-gray ">Every week, thousands of brands, artists, and organizations
                            trust MakeStickers to make their durable, waterproof custom stickers.</p>
                    </div>
                    <div class="w-[55%] text-center">
                        <iframe width="100%" height="425"
                            src="https://www.youtube.com/embed/yuVsTeND8Hs?si=6TnnrDhbv6qO-HBf" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

        {{-- Features Section --}}
        <section class="container mx-auto py-16 px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
                {{-- Simple --}}
                <div class="flex flex-col items-center">
                    <div class="w-20 h-20 mb-4">
                        <img src="{{ asset('frontend/custom-sticker/info-simple.svg') }}" alt="Simple">
                    </div>
                    <h3 class="text-orange font-bold text-font-18px mb-2">SIMPLE</h3>
                    <p class="text-gray text-font-14px">Customize stickers with an easy-to-use selection tool.</p>
                </div>

                {{-- Fast --}}
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 mb-4">
                        <img src="{{ asset('frontend/custom-sticker/info-fast.svg') }}" alt="Fast">
                    </div>
                    <h3 class="text-secondary font-bold text-font-18px mb-2">FAST</h3>
                    <p class="text-gray text-font-14px">Enjoy 2-day turnaround with fast and free shipping.</p>
                </div>

                {{-- Dependable --}}
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 mb-4">
                        <img src="{{ asset('frontend/custom-sticker/info-dependable.svg') }}" alt="Dependable">
                    </div>
                    <h3 class="text-primary font-bold text-font-18px mb-2">DEPENDABLE</h3>
                    <p class="text-gray text-font-14px">Hands-on customer service is just a click away.</p>
                </div>

                {{-- Affordable --}}
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 mb-4">
                        <img src="{{ asset('frontend/custom-sticker/info-affordable.svg') }}" alt="Affordable">
                    </div>
                    <h3 class="text-tertiary font-bold text-font-18px mb-2">AFFORDABLE</h3>
                    <p class="text-gray text-font-14px">Save money when you order large quantities.</p>
                </div>
            </div>
        </section>

        {{-- Custom Stickers Made Easy Section --}}
        <section class="container mx-auto py-16 px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div>
                    <h2 class="text-font-28px font-bold text-dark mb-4">Custom Stickers Made Easy</h2>
                    <p class="text-gray mb-6">We strive to be the fastest and easiest sticker printing company who is also
                        committed to quality products and exceptional customer service.</p>
                    <button
                        class="bg-primary hover:bg-primary-hover text-white font-medium py-2 px-6 rounded-md transition duration-300">Make
                        a sticker</button>
                </div>
                <div class="">
                    <img src="{{ asset('frontend/custom-sticker/custom-stickers.jpg') }}" alt="Custom stickers collection"
                        class="w-full h-auto rounded-lg z-10 relative">
                </div>
            </div>
        </section>

        {{-- Related Custom Sticker Products --}}
        <section class="container mx-auto py-16 px-4">
            <h2 class="text-font-28px font-bold text-gray mb-8">Related Custom Sticker Products</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
                {{-- Car Stickers --}}
                <div class="border border-gray rounded-lg overflow-hidden">
                    <img src="{{ asset('frontend/custom-sticker/car-ctickers.webp') }}" alt="Car Stickers"
                        class="w-full object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-gray mb-2">Car Stickers</h3>
                        <p class="text-gray text-font-14px mb-10">Say what you need to say with custom car stickers.</p>
                        <a href="#"
                            class="text-primary hover:text-blue-600 text-font-14px font-medium inline-flex items-center">
                            Design <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{-- Need Stickers on a Roll Section --}}
        <section class="container mx-auto py-16 px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div>
                    <img src="{{ asset('frontend/custom-sticker/custom-labels-example.webp') }}" alt="Sticker rolls"
                        class="w-full h-auto rounded-lg">
                </div>
                <div>
                    <h2 class="text-font-32px md:text-font-40px font-normal text-dark mb-4">Need Stickers on a Roll?</h2>
                    <p class="text-dark mb-4 text-font-20px font-bold">If you are looking for stickers on a roll instead of
                        individually cut, we offer custom labels.</p>
                    <p class="text-gray mb-6 text-font-16px">This is a great solution for product labels, packaging, or any
                        other areas that need a professional touch.</p>
                    <button
                        class="bg-primary hover:bg-blue-600 text-white font-medium py-2 px-6 rounded-md transition duration-300">Shop
                        Custom Roll Labels</button>
                </div>
            </div>
        </section>

        {{-- Customer Reviews Section --}}
        <section class="container mx-auto py-16 px-4">
            <div class="text-center mb-12">
                <p class="text-tertiary uppercase font-medium mb-2">LATEST CUSTOMER REVIEWS</p>
                <h2 class="text-font-28px font-bold text-gray">HOW WE MAKE IT STICK</h2>
                <div class="w-24 h-1 bg-tertiary mx-auto mt-4"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center">
                {{-- Review 1 --}}
                <div class="border border-gray rounded-lg p-6">
                    <div class="flex text-orange mb-2">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span class="ml-2 text-gray">5 / 5</span>
                    </div>
                    <h3 class="font-bold text-gray mb-2">Monkey Business</h3>
                    <p class="text-gray mb-4">Great quality and turnaround was fast. Ten day turnaround on a first time
                        order and custom design. Will be back...</p>
                    <p class="text-gray text-font-14px">Glen M., Apr 2025</p>
                </div>

                {{-- Review 2 --}}
                <div class="border border-gray rounded-lg p-6">
                    <div class="flex text-orange mb-2">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span class="ml-2 text-gray">5 / 5</span>
                    </div>
                    <h3 class="font-bold text-gray mb-2">Great Job!</h3>
                    <p class="text-gray mb-4">The stickers I got from you are always great! The kids love them and they
                        turned looking great! Great way to promote our basketball program.</p>
                    <p class="text-gray text-font-14px">Wade N., Apr 2025</p>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
@endpush
