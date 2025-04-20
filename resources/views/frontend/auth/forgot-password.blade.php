@extends('frontend.layouts.app', ['page_slug' => 'login'])

@section('title', 'Forgot Password')

@section('content')
    <div class="container">
        <div class="flex flex-col items-center justify-center min-h-[50vh] py-6 sm:py-12 lg:py-24">
            <div class="card w-full bg-white shadow-sm max-w-xl">
                <div class="card-body">
                    <div class="flex justify-between mb-2">
                        <h2 class="text-3xl font-bold">Forgot your password?</h2>
                    </div>
                    <form action="">
                        <div class="flex flex-col gap-2">

                            <label class="input w-full">
                                <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" fill="none"
                                        stroke="currentColor">
                                        <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                    </g>
                                </svg>
                                <input type="email" placeholder="example@example.com" class="" />
                            </label>

                            <button type="submit" class="btn-primary w-full mt-4">Send Reset Link</button>
                    </form>
                    <div class="flex flex-col gap-2">
                        <div class="flex justify-between items-center mt-4">
                            <p>Return to <a href="{{ route('login') }}" class="text-primary">Login</a></p>
                            <p class="text-end">Don't have an account? <a href="{{ route('register') }}" class="text-primary">Register</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
