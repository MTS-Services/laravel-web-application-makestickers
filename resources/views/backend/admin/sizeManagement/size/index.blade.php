@extends('backend.admin.layouts.app', ['page_slug' => 'size'])
@section('title', 'Size Management')
@section('content')
<div class="container">
    <div class="d-flex justify-content-between justify-center">
        <h2>Sizes List</h2>

        @if (session('success'))
        <div style="color: green;">{{ session('success') }}</div>
        @endif

        <a href="{{ route('size.size.create') }}" class="btn btn-primary mb-3">Add New Size</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Sort Order</th>
                <th>Name</th>
                <th>Dimensions (W x H in inches)</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($sizes as $size)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $size->sort_order }}</td>
                <td>{{ $size->name }}</td>
                <td>{{ $size->width_inches }} x {{ $size->height_inches }}</td>
                <td>
                    @if ($size->status)
                    <span class="badge bg-success">Active</span>
                    @else
                    <span class="badge bg-danger">Deactive</span>
                    @endif
                </td>
                <td>
                    <!-- <a href="{{ route('size.size.edit', encrypt($size->id)) }}" class="btn btn-sm btn-warning">Edit</a>

                    <form action="{{ route('size.size.destroy', encrypt($size->id)) }}" method="POST" style="display:inline-block;"
                        onsubmit="return confirm('Are you sure to delete this size?');">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                    </form> -->

                    <div
                        class="btn-group d-flex align-items-center gap-3 flex-wrap justify-content-start">
                        <i class="icon-grid reorder fs-4 float-left" style="cursor: move;"></i>

                        <div class="dropdown">
                            <a href="javascript:void(0)" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="icon-settings fs-3 setting"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end"
                                aria-labelledby="dropdownMenuButton1">
                               
                                <li>
                                    <a class="dropdown-item"
                                        href="{{ route('size.size.edit', encrypt($size->id)) }}">
                                        {{ __('Edit') }}
                                    </a>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-item dropdown-toggle"
                                        href="javascript:void(0)" id="status" role="button"
                                        aria-expanded="false">
                                        {{ __('Status') }}
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="status">
                                        @foreach ($size->getStatusBtnText($size->status) as $status)
                                        <li class="dropdown-item">
                                            <a href="{{ route('size.status', [encrypt($size->id), encrypt(array_search($status['text'], $size->getStatus()))]) }}"
                                                class="text-{{ $status['class'] }}">
                                                {{ $status['text'] }}
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li>
                                    <a title="Delete" href="javascript:void(0)"
                                        onclick="confirmDelete(() => document.getElementById('delete-form-{{ $size->id }}').submit());"
                                        class="dropdown-item text-danger" data-id="">
                                        {{ __('Delete') }}
                                    </a>
                                    <form id="delete-form-{{ $size->id }}"
                                        action="{{ route('size.size.destroy', encrypt($size->id)) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6">No sizes found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    {{-- Pagination links --}}
    {{ $sizes->links() }}
</div>
@endsection