@extends('backend.admin.layouts.app', ['page_slug' => 'material'])
@section('title', 'View Material Details')

@section('content')
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Material Details</h4>
                    <div>
                        <a href="{{ route('am.material.edit', encrypt($material->id)) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('am.material.index') }}" class="btn btn-info">Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>{{ __('Sort Order') }}</th>
                                <td>{{ __(' : ') }} </td>
                                <td>{{ $material->sort_order }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __('Name') }}</th>
                                <td>{{ __(' : ') }} </td>
                                <td>{{ $material->name }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __('Description') }}</th>
                                <td>{{ __(' : ') }} </td>
                                <td>{{ $material->description }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('Price') }}</th>
                                <td>{{ __(' : ') }} </td>
                                <td>{{ $material->price_modifier }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('Icon') }}</th>
                                <td>{{ __(' : ') }} </td>
                                <td>{{ $material->icons }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __('Status') }}</th>
                                <td>{{ __(' : ') }} </td>
                                <td>
                                    <span class="badge badge-{{ $material->status_bg }}">
                                        {{ $material->status_text }}
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __('Created At') }}</th>
                                <td>{{ __(' : ') }} </td>
                                <td>{{ timeFormat($material->created_at) }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __('Created By') }}</th>
                                <td>{{ __(' : ') }} </td>
                                <td>{{ $material->created_by_name }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __('Updated At') }}</th>
                                <td>{{ __(' : ') }} </td>
                                <td>{{ updatedDate($material->created_at, $material->updated_at) }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __('Updated By') }}</th>
                                <td>{{ __(' : ') }} </td>
                                <td>{{ $material->updated_by_name }}</td>
                            </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
