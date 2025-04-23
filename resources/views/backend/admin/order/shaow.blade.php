@extends('backend.admin.layouts.app', ['page_slug' => 'show'])
@section('title', 'Show Order')
@section('content')
<div class="row mt-5">
    <div class="col-md-12">
        <h1 class="fs-2 fw-bold text-center">Show Order</h1>
        <p class="mt-4 text-center">Welcome to your dashboard, {{ admin()->name }}!</p>
    </div>
</div>

@endsection

