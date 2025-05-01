@extends('backend.admin.layouts.app', ['page_slug' => 'show'])
@section('title', 'Show Order')
@section('content')
<div class="row mt-5">
    <div class="col-md-12">
        <h1 class="fs-2 fw-bold text-center">Order View</h1>
        <p class="mt-4 text-center">{{ admin()->name }}!</p>
        <p class="mt-4 text-center"> {{ admin()->email }}!</p>
        
    </div>
</div>

@endsection

