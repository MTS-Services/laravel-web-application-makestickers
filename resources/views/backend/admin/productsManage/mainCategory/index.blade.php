@extends('backend.admin.layouts.app', ['page_slug' => 'main_category'])

@section('content')
    <div class="row mt-4">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Main Category</h3>
                    <a href="{{ route('admin.main-category.create') }}" class="btn btn-primary btn-sm">Add New</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>{{ __('Title') }}</th>
                                    <th>{{ __('Slug') }}</th>
                                    <th>{{ __('Description') }}</th>
                                    <th>{{ __('Image') }}</th>
                                    <th width="20%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($main_categories as $key => $main_category)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $main_category->title }}</td>
                                        <td>{{ $main_category->slug }}</td>
                                        <td>{{ $main_category->description }}</td>
                                        <td>
                                            <img src="{{ storage_url($main_category->image) }}"
                                                alt="{{ $main_category->title }}"
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
                                                            href="{{ route('admin.main-category.show', encrypt($main_category->id)) }}">

                                                            {{ __('Details') }}
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ route('admin.main-category.edit', encrypt($main_category->id)) }}">

                                                            {{ __('Edit') }}
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a title="Delete" href="javascript:void(0)"
                                                            onclick="function(e) {e.preventDefault(); document.getElementById('delete-form-{{ encrypt($main_category->id) }}').submit();}"
                                                            class="dropdown-item text-danger" data-id="">

                                                            {{ __('Delete') }}
                                                        </a>
                                                        <form id="delete-form-{{ encrypt($main_category->id) }}"
                                                            action="{{ route('admin.main-category.destroy', encrypt($main_category->id)) }}"
                                                            method="DELETE">

                                                            @csrf

                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="11" class="text-center">No main-category Found</td>
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
