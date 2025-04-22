@extends('frontend.layouts.app', ['page_slug' => 'home'])
@section('title', 'Home Page')

@push('styles')
@endpush

@section('content')
    <div class="container mx-auto p-4">
        <a href="{{ route('login') }}" class="btn-primary">Login</a>
        <a href="{{ route('register') }}" class="btn-secondary">Register</a>
        {{-- <a href="{{ route('admin.login') }}" class="btn-tertiary">Admin Login</a> --}}
        <h1 class="text-2xl font-bold mb-4">Welcome to the Home Page</h1>
        <p>This is the main content area of the home page.</p>
    </div>
@endsection

@push('scripts')
@endpush
