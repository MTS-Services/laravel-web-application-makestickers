@extends('backend.admin.layouts.app', ['page_slug' => 'product'])

@section('content')
    <div class="row mt-4">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Products Category</h3>
                    <a href="{{ route('admin.product.create') }}" class="btn btn-primary btn-sm">Add New</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive overflow-visible">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>{{ __('Title') }}</th>
                                    <th>{{ __('Category') }}</th>
                                    <th>{{ __('Size') }}</th>
                                    <th>{{ __('Unit Price') }}</th>
                                    <th>{{ __('Status') }}</th>
                                    <th>{{ __('Created By') }}</th>
                                    <th width="20%">{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($products as $key => $product)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $product->title }}</td>
                                        <td>{{ isset($product->stickerCategory) ? $product->stickerCategory->title : (isset($product->labelCategory) ? $product->labelCategory->title : 'N/A') }}
                                        </td>
                                        <td>{{ isset($product->sizeCategory) ? $product->sizeCategory->title : 'N/A' }}</td>
                                        <td>{{ $product->unit_price }}</td>
                                        <td><span class="badge badge-{{ $product->status_bg }}">{{ $product->status_text }}</span></td>
                                        <td>
                                            {{ $product->created_by_name }}
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="javascript:void(0)" type="button" id="dropdownMenuButton1"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="icon-settings fs-3 setting"></i>
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ route('admin.product.show', encrypt($product->id)) }}">

                                                            {{ __('Details') }}
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ route('admin.product.edit', encrypt($product->id)) }}">

                                                            {{ __('Edit') }}
                                                        </a>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a class="dropdown-item dropdown-toggle" href="javascript:void(0)"
                                                            id="status" role="button" aria-expanded="false">
                                                            {{ __('Status') }}
                                                        </a>
                                                        <ul class="dropdown-menu" aria-labelledby="status">
                                                            @foreach ($product->getStatusBtnText($product->status) as $status)
                                                                <li class="dropdown-item">
                                                                    <a href="{{ route('admin.product.status', [encrypt($product->id), encrypt(array_search($status['text'], $product->getStatus()))]) }}"
                                                                        class="text-{{ $status['class'] }}">
                                                                    {{ $status['text'] }}
                                                                    </a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a title="Delete" href="javascript:void(0)"
                                                            onclick="event.preventDefault(); document.getElementById('delete-form-{{ $product->id }}').submit();"
                                                            class="dropdown-item text-danger" data-id="">

                                                            {{ __('Delete') }}
                                                        </a>
                                                        <form id="delete-form-{{ $product->id }}"
                                                            action="{{ route('admin.product.destroy', encrypt($product->id)) }}"
                                                            method="POST">

                                                            @csrf

                                                            @method('DELETE')

                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="11" class="text-center">No products-category Found</td>
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
