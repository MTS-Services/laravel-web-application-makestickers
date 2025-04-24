@extends('backend.admin.layouts.app', ['page_slug' => 'faq_category'])

@section('content')
<div class="row mt-4">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3>Edit FAQ Category</h3>
                <a href="{{ route('admin.faqCategory.index') }}" class="btn btn-sm btn-secondary">Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.faqCategory.update', $faqCategory->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group mb-3">
                        <label for="title">Category Title</label>
                        <input type="text" name="title" class="form-control" id="title" value="{{ old('title', $faqCategory->title) }}" required>
                        @error('title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="slug">Slug (optional)</label>
                        <input type="text" name="slug" class="form-control" id="slug" value="{{ old('slug', $faqCategory->slug) }}">
                        @error('slug')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Update Category</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
