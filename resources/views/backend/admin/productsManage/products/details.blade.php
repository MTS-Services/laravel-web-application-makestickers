@extends('backend.admin.layouts.app', ['page_slug' => 'product'])

@section('content')
    <div class="row mt-4">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Products</h3>
                    <a href="{{ route('admin.product.index') }}" class="btn btn-primary btn-md">Back</a>
                </div>
                <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>{{ __('Title') }}</th>
                                <td><span>:</span></td>
                                <td>{{ $products->title }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('Sticker Category') }}</th>
                                <td><span>:</span></td>
                                <td>{{ $products->stickerCategory }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('Size') }}</th>
                                <td><span>:</span></td>
                                <td>{{-- {{ $products->sizeCategory->title }} --}}</td>
                            </tr>
                            <tr>
                                <th>{{ __('Unit Price') }}</th>
                                <td><span>:</span></td>
                                <td>{{ $products->unit_price }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('Description') }}</th>
                                <td><span>:</span></td>
                                <td>{{ $products->description }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('Status') }}</th>
                                <td><span>:</span></td>
                                <td>
                                    <span class="badge badge-{{ $products->status_bg }}">{{ $products->status_text }}</span>
                                </td>
                            </tr>
                            <tr>
                                <th>{{ __('Preview Image') }}</th>
                                <td><span>:</span></td>
                                <td>
                                    <img src="{{ storage_url($products->preview_image) }}" alt="{{ $products->title }}"
                                        style="width: 50px; aspect-ratio:16/9; object-fit:cover;">
                                </td>
                            </tr>
                        </table>

                </div>
            </div>
        </div>
    </div>
@endsection
