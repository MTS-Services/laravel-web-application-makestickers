@extends('backend.admin.layouts.app', ['page_slug' => 'faqcategory'])

@section('content')
<div class="row mt-4">
    <div class="col-md-10 mx-auto">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3>All FAQ Category</h3>
                <a href="{{ route('admin.faqcategory.create') }}" class="btn btn-primary btn-sm">Add New</a>
            </div>
            <div class="card-body">
                <div class="table-responsive overflow-visible">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th width="5%">Id</th>
                                <th>Title</th>
                                <th>Slug</th>
                                <th width="10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($faqcategories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->title }}</td>
                                <td>{{ $category->slug }}</td>
                               
                                <td>
                                    <div
                                        class="btn-group d-flex align-items-center gap-3 flex-wrap justify-content-start">
                                        <div class="dropdown">
                                            <a href="javascript:void(0)" type="button" id="dropdownMenuButton1"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="icon-settings fs-3 setting"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="dropdownMenuButton1">
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('admin.faqcategory.edit', encrypt($category->id)) }}">
                                                        {{ __('Edit') }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a title="Delete" href="javascript:void(0)"
                                                        onclick="confirmDelete(() => document.getElementById('delete-form-{{ $category->id }}').submit());"
                                                        class="dropdown-item text-danger" data-id="">
                                                        {{ __('Delete') }}
                                                    </a>
                                                    <form id="delete-form-{{ $category->id }}"
                                                        action="{{ route('admin.faqcategory.destroy', encrypt($category->id)) }}"
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
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection