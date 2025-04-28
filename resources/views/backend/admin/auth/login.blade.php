@extends('frontend.layouts.app', ['page_slug' => 'login'])

@section('title', 'Admin Login')

@section('content')
    <div class="container">
        <div class="flex flex-col items-center justify-center min-h-[50vh] py-6 sm:py-12 lg:py-24">
            <div class="card w-full bg-white shadow-sm max-w-xl">
                <div class="card-body">
                    <div class="flex justify-between mb-2">
                        <h2 class="text-font-20px md:text-font-22px lg:text-font-24px font-bold">Admin Login</h2>
                    </div>
                    <form method="POST" action="{{ route('admin.login.submit') }}">
                        @csrf
                        <div class="flex flex-col gap-2">
                            <label class="input w-full">
                                <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" fill="none"
                                        stroke="currentColor">
                                        <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                    </g>
                                </svg>
                                <input type="email" placeholder="example@example.com" name="email" id="email"
                                    class="input @error('email') input-error @enderror" />
                            </label>

                            @error('email')
                                <span class="text-tertiary text-font-14px mt-1" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror


                            <label class="input w-full">
                                <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" fill="none"
                                        stroke="currentColor">
                                        <path
                                            d="M2.586 17.414A2 2 0 0 0 2 18.828V21a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-1a1 1 0 0 1 1-1h1a1 1 0 0 0 1-1v-1a1 1 0 0 1 1-1h.172a2 2 0 0 0 1.414-.586l.814-.814a6.5 6.5 0 1 0-4-4z">
                                        </path>
                                        <circle cx="16.5" cy="7.5" r=".5" fill="currentColor"></circle>
                                    </g>
                                </svg>
                                <input type="password" placeholder="Password" name="password" id="password"
                                    class="input @error('password') input-error @enderror" />
                            </label>
                            @error('password')
                                <span class="text-tertiary text-font-14px mt-1" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="flex justify-between items-center mt-4">
                            <label class="cursor-pointer label">
                                <input type="checkbox" class="checkbox checkbox-xs" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }} />
                                <span class="label-text">Remember me</span>
                            </label>
                            <a href="" class="text-primary">Forgot Password</a>
                        </div>
                        <button type="submit" class="btn-primary w-full mt-4">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
