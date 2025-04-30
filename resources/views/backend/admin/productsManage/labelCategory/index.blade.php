@extends('backend.admin.layouts.app', ['page_slug' => 'label_category'])

@section('content')
    <div class="row mt-4">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Label Category</h3>
                    <a href="{{ route('admin.label-category.create') }}" class="btn btn-primary btn-sm">Add New</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive overflow-visible">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>{{ __('Title') }}</th>
                                    <th>{{ __('Slug') }}</th>
                                    <th>{{ __('Image') }}</th>
                                    <th>{{ __('Status') }}</th>
                                    <th width="20%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($label_categories as $key => $label_category)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $label_category->title }}</td>
                                        <td>{{ $label_category->slug }}</td>
                                        <td>
                                            <img src="{{ storage_url($label_category->image) }}"
                                                alt="{{ $label_category->title }}"
                                                style="width: 50px; aspect-ratio:16/9; object-fit:cover;">
                                        </td>
                                        <td>
                                            <span
                                                class="badge badge-{{ $label_category->status_bg }}">{{ $label_category->status_text }}
                                            </span>
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
                                                            href="{{ route('admin.label-category.show', encrypt($label_category->id)) }}">

                                                            {{ __('Details') }}
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ route('admin.label-category.edit', encrypt($label_category->id)) }}">

                                                            {{ __('Edit') }}
                                                        </a>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a class="dropdown-item dropdown-toggle" href="javascript:void(0)"
                                                            id="status" role="button" aria-expanded="false">
                                                            {{ __('Status') }}
                                                        </a>
                                                        <ul class="dropdown-menu" aria-labelledby="status">
                                                            @foreach ($label_category->getStatusBtnText($label_category->status) as $status)
                                                                <li class="dropdown-item">
                                                                    <a href="{{ route('admin.label-category.status', [$label_category->id, array_search($status['text'], $label_category->getStatus())]) }}"
                                                                        class="text-{{ $status['class'] }}">
                                                                        {{ $status['text'] }}
                                                                    </a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a title="Delete" href="javascript:void(0)"
                                                            onclick="event.preventDefault(); document.getElementById('delete-form-{{ $label_category->id }}').submit();"
                                                            class="dropdown-item text-danger" data-id="">

                                                            {{ __('Delete') }}
                                                        </a>
                                                        <form id="delete-form-{{ $label_category->id }}"
                                                            action="{{ route('admin.label-category.destroy', encrypt($label_category->id)) }}"
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
                                        <td colspan="11" class="text-center">No label-category Found</td>
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
