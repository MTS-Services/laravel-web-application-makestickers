@extends('backend.admin.layouts.app', ['page_slug' => 'typeshape'])
@section('title', 'Edit Type Shape')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 text-primary fw-bold">Edit Type-Shape</h1>
        <a href="{{ route('am.type-shape.index') }}" class="btn btn-outline-secondary btn-sm">
            <i class="fas fa-arrow-left mr-1"></i> Back to List
        </a>
    </div>

    <!-- Card -->
    <div class="card shadow border-0">
        <div class="card-header bg-primary text-white fw-semibold">
            <i class="fas fa-edit mr-2"></i> Edit Sticker Type & Shape
        </div>

        <div class="card-body">
            <form action="{{ route('am.type-shape.update', encrypt($typeshape->id)) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3 row">
                    <label for="sticker_type_id" class="col-sm-2 col-form-label fw-semibold">Sticker Type</label>
                    <div class="col-sm-10">
                        <select class="form-select" id="sticker_type_id" name="sticker_type_id">
                            <option value="">-- Select Sticker Type --</option>
                            @foreach ($stickerTypes as $type)
                                <option value="{{ $type->id }}"
                                    {{ (old('sticker_type_id', $typeshape->sticker_type_id) == $type->id) ? 'selected' : '' }}>
                                    {{ $type->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('sticker_type_id')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="sticker_shape_id" class="col-sm-2 col-form-label fw-semibold">Shape</label>
                    <div class="col-sm-10">
                        <select class="form-select" id="sticker_shape_id" name="sticker_shape_id">
                            <option value="">-- Select Shape --</option>
                            @foreach ($stickerShapes as $shape)
                                <option value="{{ $shape->id }}"
                                    {{ (old('sticker_shape_id', $typeshape->sticker_shape_id) == $shape->id) ? 'selected' : '' }}>
                                    {{ $shape->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('sticker_shape_id')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-save me-1"></i> Update
                    </button>
                    <a href="{{ route('am.type-shape.index') }}" class="btn btn-outline-secondary">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
