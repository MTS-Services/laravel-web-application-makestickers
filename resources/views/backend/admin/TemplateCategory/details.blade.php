@extends('backend.admin.layouts.app', ['page_slug' => 'template'])
@section('content')
    <div class="row mt-4">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Main Category</h3>
                    <a href="{{ route('admin.template-category.index') }}" class="btn btn-primary btn-sm">Back</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>Name</th>
                            <td><span>:</span></td>
                            <td>{{ $templates->name }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><span>:</span></td>
                            <td>{{ $templates->email }}</td>
                        </tr>
                        <tr>
                            <th>Number</th>
                            <td><span>:</span></td>
                            <td>{{ $templates->phone_number }}</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td><span>:</span></td>
                            <td>{{ $templates->address }}</td>
                        </tr>
                        <tr>
                            <th>City</th>
                            <td><span>:</span></td>
                            <td>{{ $templates->city }}</td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <td><span>:</span></td>
                            <td>
                                <img src="{{ storage_url($templates->image) }}" alt="{{ $templates->name }}"
                                    style="width: 50px; aspect-ratio:16/9; object-fit:cover;">
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
