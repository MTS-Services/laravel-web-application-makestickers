@extends('backend.admin.layouts.app', ['page_slug' => 'test'])

@push('css')
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend/assets/custom_files/css/fileUpload.css') }}"> --}}
@endpush

@section('content')
    <div class="container mt-4">
        <h2>Edit Test</h2>
        <form action="{{ route('admin.test.update', encrypt($test->id)) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Name --}}
            <div class="mb-3">
                <label for="name" class="form-label">Test Name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $test->name }}">
            </div>

            {{-- Slug --}}
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" name="slug" class="form-control" id="slug" value="{{ $test->slug }}">
            </div>

            {{-- Description --}}
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control" rows="5">{{ $test->description }}</textarea>
            </div>

            {{-- Image Upload --}}
            <div class="mb-3">
                <label class="form-label">Test Image 1</label>
                <x-file-upload name="image1" type="image" existingFile="{{ $test->image1 }}" maxSize="50" />
            </div>
            <div class="mb-3">
                <label class="form-label">Test Image 2</label>
                <x-file-upload name="image2" type="image" existingFile="{{ $test->image2 }}" maxSize="50" />
            </div>

            {{-- Video Upload --}}
            <div class="mb-3">
                <label class="form-label">Test Video 1</label>
                <x-file-upload name="video2" type="video" existingFile="{{ $test->video1 }}" maxSize="20" />
            </div>
            <div class="mb-3">
                <label class="form-label">Test Video 2</label>
                <x-file-upload name="video2" type="video" existingFile="{{ $test->video2 }}" maxSize="20" />
            </div>

            {{-- File Upload --}}
            <div class="mb-3">
                <label class="form-label">Upload File 1</label>
                <x-file-upload name="pdf1" type="file" existingFile="{{ $test->pdf1 }}" maxSize="10" />
            </div>
            <div class="mb-3">
                <label class="form-label">Upload File 2</label>
                <x-file-upload name="pdf2" type="file" existingFile="{{ $test->pdf2 }}" maxSize="10" />
            </div>

            {{-- Submit Button --}}
            <button type="submit" class="btn btn-primary">Update Test</button>
        </form>
    </div>
@endsection

@push('js')
    {{-- <script src="{{ asset('backend/assets/custom_files/js/fileUpload.js') }}"></script> --}}
@endpush
