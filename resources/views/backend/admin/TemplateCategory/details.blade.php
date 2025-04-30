@extends('backend.admin.layouts.app', ['page_slug' => 'template'])
@section('content')
    <div class="container">
        <h2>Size Category Details</h2>
        <div class="card mt-4">
            <div class="card-body">

                <div class="mb-3">
                    <strong>Title:</strong> {{ $template->title ?? 'N/A' }}
                </div>
                <div class="mb-3">
                    <strong>size Categories:</strong>
                    {{ $template->sizeCategories->name ?? 'N/A' }}
                </div>

                <div class="mb-3">
                    <strong>Sticker Category:</strong>
                    {{ $template->stickerCategory->title ?? 'N/A' }}
                </div>

                <div class="mb-3">
                    <strong>Material Category:</strong>
                    {{ $template->materialCategory->title ?? 'N/A' }}
                </div>

                <div class="mb-3">
                    <strong>Label Category:</strong>
                    {{ $template->labelCategory->title ?? 'N/A' }}
                </div>

                <div class="mb-3">
                    <strong>Image:</strong><br>
                    @if ($template->image)
                        <img src="{{ storage_url($template->image) }}" width="150" alt="Size Image">
                    @else
                        <p>No image available.</p>
                    @endif
                </div>
                <a href="{{ route('admin.template-category.index') }}" class="btn btn-primary btn-sm">Back to List</a>
            </div>
        </div>
    </div>
@endsection
