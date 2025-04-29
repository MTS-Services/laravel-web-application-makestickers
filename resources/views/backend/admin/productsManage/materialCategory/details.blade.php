@extends('backend.admin.layouts.app', ['page_slug' => 'material_category'])

@section('content')
    <div class="row mt-4">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Material Category</h3>
                    <a href="{{ route('admin.material-category.index') }}" class="btn btn-primary btn-sm">Back</a>
                </div>
                <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <td><span>:</span></td>
                                <td>{{ $material_categories->title }}</td>
                            </tr>
                            <tr>
                                <th>Third CategoryTitle</th>
                                <td><span>:</span></td>
                                <td>{{ $material_categories->thirdCategory->title }}</td>
                            </tr>
                            <tr>
                                <th>Slug</th>
                                <td><span>:</span></td>
                                <td>{{ $material_categories->slug }}</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td><span>:</span></td>
                                <td>{{ $material_categories->description }}</td>
                            </tr>
                            <tr>
                                <th>Image</th>
                                <td><span>:</span></td>
                                <td>
                                    <img src="{{ storage_url($material_categories->image) }}" alt="{{ $material_categories->title }}"
                                        style="width: 50px; aspect-ratio:16/9; object-fit:cover;">
                                </td>
                            </tr>
                        </table>

                </div>
            </div>
        </div>
    </div>
@endsection
