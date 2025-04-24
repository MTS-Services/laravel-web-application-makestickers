@extends('backend.admin.layouts.app', ['page_slug' => 'test'])

@push('css')
    {{--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend/assets/custom_files/css/fileUpload.css') }}"> --}}
@endpush

@section('content')
    <div class="container mt-4">
        <h2>Create New Test</h2>
        <form action="{{ route('admin.size.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Name --}}
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Number</label>
                <textarea name="number" id="number" class="form-control" rows="5">{{ $size->phone_number }}</textarea>
            </div>
            <div class="mb-3">
                <label for="adress" class="form-label">Address</label>
                <input type="text" name="adress" class="form-control" id="adress" value="{{ $size->address }}">
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <input type="text" name="city" class="form-control" id="city" value="{{ $size->city }}">
            </div>
            {{-- Image Upload --}}
            <div class="mb-3">
                <label class="form-label"> Image </label>
                <x-file-upload name="image1" type="image" maxSize="50" />
            </div>
            {{-- Submit Button --}}
            <button type="submit" class="btn btn-primary">Create Test</button>
        </form>
    </div>
@endsection

@push('js')
    {{--
    <script src="{{ asset('backend/assets/custom_files/js/fileUpload.js') }}"></script> --}}
@endpush
