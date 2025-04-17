@extends('frontend.layouts.app', ['title' => 'Home'])

@push('styles')
    <style>

    </style>
@endpush

@section('content')
    <section>
        <div class="relative">
            <div class="image">
                <img src="{{ asset('Frontend/images/home-circles-over.webp') }}" alt="Home page bg">
            </div>
            <div class="container">
                <div class="text text-center absolute top-1/2 left-1/4 transform -translate-y-1/2">
                    <img src="{{ asset('Frontend/images/makeitstick.png') }}" alt="Make it stick" class="mx-auto">
                    <h3 class="text-heading-5 text-white uppercase py-4">Custom stickers made easy</h3>
                    <a href="#" class="btn-secondary capitalize inline-flex items-center px-12 rounded-none"><i
                            class="fa-solid fa-pencil pr-1"></i>Make a Sticker</a>
                </div>
            </div>
        </div>
    </section <section>
    <div class="container bg-white border  py-16">
        {{-- cards --}}
        <div class="heading text-center">
            <h6 class="text-heading-6 text-tertiary uppercase font-bold">Our Custom products</h6>
            <h2 class="text-heading-2 font-bold uppercase">The Goods</h2>
            <span class="w-24 h-0.5 bg-tertiary block mx-auto mb-5 mt-3"></span>
        </div>
        <div class="grid grid-flow-col gap-4">
            <div
                class="card-1 text-center p-2  transform transition duration-300 hover:text-white hover:bg-primary-hover/80 rounded-xl ">
                <img class="w-full mx-auto" src="{{ asset('Frontend/images/custom-stickers-2.jpg') }}" alt="">
                <h5 class="text-heading-5 pt-1 uppercase font-bold ">Coustoms stickers</h5>
                <h6 class="text-heading-6 pb-2">Individually cut stickers</h6>
            </div>
            <div
                class="card-1 text-center p-2  transform transition duration-300 hover:text-white hover:bg-primary rounded-xl ">
                <img class="w-full mx-auto" src="{{ asset('Frontend/images/custom-stickers-2.jpg') }}" alt="">
                <h5 class="text-heading-5 pt-1 uppercase font-bold ">Coustoms labels</h5>
                <h6 class="text-heading-6 pb-2">Labals on a roll</h6>
            </div>
            <div
                class="card-1 text-center p-2  transform transition duration-300 hover:text-white hover:bg-primary rounded-xl ">
                <img class="w-full mx-auto" src="{{ asset('Frontend/images/custom-stickers-2.jpg') }}" alt="">
                <h5 class="text-heading-5 pt-1 uppercase font-bold ">Coustoms pouches</h5>
                <h6 class="text-heading-6 pb-2">Stand-up zipper pouches</h6>
            </div>
        </div>
        {{-- middel point --}}
        <div class="middel_point">
            <div class="middel_header text-center">
                <h6 class="uppercase text-heading-6 text-primary font-bold">MakeStickers Advantages</h6>
                <h2 class="text-heading-2 font-bold uppercase">Why We're Special</h2>
                <span class="w-24 h-0.5 bg-primary block mx-auto mb-5 mt-3"></span>
            </div>
            <div class="flex flex-wrap items-start justify-center px-6 py-10 bg-white">
                <!-- Left Column -->
                <div class="space-y-10 max-w-xl">
                  <!-- Feature 1 -->
                  <div class="flex items-start ps-7">
                    <div class="text-tertiary text-3xl">
                      <i class="fas fa-clock pr-4"></i>
                    </div>
                    <div>
                      <h3 class="text-tertiary font-bold text-heading-3 uppercase">On-Demand Printing</h3>
                      <p class="text-gray-600 py-3  text-sm">
                        We've created a unique process that lets us print any quantity on the fly with little-to-no setup.
                      </p>
                    </div>
                  </div>
              
                  <!-- Feature 2 -->
                  <div class="flex items-start ps-7">
                    <div class="text-secondary text-3xl">
                      <i class="fas fa-crop-alt pr-4"></i>
                    </div>
                    <div>
                      <h3 class="text-secondary font-bold text-lg uppercase">No Designer Needed</h3>
                      <p class="text-gray-600 py-3  text-sm">
                        Our easy-to-use templates don't require a degree in Graphic Design to create something truly custom.
                      </p>
                    </div>
                  </div>
              
                  <!-- Feature 3 -->
                  <div class="flex items-start ps-7">
                    <div class="text-primary text-3xl">
                      <i class="fas fa-comment-alt pr-4"></i>
                    </div>
                    <div>
                      <h3 class="text-primary font-bold text-lg uppercase">Reassuring at Every Step</h3>
                      <p class="text-gray-600 py-3  text-sm">
                        You know what you're looking for, and we're here to help make sure you get it.
                      </p>
                    </div>
                  </div>
                </div>
              
                <!-- Right Column - Image -->
                <div class="mt-10 md:mt-0 ms-14 ">
                  <img src="{{asset('Frontend/images/stickers-two-stacks-2.png')}}" alt="Stickers" class="max-w-xs mx-auto md:mx-0">
                </div>
              </div>
              
        </div>
    </div>
    </section>
@endsection

@push('scripts')
@endpush
