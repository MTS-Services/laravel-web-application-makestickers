@extends('backend.admin.layouts.app', ['page_slug' => 'sticker_category'])

@section('content')
    <div class="row mt-4">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Second Category</h3>
                    <a href="{{ route('admin.sticker-category.create') }}" class="btn btn-primary btn-sm">Add New</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive overflow-visible">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>{{ __('Title') }}</th>
                                    <th>{{ __('Slug') }}</th>
                                    <th>{{ __('Status') }}</th>
                                    <th>{{ __('Image') }}</th>
                                    <th width="20%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($sticker_categories as $key => $sticker_category)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $sticker_category->title }}</td>
                                        <td>{{ $sticker_category->slug }}</td>
                                        <td><span class="badge badge-{{ $sticker_category->status_bg }}">{{ $sticker_category->status_text }}</span></td>
                                        <td>
                                            <img src="{{ storage_url($sticker_category->image) }}"
                                                alt="{{ $sticker_category->title }}"
                                                style="width: 50px; aspect-ratio:16/9; object-fit:cover;">
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
                                                            href="{{ route('admin.sticker-category.show', encrypt($sticker_category->id)) }}">

                                                            {{ __('Details') }}
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ route('admin.sticker-category.edit', encrypt($sticker_category->id)) }}">

                                                            {{ __('Edit') }}
                                                        </a>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a class="dropdown-item dropdown-toggle" href="javascript:void(0)"
                                                            id="status" role="button" aria-expanded="false">
                                                            {{ __('Status') }}
                                                        </a>
                                                        <ul class="dropdown-menu" aria-labelledby="status">
                                                            @foreach ($sticker_category->getStatusBtnText($sticker_category->status) as $status)
                                                                <li class="dropdown-item">
                                                                    <a href="{{ route('admin.sticker.status', [($sticker_category->id),(array_search($status['text'], $sticker_category->getStatus()))]) }}"
                                                                        class="text-{{ $status['class'] }}">
                                                                    {{ $status['text'] }}
                                                                    </a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a title="Delete" href="javascript:void(0)"
                                                            onclick="event.preventDefault(); document.getElementById('delete-form-{{ $sticker_category->id }}').submit();"
                                                            class="dropdown-item text-danger" data-id="">

                                                            {{ __('Delete') }}
                                                        </a>
                                                        <form id="delete-form-{{ $sticker_category->id }}"
                                                            action="{{ route('admin.sticker-category.destroy', encrypt($sticker_category->id)) }}"
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
                                        <td colspan="11" class="text-center">No second-category Found</td>
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
