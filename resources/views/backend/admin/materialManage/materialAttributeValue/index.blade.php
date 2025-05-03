@extends('backend.admin.layouts.app', ['page_slug' => 'material_attribute_value'])
@section('title', 'Material Attribute Value Management')
@section('content')
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Material Attribute Value Management</h4>
                    <div>
                        <a href="{{ route('am.material-attribute-value.trash') }}" class="btn btn-info">Trash</a>
                        <a href="{{ route('am.material-attribute-value.create') }}" class="btn btn-primary">Add New</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive overflow-visible">
                        <table class="table table-striped table-hover" id="datatable">
                            <thead class="table-secondary">
                                <tr>
                                    <th>{{ __('#') }}</th>
                                    <th>{{ __('Material') }}</th>
                                    <th>{{ __('Material Attribute') }}</th>
                                    <th>{{ __('Value') }}</th>
                                    <th>{{ __('Status') }}</th>
                                    <th>{{ __('Created At') }}</th>
                                    <th>{{ __('Created By') }}</th>
                                    <th>{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($material_attribute_values as $material_attribute_value)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $material_attribute_value->material->name }}</td>    
                                        <td>{{ $material_attribute_value->materialAttribute->name }}</td>
                                        <td>{{ $material_attribute_value->value }}</td>
                                        <td>
                                            <span class="badge badge-{{ $material_attribute_value->status_bg }}">
                                                {{ $material_attribute_value->status_text }}
                                            </span>
                                        </td>
                                        <td>{{ timeFormat($material_attribute_value->created_at) }}</td>
                                        <td>{{ $material_attribute_value->created_by_name }}</td>

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
                                                                href="{{ route('am.material-attribute-value.show', encrypt($material_attribute_value->id)) }}">
                                                                {{ __('Details') }}
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="{{ route('am.material-attribute-value.edit', encrypt($material_attribute_value->id)) }}">
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
                                                                @foreach ($material_attribute_value->getStatusBtnText($material_attribute_value->status) as $status)
                                                                    <li class="dropdown-item">
                                                                        <a href="{{ route('am.material-attribute-value.status', [encrypt($material_attribute_value->id), encrypt(array_search($status['text'], $material_attribute_value->getStatus()))]) }}"
                                                                            class="text-{{ $status['class'] }}">
                                                                            {{ $status['text'] }}
                                                                        </a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a title="Delete" href="javascript:void(0)"
                                                                onclick="confirmDelete(() => document.getElementById('delete-form-{{ $material_attribute_value->id }}').submit());"
                                                                class="dropdown-item text-danger" data-id="">
                                                                {{ __('Delete') }}
                                                            </a>
                                                            <form id="delete-form-{{ $material_attribute_value->id }}"
                                                                action="{{ route('am.material-attribute-value.destroy', encrypt($material_attribute_value->id)) }}"
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
