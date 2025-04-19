@extends('frontend.layouts.app', ['title' => 'Career'])
@section('title', 'Career')
@push('styles')
@endpush

@section('content')

    <head>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <!-- Example: Inter font from Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
        <link rel="icon" href="/favicon.ico" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />

    </head>

    <body>
        <div class="bg-gray-100 py-8 text-center">
            <p class=" text-orange font-bold uppercase tracking-widest mb-1">Careers</p>
            <h2 class="text-3xl font-bold text-gray-700 uppercase tracking-tight mb-4">JOIN THE TEAM</h2>
            <div class="w-12 h-1 bg-yellow-500 mx-auto"></div>
        </div>
        <!-- <section class="bg-gray-50 py-16 px-4 md:px-20 text-center"> -->
        <div class="py-12 bg-white">
            <div class="container mx-auto px-4">
                <h2 class="text-center text-xl font-semibold text-primary-hover-500 uppercase tracking-wider mb-8">
                    CURRENT POSITIONS
                </h2>

                <!-- Job Card -->
                <div class="bg-white rounded-md shadow-lg border border-gray-200 mb-6 max-w-3xl mx-auto">
                    <div class="p-6 md:p-8 border-l-4 border-blue-600 bg-white shadow rounded-md">
                        <h3 class="text-xl font-bold text-gray-900 mb-1">Customer Care Specialist</h3>
                        <p class="text-sm text-gray-600 mb-2"><span class="font-bold">Location:</span> Remote</p>
                        <a href="#" class="text-lg font-bold text-primary-hover">+ View details</a>
                    </div>
                </div>

                <!-- Job Card -->
                <div class="bg-white rounded-md shadow-lg border border-gray-200 mb-6 max-w-3xl mx-auto">
                    <div class="p-6 md:p-8 border-l-4 border-blue-600 bg-white shadow rounded-md">
                        <h3 class="text-xl font-bold text-gray-900 mb-1">Laser Finishing Operator</h3>
                        <p class="text-sm text-gray-600 mb-2"><span class="font-bold">Location:</span> Tinley Park, IL</p>
                        <a href="#" class="text-lg font-bold text-primary-hover">+ View details</a>
                    </div>
                </div>

                <!-- Job Card -->
                <div class="bg-white rounded-md shadow-lg border border-gray-200 mb-6 max-w-3xl mx-auto">
                    <div class="p-6 md:p-8 border-l-4 border-blue-600 bg-white shadow rounded-md">
                        <h3 class="text-xl font-bold text-gray-900 mb-1">Sticker Production Assistant</h3>
                        <p class="text-sm text-gray-600 mb-2"><span class="font-bold">Location:</span> Tinley Park, IL</p>
                        <a href="#" class="text-lg text-primary-hover font-bold text-primary-hover-800">+ View details</a>
                    </div>
                </div>
            </div>
            <div class="text-center bg-white text-lg  mt-4 mb-10">
                <p class="mb-1">Don't see anything for you? Send your resume to:</p>
                <a href="mailto:careers@graphicisland.com"
                    class="text-primary-hover-500 hover:underline ">careers@graphicisland.com</a>
            </div>
        </div>
        <!-- Values Section -->
        <div class="bg-white py-16 px-4 border-t border-gray-300">
            <p class="text-center text-2xl text-gray-700 mb-10">
                We’re a <span class="font-semibold text-orange">technology-focused</span> printing company that’s
                growing
                quickly and (almost) always
                <br>
                looking for good people to <a href="#" class="text-orange hover:underline">join our team</a>.
            </p>

            <section class=" py-24 px-6"> <!-- Increased vertical padding -->
                <div class="max-w-6xl mx-auto flex flex-col lg:flex-row items-start justify-between gap-12">

                    <!-- Left: Values -->
                    <div class="w-full lg:w-[50%]">
                        <h2 class="text-3xl  text-gray-800 mb-10 relative text-center ">
                            Our Values
                            <span class="block h-1 w-16 bg-blue-500 mt-3 mx-auto "></span>
                        </h2>

                        <div class="space-y-8"> <!-- More spacing between cards -->
                            <div class="border-l-4 border-yellow-400 bg-white p-6 shadow-md rounded">
                                <h3 class="text-yellow-600 font-bold mb-3 text-lg">We succeed and fail as a team</h3>
                                <p class="text-base text-gray-700">We do what we can to help co-workers and ultimately the
                                    company as a whole.</p>
                            </div>
                            <div class="border-l-4 border-lime-500 bg-white p-6 shadow-md rounded">
                                <h3 class="text-lime-600 font-bold mb-3 text-lg">Do it before it needs to get done</h3>
                                <p class="text-base text-gray-700">We plan ahead and work ahead so that we’re not faced with
                                    stressful situations when we need to rush.</p>
                            </div>
                            <div class="border-l-4 border-blue-500 bg-white p-6 shadow-md rounded">
                                <h3 class="text-primary-hover font-bold mb-3 text-lg">Have a growth mindset</h3>
                                <p class="text-base text-gray-700">We understand that through effort, learning, and practice
                                    we can improve over time.</p>
                            </div>
                            <div class="border-l-4 border-red-500 bg-white p-6 shadow-md rounded">
                                <h3 class="text-red-600 font-bold mb-3 text-lg">Empathize with the customer</h3>
                                <p class="text-base text-gray-700">We always try to understand their needs and help them
                                    succeed.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Image Collage -->
                    <div class="w-full lg:w-[60%] mt-16 lg:mt-0 flex justify-center lg:justify-end relative px-4">
                        <div class="relative w-full max-w-[320px] h-auto">
                            <!-- First image -->
                            <div
                                class="relative w-full after:content-[''] after:absolute after:inset-0 after:-rotate-6 after:bg-secondary z-10">
                                <img src="{{ asset('frontend/Career Opportunities_image/printing.jpg') }}"
                                    class="w-full object-cover relative z-10 rounded-lg" alt="Image 1" />
                            </div>

                            <!-- Second image -->
                            <div
                                class="relative w-full after:content-[''] after:absolute after:inset-0 after:-rotate-6 after:bg-primary z-10 mt-4 lg:-ml-20 lg:-mt-20">
                                <img src="{{ asset('frontend/Career Opportunities_image/packing.jpg') }}"
                                    class="w-full object-cover relative z-10 rounded-lg" alt="Image 2" />
                            </div>

                            <!-- Third image -->
                            <div
                                class="relative w-full after:content-[''] after:absolute after:inset-0 after:-rotate-6 after:bg text-orange z-10 mt-4 lg:-mt-20">
                                <img src="{{ asset('frontend/Career Opportunities_image/keyboard.jpg') }}"
                                    class="w-full object-cover relative z-10 rounded-lg" alt="Image 3" />
                            </div>
                        </div>
                    </div>


                </div>
            </section>


            <div class="bg-gray-800 py-10 text-center">
                <h3 class="text-2xl sm:text-3xl font-semibold text-white mb-6">Get to know us better</h3>
                <div class="flex flex-col sm:flex-row flex-wrap justify-center items-center gap-6  md:gap-60">
                    <a href="#" class="text-gray-300 hover:text-white flex items-center space-x-2">
                        <i class="fa-brands fa-instagram text-2xl sm:text-2xl"></i>
                        <span class="text-lg sm:text-xl md:text-xl">Instagram</span>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-white flex items-center space-x-2">
                        <i class="fa-brands fa-facebook text-2xl sm:text-2xl"></i>
                        <span class="text-lg sm:text-xl md:text-xl">Facebook</span>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-white flex items-center space-x-2">
                        <i class="fa-brands fa-x-twitter text-2xl sm:text-2xl"></i>
                        <span class="text-lg sm:text-xl md:text-xl">Twitter</span>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-white flex items-center space-x-2">
                        <i class="fa-brands fa-tiktok text-2xl sm:text-2xl"></i>
                        <span class="text-lg sm:text-xl md:text-xl">TikTok</span>
                    </a>
                </div>
            </div>


            <section class="bg-gray-50 py-16">
                <div class="max-w-7xl mx-auto px-4 text-center">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-8 relative inline-block">
                        Our Benefits
                        <span class="block h-0.5 w-10 bg-blue-500 mt-2 mx-auto"></span>
                    </h2>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 text-gray-700 mt-10">

                        <!-- 1 -->
                        <div class="flex flex-col items-center text-center">
                            <i class="fa-solid fa-umbrella-beach text-4xl mb-4"></i>
                            <h3 class="font-semibold text-md mb-1">Paid holidays and ample time off</h3>
                            <p class="text-sm">All full-time employees receive 4 weeks of paid time off per year</p>
                        </div>

                        <!-- 2 -->
                        <div class="flex flex-col items-center text-center">
                            <i class="fa-solid fa-sack-dollar text-4xl mb-4"></i>
                            <h3 class="font-semibold text-md mb-1">Robust 401(k) Plan</h3>
                            <p class="text-sm">4% company contribution for all employees</p>
                        </div>

                        <!-- 3 -->
                        <div class="flex flex-col items-center text-center">
                            <i class="fa-solid fa-house-user text-4xl mb-4"></i>
                            <h3 class="font-semibold text-md mb-1">Paid parental leave</h3>
                            <p class="text-sm">Take the necessary time for your growing family</p>
                        </div>

                        <!-- 4 -->
                        <div class="flex flex-col items-center text-center">
                            <i class="fa-solid fa-circle-dollar-to-slot text-4xl mb-4"></i>
                            <h3 class="font-semibold text-md mb-1">Profit-sharing bonus</h3>
                            <p class="text-sm">Earn up to 15% of your yearly salary in bonuses</p>
                        </div>

                        <!-- 5 -->
                        <div class="flex flex-col items-center text-center">
                            <i class="fa-solid fa-computer text-4xl mb-4"></i>
                            <h3 class="font-semibold text-md mb-1">Remote and in-person positions</h3>
                            <p class="text-sm">We can succeed together from almost anywhere</p>
                        </div>

                        <!-- 6 -->
                        <div class="flex flex-col items-center text-center">
                            <i class="fa-solid fa-gifts text-4xl mb-4"></i>
                            <h3 class="font-semibold text-md mb-1">Charitable gift matching</h3>
                            <p class="text-sm">Up to $250 yearly per employee for your causes</p>
                        </div>

                        <!-- 7 -->
                        <div class="flex flex-col items-center text-center">
                            <i class="fa-solid fa-hospital text-4xl mb-4"></i>
                            <h3 class="font-semibold text-md mb-1">Health insurance options</h3>
                            <p class="text-sm">Yearly $1k HSA contribution offered in some plans</p>
                        </div>

                        <!-- 8 -->
                        <div class="flex flex-col items-center text-center">
                            <i class="fa-solid fa-headphones-simple text-4xl mb-4"></i>
                            <h3 class="font-semibold text-md mb-1">Employee assistance program</h3>
                            <p class="text-sm">Support for all employees and their households</p>
                        </div>

                    </div>
                </div>
            </section>

            <section class="bg-white-100 py-16">
                <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

                    <!-- Left Image with Dots -->
                    <div class="relative">
                        <img src="{{ asset('frontend/Career Opportunities_image/repair.jpg') }}" alt="Employee"
                            class="rounded shadow-lg" />

                        <!-- Decorative Dots -->
                        <div
                            class="absolute top-0 left-0 bg-blue-500 w-10 h-10 rounded-full -translate-x-1/2 -translate-y-1/2">
                        </div>
                        <div
                            class="absolute bottom-0 left-0 bg-red-500 w-6 h-6 rounded-full -translate-x-1/2 translate-y-1/2">
                        </div>
                        <div
                            class="absolute bottom-0 right-0 bg-lime-500 w-6 h-6 rounded-full translate-x-1/2 translate-y-1/2">
                        </div>
                    </div>

                    <!-- Right Testimonials -->
                    <div>
                        <h2 class="text-2xl font-semibold text-gray-800 text-center md:text-center mb-6">
                            Employee Voices
                            <div class="h-0.5 w-16 bg-blue-500 mt-4 mx-auto md:mx-70"></div>
                        </h2>

                        <div class="space-y-4">
                            <!-- Testimonial 1 -->
                            <div class=" border-l-4 border-blue-600  ">
                                <div class="bg-white rounded-md shadow-lg rounded-md p-4 shadow-sm">
                                    <div class="flex items-center mb-2 text-orange text-3xl">★★★★★</div>
                                    <p class="text-primary-hover font-light text-2xl">"A company that values its employees"
                                    </p>
                                    <p class="text-gray-600 text-sm mt-1">Current Employee, 3+ years</p>
                                </div>
                            </div>

                            <!-- Testimonial 2 -->
                            <div class=" border-l-4 border-blue-600  ">
                                <div class="bg-white rounded-md shadow-lg rounded-md p-4 shadow-sm">
                                    <div class="flex items-center mb-2 text-orange text-3xl">★★★★★</div>
                                    <p class="text-primary-hover font-light  text-2xl">"Amazing company to work for!"</p>
                                    <p class="text-gray-600 text-sm mt-1">Current Employee, 3+ years</p>
                                </div>
                            </div>

                            <!-- Testimonial 3 -->
                            <div class=" border-l-4 border-blue-600  ">
                                <div class="bg-white rounded-md shadow-lg rounded-md p-4 shadow-sm">
                                    <div class="flex items-center mb-2 text-orange text-3xl">★★★★★</div>
                                    <p class="text-primary-hover font-light text-2xl">"Simply the best!"</p>
                                    <p class="text-gray-600 text-sm mt-1">Current Employee, 5+ years</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="bg-gray-800 py-8 text-center">
                <h3 class="text-2xl font-semibold text-white mb-6">Interested?</h3>
                <div class="flex flex-col items-center justify-center space-y-4">
                    <a href="#" class="text-gray-300 hover:text-white-bold">
                        <button class="bg-blue-500 text-white px-4 py-2 rounded-md font-bold">Apply Now</button>
                    </a>

                    <!-- Additional Lines -->
                    <p class="text-white">Don’t see any openings?
                    <span class="text-white mb-0">Send your resume to</span></p>
                        <a href="mailto:careers@graphicsland.com"
                            class="text-white hover:underline">careers@graphicsland.com</a>
                    </p>
                </div>
            </div>

    </body>
@endsection

@push('scripts')
@endpush
