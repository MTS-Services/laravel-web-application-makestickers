@extends('backend.admin.layouts.app', ['page_slug' => 'material_attribute'])
@section('title', 'View Material Attribute Details')

@section('content')
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Material Attribute Details</h4>
                    <div>
                        <a href="{{ route('am.material-attribute.edit', encrypt($material_attribute->id)) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('am.material-attribute.index') }}" class="btn btn-info">Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>{{ __('Sort Order') }}</th>
                                <td>{{ __(' : ') }} </td>
                                <td>{{ $material_attribute->sort_order }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __('Name') }}</th>
                                <td>{{ __(' : ') }} </td>
                                <td>{{ $material_attribute->name }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('Type') }}</th>
                                <td>{{ __(' : ') }} </td>
                                <td>{{ $material_attribute->material_type }}</td>
                            </tr>
                           
                            <tr>
                                <th scope="row">{{ __('Status') }}</th>
                                <td>{{ __(' : ') }} </td>
                                <td>
                                    <span class="badge badge-{{ $material_attribute->status_bg }}">
                                        {{ $material_attribute->status_text }}
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __('Created At') }}</th>
                                <td>{{ __(' : ') }} </td>
                                <td>{{ timeFormat($material_attribute->created_at) }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __('Created By') }}</th>
                                <td>{{ __(' : ') }} </td>
                                <td>{{ $material_attribute->created_by_name }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __('Updated At') }}</th>
                                <td>{{ __(' : ') }} </td>
                                <td>{{ updatedDate($material_attribute->created_at, $material_attribute->updated_at) }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __('Updated By') }}</th>
                                <td>{{ __(' : ') }} </td>
                                <td>{{ $material_attribute->updated_by_name }}</td>
                            </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
