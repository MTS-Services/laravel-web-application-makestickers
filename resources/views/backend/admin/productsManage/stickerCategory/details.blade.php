@extends('backend.admin.layouts.app', ['page_slug' => 'sticker_category'])

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
                            <td>{{ $sticker_categories->title }}</td>
                        </tr>
                        <tr>
                            <th>Slug</th>
                            <td><span>:</span></td>
                            <td>{{ $sticker_categories->slug }}</td>
                            
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td><span>:</span></td>
                            <td>{{ $sticker_categories->description }}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td><span>:</span></td>
                            <td>
                                <span class="badge badge-{{ $sticker_categories->status_bg }}">{{ $sticker_categories->status_text }}</span>
                            </td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <td><span>:</span></td>
                            <td>
                                <img src="{{ storage_url($sticker_categories->image) }}" alt="{{ $sticker_categories->title }}"
                                    style="width: 50px; aspect-ratio:16/9; object-fit:cover;">
                            </td>
                        </tr>
                        <tr>
                            <th>Created By</th>
                            <td><span>:</span></td>
                            <td>{{ $sticker_categories->created_by_name }}</td>
                        </tr>
                        <tr>
                            <th>Created At</th>
                            <td><span>:</span></td>
                            <td>{{ timeFormat($sticker_categories->created_at) }}</td>
                        </tr>
                        <tr>
                            <th>Updated By</th>
                            <td><span>:</span></td>
                            <td>{{ $sticker_categories->updated_by_name }}</td>
                        </tr>
                        <tr>
                            <th>Updated At</th>
                            <td><span>:</span></td>
                            <td>{{ updatedDate($sticker_categories->created_at, $sticker_categories->updated_at) }}</td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
