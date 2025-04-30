@extends('backend.admin.layouts.app', ['page_slug' => 'label_category'])

@section('content')
    <div class="row mt-4">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Label Category</h3>
                    <a href="{{ route('admin.label-category.index') }}" class="btn btn-primary btn-sm">Back</a>
                </div>
                <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <td><span>:</span></td>
                                <td>{{ $label_category->title }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('Status') }}</th>
                                <td><span>:</span></td>
                                <td>
                                    <span class="badge badge-{{ $label_category->status_bg }}">{{ $label_category->status_text }}</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Slug</th>
                                <td><span>:</span></td>
                                <td>{{ $label_category->slug }}</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td><span>:</span></td>
                                <td>{{ $label_category->description }}</td>
                            </tr>
                            <tr>
                                <th>Image</th>
                                <td><span>:</span></td>
                                <td>
                                    <img src="{{ storage_url($label_category->image) }}" alt="{{ $label_category->title }}"
                                        style="width: 50px; aspect-ratio:16/9; object-fit:cover;">
                                </td>
                            </tr>
                            <tr>
                                <th>Created By</th>
                                <td><span>:</span></td>
                                <td>{{ $label_category->created_by_name }}</td>
                            </tr>
                            <tr>
                                <th>Created At</th>
                                <td><span>:</span></td>
                                <td>{{ timeFormat($label_category->created_at) }}</td>
                            </tr>
                            <tr>
                                <th>Updated By</th>
                                <td><span>:</span></td>
                                <td>{{ $label_category->updated_by_name }}</td>
                            </tr>
                            <tr>
                                <th>Updated At</th>
                                <td><span>:</span></td>
                                <td>{{ updatedDate($label_category->created_at, $label_category->updated_at) }}</td>
                            </tr>
                        </table>

                </div>
            </div>
        </div>
    </div>
@endsection
