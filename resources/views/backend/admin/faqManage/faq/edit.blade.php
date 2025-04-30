@extends('backend.admin.layouts.app', ['page_slug' => 'faq'])

@section('content')
    <div class="row mt-4">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Edit FAQ</h3>
                    <a href="{{ route('admin.faq.index') }}" class="btn btn-sm btn-secondary">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.faq.update', $faq->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="faq_category_id" class="form-label">FAQ Category</label>
                            <select name="faq_category_id" class="form-control">
                                <option value="">Select a Category</option>
                                @foreach ($faqCategories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ $faq->faq_category_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->title }}
                                    </option>
                                @endforeach
                            </select>
                            @error('faq_category_id')
                                <p class="text-danger text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="question" class="form-label">Question</label>
                            <input type="text" name="question" class="form-control" value="{{ $faq->question }}">
                            @error('question')
                                <p class="text-danger text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="answer" class="form-label">Answer</label>
                            <textarea name="answer" class="form-control" rows="4">{{ $faq->answer }}</textarea>
                            @error('answer')
                                <p class="text-danger text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Update FAQ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
