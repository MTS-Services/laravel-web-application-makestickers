@extends('backend.admin.layouts.app', ['page_slug' => 'stickerCategory'])
@section('title', 'Sticker Category')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Sticker Categories</h1>
        <a href="{{ route('am.sticker-category.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Add New
        </a>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($categories as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>
                                <td>
                                     <img src="{{ storage_url($category->image)}}" alt="{{ $category->name }}" width="50">

                                </td>
                                <td>
                                    <span class="badge bg-{{ $category->status ? 'success' : 'danger' }}">
                                        {{ $category->status ? 'Active' : 'Inactive' }}
                                    </span>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('am.sticker-category.show', $category) }}" class="btn btn-sm btn-info">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('am.sticker-category.edit', $category) }}" class="btn btn-sm btn-warning">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <button type="button" class="btn btn-sm btn-danger"
                                                onclick="document.getElementById('delete-form-{{ $category->id }}').submit();">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                        <form id="delete-form-{{ $category->id }}"
                                              action="{{ route('am.sticker-category.destroy', $category) }}"
                                              method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">No categories found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            {{ $categories->links() }}
        </div>
    </div>
@endsection
