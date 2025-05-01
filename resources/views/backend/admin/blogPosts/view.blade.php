@extends('backend.admin.layouts.app', ['page_slug' => 'blog'])

@section('content')
<div class="row mt-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Blog Details</h4>
                <div>
                    <a href="{{ route('admin.blog.index') }}" class="btn btn-info">Back</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th scope="row">{{ __('Title') }}</th>
                            <td>{{ __(' : ') }} </td>
                            <td>{{ $blogs->title }}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __('Slug') }}</th>
                            <td>{{ __(' : ') }} </td>
                            <td>{{ $blogs->slug }}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __('Long Description') }}</th>
                            <td>{{ __(' : ') }} </td>
                            <td>{{ $blogs->long_desc }}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __('Short Description') }}</th>
                            <td>{{ __(' : ') }} </td>
                            <td>{{ $blogs->short_desc }}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __('Featured Image') }}</th>
                            <td>{{ __(' : ') }} </td>
                            <td>
                                <img src="{{ auth_storage_url($blogs->featured_image, $blogs->gender) }}" class="img-fluid"
                                    alt="{{ $blogs->featured_image }}" style="width: 100px; height: auto;">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __('Image') }}</th>
                            <td>{{ __(' : ') }} </td>
                            <td>
                                <img src="{{ auth_storage_url($blogs->image, $blogs->gender) }}" class="img-fluid"
                                    alt="{{ $blogs->name }}" style="width: 100px; height: auto;">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __('Video') }}</th>
                            <td>{{ __(' : ') }} </td>
                            <td>
                                @if (isVideo($blogs->video))
                                <video src="{{ storage_url($blogs->video) }}" style="width: 100px; height: auto;" controls></video>
                                @else
                                No Video Found
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __('Video Thumbnail') }}</th>
                            <td>{{ __(' : ') }} </td>
                            <td>
                                <img src="{{ auth_storage_url($blogs->video_thumbnail, $blogs->gender) }}" class="img-fluid"
                                    alt="{{ $blogs->video_thumbnail }}" style="width: 100px; height: auto;">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __('Status') }}</th>
                            <td>{{ __(' : ') }} </td>
                            <td>
                                {{$blogs->blog_status_text}}
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __('Created At') }}</th>
                            <td>{{ __(' : ') }} </td>
                            <td>{{ timeFormat($blogs->created_at) }}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __('Created By') }}</th>
                            <td>{{ __(' : ') }} </td>
                            <td>{{ $blogs->created_by_name }}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __('Updated At') }}</th>
                            <td>{{ __(' : ') }} </td>
                            <td>{{ updatedDate($blogs->created_at, $blogs->updated_at) }}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __('Updated By') }}</th>
                            <td>{{ __(' : ') }} </td>
                            <td>{{ $blogs->updated_by_name }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection