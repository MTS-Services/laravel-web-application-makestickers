@extends('frontend.layouts.app', ['page_slug' => 'designs'])

@section('title', 'Designs')

@section('content')
    {{-- hero section --}}
    <section class="header text-center py-5 border-t-4 border-secondary md:pt-12 pt-5 md:pb-6 pb-2 bg-gray/10">
        <h4 class="md:text-font-24px text-font-18px  font-bold text-secondary uppercase">Designs</h4>
        <h2 class="md:text-font-32px text-font-24px md:py-3 text-gray font-bold uppercase">Customizable Designs by Category
        </h2>
        <span class="w-24 h-0.5 bg-secondary block mx-auto mb-5 mt-3"></span>
    </section>
    <section>
        <div class="search_bar container  lg:py-5">
            {{-- buttons --}}
            {{-- buttons --}}
            <div class="grid gap-4 py-6 md:pr-4   navbar sm:grid-cols-1 lg:grid-cols-3 items-center ">
                {{-- Buttons (full width on phone and tablet, 1/3 width on laptop) --}}
                <div class="sm:flex flex-col hidden  gap-2 md:flex-row lg:col-span-1">
                    <a href="#"
                        class="btn btn-outline border-primary text-primary bg-transparent hover:bg-primary hover:text-white">
                        <i class="fa-solid fa-heart"></i>
                        <span class="ml-2">Browse Most Popular Stickers »</span>
                    </a>
                    <a href="#"
                        class="btn btn-outline border-primary text-primary bg-transparent hover:bg-primary hover:text-white">
                        <i class="fa-solid fa-star"></i>
                        <span class="ml-2">Browse Most Popular Stickers »</span>
                    </a>
                </div>

                {{-- Search Bar (full width on phone and tablet, right aligned on laptop) --}}
                <div class="flex w-full  md:justify-start lg:justify-end lg:col-span-2 md:pt-5 lg:pt-0">
                    <input type="text" placeholder="What are you searching for?"
                        class="input input-bordered text-font-16px focus:ring-2 rounded-r-none w-full   lg:w-80" />
                    <a href="#" class="btn btn-outline rounded-l-none btn-primary  sm:w-full md:w-auto">Search</a>
                </div>
                
            </div>


            {{-- all cards --}}
            <div class="flex flex-wrap gap-4 pt-6 ">
                <!-- Card 1 -->
                <div
                    class="card py-1 bg-base-100 w-full sm:w-[48%] lg:w-[32%] hover:bg-primary transition-all duration-300 ease-in-out border border-zinc-300 shadow-sm">
                    <div class="card-body text-center group/new p-2">
                        <h2 class="text-font-18px font-bold px-4 text-gray group-hover/new:text-white">
                            Sticker Designs That Use Your Image
                        </h2>
                        <figure><img src="Frontend/images/design (1).png" alt="Design 1" /></figure>
                        <p class="text-font-16px text-gray group-hover/new:text-white">
                            Use your own photo, logo, or design by itself or within one of our designs
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div
                    class="card py-1 bg-base-100 w-full sm:w-[48%] lg:w-[32%] hover:bg-primary transition-all duration-300 ease-in-out border border-zinc-300 shadow-sm">
                    <div class="card-body text-center group/new p-2">
                        <h2 class="text-font-18px font-bold px-4 text-gray group-hover/new:text-white">
                            Custom Logo Stickers
                        </h2>
                        <figure><img src="Frontend/images/design (2).png" alt="Design 2" /></figure>
                        <p class="text-font-16px text-gray group-hover/new:text-white">
                            Turn your logo into stunning promotional stickers for your brand.
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div
                    class="card py-1 bg-base-100 w-full sm:w-[48%] lg:w-[32%] hover:bg-primary transition-all duration-300 ease-in-out border border-zinc-300 shadow-sm">
                    <div class="card-body text-center group/new p-2">
                        <h2 class="text-font-18px font-bold px-4 text-gray group-hover/new:text-white">
                            Upload Your Art
                        </h2>
                        <figure><img src="Frontend/images/design (3).png" alt="Design 3" /></figure>
                        <p class="text-font-16px text-gray group-hover/new:text-white">
                            Add your own artwork or illustration to create unique stickers.
                        </p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div
                    class="card py-1 bg-base-100 w-full sm:w-[48%] lg:w-[32%] hover:bg-primary transition-all duration-300 ease-in-out border border-zinc-300 shadow-sm">
                    <div class="card-body text-center group/new p-2">
                        <h2 class="text-font-18px font-bold px-4 text-gray group-hover/new:text-white">
                            Personal Photo Stickers
                        </h2>
                        <figure><img src="Frontend/images/design (4).png" alt="Design 4" /></figure>
                        <p class="text-font-16px text-gray group-hover/new:text-white">
                            Create stickers from family, pets or travel photos you love.
                        </p>
                    </div>
                </div>

                <!-- Card 5 -->
                <div
                    class="card py-1 bg-base-100 w-full sm:w-[48%] lg:w-[32%] hover:bg-primary transition-all duration-300 ease-in-out border border-zinc-300 shadow-sm">
                    <div class="card-body text-center group/new p-2">
                        <h2 class="text-font-18px font-bold px-4 text-gray group-hover/new:text-white">
                            Text-Based Stickers
                        </h2>
                        <figure><img src="Frontend/images/design (5).png" alt="Design 5" /></figure>
                        <p class="text-font-16px text-gray group-hover/new:text-white">
                            Use cool fonts and quotes to design stickers with text-only styles.
                        </p>
                    </div>
                </div>

                <!-- Card 6 -->
                <div
                    class="card py-1 bg-base-100 w-full sm:w-[48%] lg:w-[32%] hover:bg-primary transition-all duration-300 ease-in-out border border-zinc-300 shadow-sm">
                    <div class="card-body text-center group/new p-2">
                        <h2 class="text-font-18px font-bold px-4 text-gray group-hover/new:text-white">
                            Shape Cut Stickers
                        </h2>
                        <figure><img src="Frontend/images/design (6).png" alt="Design 6" /></figure>
                        <p class="text-font-16px text-gray group-hover/new:text-white">
                            Choose custom shapes like hearts, stars, or animals for fun designs.
                        </p>
                    </div>
                </div>

                <!-- Card 7 -->
                <div
                    class="card py-1 bg-base-100 w-full sm:w-[48%] lg:w-[32%] hover:bg-primary transition-all duration-300 ease-in-out border border-zinc-300 shadow-sm">
                    <div class="card-body text-center group/new p-2">
                        <h2 class="text-font-18px font-bold px-4 text-gray group-hover/new:text-white">
                            Transparent Background
                        </h2>
                        <figure><img src="Frontend/images/design (7).png" alt="Design 7" /></figure>
                        <p class="text-font-16px text-gray group-hover/new:text-white">
                            Stickers with transparent background for a clean, pro look.
                        </p>
                    </div>
                </div>

                <!-- Card 8 -->
                <div
                    class="card py-1 bg-base-100 w-full sm:w-[48%] lg:w-[32%] hover:bg-primary transition-all duration-300 ease-in-out border border-zinc-300 shadow-sm">
                    <div class="card-body text-center group/new p-2">
                        <h2 class="text-font-18px font-bold px-4 text-gray group-hover/new:text-white">
                            Holographic Stickers
                        </h2>
                        <figure><img src="Frontend/images/design (8).png" alt="Design 8" /></figure>
                        <p class="text-font-16px text-gray group-hover/new:text-white">
                            Add a shiny effect to make your designs pop with holographic style.
                        </p>
                    </div>
                </div>

                <!-- Card 9 -->
                <div
                    class="card mb-3 sm:mb-4 lg:mb-0 py-1 bg-base-100 w-full sm:w-[48%] lg:w-[32%] hover:bg-primary transition-all duration-300 ease-in-out border border-zinc-300 shadow-sm">
                    <div class="card-body text-center group/new p-2">
                        <h2 class="text-font-18px font-bold px-4 text-gray group-hover/new:text-white">
                            Sticker Packs
                        </h2>
                        <figure><img src="Frontend/images/design (9).png" alt="Design 9" /></figure>
                        <p class="text-font-16px text-gray group-hover/new:text-white">
                            Bundle multiple sticker types into one awesome pack.
                        </p>
                    </div>
                </div>
            </div>


    </section>
@endsection
