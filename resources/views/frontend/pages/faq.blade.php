@extends('frontend.layouts.app', ['page_slug' => 'faq'])
@section('title', 'Sticker FAQ')

@push('styles')
@endpush

@section('content')

    {{-- Hero Area --}}
    <div class="bg-gray/30 w-full border-t-2 border-primary">
        <div class="container mx-auto py-16 text-center">
            <h4 class="text-heading-4 font-semibold text-primary uppercase">Common Questions</h4>
            <h2 class="text-heading-2 font-bold text-gray mt-5">How can we help?</h2>
        </div>
    </div>

    <div class="container py-5">
        <div class="card bg-white max-w-screen-xl mx-auto shadow-sm border border-gray/30">
            <div class="card-body">
                <div class="flex">
                    <div class="basis-2/3">
                        <form action="">
                            <label class="input w-full md:w-4/5">
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
                        <div class="flex flex-col gap-4 mt-5 w-full md:w-4/5">
                            <div class="collapse collapse-arrow bg-base-100 border border-base-300">
                                <input type="radio" name="my-accordion-3" checked="checked" />
                                <div class="collapse-title font-semibold">Question 1</div>
                                <div class="collapse-content text-sm">
                                    <ul class="list pl-5">
                                        <li><a href="" class="text-primary text-font-large">Link 1</a></li>
                                        <li><a href="" class="text-primary text-font-large">Link 1</a></li>
                                        <li><a href="" class="text-primary text-font-large">Link 1</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="collapse collapse-arrow bg-base-100 border border-base-300">
                                <input type="radio" name="my-accordion-3" />
                                <div class="collapse-title font-semibold">I forgot my password. What should I do?</div>
                                <div class="collapse-content text-sm">
                                    <ul class="list pl-5">
                                        <li><a href="" class="text-primary text-font-large">Link 1</a></li>
                                        <li><a href="" class="text-primary text-font-large">Link 1</a></li>
                                        <li><a href="" class="text-primary text-font-large">Link 1</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="collapse collapse-arrow bg-base-100 border border-base-300">
                                <input type="radio" name="my-accordion-3" />
                                <div class="collapse-title font-semibold">How do I update my profile information?</div>
                                <div class="collapse-content text-sm">
                                    <ul class="list pl-5">
                                        <li><a href="" class="text-primary text-font-large">Link 1</a></li>
                                        <li><a href="" class="text-primary text-font-large">Link 1</a></li>
                                        <li><a href="" class="text-primary text-font-large">Link 1</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="basis-1/3 bg-red-900 py-5"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
