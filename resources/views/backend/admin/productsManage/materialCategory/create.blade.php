@extends('backend.admin.layouts.app', ['page_slug' => 'material_category'])

@push('css')
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend/assets/custom_files/css/fileUpload.css') }}"> --}}
@endpush

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Create Material Category</h2>
            <a href="{{ route('admin.material-category.index') }}" class="btn btn-primary btn-md">Back</a>
        </div>
        <form action="{{ route('admin.material-category.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" id="title">
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" name="slug" class="form-control" id="slug">
                        @error('slug')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="sticker_category_id" class="form-label">Sticker Categorie</label>
                        <select name="sticker_category_id" id="sticker_category_id" class="form-control">
                            <option value="">Select Sticker Categorie</option>
                            @foreach ($sticker_categories as $sticker_categorie)
                                <option value="{{ $sticker_categorie->id }}">{{ $sticker_categorie->title }}</option>
                            @endforeach
                        </select>
                        @error('sticker_category_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    {{-- Description --}}
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="description" class="form-control" rows="5"></textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">

                    {{-- Image Upload --}}
                    <div class="mb-12">
                        <label class="form-label">Image</label>
                        <x-file-upload name="image" type="image" maxSize="50" />
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            {{-- Submit Button --}}
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection

@push('js')
    {{-- <script src="{{ asset('backend/assets/custom_files/js/fileUpload.js') }}"></script> --}}
@endpush
