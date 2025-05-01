@extends('backend.admin.layouts.app', ['page_slug' => 'template'])

@push('css')
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend/assets/custom_files/css/fileUpload.css') }}"> --}}
@endpush

@section('content')
    <div class="container mt-4">
        <h2>Edit Template</h2>
        <form action="{{ route('admin.template-category.update', encrypt($Template->id)) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" value="{{ old('title', $Template->title) }}" class="form-control"
                    id="title">
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="size_categories_id" class="form-label">Size Category</label>
                <select name="size_categories_id" class="form-select">
                    <option value="">Select Hight</option>
                    @foreach ($sizecategories as $category)
                        <option value="{{ $category->id }}"
                            {{ $category->id == $Template->size_categories_id ? 'selected' : '' }}>
                            {{ $category->height ?? 'Unnamed' }}
                        </option>
                    @endforeach
                </select>
                @error('size_categories_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="mt-3 mb-3">
                <select name="size_categories_id" class="form-select">
                    <option value="">Select Width</option>
                    @foreach ($sizecategories as $category)
                        <option value="{{ $category->id }}"
                            {{ $category->id == $Template->size_categories_id ? 'selected' : '' }}>
                            {{ $category->width ?? 'Unnamed' }}
                        </option>
                    @endforeach
                </select>
                </div>

            </div>
            <div class="mb-3">
                <label for="sticker_category_id" class="form-label">Sticker Category</label>
                <select name="sticker_category_id" class="form-select">
                    <option value="">Select</option>
                    @foreach ($stickerCategories as $category)
                        <option value="{{ $category->id }}"
                            {{ $category->id == $Template->sticker_category_id ? 'selected' : '' }}>
                            {{ $category->title ?? 'Unnamed' }}
                        </option>
                    @endforeach
                </select>
                @error('sticker_category_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="material_category_id" class="form-label">Material Category</label>
                <select name="material_category_id" class="form-select">
                    <option value="">Select</option>
                    @foreach ($materialCategories as $category)
                        <option value="{{ $category->id }}"
                            {{ $category->id == $Template->material_category_id ? 'selected' : '' }}>
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
                            {{ $category->id == $Template->label_category_id ? 'selected' : '' }}>
                            {{ $category->title ?? 'Unnamed' }}
                        </option>
                    @endforeach
                </select>
            </div>
            {{-- Image Upload --}}
            <div class="mb-3">
                <label for="image" class="form-label">Image</label><br>
                @if ($Template->image)
                    <img src="{{ storage_url($Template->image) }}" width="80" class="mb-2">
                @endif
                <input type="file" name="image" class="form-control">
            </div>
            {{-- Submit Button --}}
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
@push('js')
    {{-- <script src="{{ asset('backend/assets/custom_files/js/fileUpload.js') }}"></script> --}}
@endpush
