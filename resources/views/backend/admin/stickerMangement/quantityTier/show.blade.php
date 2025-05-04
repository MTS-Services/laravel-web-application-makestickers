@extends('backend.admin.layouts.app', ['page_slug' => 'quantityTier'])
@section('title', 'View Quantity Tier')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="d-sm-flex align-items-center justify-content-between mb-3">
                <h3 class="card-title">Quantity Tier Details</h3>
                <div class="card-tools">
                    <a href="{{ route('am.quantity-tier.index') }}" class="btn btn-secondary btn-sm">
                        <i class="fas fa-arrow-left"></i> Back to List
                    </a>
                </div>
            </div>

            <div class="card shadow">
                <div class="card-body">
                    <dl class="row">
                        <dt class="col-sm-4">Minimum Quantity</dt>
                        <dd class="col-sm-8">{{ $quantityTier->min_quantity }}</dd>

                        <dt class="col-sm-4">Maximum Quantity</dt>
                        <dd class="col-sm-8">
                            {{ $quantityTier->max_quantity ?? 'Unlimited' }}
                        </dd>

                        <dt class="col-sm-4">Price Multiplier</dt>
                        <dd class="col-sm-8">{{ number_format($quantityTier->price_multiplier, 2) }}</dd>

                        <dt class="col-sm-4">Sort Order</dt>
                        <dd class="col-sm-8">{{ $quantityTier->sort_order }}</dd>

                        <dt class="col-sm-4">Created By</dt>
                        <dd class="col-sm-8">{{ $quantityTier->createdBy->name ?? 'System' }}</dd>

                        <dt class="col-sm-4">Created At</dt>
                        <dd class="col-sm-8">{{ timeFormat($quantityTier->created_at )}}</dd>

                        <dt class="col-sm-4">Updated By</dt>
                        <dd class="col-sm-8">{{ $quantityTier->updatedBy->name ?? 'System' }}</dd>


                        <dt class="col-sm-4">Last Updated</dt>
                        <dd class="col-sm-8">{{ timeFormat($quantityTier->updated_at )}}</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
