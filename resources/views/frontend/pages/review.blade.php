@extends('frontend.layouts.app', ['page_slug' => 'review'])
@section('title', 'Review Page')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="head">
                <h1 class="text-font-24px md:text-font-40px text-gray font-medium">Custom Die Cut Stickers Reviews</h1>
            </div>
            <div class="grid grid-cols-1  md:grid-cols-2 lg:grid-cols-3 gap-6 py-6 bg-gray-50">

                <!-- Card 1 -->
                <div class="border border-gray/30  py-6 bg-white flex flex-col items-center text-center">
                    <div
                        class="flex items-center gap-2 mb-4 bg-white border border-gray/30 rounded-full px-4 py-2 shadow-sm">
                        <div class="flex text-yellow-400">
                            <!-- 5 full stars -->
                            <i class="fa-solid fa-star "></i>
                            <i class="fa-solid fa-star "></i>
                            <i class="fa-solid fa-star "></i>
                            <i class="fa-solid fa-star "></i>
                            <i class="fa-solid fa-star "></i>
                        </div>
                        <span class="text-gray-700 font-medium text-sm">5 / 5</span>
                    </div>
                    <p class="text-sm text-gray-700 italic">Aimee C., Apr 2025</p>
                </div>

                <!-- Card 2 -->
                <div class="border border-gray/30  py-6 bg-white flex flex-col items-center text-center">
                    <div
                        class="flex items-center gap-2 mb-4 bg-white border border-gray/30 rounded-full px-4 py-2 shadow-sm">
                        <div class="flex text-yellow-400">
                            <!-- 5 full stars -->
                            <i class="fa-solid fa-star "></i>
                            <i class="fa-solid fa-star "></i>
                            <i class="fa-solid fa-star "></i>
                            <i class="fa-solid fa-star "></i>
                            <i class="fa-solid fa-star "></i>
                        </div>
                        <span class="text-gray-700 font-medium text-sm">5 / 5</span>
                    </div>
                    <p class="text-sm text-gray-700 italic">Susan S., Apr 2025</p>
                </div>

                <!-- Card 3 -->
                <div class="border border-gray/30  py-6 bg-white flex flex-col items-center text-center">
                    <div
                        class="flex items-center gap-2 mb-4 bg-white border border-gray/30 rounded-full px-4 py-2 shadow-sm">
                        <div class="flex text-yellow-400">
                            <!-- 5 full stars -->
                            <i class="fa-solid fa-star "></i>
                            <i class="fa-solid fa-star "></i>
                            <i class="fa-solid fa-star "></i>
                            <i class="fa-solid fa-star "></i>
                            <i class="fa-solid fa-star "></i>
                        </div>
                        <span class="text-gray-700 font-medium text-sm">5 / 5</span>
                    </div>
                    <p class="text-gray-700 text-base font-semibold mb-2">Beautiful!</p>
                    <p class="text-sm text-gray-700 italic">Francis C., Apr 2025</p>
                </div>

                <!-- Card 4 -->
                <div class="border border-gray/30  py-6 bg-white flex flex-col items-center text-center">
                    <div
                        class="flex items-center gap-2 mb-4 bg-white border border-gray/30 rounded-full px-4 py-2 shadow-sm">
                        <div class="flex text-yellow-400">
                            <!-- 5 full stars -->
                            <i class="fa-solid fa-star "></i>
                            <i class="fa-solid fa-star "></i>
                            <i class="fa-solid fa-star "></i>
                            <i class="fa-solid fa-star "></i>
                            <i class="fa-solid fa-star "></i>
                        </div>
                        <span class="text-gray-700 font-medium text-sm">5 / 5</span>
                    </div>
                    <div class="text-gray-700 text-base font-bold mb-2">DGP 2025</div>
                    <p class="text-sm text-gray-600 mb-4">THEY LOOK GREAT! COLORS ARE AWESOME AND THEY STICK THRU ALL KINDS
                        OF WEATHER! THANK YOU</p>
                    <p class="text-sm text-gray-700 italic">Michael S., Apr 2025</p>
                </div>

                <!-- Card 5 -->
                <div class="border border-gray/30  py-6 bg-white flex flex-col items-center text-center">
                    <div
                        class="flex items-center gap-2 mb-4 bg-white border border-gray/30 rounded-full px-4 py-2 shadow-sm">
                        <div class="flex text-yellow-400">
                            <!-- 5 full stars -->
                            <i class="fa-solid fa-star "></i>
                            <i class="fa-solid fa-star "></i>
                            <i class="fa-solid fa-star "></i>
                            <i class="fa-solid fa-star "></i>
                            <i class="fa-solid fa-star "></i>
                        </div>
                        <span class="text-gray-700 font-medium text-sm">5 / 5</span>
                    </div>
                    <p class="text-sm text-gray-700 italic">Maram M., Apr 2025</p>
                </div>

                <!-- Card 6 -->
                <div class="border border-gray/30  py-6 bg-white flex flex-col items-center text-center">
                    <div
                        class="flex items-center gap-2 mb-4 bg-white border border-gray/30 rounded-full px-4 py-2 shadow-sm">
                        <div class="flex text-yellow-400">
                            <!-- 5 full stars -->
                            <i class="fa-solid fa-star "></i>
                            <i class="fa-solid fa-star "></i>
                            <i class="fa-solid fa-star "></i>
                            <i class="fa-solid fa-star "></i>
                            <i class="fa-solid fa-star "></i>
                        </div>
                        <span class="text-gray-700 font-medium text-sm">5 / 5</span>
                    </div>
                    <p class="text-sm text-gray-700 italic">Brennan K., Apr 2025</p>
                </div>
                <!-- Card 7 -->
                <div class="border border-gray/30  py-6 bg-white flex flex-col items-center text-center">
                    <div
                        class="flex items-center gap-2 mb-4 bg-white border border-gray/30 rounded-full px-4 py-2 shadow-sm">
                        <div class="flex text-yellow-400">
                            <!-- 5 full stars -->
                            <i class="fa-solid fa-star "></i>
                            <i class="fa-solid fa-star "></i>
                            <i class="fa-solid fa-star "></i>
                            <i class="fa-solid fa-star "></i>
                            <i class="fa-solid fa-star "></i>
                        </div>
                        <span class="text-gray-700 font-medium text-sm">5 / 5</span>
                    </div>
                    <p class="text-sm text-gray-700 italic">Brennan K., Apr 2025</p>
                </div>
                <!-- Card 8 -->
                <div class="border border-gray/30  py-6 bg-white flex flex-col items-center text-center">
                    <div
                        class="flex items-center gap-2 mb-4 bg-white border border-gray/30 rounded-full px-4 py-2 shadow-sm">
                        <div class="flex text-yellow-400">
                            <!-- 5 full stars -->
                            <i class="fa-solid fa-star "></i>
                            <i class="fa-solid fa-star "></i>
                            <i class="fa-solid fa-star "></i>
                            <i class="fa-solid fa-star "></i>
                            <i class="fa-solid fa-star "></i>
                        </div>
                        <span class="text-gray-700 font-medium text-sm">5 / 5</span>
                    </div>
                    <p class="text-sm text-gray-700 italic">Brennan K., Apr 2025</p>
                </div>
                <!-- Card 9 -->
                <div class="border border-gray/30  py-6 bg-white flex flex-col items-center text-center">
                    <div
                        class="flex items-center gap-2 mb-4 bg-white border border-gray/30 rounded-full px-4 py-2 shadow-sm">
                        <div class="flex text-yellow-400">
                            <!-- 5 full stars -->
                            <i class="fa-solid fa-star "></i>
                            <i class="fa-solid fa-star "></i>
                            <i class="fa-solid fa-star "></i>
                            <i class="fa-solid fa-star "></i>
                            <i class="fa-solid fa-star "></i>
                        </div>
                        <span class="text-gray-700 font-medium text-sm">5 / 5</span>
                    </div>
                    <p class="text-sm text-gray-700 italic">Brennan K., Apr 2025</p>
                </div>

            </div>

        </div>
    </section>

@endsection
