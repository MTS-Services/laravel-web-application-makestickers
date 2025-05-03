@extends('backend.admin.layouts.app', ['page_slug' => 'stickerCategory'])
@section('title', 'Sticker Category Create')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Create Sticker Category</h1>
        <a href="{{ route('am.sticker-category.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Back to Categories
        </a>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('am.sticker-category.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control " id="name"
                        name="name" value="{{ old('name') }}" >
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control " id="slug"
                        name="slug" value="{{ old('slug') }}">
                    <div class="form-text">Leave empty for auto-generation from name.</div>
                    @error('slug')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control " id="description" name="description"
                        rows="4">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <x-file-upload name="image" type="image"
                        maxSize="2" />
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="status" name="status" value="1" checked>
                    <label class="form-check-label" for="status">Active</label>
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Create Category
                </button>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // Auto-generate slug from name
        document.getElementById('name').addEventListener('input', function() {
            const nameValue = this.value;
            const slugField = document.getElementById('slug');

            if (!slugField.value) {
                slugField.value = nameValue
                    .toLowerCase()
                    .replace(/[^\w\s-]/g, '')
                    .replace(/[\s_-]+/g, '-')
                    .replace(/^-+|-+$/g, '');
            }
        });
    </script>
@endpush
