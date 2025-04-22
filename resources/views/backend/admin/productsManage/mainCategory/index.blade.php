@extends('backend.admin.layouts.app', ['page_slug' => 'main_category'])

@section('content')
    <div class="row mt-4">
        <div class="col-md-10 mx-auto">
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
                                    <th width="10%">Action</th>
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
                                            <img src="{{ storage_url($main_category->image) }}" alt="{{ $main_category->title }}"
                                                style="width: 50px; aspect-ratio:16/9; object-fit:cover;">
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center align-items-center gap-1">
                                                <a href="{{ route('admin.main-category.edit', encrypt($main_category->id)) }}"
                                                    class="btn btn-primary btn-sm">Edit</a>
                                                <form action="{{ route('admin.main-category.destroy', encrypt($main_category->id)) }}"
                                                    method="POST" class="d-inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
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
