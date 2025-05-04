@extends('backend.admin.layouts.app', ['page_slug' => 'stickerShapes'])
@section('title', 'View Sticker Shape')

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">
                <i class="fas fa-shapes mr-2"></i> Sticker Shape Details
            </h1>
            <a href="{{ route('am.sticker-shape.index') }}" class="btn btn-sm btn-outline-secondary shadow-sm">
                <i class="fas fa-arrow-left"></i> Back to List
            </a>
        </div>

        <!-- Details Card -->
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-lg border-left-primary">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0"><i class="fas fa-info-circle"></i> Shape Information</h5>
                    </div>
                    <div class="card-body">
                        <dl class="row mb-0">
                            <dt class="col-sm-3">Name</dt>
                            <dd class="col-sm-9">{{ $stickershape->name }}</dd>

                            <dt class="col-sm-3">Price Modifier</dt>
                            <dd class="col-sm-9">${{ number_format($stickershape->price_modifier, 2) }}</dd>

                            <dt class="col-sm-3">Image</dt>
                            <dd class="col-sm-9">
                                @if ($stickershape->image)
                                    <img src="{{ storage_url($stickershape->image) }}" alt="{{ $stickershape->name }}"
                                        width="100">
                                @else
                                    <span class="text-muted">No image uploaded.</span>
                                @endif
                            </dd>

                            <dt class="col-sm-3">Status</dt>
                            <dd class="col-sm-9">
                                <span class="badge {{ $stickershape->status ? 'badge-success' : 'badge-secondary' }}">
                                    {{ $stickershape->status ? 'Active' : 'Inactive' }}
                                </span>
                            </dd>

                            <dt class="col-sm-3">Created At</dt>
                            <dd class="col-sm-9">{{ $stickershape->created_at->format('d M Y, h:i A') }}</dd>

                            <dt class="col-sm-3">Updated At</dt>
                            <dd class="col-sm-9">{{ $stickershape->updated_at->format('d M Y, h:i A') }}</dd>
                        </dl>
                        <div class="mt-4 text-right">
                            <a href="{{ route('am.sticker-shape.index') }}" class="btn btn-outline-primary">
                                <i class="fas fa-arrow-left"></i> Back to List
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
