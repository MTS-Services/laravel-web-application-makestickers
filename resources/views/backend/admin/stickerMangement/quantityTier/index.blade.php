@extends('backend.admin.layouts.app', ['page_slug' => 'quantityTier'])
@section('title', 'Quantity Tier')


@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class=" d-sm-flex align-items-center justify-content-between mb-4">
                <h3 class="card-title">Quantity Tiers</h3>
                <div class="card-tools">
                    <a href="{{ route('am.quantity-tier.create') }}" class="btn btn-primary btn-sm">
                        <i class="fas fa-plus"></i> Add New Tier
                    </a>
                </div>
            </div>
            <div class="card">

                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <table class="table table-striped table-hover">
                        <thead class="">
                            <tr>
                                <th>ID</th>
                                <th>Min Quantity</th>
                                <th>Max Quantity</th>
                                <th>Price Multiplier</th>
                                <th>Creat By</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($quantityTiers as $tier)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $tier->min_quantity }}</td>
                                    <td>{{ $tier->max_quantity ?? 'Unlimited' }}</td>
                                    <td>{{ $tier->price_multiplier }}</td>
                                    <td>{{ optional($tier->createdBy)->name ?? 'System'}}</td>
                                    <td>{{ timeFormat($tier->created_at) }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('am.quantity-tier.show', encrypt($tier->id)) }}"
                                               class="btn btn-info btn-sm">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('am.quantity-tier.edit', encrypt($tier->id)) }}"
                                               class="btn btn-warning btn-sm">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('am.quantity-tier.destroy', encrypt($tier->id))}}"
                                                  method="POST"
                                                  onsubmit="return confirm('Are you sure you want to delete this tier?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">No quantity tiers found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="mt-3">
                    {{ $quantityTiers->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
