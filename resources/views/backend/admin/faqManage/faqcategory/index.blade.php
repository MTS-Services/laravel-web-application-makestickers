@extends('backend.admin.layouts.app', ['page_slug' => 'faq_category'])

@section('content')
<div class="row mt-4">
    <div class="col-md-10 mx-auto">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3>All FAQ Category</h3>
                <a href="{{ route('admin.faq-category.create') }}" class="btn btn-primary btn-sm">Add New</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
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
                            @foreach ($faqCategories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->title }}</td>
                                <td>{{ $category->slug }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('admin.faq-category.edit', $category->id) }}" class="btn btn-sm btn-warning me-2">Edit</a>
                                    <form action="{{ route('admin.faq-category.destroy', $category->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this category?  ')">Delete</button>
                                    </form>
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