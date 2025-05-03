@extends('backend.admin.layouts.app', ['page_slug' => 'typeshape'])
@section('title', 'View Type Shape')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Type-Shape Details</h1>
            <a href="{{ route('am.type-shape.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
                <i class="fas fa-arrow-left fa-sm text-white-50"></i> Back to List
            </a>
        </div>

        <div class="card shadow mb-4">
            <div class="card-body">
                <dl class="row">
                    <dt class="col-sm-3">Sticker Type</dt>
                    <dd class="col-sm-9">{{ $typeShape->stickerType->name ?? '-' }}</dd>

                    <dt class="col-sm-3">Sticker Shape</dt>
                    <dd class="col-sm-9">{{ $typeShape->stickerShape->name ?? '-' }}</dd>

                    <dt class="col-sm-3">Created By</dt>
                    <dd class="col-sm-9">{{ $typeShape->createdBy->name ?? 'System' }}</dd>

                    <dt class="col-sm-3">Created At</dt>
                    <dd class="col-sm-9">{{ $typeShape->created_at->format('d M Y, h:i A') }}</dd>

                    @if ($typeShape->updated_at != $typeShape->created_at)
                        <dt class="col-sm-3">Last Updated At</dt>
                        <dd class="col-sm-9">{{ $typeShape->updated_at->format('d M Y, h:i A') }}</dd>
                    @endif
                </dl>
            </div>
        </div>
    </div>
@endsection
