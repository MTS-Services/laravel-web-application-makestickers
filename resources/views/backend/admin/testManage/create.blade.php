@extends('backend.admin.layouts.app', ['page_slug' => 'test'])

@push('css')
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend/assets/custom_files/css/fileUpload.css') }}"> --}}
@endpush

@section('content')
    <div class="container mt-4">
        <h2>Create New Test</h2>
        <form action="{{ route('admin.test.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Name --}}
            <div class="mb-3">
                <label for="name" class="form-label">Test Name</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>

            {{-- Slug --}}
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" name="slug" class="form-control" id="slug">
            </div>

            {{-- Description --}}
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control" rows="5"></textarea>
            </div>

            {{-- Image Upload --}}
            <div class="mb-3">
                <label class="form-label">Test Image 1</label>
                <x-file-upload name="image1" type="image" maxSize="50" />
            </div>
            <div class="mb-3">
                <label class="form-label">Test Image 2</label>
                <x-file-upload name="image2" type="image" maxSize="50" />
            </div>

            {{-- Video Upload --}}
            <div class="mb-3">
                <label class="form-label">Test Video 1</label>
                <x-file-upload name="video1" type="video" maxSize="20" />
            </div>
            <div class="mb-3">
                <label class="form-label">Test Video 2</label>
                <x-file-upload name="video2" type="video" maxSize="20" />
            </div>
            {{-- More Videos --}}

            {{-- Generic File Upload --}}
            <div class="mb-3">
                <label class="form-label">Upload File 1</label>
                <x-file-upload name="pdf1" type="file" maxSize="10" />
            </div>
            <div class="mb-3">
                <label class="form-label">Upload File 2</label>
                <x-file-upload name="pdf2" type="file" maxSize="10" />
            </div>

            {{-- Submit Button --}}
            <button type="submit" class="btn btn-primary">Create Test</button>
        </form>
    </div>
@endsection

@push('js')
    {{-- <script src="{{ asset('backend/assets/custom_files/js/fileUpload.js') }}"></script> --}}
@endpush
