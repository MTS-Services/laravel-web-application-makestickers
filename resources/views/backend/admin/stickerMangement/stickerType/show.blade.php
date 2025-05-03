@extends('backend.admin.layouts.app', ['page_slug' => 'stickerType'])
@section('title', 'Sticker Type Details')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="page-title">Sticker Type Details</h1>
    </div>

    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Sticker Type Information</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="mb-2">
                        <strong class="text-muted">Category:</strong>
                        <span class="badge bg-secondary">{{ $stickerType->category->name }}</span>
                    </div>
                    <div class="mb-2">
                        <strong class="text-muted">Name:</strong>
                        <h5>{{ $stickerType->name }}</h5>
                    </div>
                    <div class="mb-2">
                        <strong class="text-muted">Slug:</strong>
                        <code>{{ $stickerType->slug }}</code>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="mb-2">
                        <strong class="text-muted">Status:</strong>
                        <span class="badge bg-{{ $stickerType->status ? 'success' : 'danger' }}">
                            {{ $stickerType->status ? 'Active' : 'Inactive' }}
                        </span>
                    </div>
                    <div class="mb-2">
                        <strong class="text-muted">Featured:</strong>
                        <span class="badge bg-{{ $stickerType->is_featured ? 'warning' : 'secondary' }}">
                            {{ $stickerType->is_featured ? 'Yes' : 'No' }}
                        </span>
                    </div>
                    <div class="mb-2">
                        <strong class="text-muted">Description:</strong>
                        <p>{{ $stickerType->description ?? 'No description available' }}</p>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <strong class="text-muted">Thumbnail:</strong>
                <div class="d-flex align-items-center">
                    @if ($stickerType->thumbnail)
                        <img src="{{ storage_url($stickerType->thumbnail) }}" alt="{{ $stickerType->name }}" class="img-fluid rounded" style="max-width: 200px;">
                    @else
                        <span>No thumbnail available</span>
                    @endif
                </div>
            </div>

            <div class="mt-4 text-center">
                <a href="{{ route('am.sticker-types.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Back to List
                </a>
            </div>
        </div>
    </div>
@endsection

@push('styles')
<style>
    .page-title {
        font-size: 2rem;
        font-weight: 600;
        color: #333;
    }
    .card {
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }
    .card-header {
        border-radius: 10px 10px 0 0;
        padding: 20px;
    }
    .badge {
        font-size: 0.9rem;
        font-weight: 500;
    }
    .btn {
        padding: 10px 20px;
        font-size: 1rem;
    }
</style>
@endpush

