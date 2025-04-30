@extends('backend.admin.layouts.app', ['page_slug' => 'template'])

@push('css')
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend/assets/custom_files/css/fileUpload.css') }}"> --}}
@endpush

@section('content')
    <div class="container">
        <h2>Create New Template Category</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Validation Error!</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('admin.template-category.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title') }}">
            </div>
            <div class="mb-3">
                <label for="size_categories_id" class="form-label">size categories</label>
                <select name="size_categories_id" class="form-select">
                    <option value="">Select Height</option>
                    @foreach ($sizecategories as $category)
                        <option value="{{ $category->id }}"
                            {{ old('size_categories_id') == $category->height ? 'selected' : '' }}>
                            {{ $category->height ?? 'Unnamed' }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mt-3">
                <select name="size_categories_id" class="form-select">
                    <option value="">Select Width</option>
                    @foreach ($sizecategories as $category)
                        <option value="{{ $category->id }}"
                            {{ old('size_categories_id') == $category->width ? 'selected' : '' }}>
                            {{ $category->width ?? 'Unnamed' }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="sticker_category_id" class="form-label">Sticker Category</label>
                <select name="sticker_category_id" class="form-select">
                    <option value="">Select</option>
                    @foreach ($stickerCategories as $category)
                        <option value="{{ $category->id }}"
                            {{ old('sticker_category_id') == $category->title ? 'selected' : '' }}>
                            {{ $category->title ?? 'Unnamed' }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="material_category_id" class="form-label">Material Category</label>
                <select name="material_category_id" class="form-select">
                    <option value="">Select</option>
                    @foreach ($materialCategories as $category)
                        <option value="{{ $category->id }}"
                            {{ old('material_category_id') == $category->title ? 'selected' : '' }}>
                            {{ $category->title ?? 'Unnamed' }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="label_category_id" class="form-label">Label Category</label>
                <select name="label_category_id" class="form-select">
                    <option value="">Select</option>
                    @foreach ($labelCategories as $category)
                        <option value="{{ $category->id }}"
                            {{ old('label_category_id') == $category->title ? 'selected' : '' }}>
                            {{ $category->title ?? 'Unnamed' }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image (optional)</label>
                <input type="file" name="image" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Create</button>
            <a href="{{ route('admin.template-category.store') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
@push('js')
    {{-- <script src="{{ asset('backend/assets/custom_files/js/fileUpload.js') }}"></script> --}}
@endpush
