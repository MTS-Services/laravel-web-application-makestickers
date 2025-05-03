@extends('backend.admin.layouts.app', ['page_slug' => 'stickerType'])
@section('title', 'Sticker Type')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Sticker Types</h1>
        <a href="{{ route('am.sticker-type.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Add new
        </a>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive overflow-visible">
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr >
                            <th>ID</th>
                            <th>Category</th>
                            <th>Name</th>
                            <th>Thumbnail</th>
                            <th>Status</th>
                            <th>Featured</th>
                            <th>Created At</th>
                            <th>Created By</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($stickerTypes as $type)
                            <tr class="overflow-visible">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $type->category->name }}</td>
                                <td>{{ $type->name }}</td>
                                <td>
                                    <img src="{{ storage_url($type->thumbnail) }}" alt="{{ $type->name }}" width="50">
                                </td>
                                <td>
                                    <span class="badge bg-{{ $type->status ? 'success' : 'danger' }}">
                                        {{ $type->status ? 'Active' : 'Inactive' }}
                                    </span>
                                </td>
                                <td>
                                    <span class="badge bg-{{ $type->is_featured ? 'info' : 'secondary' }}">
                                        {{ $type->is_featured ? 'Featured' : 'Not Featured' }}
                                    </span>
                                </td>
                                <td>{{ optional($type->createdBy)->name ?? 'System'}}</td>
                                <td>{{ timeFormat($type->created_at) }}</td>
                                <td>
                                    <div class="dropdown">
                                        <a href="javascript:void(0)" type="button" id="dropdownMenuButton1"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="icon-settings fs-3 setting"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end " aria-labelledby="dropdownMenuButton1">
                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ route('am.sticker-type.show', encrypt($type->id)) }}">
                                                    {{ __('Details') }}
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ route('am.sticker-type.edit', encrypt($type->id)) }}">
                                                    {{ __('Edit') }}
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" href="javascript:void(0)"
                                                    id="status" role="button" aria-expanded="false">
                                                    {{ __('Status') }}
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="status">
                                                    @foreach ($type->getStatusBtnText($type->status) as $status)
                                                        <li class="dropdown-item">
                                                            <a href="{{ route('am.sticker-type.status', [encrypt($type->id), encrypt(array_search($status['text'], $type->getStatus()))]) }}"
                                                                class="text-{{ $status['class'] }}">
                                                                {{ $status['text'] }}
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li>
                                                <a title="Delete" href="javascript:void(0)"
                                                    onclick="confirmDelete(() => document.getElementById('delete-form-{{ $type->id }}').submit());"
                                                    class="dropdown-item text-danger" data-id="">
                                                    {{ __('Delete') }}
                                                </a>
                                                <form id="delete-form-{{ $type->id }}"
                                                    action="{{ route('am.sticker-type.destroy', encrypt($type->id)) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">No sticker types found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            {{ $stickerTypes->links() }}
        </div>
    </div>
@endsection
