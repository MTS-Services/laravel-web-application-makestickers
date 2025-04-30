@extends('backend.admin.layouts.app', ['page_slug' => 'product'])

@push('css')
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend/assets/custom_files/css/fileUpload.css') }}"> --}}
@endpush

@section('content')
    <div class="container mt-4 md:-mt-96">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Create Products</h2>
            <a href="{{ route('admin.product.index') }}" class="btn btn-primary btn-md">Back</a>
        </div>
        <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" value="{{ old('title') }}" class="form-control"
                            id="title">
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="sticker_category_id" class="form-label">Sticker Category</label>
                        <select name="sticker_category_id" id="sticker_category_id" class="form-control">
                            <option value="">Select Sticker Category</option>
                            @foreach ($sticker_categories as $sticker_category)
                                <option value="{{ $sticker_category->id }}">{{ $sticker_category->title }}</option>
                            @endforeach
                        </select>
                        @error('sticker_category_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="label_category_id" class="form-label">Label Category</label>
                        <select name="label_category_id" id="label_category_id" class="form-control">
                            <option value="">Select Label Category</option>
                            @foreach ($label_categories as $label_category)
                                <option value="{{ $label_category->id }}">{{ $label_category->title }}</option>
                            @endforeach
                        </select>
                        @error('label_category_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="size_categories_id" class="form-label">Size Category</label>
                        <select name="size_categories_id" id="size_categories_id" class="form-control">
                            <option value="">Select Size Category</option>
                            @foreach ($size_categories as $size_category)
                                <option value="{{ $size_category->id }}">{{ $size_category->title }}</option>
                            @endforeach
                        </select>
                        @error('size_categories_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    {{-- Description --}}
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="description" class="form-control" rows="5">{{ old('description') }}</textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="color_categories_id" class="form-label">Unit Price</label>
                        <input type="text" name="unit_price" value="{{ old('unit_price') }}" class="form-control"
                            id="unit_price">
                        @error('unit_price')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">

                    {{-- Image Upload --}}
                    <div class="mb-12">
                        <label class="form-label">Image</label>
                        <x-file-upload name="preview_image" type="image" maxSize="50" />
                        @error('preview_image')
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
