@extends('backend.admin.layouts.app', ['page_slug' => 'sizes'])

@push('css')
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend/assets/custom_files/css/fileUpload.css') }}"> --}}
@endpush

@section('content')
    <div class="container mt-4">
        <h2>Edit Size</h2>
        <form action="{{ route('admin.size.update', encrypt($size->id)) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')


            <div class="mb-3">
                <label for="height" class="form-label">Height</label>
                <input type="text" name="height" value="{{ old('height', $size->height) }}" class="form-control">
            </div>

            <div class="mb-3">
                <label for="width" class="form-label">Width</label>
                <input type="text" name="width" value="{{ old('width', $size->width) }}" class="form-control">
            </div>

            <div class="mb-3">
                <label for="sticker_category_id" class="form-label">Sticker Category</label>
                <select name="sticker_category_id" class="form-select">
                    <option value="">Select</option>
                    @foreach($stickerCategories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == $size->sticker_category_id ? 'selected' : '' }}>
                            {{ $category->title ?? 'Unnamed' }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="material_category_id" class="form-label">Material Category</label>
                <select name="material_category_id" class="form-select">
                    <option value="">Select</option>
                    @foreach($materialCategories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == $size->material_category_id ? 'selected' : '' }}>
                            {{ $category->title ?? 'Unnamed' }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="label_category_id" class="form-label">Label Category</label>
                <select name="label_category_id" class="form-select">
                    <option value="">Select</option>
                    @foreach($labelCategories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == $size->label_category_id ? 'selected' : '' }}>
                            {{ $category->title ?? 'Unnamed' }}
                        </option>
                    @endforeach
                </select>
            </div>
            {{-- Image Upload --}}
            <div class="mb-3">
                <label for="image" class="form-label">Image</label><br>
                @if ($size->image)
                    <img src="{{storage_url($size->image) }}" width="80" class="mb-2">
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
