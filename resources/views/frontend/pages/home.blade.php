@extends('frontend.layouts.app', ['page_slug' => 'home'])
@section('title', 'Home')

@push('styles')
@endpush

@section('content')
    <a href="{{ route('frontend.returns') }}"> Returns Policy</a>
@endsection