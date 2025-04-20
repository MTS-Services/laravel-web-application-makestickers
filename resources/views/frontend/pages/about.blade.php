@extends('frontend.layouts.app', ['page_slug' => 'about'])
@section('title', 'About Page')

@push('styles')
    <style>
        .make-sticker-review:after {
            content: "";
            position: absolute;
            top: 0;
            left: -10px;
            width: 2px;
            height: 100%;
            background: rgba(128, 128, 128, 0.705);
            z-index: 1;
            border-radius: 50px;
        }

        .make-sticker-review::before {
            content: "";
            position: absolute;
            top: 0;
            right: -30px;
            width: 2px;
            height: 100%;
            background: rgba(128, 128, 128, 0.705);
            z-index: 1;
            border-radius: 50px;
        }
    </style>
@endpush

@section('content')
    <section>
        <div class="container mx-auto p-4">
            <div class="grid gap-3 grid-cols-1 lg:grid-cols-2 items-center justify-center ">
                <div class="p-4 sm:order-2 lg:order-1">
                    <h1 class="text-heading-2 md:text-heading-1 text-dark font-semibold font-Montserrat mb-5">Hi, We Are MakeStickers</h1>
                    <div class="me-[50px]">
                        <p class="text-heading-5 text-dark mb-3">We're enthusiastic about making custom printing simple,
                            affordable, and fast. Our expertise with technology enables us to make ordering simple, and allows
                            us to process orders much more quickly and efficiently than other companies.</p>
                        <p class="text-heading-5 text-dark">Our dedication to offering live support from knowledgeable customer
                            service representatives ensures that our customers will get the help they need.</p>
                    </div>
                </div>
                <div class="flex justify-center items-center p-4 sm:order-1 lg:order-2">
                    <img src="{{ asset('frontend/about-us/about-header.webp') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    {{-- Midwest Printing --}}
    <section>
        <div class="container mx-auto p-4 mt-5">
            <h2 class="text-heading-3 md:text-heading-2 text-dark font-semibold font-Montserrat mb-10 text-center">Midwest
                Printing, Nationwide Support</h2>
            <div class="grid gap-3 grid-cols-1 lg:grid-cols-3 items-center justify-center">
                <div class="card text-center p-2">
                    <img class="img-fluid  mx-auto" src="{{ asset('frontend/about-us/icon-about-hands-grow.svg') }}"
                        alt="Independently Owned">
                    <div class="card-body p-2">
                        <h3 class="text-heading-5 font-semibold font-Montserrat mb-2">Independently Owned</h3>
                        <p class="text-heading-5 text-gray text-center">We have control over our business decisions, which
                            fosters a unique company culture and personal touch in customer service and quality</p>
                    </div>
                </div>
                <div class="card text-center p-2">
                    <img class="img-fluid  mx-auto" src="{{ asset('frontend/about-us/icon-about-illinois-facillity.svg') }}"
                        alt="Independently Owned">
                    <div class="card-body p-2">
                        <h3 class="text-heading-5 font-semibold font-Montserrat mb-2">Independently Owned</h3>
                        <p class="text-heading-5 text-gray text-center">We have control over our business decisions, which
                            fosters a unique company culture and personal touch in customer service and quality</p>
                    </div>
                </div>
                <div class="card text-center p-2">
                    <img class="img-fluid  mx-auto" src="{{ asset('frontend/about-us/icon-about-coast-to-coast.svg') }}"
                        alt="Independently Owned">
                    <div class="card-body p-2">
                        <h3 class="text-heading-5 font-semibold font-Montserrat mb-2">Independently Owned</h3>
                        <p class="text-heading-5 text-gray text-center">We have control over our business decisions, which
                            fosters a unique company culture and personal touch in customer service and quality</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Custom stickers --}}
    <section>
        <div class="container mx-auto p-4 mt-5">
            <div class="grid gap-5 grid-cols-1 lg:grid-cols-2 items-center justify-between">
                <div class=" p-4 flex flex-col justify-start">
                    <h2 class="text-heading-4 md:text-heading-3 text-dark font-semibold font-Montserrat mb-5">The
                        MakeStickers Approach</h2>
                    <h3 class="text-heading-6 md:text-heading-5 text-gray font-semibold font-Montserrat mb-5">Custom
                        stickers and labels made easy.</h3>
                    <div class="w-[100%] lg:w-[80%]">
                        <p class="text-gray text-heading-6 mt-2">Our mission is to take the pain out of sticker printing and
                            make it simple, fast, and affordable
                            without compromising quality.</p>
                        <p class="text-gray text-heading-6 my-3">We are here to go above and beyond, because we care about
                            our customers and they're the reason we
                            continue to be in business. MakeStickers is committed to customer satisfaction and exceeding
                            customers expectations.</p>
                        <svg width="380" height="36" viewBox="0 0 351 33" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="mt-3 mb-4 mb-lg-0 d-none d-lg-block">
                            <path d="M3 3H207.5L38 14H348.5" stroke="#A4D233" stroke-width="5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path d="M111 30.5H274.5" stroke="#A4D233" stroke-width="5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </svg>
                    </div>
                </div>
                <div class=" flex justify-center items-center">
                    <iframe width="760" height="415"
                        src="https://www.youtube.com/embed/r0jbPu-o7iw?si=6CT6BLcL31wIm5e9" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    {{-- Our Customers --}}
    <section class="mt-[50px]">
        <div class="container mx-auto p-4 mt-5">
            <div class="grid gap-3 grid-cols-1 lg:grid-cols-2 items-center justify-center">
                <div class="flex flex-col justify-start p-2">
                    <h2 class="text-heading-4 md:text-heading-3 text-dark font-semibold font-Montserrat mb-5">Our
                        Customers'
                        Happiness Is Our Priority</h2>
                    <div class="w-[80%]">
                        <p class="text-gray text-heading-6">Whether it's catching a spelling mistake or improving a color,
                            our
                            design, production, and customer support teams go the extra mile to ensure your final product is
                            perfect. We believe our success is built on your happiness, and we want you to proudly showcase
                            our
                            stickers and labels on your products.</p>
                        <p class="text-gray text-heading-6 my-3">At MakeStickers, customer happiness and satisfaction are
                            our top
                            priorities. We don't just say it, we live it every day. Our team is dedicated to delivering the
                            highest quality products and exceptional experiences from start to finish.</p>

                        <div class="card bg-info text-light mt-4 mb-3">
                            <div class="card-body text-white position-relative">
                                <h3 class="text-heading-6 font-bold">Meet Cultivated Coffee Co.</h3>
                                <p class="text-heading-6 font-semibold"><em>"MakeStickers has provided us with EXCEPTIONAL
                                        customer service as a
                                        customer by providing rapid proofs and easy contact when we need extra service
                                        needs."</em></p>
                                <span class="absolute d-none top-0 right-0" style="top: .35rem; right: -5rem">
                                    <svg width="245" height="34" viewBox="0 0 277 45" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2 40C10.0043 33.378 27.8742 19.3419 49.9458 21.6768C78.1147 24.6568 77.5791 40 94.2034 40C110.828 40 146.298 6.13096 128.999 2.25485C111.7 -1.62126 113.384 40 154.397 40C194.111 40 200.086 20.3281 225.974 17.6509C249.987 15.1676 265.688 31.5571 274 31.5571"
                                            stroke="#F7A800" stroke-width="3" stroke-linecap="round"
                                            stroke-linejoin="round">
                                        </path>
                                        <path d="M258 11.5L275 32.5L255 43" stroke="#F7A800" stroke-width="3"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-4">
                    <img src="{{ asset('frontend/about-us/about-customer-cultivated-coffee.webp') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    {{-- Reviews section --}}
    <section class="mt-[70px]">
        <div class="container mx-auto p-4">
            <hr class="border border-[#44444456] border-t-0">
            <div class="grid gap-3 grid-cols-1 lg:grid-cols-3 items-center justify-between p-3">
                <div class="google-review flex flex-col lg:flex-row lg:gap-3 gap-5 justify-center items-center text-center">
                    <div>
                        <img src="{{ asset('frontend/about-us/logo-google.svg') }}" alt="">
                    </div>
                    <div>
                        <h2
                            class="text-heading-6 md:text-heading-5 font-semibold text-dark font-semibold font-Montserrat mb-2">
                            Google Customer Reviews</h2>
                        <div class="flex justify-start lg:justify-center items-center">
                            <span class="text-heading-2 font-semibold me-3">4.9</span>
                            <span class="text-orange">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </span>
                        </div>
                        <div>
                            <p class="text-gray text-heading-6">100<span class="text-heading-6 text-gray">+ reviews</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="make-sticker-review flex gap-3 justify-center items-center relative">
                    <div>
                        <img src="{{ asset('frontend/about-us/logo-makestickers-imageonly.svg') }}" alt="">
                    </div>
                    <div>
                        <h2
                            class="text-heading-6 md:text-heading-5 font-semibold text-dark font-semibold font-Montserrat mb-2">
                            MakeStickers Product Reviews
                        </h2>
                        <div class="flex justify-start items-center">
                            <span class="text-heading-2 font-semibold me-3">4.9</span>
                            <span class="text-orange">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </span>
                        </div>
                        <div>
                            <p class="text-gray text-heading-6">100<span class="text-heading-6 text-gray">+ reviews</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="facebook-review flex gap-3 justify-center items-center">
                    <div>
                        <img src="{{ asset('frontend/about-us/logo-facebook.svg') }}" alt="facebook" width="120">
                    </div>
                    <div>
                        <h2
                            class="text-heading-6 md:text-heading-5 font-semibold text-dark font-semibold font-Montserrat mb-2">
                            Facebook Reviews</h2>
                        <div class="flex justify-start items-center">
                            <span class="text-heading-2 font-semibold me-3">98%</span>
                            <span class="text-heading-5 font-semibold">
                                Recommended</span>
                        </div>
                        <div>
                            <p class="text-gray text-heading-6">100<span class="text-heading-6 text-gray">+ reviews</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="border border-[#44444456] border-t-0">
        </div>
    </section>
    {{-- Printing Company --}}
    <section class="mt-[50px]">
        <div class="container mx-auto p-4">
            <div class="grid gap-5 grid-cols-1 lg:grid-cols-2 justify-center py-10">
                <div class="flex justify-center items-center p-2">
                    <img class="img-fluid" src="{{ asset('frontend/about-us/about-technology.webp') }}" alt="">
                </div>
                <div class="p-2 px-[30px]">
                    <h2 class="text-heading-4 md:text-heading-3 text-dark font-semibold font-Montserrat mb-4">A Printing
                        Company Driven By Technology</h2>
                    <p class="text-heading-6 text-gray my-3">To deliver exceptional quality, speed, and affordability to
                        our
                        customers, we prioritize the advancement and utilization of the latest printing technology. Our
                        journey to success began with innovative technology that enabled real-time template editing for
                        customers, and we have continued to build on this foundation by expanding our technological
                        capabilities.</p>
                    <p class="text-heading-6 text-gray">Our cutting-edge presses and high-precision lasers ensure
                        high-resolution outputs and accurate cuts, while our custom tracking system guarantees rigorous
                        quality control and provides customers with timely updates. The seamless communication between our
                        tools enhances production speed, allowing us to offer a wide range of quantities at competitive
                        prices.</p>
                    <div class="flex justify-end items-center mt-5">
                        <span>
                            <svg width="108" height="59" viewBox="0 0 108 59" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.04404 31.4282C1.34036 46.8448 9.20112 51.7319 16.1634 51.7317C29.5334 51.7312 38.0062 18.0268 26.668 18.0269C12.4904 18.0269 29.4985 55.5141 48.3763 51.7319C67.2541 47.9497 64.7707 0.503371 52.8534 2.03635C35.6223 4.25287 54.983 61.2144 79.6476 46.3191C93.8253 37.757 91.9545 14.5803 88.6706 7.24805"
                                    stroke="#A6D034" stroke-width="3" stroke-linecap="round"></path>
                                <path d="M82 55C87.8645 52.6182 100.409 44.3902 97.5942 29" stroke="#A6D034"
                                    stroke-width="3" stroke-linecap="round"></path>
                                <path d="M96 57C99.6504 55.2037 106.802 48.3952 105.926 40" stroke="#A6D034"
                                    stroke-width="3" stroke-linecap="round"></path>
                            </svg>
                        </span>
                    </div>

                </div>
            </div>
        </div>
    </section>
    {{-- Top Footer  --}}
    <div class="container mx-auto p-4">
        <div class="flex gap-5 lg:gap-0 flex-col lg:flex-row justify-center items-center py-3 my-5">
            <h2 class="text-heading-4 md:text-heading-3 text-dark font-semibold me-4">Get to know us more on social media
            </h2>
            <p class="text-heading-4 md:text-heading-3 text-gray me-4">@MakeStickers</p>
            <div class="flex items-center justify-between text-heading-3">
                <a href="#" class="block px-1" target="_blank">
                    <span><i class="fa-brands fa-facebook"></i></span>
                </a>
                <a href="#" class="block px-1" target="_blank">
                    <span><i class="fa-brands fa-twitter"></i></span>
                </a>
                <a href="#" class="block px-1" target="_blank">
                    <span><i class="fa-brands fa-instagram"></i></span>
                </a>
                <a href="#" class="block px-1" target="_blank">
                    <span><i class="fa-brands fa-linkedin"></i></span>
                </a>
                <a href="#" class="block px-1" target="_blank">
                    <span></span>
                </a>
                <a href="#" class="block px-1" target="_blank">
                    <span><i class="fa-brands fa-tiktok"></i></span>
                </a>
                <a href="#" class="block px-1" target="_blank">
                    <span><i class="fa-brands fa-threads"></i></span>
                </a>
                <a href="#" class="block px-1" target="_blank">
                    <span><i class="fa-brands fa-youtube"></i></span>
                </a>
                <a href="#" class="block px-1" target="_blank">
                    <span><i class="fa-brands fa-pinterest"></i></span>
                </a>
            </div>
        </div>
        <hr class="border border-[#44444456] border-t-0">

        <div class="text-center my-10">
            <h2 class="text-heading-3 md:text-heading-2 text-dark font-semibold font-Montserrat mb-5">Join the MakeStickers Team</h2>
            <p class="text-heading-6 text-gray mx-5 lg:mx-[350px]">We're a technology-focused printing company that's growing quickly and (almost) always looking for good people to join our team.</p>
            <button class="btn-primary mt-5 text-white capitalize">View Open Positions</button>
        </div>
        <div class="flex justify-center items-center my-10">
            <img src="{{ asset('frontend/about-us/about-sign.webp') }}" alt="">
        </div>
    </div>
@endsection
@push('scripts')
@endpush
