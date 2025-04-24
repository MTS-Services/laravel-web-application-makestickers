@extends('backend.admin.layouts.app', ['page_slug' => 'third_category'])

@section('content')
    <div class="row mt-4">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Third Category</h3>
                    <a href="{{ route('admin.third-category.create') }}" class="btn btn-primary btn-sm">Add New</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>{{ __('Title') }}</th>
                                    <th>{{ __('Second Category') }}</th>
                                    <th>{{ __('Slug') }}</th>
                                    <th width="20%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($third_categories as $key => $third_category)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $third_category->title }}</td>
                                        <td>{{ $third_category->secondCategory->title }}</td>
                                        <td>{{ $third_category->slug }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="javascript:void(0)" type="button" id="dropdownMenuButton1"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="icon-settings fs-3 setting"></i>
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ route('admin.third-category.show', encrypt($third_category->id)) }}">

                                                            {{ __('Details') }}
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ route('admin.third-category.edit', encrypt($third_category->id)) }}">

                                                            {{ __('Edit') }}
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a title="Delete" href="javascript:void(0)"
                                                            onclick="event.preventDefault(); document.getElementById('delete-form-{{ $third_category->id }}').submit();"
                                                            class="dropdown-item text-danger" data-id="">

                                                            {{ __('Delete') }}
                                                        </a>
                                                        <form id="delete-form-{{ $third_category->id }}"
                                                            action="{{ route('admin.third-category.destroy', encrypt($third_category->id)) }}"
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
                                        <td colspan="11" class="text-center">No third-category Found</td>
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
