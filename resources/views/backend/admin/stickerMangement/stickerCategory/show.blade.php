@extends('backend.admin.layouts.app', ['page_slug' => 'stickerCategory'])
@section('title', 'View Sticker Category')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Sticker Category Details</h1>
        <a href="{{ route('am.sticker-category.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Back to List
        </a>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <td>{{ $stickerCategory->id }}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{ $stickerCategory->name }}</td>
                </tr>
                <tr>
                    <th>Slug</th>
                    <td>{{ $stickerCategory->slug }}</td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td>
                        @if($stickerCategory->image)
                            <img src="{{ storage_url($stickerCategory->image) }}" alt="{{ $stickerCategory->name }}" width="100">
                        @else
                            <span class="text-muted">No image uploaded</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>
                        <span class="badge bg-{{ $stickerCategory->status ? 'success' : 'danger' }}">
                            {{ $stickerCategory->status ? 'Active' : 'Inactive' }}
                        </span>
                    </td>
                </tr>
                <tr>
                    <th>Created At</th>
                    <td>{{ $stickerCategory->created_at->format('d M Y, H:i') }}</td>
                </tr>
                <tr>
                    <th>Updated At</th>
                    <td>{{ $stickerCategory->updated_at->format('d M Y, H:i') }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection

