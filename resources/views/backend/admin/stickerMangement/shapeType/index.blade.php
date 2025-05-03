@extends('backend.admin.layouts.app', ['page_slug' => 'typeshape'])
@section('title', 'Type Shape')
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            <i class="fas fa-th-large mr-2"></i> Sticker Types & Shapes
        </h1>
        <a href="{{ route('am.type-shape.create') }}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Add New
        </a>
    </div>

    <!-- Table Card -->
    <div class="card shadow-lg mb-4 border-left-primary">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Sticker Type</th>
                            <th>Sticker Shape</th>
                            <th>Created By</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($typeshapes as $typeShape)
                            <tr >
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $typeShape->stickerType->name ?? 'N/A' }}</td>
                                <td>{{ $typeShape->stickerShape->name ?? 'N/A' }}</td>
                                <td>{{ optional($typeShape->createdBy)->name ?? 'System'}}</td>
                                <td>{{ timeFormat($typeShape->created_at) }}</td>

                                <td>
                                    <div class="btn-group btn-group-sm" role="group" aria-label="Actions">
                                        <a href="{{ route('am.type-shape.show', encrypt($typeShape->id)) }}"
                                           class="btn btn-primary" title="View">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('am.type-shape.edit', encrypt($typeShape->id)) }}"
                                           class="btn btn-info" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('am.type-shape.destroy', encrypt($typeShape->id)) }}"
                                              method="POST" class="d-inline delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" title="Delete">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted">No sticker type-shape found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
