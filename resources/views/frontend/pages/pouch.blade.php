@extends('frontend.layouts.app', ['page_slug' => 'pouch'])
@section('page_title', 'Pouches')
@section('title', 'Pouches')

@push('styles')
    <style>
        .swiper-slide-thumb-active {
            opacity: 1 !important;
        }

        .main-border {
            position: relative;
        }

        .main-border::before {
            content: "";
            position: absolute;
            right: -2px;
            top: 50%;
            transform: translateY(-50%);
            background-color: red;
            height: 100%;
            width: 3px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .main-border::after {
            content: "\f105";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            position: absolute;
            right: -12px;
            top: 50%;
            transform: translateY(-50%);
            color: white;
            background-color: rgb(255, 238, 0);
            height: 24px;
            width: 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            z-index: 2;
        }
        @media (min-width: 480px ) and (max-width: 1023px) {
            .main-border::after, .main-border::before{
                display: none;
            } 
        }
    </style>
@endpush

@section('content')
    <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <section class="py-6">
            <div>
                <h1 class="text-font-24px sm:text-font-28px md:text-font-32px font-bold">Custom Printed Stand-Up Pouches
                </h1>
                <div class="flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-5 mt-2">
                    <div class="flex items-center gap-4 border border-gray p-2 rounded-full w-fit">
                        <div class="text-orange flex">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div>
                            <p><span class="font-black">5</span> out of 5</p>
                        </div>
                    </div>
                    <span class="text-gray">100 reviews</span>
                </div>
            </div>
        </section>

        <!-- Slider Section -->
        <section class="mt-6 flex flex-col lg:flex-row gap-5">
            <!-- Left side: sliders -->
            <div class="w-full lg:w-1/2 overflow-hidden">
                <!-- Main Swiper -->
                <div class="swiper mySwiper2 mb-4 h-[300px] sm:h-[400px] md:h-[500px] w-full rounded-lg">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-1.jpg" class="w-full h-full object-cover"
                                alt="Nature 1" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-2.jpg" class="w-full h-full object-cover"
                                alt="Nature 2" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-3.jpg" class="w-full h-full object-cover"
                                alt="Nature 3" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-4.jpg" class="w-full h-full object-cover"
                                alt="Nature 4" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-5.jpg" class="w-full h-full object-cover"
                                alt="Nature 5" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-6.jpg" class="w-full h-full object-cover"
                                alt="Nature 6" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-7.jpg" class="w-full h-full object-cover"
                                alt="Nature 7" />
                        </div>
                    </div>
                    <!-- Navigation Arrows (hidden) -->
                    <div class="swiper-button-next hidden"></div>
                    <div class="swiper-button-prev hidden"></div>
                </div>

                <!-- Thumbs Swiper -->
                <div thumbsSlider="" class="swiper mySwiper h-24">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide opacity-60">
                            <img src="https://swiperjs.com/demos/images/nature-1.jpg" class="w-full h-full object-cover"
                                alt="Thumb 1" />
                        </div>
                        <div class="swiper-slide opacity-60">
                            <img src="https://swiperjs.com/demos/images/nature-2.jpg" class="w-full h-full object-cover"
                                alt="Thumb 2" />
                        </div>
                        <div class="swiper-slide opacity-60">
                            <img src="https://swiperjs.com/demos/images/nature-3.jpg" class="w-full h-full object-cover"
                                alt="Thumb 3" />
                        </div>
                        <div class="swiper-slide opacity-60">
                            <img src="https://swiperjs.com/demos/images/nature-4.jpg" class="w-full h-full object-cover"
                                alt="Thumb 4" />
                        </div>
                        <div class="swiper-slide opacity-60">
                            <img src="https://swiperjs.com/demos/images/nature-5.jpg" class="w-full h-full object-cover"
                                alt="Thumb 5" />
                        </div>
                    </div>
                </div>

                <p class="mt-8 text-gray">
                    Our custom printed stand-up pouches feature a premium matte exterior and a metallized interior...
                </p>
            </div>

            <!-- Right side: content -->
            <div class="w-full lg:w-1/2 mt-8 lg:mt-0">
                <div class="border border-gray p-4 sm:p-6 rounded-lg">
                    <h2 class="text-xl font-semibold mb-3">Printing Options</h2>
                    <div class="flex justify-between gap-2">
                        <div class="flex items-center gap-2">
                            <p>Size</p>
                            <a href="#" class="text-primary text-sm">View help</a>
                        </div>
                        <p class="font-semibold">Quantity</p>
                    </div>

                    <div class="flex flex-col sm:flex-row justify-between gap-2 mt-3">
                        <select class="w-full sm:w-2/3 p-2 border border-gray rounded-md">
                            <option disabled selected>Select size</option>
                            <option value="#">5.75" W x 7.5" H x 2.5" D</option>
                            <option value="#">6.75" W x 9.5" H x 3.5" D</option>
                            <option value="#">7.75" W x 10.5" H x 4.5" D</option>
                        </select>
                        <select class="w-full sm:w-1/3 p-2 border border-gray rounded-md mt-2 sm:mt-0">
                            <option disabled selected>Quantity</option>
                            <option value="#">1</option>
                            <option value="#">100</option>
                            <option value="#">1000</option>
                        </select>
                    </div>

                    <div class="flex justify-between my-8 sm:my-10">
                        <div>
                            <h2 class="text-lg font-medium">Total Price:</h2>
                        </div>
                        <div class="text-right">
                            <p class="text-xl font-bold">$125.55</p>
                            <p class="text-sm text-gray-600">$125 each</p>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row justify-around items-center gap-3 mt-4">
                        <button
                            class="w-full sm:w-auto hover:bg-primary-hover hover:text-white p-3 rounded-md text-primary border border-primary transition-colors">
                            CUSTOMIZE TEMPLATE
                        </button>
                        <button
                            class="w-full sm:w-auto bg-primary text-white p-3 rounded-lg hover:bg-primary-hover transition-colors border border-primary">
                            <i class="fa-solid fa-upload mr-2"></i> UPLOAD FILE
                        </button>
                    </div>

                    <div class="flex flex-col">
                        <p class="text-center mt-4">or</p>
                        <a href="#" class="text-center mt-4 text-primary">skip and send file(s) later</a>
                    </div>
                </div>

                <div class="relative overflow-hidden mt-8 sm:mt-10">
                    <!-- Background image -->
                    <div class="absolute left-[-48px] top-[-25px]">
                        <div class="w-32 h-32 bg-orange-200 rounded-full opacity-50"></div>
                    </div>

                    <!-- Foreground content -->
                    <div
                        class="relative z-10 text-center border border-gray p-4 sm:p-6 rounded-lg bg-white bg-opacity-90 ps-6 sm:ps-12">
                        <h2 class="text-lg italic">Order today and get your pouches by</h2>
                        <h2 class="text-xl sm:text-font-32px py-2 font-semibold text-dark">Wednesday, April 30</h2>
                        <hr class="my-4" />
                        <p class="font-bold text-gray">Need them sooner?</p>
                        <p>
                            With
                            <span class="font-bold text-red-500 italic mx-1">
                                <i class="fa-solid fa-bolt text-red-500"></i> Rush Service
                            </span>
                            get them Wednesday, April 23
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stand Up Pouch Features -->
        <section class="mt-14 sm:mt-20">
            <h2 class="text-font-24px sm:text-font-28px md:text-font-32px font-medium text-center text-dark">Stand Up Pouch Features
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-8 sm:mt-10">
                <!-- Feature cards-->
                <div class="p-2 sm:p-4">
                    <div class="flex flex-col md:flex-row bg-white rounded-font-32px shadow-lg overflow-hidden">
                        <!-- Image -->
                        <div class="md:w-[40%]">
                            <div class="bg-gray-200 w-full h-48 md:h-full">
                                <img src="{{ asset('frontend/pouch-photo/7d7654fdb5cc4f779c08cf10c29fd715.webp') }}"
                                    alt="Pouch Feature" class="w-full h-full object-cover" />
                            </div>
                        </div>
                        <!-- Content -->
                        <div class="md:w-[60%] p-4 sm:p-6 flex flex-col justify-center">
                            <h2 class="text-lg sm:text-xl font-medium text-gray mb-4">Matte Finish, Metallized
                                Material</h2>
                            <hr class="border-t border-gray mb-4" />
                            <p class="text-gray-600 text-sm sm:text-base">
                                Pouches have a metallized interior and a matte exterior. The metallized material
                                provides a barrier
                                for oxygen and moisture.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="p-2 sm:p-4">
                    <div class="flex flex-col md:flex-row bg-white rounded-font-32px shadow-lg overflow-hidden">
                        <!-- Image -->
                        <div class="md:w-[40%]">
                            <div class="bg-gray-200 w-full h-48 md:h-full">
                                <img src="{{ asset('frontend/pouch-photo/7d7654fdb5cc4f779c08cf10c29fd715.webp') }}"
                                    alt="Pouch Feature" class="w-full h-full object-cover" />
                            </div>
                        </div>
                        <!-- Content -->
                        <div class="md:w-[60%] p-4 sm:p-6 flex flex-col justify-center">
                            <h2 class="text-lg sm:text-xl font-medium text-gray mb-4">Matte Finish, Metallized
                                Material</h2>
                            <hr class="border-t border-gray mb-4" />
                            <p class="text-gray-600 text-sm sm:text-base">
                                Pouches have a metallized interior and a matte exterior. The metallized material
                                provides a barrier
                                for oxygen and moisture.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="p-2 sm:p-4">
                    <div class="flex flex-col md:flex-row bg-white rounded-font-32px shadow-lg overflow-hidden">
                        <!-- Image -->
                        <div class="md:w-[40%]">
                            <div class="bg-gray-200 w-full h-48 md:h-full">
                                <img src="{{ asset('frontend/pouch-photo/7d7654fdb5cc4f779c08cf10c29fd715.webp') }}"
                                    alt="Pouch Feature" class="w-full h-full object-cover" />
                            </div>
                        </div>
                        <!-- Content -->
                        <div class="md:w-[60%] p-4 sm:p-6 flex flex-col justify-center">
                            <h2 class="text-lg sm:text-xl font-medium text-gray mb-4">Matte Finish, Metallized
                                Material</h2>
                            <hr class="border-t border-gray mb-4" />
                            <p class="text-gray-600 text-sm sm:text-base">
                                Pouches have a metallized interior and a matte exterior. The metallized material
                                provides a barrier
                                for oxygen and moisture.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="p-2 sm:p-4">
                    <div class="flex flex-col md:flex-row bg-white rounded-font-32px shadow-lg overflow-hidden">
                        <!-- Image -->
                        <div class="md:w-[40%]">
                            <div class="bg-gray-200 w-full h-48 md:h-full">
                                <img src="{{ asset('frontend/pouch-photo/7d7654fdb5cc4f779c08cf10c29fd715.webp') }}"
                                    alt="Pouch Feature" class="w-full h-full object-cover" />
                            </div>
                        </div>
                        <!-- Content -->
                        <div class="md:w-[60%] p-4 sm:p-6 flex flex-col justify-center">
                            <h2 class="text-lg sm:text-xl font-medium text-gray mb-4">Matte Finish, Metallized
                                Material</h2>
                            <hr class="border-t border-gray mb-4" />
                            <p class="text-gray-600 text-sm sm:text-base">
                                Pouches have a metallized interior and a matte exterior. The metallized material
                                provides a barrier
                                for oxygen and moisture.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="p-2 sm:p-4">
                    <div class="flex flex-col md:flex-row bg-white rounded-font-32px shadow-lg overflow-hidden">
                        <!-- Image -->
                        <div class="md:w-[40%]">
                            <div class="bg-gray-200 w-full h-48 md:h-full">
                                <img src="{{ asset('frontend/pouch-photo/7d7654fdb5cc4f779c08cf10c29fd715.webp') }}"
                                    alt="Pouch Feature" class="w-full h-full object-cover" />
                            </div>
                        </div>
                        <!-- Content -->
                        <div class="md:w-[60%] p-4 sm:p-6 flex flex-col justify-center">
                            <h2 class="text-lg sm:text-xl font-medium text-gray mb-4">Matte Finish, Metallized
                                Material</h2>
                            <hr class="border-t border-gray mb-4" />
                            <p class="text-gray-600 text-sm sm:text-base">
                                Pouches have a metallized interior and a matte exterior. The metallized material
                                provides a barrier
                                for oxygen and moisture.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="p-2 sm:p-4">
                    <div class="flex flex-col md:flex-row bg-white rounded-font-32px shadow-lg overflow-hidden">
                        <!-- Image -->
                        <div class="md:w-[40%]">
                            <div class="bg-gray-200 w-full h-48 md:h-full">
                                <img src="{{ asset('frontend/pouch-photo/7d7654fdb5cc4f779c08cf10c29fd715.webp') }}"
                                    alt="Pouch Feature" class="w-full h-full object-cover" />
                            </div>
                        </div>
                        <!-- Content -->
                        <div class="md:w-[60%] p-4 sm:p-6 flex flex-col justify-center">
                            <h2 class="text-lg sm:text-xl font-medium text-gray mb-4">Matte Finish, Metallized
                                Material</h2>
                            <hr class="border-t border-gray mb-4" />
                            <p class="text-gray-600 text-sm sm:text-base">
                                Pouches have a metallized interior and a matte exterior. The metallized material
                                provides a barrier
                                for oxygen and moisture.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- How We Bring Your Pouches to Life -->
        <section class="mt-14 sm:mt-20">
            <h2 class="text-font-24px sm:text-font-28px md:text-font-32px font-medium text-dark text-center">How We Bring Your Pouches
                to Life</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-8 sm:mt-10">
                <!-- Process steps -->
                <div class="relative">
                    <div class="card  p-4 h-full main-border">
                        <div class="flex justify-center mb-4">
                            <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center">
                                <img src="{{ asset('frontend/pouch-photo/info-product-order.svg') }}" alt="Process icon"
                                    class="w-16 h-16" />
                            </div>
                        </div>
                        <div class="text-center">
                            <h2 class="text-lg font-semibold mb-2">Order Your Custom Pouches</h2>
                            <p class="text-gray-600 text-sm">
                                Upload your own design or use our downloadable templates for easy designing and ordering
                            </p>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="card  p-4 h-full main-border">
                        <div class="flex justify-center mb-4">
                            <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center">
                                <img src="{{ asset('frontend/pouch-photo/info-product-order.svg') }}" alt="Process icon"
                                    class="w-16 h-16" />
                            </div>
                        </div>
                        <div class="text-center">
                            <h2 class="text-lg font-semibold mb-2">Order Your Custom Pouches</h2>
                            <p class="text-gray-600 text-sm">
                                Upload your own design or use our downloadable templates for easy designing and ordering
                            </p>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="card  p-4 h-full main-border">
                        <div class="flex justify-center mb-4">
                            <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center">
                                <img src="{{ asset('frontend/pouch-photo/info-product-order.svg') }}" alt="Process icon"
                                    class="w-16 h-16" />
                            </div>
                        </div>
                        <div class="text-center">
                            <h2 class="text-lg font-semibold mb-2">Order Your Custom Pouches</h2>
                            <p class="text-gray-600 text-sm">
                                Upload your own design or use our downloadable templates for easy designing and ordering
                            </p>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="card  p-4 h-full main-border">
                        <div class="flex justify-center mb-4">
                            <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center">
                                <img src="{{ asset('frontend/pouch-photo/info-product-order.svg') }}" alt="Process icon"
                                    class="w-16 h-16" />
                            </div>
                        </div>
                        <div class="text-center">
                            <h2 class="text-lg font-bold mb-2">Order Your Custom Pouches</h2>
                            <p class="text-gray-600 text-sm">
                                Upload your own design or use our downloadable templates for easy designing and ordering
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Add to cart section -->
        <section class="mt-14 sm:mt-20">
            <div
                class="grid grid-cols-1 md:grid-cols-2 rounded-lg overflow-hidden relative bg-gradient-to-tr from-green-400 to-primary">
                <div class="p-6 sm:p-10 md:p-16 text-white">
                    <p class="text-sm sm:text-base">Try Before You Buy</p>
                    <h2 class="text-xl sm:text-font-32px md:text-font-28px py-4 font-bold">
                        Get a hands-on look at our stand-up pouches
                    </h2>
                    <p class="text-sm sm:text-base pb-8 sm:pb-16">
                        Order a Pouch Sample Pack to explore materials, print quality, and durability—so you can package
                        with
                        confidence.
                    </p>
                    <button
                        class="bg-[#B2D952] text-white px-4 py-2 rounded-md uppercase font-medium hover:bg-[#9fc33e] transition-colors">
                        Add to cart <span class="font-bold ps-3">$1.00</span>
                    </button>
                </div>
                <div class="bg-gray-100">
                    <img src="{{ asset('frontend/pouch-photo/samples-pouch.webp') }}" alt="Sample Pack"
                        class="img-fluid object-cover" />
                </div>
                <div class="absolute bottom-0 right-0 z-10 opacity-">
                    <img class="img-fluid" src="{{ asset('frontend/pouch-photo/accent-ring-circle-dots.png') }}" alt="">
                </div>
            </div>
        </section>

        <!-- Customers Trust section -->
        <section class="mt-14 sm:mt-20">
            <div class="py-8 grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Image -->
                <div class="rounded-lg overflow-hidden">
                    <img src="{{ asset('frontend/pouch-photo/trusted-printing.jpg') }}" alt="Trusted Printing"
                        class="w-full h-auto" />
                </div>

                <!-- Trust Section -->
                <div class="flex flex-col gap-6 p-2">
                    <div>
                        <h2 class="text-xl sm:text-font-32px md:text-font-28px font-medium text-dark mb-4">
                            Thousands of Customers Trust Us With Their Printing
                        </h2>
                        <p class="text-gray mb-6">
                            With quality products, simple ordering, and dependable support, we exceed expectations.
                            Reasons why
                            customers stick with us:
                        </p>

                        <div class="space-y-4">
                            <div class="border-b pb-3">
                                <p class="text-gray">Easy-to-use website</p>
                            </div>
                            <div class="border-b pb-3">
                                <p class="text-gray">Fast turnaround & free shipping</p>
                            </div>
                            <div class="border-b pb-3">
                                <p class="text-gray">Hands-on customer service ready to help</p>
                            </div>
                            <div class="border-b pb-3">
                                <p class="text-gray">Free shipping on all orders</p>
                            </div>
                            <div class="border-b pb-3">
                                <p class="text-gray">Quality printing and durable materials</p>
                            </div>
                            <div class="border-b pb-3">
                                <p class="text-gray">Affordable pricing</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Reviews Section -->
            <div class="flex flex-col md:flex-row gap-8 mb-12 p-2">
                <div class="md:w-1/2">
                    <h2 class="text-lg sm:text-xl font-medium text-gray mb-6">
                        Discover What Our Customers Have to Say
                    </h2>

                    <div class="flex flex-col sm:flex-row sm:items-center mb-8">
                        <div
                            class="flex flex-col items-center justify-center border p-4 text-center sm:mr-8 w-full sm:w-32 mb-4 sm:mb-0">
                            <div class="text-font-32px font-bold">5</div>
                            <div class="text-orange flex py-2">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="text-sm text-gray">2 reviews</div>
                        </div>

                        <div class="flex-1">
                            <div class="mb-2">
                                <div class="flex items-center">
                                    <span class="w-12 text-sm text-gray">5 star</span>
                                    <div class="flex-1 h-4 bg-gray rounded-full overflow-hidden">
                                        <div class="bg-orange h-full" style="width: 100%"></div>
                                    </div>
                                    <span class="w-16 text-right text-sm text-gray">100%</span>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="flex items-center">
                                    <span class="w-12 text-sm text-gray">4 star</span>
                                    <div class="flex-1 h-4 bg-gray-200 rounded-full overflow-hidden">
                                        <div class="bg-[#3333] h-full" style="width: 100%"></div>
                                    </div>
                                    <span class="w-16 text-right text-sm text-gray">0.0%</span>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="flex items-center">
                                    <span class="w-12 text-sm text-gray">3 star</span>
                                    <div class="flex-1 h-4 bg-gray-200 rounded-full overflow-hidden">
                                        <div class="bg-[#3333] h-full" style="width: 100%"></div>
                                    </div>
                                    <span class="w-16 text-right text-sm text-gray">0.0%</span>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="flex items-center">
                                    <span class="w-12 text-sm text-gray">2 star</span>
                                    <div class="flex-1 h-4 bg-gray-200 rounded-full overflow-hidden">
                                        <div class="bg-[#3333] h-full" style="width: 100%"></div>
                                    </div>
                                    <span class="w-16 text-right text-sm text-gray">0.0%</span>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="flex items-center">
                                    <span class="w-12 text-sm text-gray">1 star</span>
                                    <div class="flex-1 h-4 bg-gray-200 rounded-full overflow-hidden">
                                        <div class="bg-[#3333] h-full" style="width: 100%"></div>
                                    </div>
                                    <span class="w-16 text-right text-sm text-gray">0.0%</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="text-lg sm:text-xl font-medium text-gray mb-4">
                        The top 5 things our customers say about us:
                    </h3>

                    <div class="space-y-6">
                        <div class="flex">
                            <div
                                class="bg-orange text-white font-bold rounded-full w-8 h-8 flex items-center justify-center mr-4">
                                1
                            </div>
                            <div>
                                <h4 class="font-medium text-gray">High quality products</h4>
                                <p class="text-gray">Clear printing, vibrant colors and sturdy materials</p>
                            </div>
                        </div>

                        <div class="flex">
                            <div
                                class="bg-orange text-white font-bold rounded-full w-8 h-8 flex items-center justify-center mr-4">
                                2
                            </div>
                            <div>
                                <h4 class="font-medium text-gray">Fast and reliable</h4>
                                <p class="text-gray">Quick turnaround and often delivered earlier than expected</p>
                            </div>
                        </div>

                        <div class="flex">
                            <div
                                class="bg-orange text-white font-bold rounded-full w-8 h-8 flex items-center justify-center mr-4">
                                3
                            </div>
                            <div>
                                <h4 class="font-medium text-gray">Excellent customer service</h4>
                                <p class="text-gray">Helpful and accommodating staff throughout the entire
                                    experience</p>
                            </div>
                        </div>

                        <div class="flex">
                            <div
                                class="bg-orange text-white font-bold rounded-full w-8 h-8 flex items-center justify-center mr-4">
                                4
                            </div>
                            <div>
                                <h4 class="font-medium text-gray">Easy to make changes</h4>
                                <p class="text-gray">Review and revise orders in seconds with digital proofs</p>
                            </div>
                        </div>

                        <div class="flex">
                            <div
                                class="bg-orange text-white font-bold rounded-full w-8 h-8 flex items-center justify-center mr-4">
                                5
                            </div>
                            <div>
                                <h4 class="font-medium text-gray">Affordable pricing</h4>
                                <p class="text-gray">Great value without compromising quality</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="md:w-1/2 mt-8 md:mt-0">
                    <h2 class="text-lg sm:text-xl font-medium text-dark mb-6">The most recent reviews</h2>

                    <div class="border rounded-lg p-6 mb-4 text-center">
                        <div class="mb-2">
                            <span class="border rounded-full p-2 px-4 inline-block">
                                <div class="text-orange flex justify-center">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </span>
                        </div>
                        <p class="mb-4">Angie C.</p>
                        <p class="text-gray mb-2">January, 2025</p>
                    </div>

                    <div class="border rounded-lg p-6 mb-4">
                        <div class="mb-2 text-center">
                            <span class="border rounded-full p-2 px-4 inline-block">
                                <div class="text-orange flex justify-center">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </span>
                        </div>
                        <p class="mb-2 text-left">Great product, no issues :)</p>
                        <p class="mb-4">David M.</p>
                        <p class="text-gray mb-2">November, 2024</p>
                    </div>

                    <div class="text-center mt-6">
                        <button
                            class="border border-primary text-primary px-4 py-2 rounded-md hover:bg-primary-hover hover:text-white transition-colors">
                            See all reviews
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- Initialize Swiper -->
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
        });
        var swiper2 = new Swiper(".mySwiper2", {
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: swiper,
            },
        });
    </script>
@endpush