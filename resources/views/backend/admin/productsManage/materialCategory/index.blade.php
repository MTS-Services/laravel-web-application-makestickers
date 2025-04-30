@extends('backend.admin.layouts.app', ['page_slug' => 'material_category'])

@section('content')
    <div class="row mt-4">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Material Category</h3>
                    <a href="{{ route('admin.material-category.create') }}" class="btn btn-primary btn-sm">Add New</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive overflow-visible">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>{{ __('Title') }}</th>
                                    <th>{{ __('Sticker Category') }}</th>
                                    <th>{{ __('Slug') }}</th>
                                    <th width="20%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($material_categories as $key => $material_category)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $material_category->title }}</td>
                                        <td>{{ $material_category->stickerCategory->title }}</td>
                                        <td>{{ $material_category->slug }}</td>
                                        <td><span
                                                class="badge badge-{{ $material_category->status_bg }}">{{ $material_category->status_text }}</span>
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
                                                            href="{{ route('admin.material-category.show', encrypt($material_category->id)) }}">

                                                            {{ __('Details') }}
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ route('admin.material-category.edit', encrypt($material_category->id)) }}">

                                                            {{ __('Edit') }}
                                                        </a>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a class="dropdown-item dropdown-toggle" href="javascript:void(0)"
                                                            id="status" role="button" aria-expanded="false">
                                                            {{ __('Status') }}
                                                        </a>
                                                        <ul class="dropdown-menu" aria-labelledby="status">
                                                            @foreach ($material_category->getStatusBtnText($material_category->status) as $status)
                                                                <li class="dropdown-item">
                                                                    <a href="{{ route('admin.material-category.status', [encrypt($material_category->id), encrypt(array_search($status['text'], $material_category->getStatus()))]) }}"
                                                                        class="text-{{ $status['class'] }}">
                                                                        {{ $status['text'] }}
                                                                    </a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a title="Delete" href="javascript:void(0)"
                                                            onclick="event.preventDefault(); document.getElementById('delete-form-{{ $material_category->id }}').submit();"
                                                            class="dropdown-item text-danger" data-id="">

                                                            {{ __('Delete') }}
                                                        </a>
                                                        <form id="delete-form-{{ $material_category->id }}"
                                                            action="{{ route('admin.material-category.destroy', encrypt($material_category->id)) }}"
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
                                        <td colspan="11" class="text-center">No material-category Found</td>
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
