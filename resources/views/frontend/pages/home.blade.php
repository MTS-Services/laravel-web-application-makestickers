@extends('frontend.layouts.app', ['title' => 'Home'])

@push('styles')
@endpush

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Welcome to the Home Page</h1>
        <p>This is the main content area of the home page.</p>
    </div>
@endsection

@push('scripts')
@endpush
