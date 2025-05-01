@extends('backend.admin.layouts.app', ['page_slug' => 'size'])
@section('title', 'Edit Size')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between justify-center">
        <h2>Edit Size</h2>
        <a href="{{ route('size.size.index') }}" class="btn btn-secondary">Back</a>
    </div>

    {{-- Show Validation Errors --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('size.size.update', encrypt($size->id)) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="sort_order" class="form-label">Sort Order</label>
            <input type="number" name="sort_order" id="sort_order" class="form-control"
                value="{{ old('sort_order', $size->sort_order) }}">
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Size Name <span class="text-danger">*</span></label>
            <input type="text" name="name" id="name" class="form-control"
                value="{{ old('name', $size->name) }}">
        </div>

        <div class="mb-3">
            <label for="width_inches" class="form-label">Width (in inches) <span class="text-danger">*</span></label>
            <input type="number" step="0.01" name="width_inches" id="width_inches" class="form-control"
                value="{{ old('width_inches', $size->width_inches) }}">
        </div>

        <div class="mb-3">
            <label for="height_inches" class="form-label">Height (in inches) <span class="text-danger">*</span></label>
            <input type="number" step="0.01" name="height_inches" id="height_inches" class="form-control"
                value="{{ old('height_inches', $size->height_inches) }}">
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select">
                <option value="1" {{ old('status', $size->status) == 1 ? 'selected' : '' }}>Active</option>
                <option value="0" {{ old('status', $size->status) == 0 ? 'selected' : '' }}>Deactive</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Update Size</button>

    </form>
</div>
@endsection