@extends('frontend.layouts.app', ['page_slug' => 'login'])

@section('title', 'Register')

@section('content')
    <div class="container">
        <div class="flex flex-col items-center justify-center min-h-[50vh] py-6 sm:py-12 lg:py-24">
            <div class="card w-full bg-white shadow-sm max-w-xl">
                <div class="card-body">
                    <div class="flex justify-between mb-2">
                        <h2 class="text-3xl font-bold">Register to your account</h2>
                    </div>
                    <form action="">
                        <div class="flex flex-col gap-2">

                            <label class="input w-full">
                                <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" fill="none"
                                        stroke="currentColor">
                                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </g>
                                </svg>
                                <input type="input" placeholder="Username" name="name" />
                            </label>

                            <label class="input w-full">
                                <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" fill="none"
                                        stroke="currentColor">
                                        <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                    </g>
                                </svg>
                                <input type="email" placeholder="example@example.com" name="email" />
                            </label>


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
                                <input type="password" placeholder="Password" name="password" />
                            </label>

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
                                <input type="password" placeholder="Confirm Password" name="password_confirmation" />
                            </label>
                        </div>

                        <button type="submit" class="btn-primary w-full mt-4">Register</button>
                    </form>
                    <div class="flex flex-col gap-2">
                        <p>Already have an account? <a href="{{ route('login') }}" class="text-primary">Login</a></p>
                    </div>

                    <div class="divider"></div>

                    <p>When you create a <strong class="text-gray">FREE</strong> account, you can enjoy these features:</p>
                    <div class="grid grid-cols-3 gap-2">
                        <div>
                            <h3 class="text-heading-6 font-semibold">Address Book</h3>
                            <p>Store addresses for quick and easy checkout</p>
                        </div>
                        <div>
                            <h3 class="text-heading-6 font-semibold">Order History</h3>
                            <p>See your past orders and reorder designs easily</p>
                        </div>
                        <div>
                            <h3 class="text-heading-6 font-semibold">Favorite Designs</h3>
                            <p>Save design progress to finish later or use a design as a base for different versions.
                                (Previously design library)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
