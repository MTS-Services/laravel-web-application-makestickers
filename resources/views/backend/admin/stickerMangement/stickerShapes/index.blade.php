@extends('backend.admin.layouts.app', ['page_slug' => 'stickerShapes'])
@section('title', 'Sticker Shapes')
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Sticker Shapes</h1>
        <a href="{{ route('am.sticker-shape.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Add New
        </a>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold">All Sticker Shapes</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table  table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead class="table-dark">
                        <tr>
                            <th width="5%">ID</th>
                            <th width="10%">Image</th>
                            <th width="25%">Name</th>
                            <th width="15%">Price Modifier</th>
                            <th width="10%">Status</th>
                            <th width="15%">Created At</th>
                            <th width="15%">Created By</th>
                            <th width="20%">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="sortable-shapes">
                        @forelse ($stickerShapes as $shape)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $shape->name }}</td>
                                <td>
                                    <img src="{{ storage_url($shape->image)}}" alt="{{ $shape->name }}" width="50">
                                </td>
                                <td>${{ number_format($shape->price_modifier, 2) }}</td>
                                <td>
                                    <span class="badge bg-{{ $shape->status ? 'success' : 'danger' }}">
                                        {{ $shape->status ? 'Active' : 'Inactive' }}
                                    </span>
                                </td>

                                <td>{{ optional($shape->createdBy)->name ?? 'System'}}</td>
                                <td>{{ timeFormat($shape->created_at) }}</td>
                                <td>
                                    <a href="{{ route('am.sticker-shape.edit', $shape) }}" class="btn btn-sm btn-info">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="{{ route('am.sticker-shape.show', $shape) }}" class="btn btn-sm btn-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <form action="{{ route('am.sticker-shape.destroy', $shape) }}" method="POST" class="d-inline delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">No sticker shapes found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-3">
                {{ $stickerShapes->links() }}
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        // Confirm delete
        $('.delete-form').on('submit', function(e) {
            e.preventDefault();
            if (confirm('Are you sure you want to delete this sticker shape?')) {
                this.submit();
            }
        });


    });
</script>
@endpush
