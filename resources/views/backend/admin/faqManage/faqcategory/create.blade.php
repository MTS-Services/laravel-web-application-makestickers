@extends('backend.admin.layouts.app', ['page_slug' => 'faqcategory'])

@section('content')
<div class="row mt-4">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3>Add FAQ Category</h3>
                <a href="{{ route('admin.faqcategory.index') }}" class="btn btn-sm btn-secondary">Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.faqcategory.store') }}" method="POST">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="title">Category Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Enter category title" value="{{ old('title') }}" required>
                        @error('title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="slug">Slug (optional)</label>
                        <input type="text" name="slug" class="form-control" id="slug" placeholder="Auto or custom slug" value="{{ old('slug') }}">
                        @error('slug')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-success">Save Category</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
