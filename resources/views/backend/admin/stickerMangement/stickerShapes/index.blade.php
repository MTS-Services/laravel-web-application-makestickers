@extends('backend.admin.layouts.app', ['page_slug' => 'stickerShapes'])
@section('title', 'Sticker Shapes')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Sticker Shapes</h1>
        <a href="{{ route('am.sticker-shape.create') }}"
           class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Add New
        </a>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 fw-bold">All Sticker Shapes</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead class="">
                        <tr>
                            <th width="5%">#</th>
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

                                {{-- Image --}}
                                <td>
                                    <img src="{{ storage_url($shape->image) }}"
                                         alt="{{ $shape->name }}"
                                         width="50"
                                         onerror="this.src='/path/to/placeholder.png'">
                                </td>

                                {{-- Name --}}
                                <td>{{ $shape->name }}</td>

                                {{-- Price Modifier --}}
                                <td>{{ number_format($shape->price_modifier, 2) }}</td>

                                {{-- Status Badge --}}
                                <td>
                                    @if($shape->status)
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-danger">Inactive</span>
                                    @endif
                                </td>

                                {{-- Created At --}}
                                <td>{{ $shape->created_at->format('d M Y, h:i A') }}</td>

                                {{-- Created By (null‑safe) --}}
                                <td>{{ optional($shape->createdBy)->name ?? 'System' }}</td>

                                {{-- Actions --}}
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('am.sticker-shape.show', encrypt($shape->id)) }}"
                                           class="btn btn-sm btn-info">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('am.sticker-shape.edit', encrypt($shape->id)) }}"
                                           class="btn btn-sm btn-warning">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('am.sticker-shape.destroy', encrypt($shape->id)) }}"
                                              method="POST" class="d-inline"
                                              onsubmit="return confirm('Are you sure you want to delete this shape?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">No sticker shapes found.</td>
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
