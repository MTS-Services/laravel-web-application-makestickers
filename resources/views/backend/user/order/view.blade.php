@extends('frontend.layouts.app', ['page_slug' => 'view'])
@section('title', 'Order View')
@section('content')
<div class="row mt-5">
    <div class="col-md-12">
        <h1 class="fs-2 fw-bold text-center">Order View</h1>
        <p class="mt-4 text-center">Welcome to your dashboard, {{ user()->name }}!</p>
    </div>
</div>
@endsection
