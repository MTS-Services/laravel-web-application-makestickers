@extends('backend.admin.layouts.app', ['page_slug' => 'size'])

@section('content')
    <div class="row mt-4">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Size</h3>
                    <a href="{{ route('admin.size.create') }}" class="btn btn-primary btn-sm">Add New</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>Name</th>
                                    <th>email</th>
                                    <th>Number</th>
                                    <th>address</th>
                                    <th>city</th>
                                    <th>Image</th>
                                    <th width="10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($sizes as $size)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $size->name }}</td>
                                        <td>{{ $size->email }}</td>
                                        <td>{{ $size->phone_number }}</td>
                                        <td>{{ $size->address }}</td>
                                        <td>{{ $size->city }}</td>
                                        <td>
                                            <img src="{{ storage_url($size->image) }}" alt="size Image"
                                                style="width: 50px; aspect-ratio:16/9; object-fit:cover;">
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="javascript:void(0)" type="button" id="dropdownMenuButton1"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="icon-settings fs-3 setting"></i>
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ route('admin.size.show', encrypt($size->id)) }}">
                                                            {{ __('Details') }}
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ route('admin.size.edit', encrypt($size->id)) }}">
                                                            {{ __('Edit') }}
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a title="Delete" href="javascript:void(0)"
                                                        onclick="event.preventDefault(); document.getElementById('delete-form-{{ $size->id }}').submit();"
                                                        class="dropdown-item text-danger" data-id="">
                                                        {{ __('Delete') }}
                                                        </a>
                                                        <form id="delete-form-{{ $size->id }}"
                                                        action="{{ route('admin.size.destroy', encrypt($size->id)) }}"
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
                                        <td colspan="11" class="text-center">No size Found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
