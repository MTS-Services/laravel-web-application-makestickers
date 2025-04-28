@extends('backend.admin.layouts.app', ['page_slug' => 'second_category'])

@section('content')
    <div class="row mt-4">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Second Category</h3>
                    <a href="{{ route('admin.sticker-category.index') }}" class="btn btn-primary btn-sm">Back</a>
                </div>
                <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <td><span>:</span></td>
                                <td>{{ $second_categories->title }}</td>
                            </tr>
                            <tr>
                                <th>Main CategoryTitle</th>
                                <td><span>:</span></td>
                                <td>{{ $second_categories->mainCategory->title }}</td>
                            </tr>
                            <tr>
                                <th>Slug</th>
                                <td><span>:</span></td>
                                <td>{{ $second_categories->slug }}</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td><span>:</span></td>
                                <td>{{ $second_categories->description }}</td>
                            </tr>
                            <tr>
                                <th>Image</th>
                                <td><span>:</span></td>
                                <td>
                                    <img src="{{ storage_url($second_categories->image) }}" alt="{{ $second_categories->title }}"
                                        style="width: 50px; aspect-ratio:16/9; object-fit:cover;">
                                </td>
                            </tr>
                        </table>

                </div>
            </div>
        </div>
    </div>
@endsection
