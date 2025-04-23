@extends('backend.admin.layouts.app', ['page_slug' => 'faq'])

@section('content')
<div class="row mt-4">
    <div class="col-md-10 mx-auto">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3>Create New FAQ</h3>
                <a href="{{ route('admin.faq.index') }}" class="btn btn-sm btn-secondary ">Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.faq.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="faq_category_id" class="form-label">FAQ Category</label>
                        <select name="faq_category_id" class="form-control" required>
                            <option value="">Select a Category</option>
                            @foreach ($faqCategories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="question" class="form-label">Question</label>
                <input type="text" name="question" value="{{ old('question') }}" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="answer" class="form-label">Answer</label>
                        <textarea name="answer" class="form-control" rows="4" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-success">Create FAQ</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
