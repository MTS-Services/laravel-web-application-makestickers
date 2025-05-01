@extends('backend.admin.layouts.app', ['page_slug' => 'size'])

@push('css')
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend/assets/custom_files/css/fileUpload.css') }}"> --}}
@endpush

@section('content')
<div class="container">
    <h2>Create New Size Category</h2>
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
    <form action="{{ route('admin.size.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="height" class="form-label">Height</label>
            <input type="text" name="height" class="form-control" value="{{ old('height') }}">
        </div>

        <div class="mb-3">
            <label for="width" class="form-label">Width</label>
            <input type="text" name="width" class="form-control" value="{{ old('width') }}">
        </div>

        <div class="mb-3">
            <label for="sticker_category_id" class="form-label">Sticker Category</label>
            <select name="sticker_category_id" class="form-select">
                <option value="">Select</option>
                @foreach($stickerCategories as $category)
                    <option value="{{ $category->id }}" {{ old('sticker_category_id') == $category->title ? 'selected' : '' }}>
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
                    <option value="{{ $category->id }}" {{ old('material_category_id') == $category->title ? 'selected' : '' }}>
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
                    <option value="{{ $category->id }}" {{ old('label_category_id') == $category->title ? 'selected' : '' }}>
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
        <a href="{{ route('admin.size.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection

@push('js')
    {{-- <script src="{{ asset('backend/assets/custom_files/js/fileUpload.js') }}"></script> --}}
@endpush
