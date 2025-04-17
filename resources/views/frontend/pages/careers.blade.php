@extends('frontend.layouts.app', ['title' => 'Career'])

@push('styles')
@endpush

@section('content')

    <head>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <!-- Example: Inter font from Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
        <link rel="icon" href="/favicon.ico" />
    </head>

    <body>
        <div class="bg-gray-100 py-8 text-center">
            <p class="text-xs text-yellow-500 uppercase tracking-widest mb-1">Careers</p>
            <h2 class="text-3xl font-bold text-gray-700 uppercase tracking-tight mb-4">JOIN THE TEAM</h2>
            <div class="w-12 h-1 bg-yellow-500 mx-auto"></div>
        </div>
        <!-- <section class="bg-gray-50 py-16 px-4 md:px-20 text-center"> -->
        <div class="bg-gray-50 py-0">
            <div class="container mx-auto">
                <h2 class="text-center text-xl font-semibold text-blue-500 uppercase tracking-wider mt-8">CURRENT POSITIONS
                </h2>
                <div class="bg-white rounded-md shadow-lg border border-gray-200 mb-4 mt-5 mr-80 ml-80">
                    <div class="p-8 border-l-4 border-blue-600 bg-white p-6 shadow rounded-md">
                        <h3 class="text-xl font-bold text-gray-900 mb-1">Laser Finishing Operator</h3>
                        <p class="text-sm text-gray-600 mb-2"><span class=" font-bold ">Location:</span> Tinley Park, IL</p>
                        <a href="#" class="text-lg font-bold text-blue-800">+ View details</a>
                    </div>
                </div>
                <div class="g-white rounded-md shadow-lg border border-gray-200 mb-4 mt-5 mr-80 ml-80">
                    <div class="p-8 border-l-4 border-blue-600 bg-white p-6 shadow rounded-md">
                        <h3 class="text-xl font-bold text-gray-900 mb-1">Sticker Production Assistant</h3>
                        <p class="text-sm text-gray-600 mb-2"><span class=" font-bold ">Location:</span> Tinley Park, IL</p>
                        <a href="#" class="text-lg font-bold text-blue-800">+ View details</a>
                    </div>
                </div>

                <div class="text-center text-lg text-gray-500 mt-8">
                    <p class="mb-1">Don't see anything for you? Send your resume to:</p>
                    <a href="mailto:careers@graphicisland.com"
                        class="text-blue-500 hover:underline mb-4">careers@graphicisland.com</a>
                </div>
            </div>
        </div>
    </body>
@endsection

@push('scripts')
@endpush
