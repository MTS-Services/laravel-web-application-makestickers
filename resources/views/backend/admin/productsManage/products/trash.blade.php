@extends('backend.admin.layouts.app', ['page_slug' => 'product'])
@section('title', 'Admin Restore')
@section('content')
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Product Restore</h4>
                    <div>
                        <a href="{{ route('admin.product.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive overflow-visible">
                        <table class="table table-striped table-hover">
                            <thead class="table-secondary">
                                <tr>
                                    <th>{{ __('#') }}</th>
                                    <th>{{ __('Name') }}</th>
                                    <th>{{ __('Category') }}</th>
                                    <th>{{ __('Size') }}</th>
                                    <th>{{ __('Status') }}</th>
                                    <th>{{ __('Price') }}</th>
                                    <th>{{ __('Deleted At') }}</th>
                                    <th>{{ __('Deleted By') }}</th>
                                    <th>{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
