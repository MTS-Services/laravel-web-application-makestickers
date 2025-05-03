@extends('backend.admin.layouts.app', ['page_slug' => 'material'])
@section('title', 'Material Management')
@section('content')
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Material Management</h4>
                    <div>
                        <a href="{{ route('am.material.trash') }}" class="btn btn-info">Trash</a>
                        <a href="{{ route('am.material.create') }}" class="btn btn-primary">Add New</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive overflow-visible">
                        <table class="table table-striped table-hover" id="datatable">
                            <thead class="table-secondary">
                                <tr>
                                    <th>{{ __('#') }}</th>
                                    <th>{{ __('Name') }}</th>
                                    <th>{{ __('Descripiton') }}</th>
                                    <th>{{ __('Icon') }}</th>
                                    <th>{{ __('Price') }}</th>
                                    <th>{{ __('Status') }}</th>
                                    <th>{{ __('Created At') }}</th>
                                    <th>{{ __('Created By') }}</th>
                                    <th>{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($materials as $material)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $material->name }}</td>
                                        <td>{{ $material->description }}</td>
                                        <td>{{ $material->icons }}</td>
                                        <td>{{ $material->price_modifier }}</td>
                                        <td>
                                            <span class="badge badge-{{ $material->status_bg }}">
                                                {{ $material->status_text }}
                                            </span>
                                        </td>
                                        <td>{{ timeFormat($material->created_at) }}</td>
                                        <td>{{ $material->created_by_name }}</td>

                                        <td>
                                            <div
                                                class="btn-group d-flex align-items-center gap-3 flex-wrap justify-content-start">
                                                <i class="icon-grid reorder fs-4 float-left" style="cursor: move;"></i>

                                                <div class="dropdown">
                                                    <a href="javascript:void(0)" type="button" id="dropdownMenuButton1"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="icon-settings fs-3 setting"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="dropdownMenuButton1">
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="{{ route('am.material.show', encrypt($material->id)) }}">
                                                                {{ __('Details') }}
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="{{ route('am.material.edit', encrypt($material->id)) }}">
                                                                {{ __('Edit') }}
                                                            </a>
                                                        </li>
                                                        <li class="dropdown">
                                                            <a class="dropdown-item dropdown-toggle"
                                                                href="javascript:void(0)" id="status" role="button"
                                                                aria-expanded="false">
                                                                {{ __('Status') }}
                                                            </a>
                                                            <ul class="dropdown-menu" aria-labelledby="status">
                                                                @foreach ($material->getStatusBtnText($material->status) as $status)
                                                                    <li class="dropdown-item">
                                                                        <a href="{{ route('am.material.status', [encrypt($material->id), encrypt(array_search($status['text'], $material->getStatus()))]) }}"
                                                                            class="text-{{ $status['class'] }}">
                                                                            {{ $status['text'] }}
                                                                        </a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a title="Delete" href="javascript:void(0)"
                                                                onclick="confirmDelete(() => document.getElementById('delete-form-{{ $material->id }}').submit());"
                                                                class="dropdown-item text-danger" data-id="">
                                                                {{ __('Delete') }}
                                                            </a>
                                                            <form id="delete-form-{{ $material->id }}"
                                                                action="{{ route('am.material.destroy', encrypt($material->id)) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="10" class="text-center">
                                            <div class="alert alert-secondary mb-0">
                                                {{ __('No data found') }}
                                            </div>
                                        </td>
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
