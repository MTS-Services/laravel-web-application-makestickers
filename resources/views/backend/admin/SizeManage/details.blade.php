@extends('backend.admin.layouts.app', ['page_slug' => 'size'])
@section('content')
<div class="container">
    <h2>Size Category Details</h2>
    <div class="card mt-4">
        <div class="card-body">

            <div class="mb-3">
                <strong>Height:</strong> {{ $size->height ?? 'N/A' }}
            </div>

            <div class="mb-3">
                <strong>Width:</strong> {{ $size->width ?? 'N/A' }}
            </div>

            <div class="mb-3">
                <strong>Sticker Category:</strong>
                {{ $size->stickerCategory->title ?? 'N/A' }}
            </div>

            <div class="mb-3">
                <strong>Material Category:</strong>
                {{ $size->materialCategory->title ?? 'N/A' }}
            </div>

            <div class="mb-3">
                <strong>Label Category:</strong>
                {{ $size->labelCategory->title ?? 'N/A' }}
            </div>

            <div class="mb-3">
                <strong>Image:</strong><br>
                @if ($size->image)
                    <img src="{{storage_url($size->image) }}" width="150" alt="Size Image">
                @else
                    <p>No image available.</p>
                @endif
            </div>
            <a href="{{ route('admin.size.index') }}" class="btn btn-primary btn-sm">Back to List</a>
        </div>
    </div>
</div>
@endsection









