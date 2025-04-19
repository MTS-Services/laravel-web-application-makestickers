@extends('frontend.layouts.app', ['page_slug' => 'pouch'])
@section('page_title', 'Pouches')
@section('title', 'Pouches')

@push('styles')
    <style>
        .star-rating {
            color: #FFA500;
        }

        .swiper {
            width: 100%;
            height: 500px;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 500px;
            object-fit: cover;
        }

        .swiper {
            width: 100%;
            height: 300px;
            margin-left: auto;
            margin-right: auto;
        }

        .swiper-slide {
            background-size: cover;
            background-position: center;
        }

        .mySwiper2 {
            height: 600px;
            width: 750px;
        }

        .mySwiper {
            height: 20%;
            box-sizing: border-box;
            padding: 10px 0;
            width: 754px;
        }

        .mySwiper .swiper-slide {
            width: 400px;
            height: 100%;
            opacity: 0.4;
        }

        .mySwiper .swiper-slide-thumb-active {
            opacity: 1;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .main_border {
            position: relative;
            padding-right: 30px;
            /* spacing from red line */
        }

        .main_border::before {
            content: "";
            /* Font Awesome star icon */
            /* font-family: "Font Awesome 6 Free";  */
            font-weight: 900;
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            background-color: red;
            color: rgb(255, 238, 0);
            height: 300px;
            width: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .main_border::after {
            content: "\f105";
            /* Font Awesome star icon */
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            position: absolute;
            right: -9px;
            top: 50%;
            transform: translateY(-50%);
            color: white;
            background-color: rgb(255, 238, 0);
            /* yellow background */
            height: 24px;
            width: 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            z-index: 2;
        }

        /* Add to cart section */
        .add_to_cart-btn {
            background-color: #B2D952;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
@endpush

@section('content')
    <div class="w-[1320px] mx-auto">
        <section>
            <div>
                <h1 class="text-4xl font-bold">Custom Printed Stand-Up Pouches</h1>
                <div class="flex gap-5 items-center">
                    <div class="w-fit flex items-center gap-4 border border-gray p-2 rounded-full mt-1">
                        <div class="text-yellow-400">
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

        {{-- slider section  --}}
        {{-- slider section --}}
        <section class="mt-10 flex gap-5">
            {{-- left side: sliders --}}
            <div class="overflow-hidden">
                <!-- Swiper Main -->
                <div class="swiper mySwiper2 mb-4">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="https://swiperjs.com/demos/images/nature-1.jpg" /></div>
                        <div class="swiper-slide"><img src="https://swiperjs.com/demos/images/nature-2.jpg" /></div>
                        <div class="swiper-slide"><img src="https://swiperjs.com/demos/images/nature-3.jpg" /></div>
                        <div class="swiper-slide"><img src="https://swiperjs.com/demos/images/nature-4.jpg" /></div>
                        <div class="swiper-slide"><img src="https://swiperjs.com/demos/images/nature-5.jpg" /></div>
                        <div class="swiper-slide"><img src="https://swiperjs.com/demos/images/nature-6.jpg" /></div>
                        <div class="swiper-slide"><img src="https://swiperjs.com/demos/images/nature-7.jpg" /></div>
                    </div>
                    <!-- Removing Navigation Arrows -->
                    <div class="swiper-button-next hidden"></div>
                    <div class="swiper-button-prev hidden"></div>
                </div>

                <!-- Swiper Thumbs -->
                <div thumbsSlider="" class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="https://swiperjs.com/demos/images/nature-1.jpg" /></div>
                        <div class="swiper-slide"><img src="https://swiperjs.com/demos/images/nature-2.jpg" /></div>
                        <div class="swiper-slide"><img src="https://swiperjs.com/demos/images/nature-3.jpg" /></div>
                        <div class="swiper-slide"><img src="https://swiperjs.com/demos/images/nature-4.jpg" /></div>
                        <div class="swiper-slide"><img src="https://swiperjs.com/demos/images/nature-5.jpg" /></div>
                    </div>
                </div>

                <p class="mt-8">Our custom printed stand-up pouches feature a premium matte exterior and a metallized
                    interior...</p>
            </div>

            {{-- right side: content --}}
            <div>

                <div class="border border-gray p-6 rounded-lg">
                    <h2 class="text-xl font-bold mb-3">Printing Options</h2>
                    <div class="flex justify-between gap-2">
                        <div class="flex items-center gap-2">
                            <p>Size</p>
                            <a href="#" class="text-blue-600">View help</a>
                        </div>
                        <p class="font-bold">Quantity</p>
                    </div>

                    <div class="flex justify-between gap-2 mt-3">
                        <select class="select">
                            <option disabled selected>Pick a color</option>
                            <option value="#">5.75" W x 7.5" H x 2.5" D</option>
                            <option value="#">5.75" W x 7.5" H x 2.5" D</option>
                            <option value="#">5.75" W x 7.5" H x 2.5" D</option>
                        </select>
                        {{-- quantity select --}}
                        <select class="select px-5">
                            <option disabled selected>Pick a color</option>
                            <option value="#">1</option>
                            <option value="#">100</option>
                            <option value="#">1090</option>
                        </select>
                    </div>
                    <div class="flex justify-between my-10">
                        <div>
                            <h2 class="text-heading-5">Total Price:</h2>
                        </div>
                        <div class="text-right">
                            <p class="text-heading-4">$125.55</p>
                            <p class="text-heading-6 text-dark">$125 each</p>
                        </div>
                    </div>
                    <div class="flex flex-col-sm justify-around items-center gap-3 mt-4">
                        <button
                            class="hover:bg-blue-600 hover:text-white p-3 rounded-md text-blue-500 border border-blue-600">COUSTOMIZE
                            TEMPLETE</button>
                        <button
                            class="bg-blue-600 text-white p-3 rounded-lg hover:bg-primary-hover hover:primary border border-primary"><i
                                class="fa-solid fa-upload"></i> UPLOAD FILE</button>
                    </div>
                    <div class="flex flex-col">
                        <p class="text-center mt-4">or</p>
                        <a href="#" class="text-center mt-4 text-primary">skip and send file(s) later</a>
                    </div>
                </div>
                <div class="relative overflow-hidden mt-10">
                    <!-- Background image absolutely positioned at top-left -->
                    <div class="absolute left-[-48px] top-[-25px]">
                        <img src="{{ asset('frontend/pouch-photo/sample-pack-header-background-orange.svg') }}"
                            alt="" class="w-32" />
                    </div>

                    <!-- Foreground content -->
                    <div class="relative z-10 text-center border border-gray p-6 rounded-lg  bg-opacity-90 ps-12">
                        <h2 class="text-heading-5 italic">Order today and get your pouches by</h2>
                        <h2 class="text-heading-4 py-2 font-bold text-gray">Wednesday, April 30</h2>
                        <hr class="my-4">
                        <p class="font-bold text-gray">Need them sooner?</p>
                        <p>
                            With
                            <span class="font-bold text-red-500 italic">
                                <i class="fa-solid fa-bolt text-red-500"></i> Rush Service
                            </span>
                            get them Wednesday, April 23
                        </p>
                    </div>
                </div>

            </div>
        </section>


        {{-- Stand Up Pouch Features  --}}
        <section>
            <div>
                <h2 class="text-4xl mt-14 font-bold text-center">Stand Up Pouch Features</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-10">
                    <div class="p-4">
                        <div class="flex flex-col md:flex-row bg-white rounded-2xl shadow-lg overflow-hidden">
                            <!-- Image -->
                            <div class="md:w-[40%]">
                                <img src="{{ asset('frontend/pouch-photo/7d7654fdb5cc4f779c08cf10c29fd715.webp') }}"
                                    alt="Pouch Image" class="w-full  object-cover" />
                            </div>

                            <!-- Content -->
                            <div class="md:w-[60%] p-6 flex flex-col justify-center">
                                <h2 class="text-xl font-bold text-gray-800 mb-4">
                                    Matte Finish, Metallized Material
                                </h2>
                                <hr class="border-t border-gray-300 mb-4" />
                                <p class="text-gray-600">
                                    Pouches have a metallized interior and a matte exterior. The metallized material
                                    provides a barrier for oxygen and moisture.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex flex-col md:flex-row bg-white rounded-2xl shadow-lg overflow-hidden">
                            <!-- Image -->
                            <div class="md:w-[40%]">
                                <img src="{{ asset('frontend/pouch-photo/7d7654fdb5cc4f779c08cf10c29fd715.webp') }}"
                                    alt="Pouch Image" class="w-full  object-cover" />
                            </div>

                            <!-- Content -->
                            <div class="md:w-[60%] p-6 flex flex-col justify-center">
                                <h2 class="text-xl font-bold text-gray-800 mb-4">
                                    Matte Finish, Metallized Material
                                </h2>
                                <hr class="border-t border-gray-300 mb-4" />
                                <p class="text-gray-600">
                                    Pouches have a metallized interior and a matte exterior. The metallized material
                                    provides a barrier for oxygen and moisture.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex flex-col md:flex-row bg-white rounded-2xl shadow-lg overflow-hidden">
                            <!-- Image -->
                            <div class="md:w-[40%]">
                                <img src="{{ asset('frontend/pouch-photo/7d7654fdb5cc4f779c08cf10c29fd715.webp') }}"
                                    alt="Pouch Image" class="w-full  object-cover" />
                            </div>

                            <!-- Content -->
                            <div class="md:w-[60%] p-6 flex flex-col justify-center">
                                <h2 class="text-xl font-bold text-gray-800 mb-4">
                                    Matte Finish, Metallized Material
                                </h2>
                                <hr class="border-t border-gray-300 mb-4" />
                                <p class="text-gray-600">
                                    Pouches have a metallized interior and a matte exterior. The metallized material
                                    provides a barrier for oxygen and moisture.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex flex-col md:flex-row bg-white rounded-2xl shadow-lg overflow-hidden">
                            <!-- Image -->
                            <div class="md:w-[40%]">
                                <img src="{{ asset('frontend/pouch-photo/7d7654fdb5cc4f779c08cf10c29fd715.webp') }}"
                                    alt="Pouch Image" class="w-full  object-cover" />
                            </div>

                            <!-- Content -->
                            <div class="md:w-[60%] p-6 flex flex-col justify-center">
                                <h2 class="text-xl font-bold text-gray-800 mb-4">
                                    Matte Finish, Metallized Material
                                </h2>
                                <hr class="border-t border-gray-300 mb-4" />
                                <p class="text-gray-600">
                                    Pouches have a metallized interior and a matte exterior. The metallized material
                                    provides a barrier for oxygen and moisture.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex flex-col md:flex-row bg-white rounded-2xl shadow-lg overflow-hidden">
                            <!-- Image -->
                            <div class="md:w-[40%]">
                                <img src="{{ asset('frontend/pouch-photo/7d7654fdb5cc4f779c08cf10c29fd715.webp') }}"
                                    alt="Pouch Image" class="w-full  object-cover" />
                            </div>

                            <!-- Content -->
                            <div class="md:w-[60%] p-6 flex flex-col justify-center">
                                <h2 class="text-xl font-bold text-gray-800 mb-4">
                                    Matte Finish, Metallized Material
                                </h2>
                                <hr class="border-t border-gray-300 mb-4" />
                                <p class="text-gray-600">
                                    Pouches have a metallized interior and a matte exterior. The metallized material
                                    provides a barrier for oxygen and moisture.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex flex-col md:flex-row bg-white rounded-2xl shadow-lg overflow-hidden">
                            <!-- Image -->
                            <div class="md:w-[40%]">
                                <img src="{{ asset('frontend/pouch-photo/7d7654fdb5cc4f779c08cf10c29fd715.webp') }}"
                                    alt="Pouch Image" class="w-full  object-cover" />
                            </div>

                            <!-- Content -->
                            <div class="md:w-[60%] p-6 flex flex-col justify-center">
                                <h2 class="text-xl font-bold text-gray-800 mb-4">
                                    Matte Finish, Metallized Material
                                </h2>
                                <hr class="border-t border-gray-300 mb-4" />
                                <p class="text-gray-600">
                                    Pouches have a metallized interior and a matte exterior. The metallized material
                                    provides a barrier for oxygen and moisture.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        {{-- Pouches to Life --}}

        <section>
            <div>
                <div>
                    <h2 class="text-4xl mt-16 font-bold text-center">How We Bring Your Pouches to Life</h2>
                </div>
                <div class="grid gap-4 grid-cols-4">
                    <div class="mt-10">
                        <div class="card main_border">
                            <figure class="flex justify-center">
                                <img class="w-32" src="{{ asset('frontend/pouch-photo/info-product-order.svg') }}"
                                    alt="Shoes" />
                            </figure>
                            <div class="card-body text-center">
                                <h2 class="card-title justify-center">Order Your Custom Pouches</h2>
                                <p>Upload your own design or use our downloadable templates for easy designing and ordering
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-10">
                        <div class="card main_border">
                            <figure>
                                <img src="{{ asset('frontend/pouch-photo/info-product-order.svg') }}" alt="Shoes" />
                            </figure>
                            <div class="card-body">
                                <h2 class="card-title">Order Your Custom Pouches</h2>
                                <p>Upload your own design or use our downloadable templates for easy designing and ordering
                                </p>
                                <div class="card-actions justify-end">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10">
                        <div class="card main_border">
                            <figure>
                                <img src="{{ asset('frontend/pouch-photo/info-product-order.svg') }}" alt="Shoes" />
                            </figure>
                            <div class="card-body">
                                <h2 class="card-title">Order Your Custom Pouches</h2>
                                <p>Upload your own design or use our downloadable templates for easy designing and ordering
                                </p>
                                <div class="card-actions justify-end">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10">
                        <div class="card main_border">
                            <figure>
                                <img src="{{ asset('frontend/pouch-photo/info-product-order.svg') }}" alt="Shoes" />
                            </figure>
                            <div class="card-body">
                                <h2 class="card-title">Order Your Custom Pouches</h2>
                                <p>Upload your own design or use our downloadable templates for easy designing and ordering
                                </p>
                                <div class="card-actions justify-end">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Add to cart section --}}
        <section>
            <div
                class="grid gap-4 grid-cols-2 mt-16 bg-gradient-to-tr text-light-gray to-blue-500 from-green-400 relative">
                <div class="p-16">
                    <p class="text-heading-6">Try Before You Buy</p>
                    <h2 class="text-heading-3 py-4 font-Montserrat">Get a hands-on look at our stand-up pouches</h2>
                    <p class="text-heading-6 pb-16 font">Order a Pouch Sample Pack to explore materials, print quality, and
                        durability—so you can package with
                        confidence.</p>
                    <button class="add_to_cart-btn uppercase font-heading-6">Add to cart <span
                            class="font-bold ps-3">$1.00</span></button>
                </div>
                <div>
                    <img class="img-fluid object-cover" src="{{ asset('frontend/pouch-photo/samples-pouch.webp') }}"
                        alt="Try Before You Buy">
                </div>
                <div class="absolute bottom-0 right-0 z-10">
                    <img src="{{ asset('frontend/pouch-photo/accent-ring-circle-dots.png') }}" alt="">
                </div>
            </div>
        </section>

        {{-- Customers Trust section --}}
        <section class="mt-10">
            <div class="py-8 grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Image Grid Section -->
                {{-- <div class="grid grid-cols-2 gap-4 mb-8">
                    <div>
                        <img src="{{ asset('frontend/pouch-photo/140fb5e1751c4b20a1ff8d788753c111-thumb.webp') }}"
                            alt="Printing label rolls" class="w-full h-auto rounded">
                    </div>
                    <div>
                        <img src="{{ asset('frontend/pouch-photo/140fb5e1751c4b20a1ff8d788753c111-thumb.webp') }}"
                            alt="Green label printing" class="w-full h-auto rounded">
                    </div>
                    <div>
                        <img src="{{ asset('frontend/pouch-photo/140fb5e1751c4b20a1ff8d788753c111-thumb.webp') }}"
                            alt="Packaging materials" class="w-full h-auto rounded">
                    </div>
                    <div>
                        <img src="{{ asset('frontend/pouch-photo/140fb5e1751c4b20a1ff8d788753c111-thumb.webp') }}"
                            alt="Box packaging" class="w-full h-auto rounded">
                    </div>
                </div> --}}
                <div>
                  <img class="img-fluid h-auto rounded" src="{{ asset('frontend/pouch-photo/trusted-printing.jpg') }}" alt="">
                </div>

                <!-- Trust Section -->
                <div class="flex flex-col md:flex-row gap-8 mb-12 p-2">
                    <div class="md:w-100">
                        <h2 class="text-heading-2 font-semibold font-Montserrat text-dark mb-4">Thousands of Customers Trust Us With Their
                            Printing</h2>
                        <p class="text-dark mb-6">With quality products, simple ordering, and dependable support, we
                            exceed expectations. Reasons why customers stick with us:</p>

                        <div class="space-y-4">
                            <div class="border-b pb-3">
                                <p class="text-dark">Easy-to-use website</p>
                            </div>
                            <div class="border-b pb-3">
                                <p class="text-dark">Fast turnaround & free shipping</p>
                            </div>
                            <div class="border-b pb-3">
                                <p class="text-dark">Hands-on customer service ready to help</p>
                            </div>
                            <div class="border-b pb-3">
                                <p class="text-dark">Free shipping on all orders</p>
                            </div>
                            <div class="border-b pb-3">
                                <p class="text-dark">Quality printing and durable materials</p>
                            </div>
                            <div class="border-b pb-3">
                                <p class="text-dark">Affordable pricing</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Reviews Section -->
            <div class="flex flex-col md:flex-row gap-8 mb-12 p-2">
                <div class="md:w-1/2">
                    <h2 class="text-heading-5 font-medium text-dark mb-6">Discover What Our Customers Have to Say</h2>

                    <div class="flex items-center mb-8">
                        <div class="flex flex-col items-center justify-center border p-4 text-center mr-8 w-32">
                            <div class="text-4xl font-bold">5</div>
                            <div class="star-rating flex py-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="text-heading-6 text-dark">2 reviews</div>
                        </div>

                        <div class="flex-1">
                            <div class="mb-2">
                                <div class="flex items-center">
                                    <span class="w-12 text-heading-6 text-gray">5 star</span>
                                    <div class="flex-1 h-4 bg-[#00000028] rounded-full overflow-hidden">
                                        <div class="bg-orange h-full" style="width: 100%"></div>
                                    </div>
                                    <span class="w-16 text-right text-heading-6 text-gray">100.0%</span>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="flex items-center">
                                    <span class="w-12 text-heading-6 text-gray">4 star</span>
                                    <div class="flex-1 h-4 bg-gray-200 rounded-full overflow-hidden">
                                        <div class="bg-[#00000028] h-full" style="width: 100%"></div>
                                    </div>
                                    <span class="w-16 text-right text-heading-6 text-gray">0.0%</span>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="flex items-center">
                                    <span class="w-12 text-heading-6 text-gray">3 star</span>
                                    <div class="flex-1 h-4 bg-gray-200 rounded-full overflow-hidden">
                                        <div class="bg-[#00000028] h-full" style="width: 100%"></div>
                                    </div>
                                    <span class="w-16 text-right text-heading-6 text-gray">0.0%</span>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="flex items-center">
                                    <span class="w-12 text-heading-6 text-gray">2 star</span>
                                    <div class="flex-1 h-4 bg-gray-200 rounded-full overflow-hidden">
                                        <div class="bg-[#00000028] h-full" style="width: 100%"></div>
                                    </div>
                                    <span class="w-16 text-right text-heading-6 text-gray">0.0%</span>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="flex items-center">
                                    <span class="w-12 text-heading-6 text-gray">1 star</span>
                                    <div class="flex-1 h-4 bg-gray-200 rounded-full overflow-hidden">
                                        <div class="bg-[#00000028] h-full" style="width: 100%"></div>
                                    </div>
                                    <span class="w-16 text-right text-heading-6 text-gray">0.0%</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="text-heading-5 font-medium text-dark mb-4">The top 5 things our customers say about us:</h3>

                    <div class="space-y-6">
                        <div class="flex">
                            <div
                                class="bg-amber text-amber-light font-bold rounded-full w-8 h-8 flex items-center justify-center mr-4">
                                1</div>
                            <div>
                                <h4 class="font-medium text-dark">High quality products</h4>
                                <p class="text-dark">Clear printing, vibrant colors and sturdy materials</p>
                            </div>
                        </div>

                        <div class="flex">
                            <div
                                class="bg-amber text-amber-light font-bold rounded-full w-8 h-8 flex items-center justify-center mr-4">
                                2</div>
                            <div>
                                <h4 class="font-medium text-dark">Fast and reliable</h4>
                                <p class="text-dark">Quick turnaround and often delivered earlier than expected</p>
                            </div>
                        </div>

                        <div class="flex">
                            <div
                                class="bg-amber text-amber-light font-bold rounded-full w-8 h-8 flex items-center justify-center mr-4">
                                3</div>
                            <div>
                                <h4 class="font-medium text-dark">Excellent customer service</h4>
                                <p class="text-dark">Helpful and accommodating staff throughout the entire experience
                                </p>
                            </div>
                        </div>

                        <div class="flex">
                            <div
                                class="bg-amber text-amber-light font-bold rounded-full w-8 h-8 flex items-center justify-center mr-4">
                                4</div>
                            <div>
                                <h4 class="font-medium text-dark">Easy to make changes</h4>
                                <p class="text-dark">Review and revise orders in seconds with digital proofs</p>
                            </div>
                        </div>

                        <div class="flex">
                            <div
                                class="bg-amber text-amber-light font-bold rounded-full w-8 h-8 flex items-center justify-center mr-4">
                                5</div>
                            <div>
                                <h4 class="font-medium text-dark">Affordable pricing</h4>
                                <p class="text-dark">Great value without compromising quality</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="md:w-1/2">
                    <h2 class="text-heading-5 font-semibold text-dark mb-6">The most recent reviews</h2>

                    <div class="border rounded-lg p-6 mb-4 text-center">
                        <div class="star-rating mb-2">
                            <span class="border border rounded-full p-2 px-4">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                        </div>
                        <p class="mb-4">Angie C.</p>
                        <p class="text-dark mb-2">January, 2025</p>
                    </div>

                    <div class="border rounded-lg p-6 mb-4 text-center">
                        <div class="star-rating mb-2">
                          <span class="border border rounded-full p-2 px-4">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </span>
                        </div>
                        <p class="mb-2 text-left">Great product, no issues :)</p>
                        <p class="mb-4">David M.</p>
                        <p class="text-dark mb-2">November, 2024</p>
                    </div>

                    <div class="text-center mt-6">
                        <button
                            class="border border-primary text-primary px-4 py-2 rounded-md hover:bg-primary hover:text-white transition">See
                            all reviews</button>
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
