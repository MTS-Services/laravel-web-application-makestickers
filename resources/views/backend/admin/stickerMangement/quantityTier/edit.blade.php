@extends('backend.admin.layouts.app', ['page_slug' => 'quantityTier'])
@section('title', 'Edit Quantity Tier')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class="card-title">Edit Quantity Tier</h3>
                <div class="card-tools">
                    <a href="{{ route('am.quantity-tier.index') }}" class="btn btn-primary btn-sm">
                        <i class="fas fa-arrow-left"></i> Back to List
                    </a>
                </div>
            </div>
            <div class="card">

                <div class="card-body">
                    <form action="{{ route('am.quantity-tier.update', encrypt($quantityTier->id)) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="min_quantity">Minimum Quantity</label>
                            <input type="number" name="min_quantity" id="min_quantity" class="form-control"
                                   value="{{ old('min_quantity', $quantityTier->min_quantity) }}" min="1">
                            @error('min_quantity')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="max_quantity">Maximum Quantity</label>
                            <input type="number" name="max_quantity" id="max_quantity" class="form-control"
                                   value="{{ old('max_quantity', $quantityTier->max_quantity) }}" min="1">
                            @error('max_quantity')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                            <small class="form-text text-muted">Leave empty for unlimited maximum quantity</small>
                        </div>

                        <div class="form-group">
                            <label for="price_multiplier">Price Multiplier</label>
                            <input type="number" name="price_multiplier" id="price_multiplier" class="form-control"
                                   value="{{ old('price_multiplier', $quantityTier->price_multiplier) }}" min="0" step="0.01">
                            @error('price_multiplier')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                            <small class="form-text text-muted">Used to calculate price. Example: 1.00 = 100%, 0.9 = 90% (10% discount)</small>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Update Quantity Tier</button>
                            <a href="{{ route('am.quantity-tier.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
