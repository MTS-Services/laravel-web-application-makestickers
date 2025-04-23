@extends('frontend.layouts.app', ['page_slug' => 'Profile'])
@section('title', 'Profile')

@push('styles')

@section('content')
<div class="max-w-4xl mx-auto p-4 sm:p-6 lg:p-8">
    <div class="bg-white shadow-xl rounded-xl overflow-hidden">

        {{-- Header --}}
        <div class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white text-center py-6">
            <h2 class="text-2xl sm:text-3xl font-semibold">{{ user()->name }}'s Profile</h2>
        </div>

        {{-- Profile Body --}}
        <div class="p-6 sm:p-8 text-center">

            {{-- Profile Picture --}}
            <div class="mb-4 flex justify-center">
                <img src="{{ storage_url(user()->image) }}"
                     alt="{{ user()->name }}"
                     class="rounded-full border-4 border-white shadow-lg w-36 h-36 object-cover">
            </div>

            <h4 class="text-xl font-semibold text-gray-800 mb-1">{{ user()->name }}</h4>
            <p class="text-gray-500 mb-4">{{ user()->email }}</p>

            <hr class="border-t border-gray-200 my-6">

            {{-- Details Grid --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 text-sm sm:text-base text-left">
                <div class="space-y-2">
                    <p class="text-gray-600"><i class="bi bi-phone-fill text-blue-500 mr-1"></i>
                        <strong>Phone:</strong> {{ user()->phone_number ?? 'Not Set' }}
                    </p>
                    <p class="text-gray-600"><i class="bi bi-geo-alt-fill text-blue-500 mr-1"></i>
                        <strong>Address:</strong> {{ user()->address ?? 'Not Provided' }}
                    </p>
                    <p class="text-gray-600"><i class="bi bi-person-fill text-blue-500 mr-1"></i>
                        <strong>Gender:</strong>
                        {{ user()->gender == '0' ? 'Unset' : (user()->gender == '1' ? 'Male' : 'Female') }}
                    </p>
                </div>

                <div class="space-y-2">
                    <p class="text-gray-600"><i class="bi bi-calendar-date text-blue-500 mr-1"></i>
                        <strong>Date of Birth:</strong>
                        {{ user()->dob ? date('d M, Y', strtotime(user()->dob)) : 'Not Provided' }}
                    </p>
                </div>
            </div>

            {{-- Buttons --}}
            <div class="mt-8 flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('user.profile.edit') }}"
                   class="inline-flex items-center justify-center px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg transition duration-150">
                    <i class="bi bi-pencil-square mr-2"></i> Update Profile
                </a>

                <a href="{{ route('user.profile.password.form') }}"
                   class="inline-flex items-center justify-center px-6 py-2 bg-yellow-500 hover:bg-yellow-600 text-white text-sm font-medium rounded-lg transition duration-150">
                    <i class="bi bi-key mr-2"></i> Password Change
                </a>
            </div>
        </div>
    </div>
</div>

{{-- Bootstrap Icons --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
@endsection
