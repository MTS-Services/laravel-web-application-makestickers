@extends('backend.admin.layouts.app', ['page_slug' => 'stickerType'])
@section('title', 'Sticker Create')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Create Sticker Type</h1>
        <a href="{{ route('am.sticker-types.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Back to Sticker Types
        </a>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('am.sticker-types.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="category_id" class="form-label">Category <span class="text-danger">*</span></label>
                    <select class="form-select "
                            id="category_id" name="category_id" >
                        <option value="">Select Category</option>
                        @foreach($categories as $id => $name)
                            <option value="{{ $id }}" {{ old('category_id') == $id ? 'selected' : '' }}>
                                {{ $name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control"
                           id="name" name="name" value="{{ old('name') }}" >
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control"
                           id="slug" name="slug" value="{{ old('slug') }}">
                    <div class="form-text">Leave empty for auto-generation from name.</div>
                    @error('slug')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control "
                              id="description" name="description" rows="4">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="thumbnail" class="form-label">Thumbnail <span class="text-danger">*</span></label>
                    <x-file-upload name="thumbnail" type="image"
                    maxSize="2" />
                    @error('thumbnail')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="is_featured" name="is_featured" value="1"
                           {{ old('is_featured') ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_featured">Featured</label>
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Create Sticker Type
                </button>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    // Auto-generate slug from name
    document.getElementById('name').addEventListener('input', function () {
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
