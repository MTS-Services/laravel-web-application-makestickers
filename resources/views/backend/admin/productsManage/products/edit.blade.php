@extends('backend.admin.layouts.app', ['page_slug' => 'product'])

@push('css')
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend/assets/custom_files/css/fileUpload.css') }}"> --}}
@endpush

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Edit Products</h2>
            <a href="{{ route('admin.product.index') }}" class="btn btn-primary btn-md">Back</a>
        </div>
        <form action="{{ route('admin.product.update', encrypt($products->id)) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $products->title }}" id="title">
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="unit_price" class="form-label">Unit Price</label>
                        <input type="text" name="unit_price" class="form-control" value="{{ $products->unit_price}}" id="unit_price">
                        @error('unit_price')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="sticker_category_id" class="form-label">Sticker Categorie</label>
                        <select name="sticker_category_id" id="sticker_category_id" class="form-control">
                            <option value="">Select Sticker Categorie</option>
                            @foreach ($sticker_categories as $sticker_categorie)
                                <option value="{{ $sticker_categorie->id }}" {{ $sticker_categorie->id == $products->sticker_category_id ? 'selected' : '' }}>{{ $sticker_categorie->title }}</option>
                            @endforeach
                        </select>
                        @error('sticker_category_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="size_categories_id" class="form-label">Size</label>
                        <select name="size_categories_id" id="size_categories_id" class="form-control">
                            <option value="">Select Size Category</option>
                            @foreach ($size_categories as $size_category)
                                <option value="{{ $size_category->id }}" {{ $size_category->id == $products->size_categories_id ? 'selected' : '' }}>{{ $size_category->title }}</option>
                            @endforeach
                        </select>
                        @error('size_categories_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    {{-- Description --}}
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="description" class="form-control"  rows="5">{{ $products->description }}</textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">

                    {{-- Image Upload --}}
                    <div class="mb-12">
                        <label class="form-label">Preview Image</label>
                        <x-file-upload name="preview_image" type="image" maxSize="50" />
                        @error('preview_image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            {{-- Submit Button --}}
            <button type="submit" class="btn btn-primary">update</button>
        </form>
    </div>
@endsection

@push('js')
    {{-- <script src="{{ asset('backend/assets/custom_files/js/fileUpload.js') }}"></script> --}}
@endpush
