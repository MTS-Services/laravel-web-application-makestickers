@extends('backend.admin.layouts.app', ['page_slug' => 'template'])

@section('content')
    <div class="row mt-4">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Size</h3>
                    <a href="{{ route('admin.template-category.create') }}" class="btn btn-primary btn-sm">Add New</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>Title</th>
                                    <th>size categories</th>
                                    <th>Sticker Category</th>
                                    <th>Material Category</th>
                                    <th>Label Category</th>
                                    <th>Image</th>
                                    <th width="10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($TemplateCategory as $template)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $template->title }}</td>
                                        <td>{{ $template->sizeCategory->title ?? 'N/A' }}</td>
                                        <td>{{ $template->stickerCategory->title ?? 'N/A' }}</td>
                                        <td>{{ $template->materialCategory->title ?? 'N/A' }}</td>
                                        <td>{{ $template->labelCategory->title ?? 'N/A' }}</td>
                                        <td>
                                            <img src="{{ storage_url($template->image) }}" alt="template Image"
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
                                                            href="{{ route('admin.template-category.show', encrypt($template->id)) }}">
                                                            {{ __('Details') }}
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ route('admin.template-category.edit', encrypt($template->id)) }}">
                                                            {{ __('Edit') }}
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a title="Delete" href="javascript:void(0)"
                                                            onclick="event.preventDefault(); document.getElementById('delete-form-{{ $template->id }}').submit();"
                                                            class="dropdown-item text-danger" data-id="">
                                                            {{ __('Delete') }}
                                                        </a>
                                                        <form id="delete-form-{{ $template->id }}"
                                                            action="{{ route('admin.template-category.destroy', encrypt($template->id)) }}"
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
                                        <td colspan="11" class="text-center">No Template Found</td>
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
