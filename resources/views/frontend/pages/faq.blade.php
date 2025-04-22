@extends('frontend.layouts.app', ['page_slug' => 'faq'])
@section('title', 'Sticker FAQ')

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
                    <div class="md:basis-2/3 w-full">
                        <div class="w-full md:w-11/12">
                            <form action="">
                                <label class="input w-full">
                                    <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" fill="none"
                                            stroke="currentColor">
                                            <circle cx="11" cy="11" r="8"></circle>
                                            <path d="m21 21-4.3-4.3"></path>
                                        </g>
                                    </svg>
                                    <input type="search" required placeholder="Search" />
                                </label>
                            </form>

                            {{-- Accordions --}}
                            <div class="flex flex-col gap-4 mt-5 w-full">
                                <div class="collapse collapse-arrow bg-light-gray/10 border border-dark/10">
                                    <input type="radio" name="my-accordion-3" checked="checked" />
                                    <div class="collapse-title font-semibold">Question 1</div>
                                    <div class="collapse-content text-font-14px">
                                        <ul class="list pl-5">
                                            <li><a href="" class="text-primary text-font-20px">Link 1</a></li>
                                            <li><a href="" class="text-primary text-font-20px">Link 1</a></li>
                                            <li><a href="" class="text-primary text-font-20px">Link 1</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="collapse collapse-arrow bg-light-gray/10 border border-dark/10">
                                    <input type="radio" name="my-accordion-3" />
                                    <div class="collapse-title font-semibold">I forgot my password. What should I do?</div>
                                    <div class="collapse-content text-font-14px">
                                        <ul class="list pl-5">
                                            <li><a href="" class="text-primary text-font-20px">Link 1</a></li>
                                            <li><a href="" class="text-primary text-font-20px">Link 1</a></li>
                                            <li><a href="" class="text-primary text-font-20px">Link 1</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="collapse collapse-arrow bg-light-gray/10 border border-dark/10">
                                    <input type="radio" name="my-accordion-3" />
                                    <div class="collapse-title font-semibold">How do I update my profile information?</div>
                                    <div class="collapse-content text-font-14px">
                                        <ul class="list pl-5">
                                            <li><a href="" class="text-primary text-font-20px">Link 1</a></li>
                                            <li><a href="" class="text-primary text-font-20px">Link 1</a></li>
                                            <li><a href="" class="text-primary text-font-20px">Link 1</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="md:basis-1/3 card w-full bg-light-gray/10 shadow-sm border border-dark/10 h-fit">
                        <div class="card-body">
                            <h4 class="text-font-18px md:text-font-22px lg:text-font-24px font-bold text-gray uppercase">STILL NEED ANSWERS?</h4>
                            <div class="flex items-center justify-between mt-5">
                                <p class="text-font-16px lg:text-font-18px xl:text-font-20px"><i class="fa-solid fa-mobile-retro"></i> Call:</p>
                                <a href="tel:+1-800-123-4567" class="text-dark text-font-16px lg:text-font-18px xl:text-font-20px">+1-800-123-4567</a>
                            </div>
                            <div class="flex items-center justify-between mt-5">
                                <p class="text-font-16px lg:text-font-18px xl:text-font-20px"><i class="fa-solid fa-fax"></i> Fax:</p>
                                <a href="fax:+1-800-123-4567" class="text-dark text-font-16px lg:text-font-18px xl:text-font-20px">+1-800-123-4567</a>
                            </div>
                            <div class="flex items-center justify-between mt-5">
                                <p class="text-font-16px lg:text-font-18px xl:text-font-20px"><i class="fa-solid fa-headset"></i> Chat:</p>
                                <button class="btn text-white bg-tertiary btn-sm hover:bg-tertiary-hover">Start
                                    Chat</button>
                            </div>

                            <div class="divider"></div>

                            <p class="text-font-14px text-gray">Our customer support hours are</p>
                            <p class="text-font-20px text-primary">Monday to Friday: 8:00 AM to 5:00 PM</p>
                            <h4 class="text-font-24px font-bold text-gray">Our Location</h4>
                            <p class="text-gray">123 Main Street, Anytown, USA</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
