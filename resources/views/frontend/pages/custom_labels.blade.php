@extends('frontend.layouts.app', ['page_slug' => 'custom-label'])
@section('title', 'Custom Label')

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
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 my-[50px]">
                @foreach ($custom_labels as  $custom_label)
                <div class="text-center p-2 bg-light-gray rounded-md">
                    <div class="">
                        <img class="w-full mx-auto" src="{{ storage_url($custom_label->image) }}"
                            alt="" style="width: 300px">
                    </div>
                    <div class="p-3">
                        <h4 class="text-font-16px font-bold uppercase text-dark">{{ $custom_label->title }}</h4>
                        <p class="text-font-16px text-gray p-2">{{ $custom_label->description }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        {{-- The MakeStickers Way --}}
        <div class="container mx-auto">
            <div class="text-center max-w-xl mx-auto mt-[70px]">
                <h2 class="text-font-00px md:text-font-24px font-bold text-dark mb-4">The Fastest and Easiest Way to Print
                    Custom Labels</h2>
                <p class="text-gray text-font-16px">We make it easy for you to get the quality labels you need for your
                    products
                    and packaging. Free 2-day shipping is included with every label order. We'll send you free digital
                    proofs so
                    you can see exactly how your labels will look, and our customer support team is here to answer any
                    questions
                    that come up.</p>

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

        {{-- FAQ Section  --}}
        <div class="bg-light-gray py-10">
            <div class="container mx-auto py-5">
                <h2 class="text-center text-font-40px font-bold mb-2">FAQs</h2>
                <hr class="mb-10 border-slate-300 border-b-0">
                <div class="grid grid-cols-2 gap-10">
                    <div class="p-2">
                        <h2 class="text-font-20px md:text-font-24px font-bold mb-2">What happens after I order?</h2>
                        <p class="text-font-16px text-gray mb-2">After you place your order, our team will review the files
                            you’ve uploaded to make sure your labels will look great. We’ll send you a proof for each label
                            design you ordered. The proof is a clear image showing you exactly how your labels will look,
                            including the outline of their shape. If you like how everything will look, you can approve the
                            proof, or if you’d like to request a change, you can do that from the proof page.</p>
                        <p class="text-font-16px text-gray">Once you’ve approved all your proofs, our production team will
                            print and finish your order. It all happens within two business days.</p>
                        <h2 class="text-font-20px md:text-font-24px font-bold mb-2">What if I don’t like what I receive?
                        </h2>
                        <p class="text-font-16px text-gray">If you’re not happy for any reason, we’ll make it right. Simply
                            reach out to our customer support team and let them know what needs to be changed.</p>
                    </div>
                    <div class="p-2">
                        <h2 class="text-font-20px md:text-font-24px font-bold mb-2">What kind of quality can I expect?</h2>
                        <p class="text-font-16px text-gray">We want your brand to look great, so we do everything we can to
                            produce the best looking labels.</p>
                        <ul class="list-disc mt-4 ms-6">
                            <li><strong>Print Quality.</strong> We use HP Indigo presses, widely regarded as the best
                                quality digital printing presses available because of their print resolution, color
                                accuracy, and consistency.</li>
                            <li><strong>Quality Materials.</strong> All of our label products, other than paper labels, are
                                printed on waterproof films - either BOPP or PET, and protected with a laminate over the
                                printing. This gives them a professional look and makes them able to resist damage from
                                rubbing and scratching.</li>
                            <li><strong>Easy to Use.</strong> Our labels are carefully cut so that they easily peel off the
                                liner. You can either hand-apply them, or use a label applicator.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{-- The MakeStickers Way --}}
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row  justify-center gap-[60px] my-[50px]">
                <div class="w-[55%] text-center">
                    <img src="{{ asset('frontend/custom-labels/customer-spotlight-ghost-poppy.webp') }}" alt="">
                </div>
                <div class="w-[40%]">
                    <p class="text-[16px] text-dark-blue font-bold">Customer Update
                    </p>
                    <h2 class="text-font-24px md:text-font-28px text-dark font-semibold py-2">Discovering Labels: How
                        Ghost
                        Poppy Found Success with MakeStickers</h2>
                    <p class="text-font-16px text-gray pb-2">From high-quality resolution to quick turnarounds, learn
                        why Ghost
                        Poppy made the switch to MakeStickers for all their product label needs.</p>

                    <a href="#"
                        class="block text-primary hover:text-primary-hover hover:underline text-font-16px font-medium">Read
                        the
                        Full Spotlight
                        <span class="inline-flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-1" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-[-8px]" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </span>
                    </a>
                    <button
                        class="bg-secondary hover:bg-secondary-hover text-white font-medium py-2 px-6 rounded-md transition duration-300 inline-flex items-center mt-4">Build
                        your own matte labels
                        <span class="inline-flex items-center mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-1" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-[-8px]" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </div>

        {{-- Related Custom Sticker Products --}}
        <section class="container mx-auto py-16 px-4">
            <h2 class="text-font-28px font-bold text-gray mb-8">Related Custom Sticker Products</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
                
                @foreach ($products as $product)
                <div class="border border-gray rounded-lg overflow-hidden">
                    <a href="#">
                        <img src="{{ storage_url($product->preview_image) }}" alt="Car Stickers"
                            class="w-full object-cover">
                        <div class="p-4">
                            <h3 class="font-bold text-gray mb-2">{{ $product->title }}</h3>
                            <p class="text-gray text-font-14px mb-10">{{ $product->description }}</p>
                            <a href="#"
                                class="text-primary hover:text-blue-600 text-font-14px font-medium inline-flex items-center">
                                Design <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </a>
                </div>
                @endforeach
                
            </div>
        </section>

        {{-- Need Stickers on a Roll Section --}}
        <section class="container mx-auto py-16 px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div>
                    <img src="{{ asset('frontend/custom-labels/custom-stickers-example.webp') }}" alt="Sticker rolls"
                        class="w-full h-auto rounded-lg">
                </div>
                <div>
                    <h2 class="text-font-32px md:text-font-40px font-normal text-dark mb-4">Need Individually Cut
                        Stickers?
                    </h2>
                    <p class="text-dark mb-4 text-font-20px font-bold">If you are looking for individually cut stickers
                        instead
                        of labels on a roll, we offer custom stickers.</p>
                    <p class="text-gray mb-6 text-font-16px">Individually cut stickers are ideal for illustrators,
                        personal
                        use, and small brands and businesses.</p>
                    <button
                        class="bg-primary hover:bg-blue-600 text-white font-medium py-2 px-6 rounded-md transition duration-300">Shop
                        Custom Stickers</button>
                </div>
            </div>
        </section>
        {{-- Subscribe section --}}
        <div class="container mx-auto my-10">
            <div class="flex justify-center items-center">
                <div class="hidden lg:block">
                    <img src="{{ asset('frontend/custom-labels/email-labels1.webp') }}" alt="">
                </div>
                <div class="px-4 text-center">
                    <h2 class="text-font-16px font-semibold uppercase">MakeStickers email deals</h2>
                    <p class="text-font-24px md:text-font-28px font-medium font-Montserrat text-dark mb-5">Sign up to
                        receive
                        discounts,
                        product updates, and more.</p>
                    <div class="flex flex-col md:flex-row items-center justify-center gap-5">
                        <input type="email" placeholder="Enter your email address"
                            class="border border-light-gray px-4 py-2 rounded-md w-[100%]">
                        <button
                            class="bg-primary hover:bg-blue-600 text-white font-medium py-2 px-6 rounded-md transition duration-300 w-[100%] md:w-[30%]">Subscribe</button>
                    </div>
                </div>
                <div class="hidden lg:block">
                    <img src="{{ asset('frontend/custom-labels/email-labels2.webp') }}" alt="">
                </div>
            </div>
        </div>

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
                        order
                        and custom design. Will be back...</p>
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
                        turned
                        looking great! Great way to promote our basketball program.</p>
                    <p class="text-gray text-font-14px">Wade N., Apr 2025</p>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
@endpush
