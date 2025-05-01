@extends('backend.admin.layouts.app', ['page_slug' => 'blog'])

@section('content')
<div class="row mt-4">
    <div class="col-md-12 mx-auto">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3>All Blog Posts</h3>
                <a href="{{ route('admin.blog.create') }}" class="btn btn-primary btn-sm">Add New</a>
            </div>

            <div class="card-body">
                @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="table-responsive overflow-visible">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Video Thumbnail</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th width="15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $post->title}}</td>
                                <td>{{ $post->slug }}</td>
                                <td>

                                    <img src="{{ storage_url($post->video_thumbnail) }}" width="60" alt="{{ $post->title }}">
                                </td>
                                <td>
                                    <span class="badge badge-{{ $post->blog_status_bg_color }}">
                                        {{$post->blog_status_text}}
                                    </span>
                                </td>

                                <td>{{ timeFormat($post->created_at) }}</td>
                                <td>
                                    <div
                                        class="btn-group d-flex align-items-center gap-3 flex-wrap justify-content-start">
                                        <div class="dropdown">
                                            <a href="javascript:void(0)" type="button" id="dropdownMenuButton1"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="icon-settings fs-3 setting"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="dropdownMenuButton1">
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('admin.blog.show', encrypt($post->id)) }}">
                                                        {{ __('Details') }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('admin.blog.edit', encrypt($post->id)) }}">
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
                                                        @foreach ($post->getBlogStatusBtnText($post->status) as $status)
                                                        <li class="dropdown-item">
                                                            <a href="{{ route('admin.blog.status', [encrypt($post->id), encrypt(array_search($status['text'], $post->getBlogStatus()))]) }}"
                                                                class="text-{{ $status['class'] }}">
                                                                {{ $status['text'] }}
                                                            </a>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a title="Delete" href="javascript:void(0)"
                                                        onclick="confirmDelete(() => document.getElementById('delete-form-{{ $post->id }}').submit());"
                                                        class="dropdown-item text-danger" data-id="">
                                                        {{ __('Delete') }}
                                                    </a>
                                                    <form id="delete-form-{{ $post->id }}"
                                                        action="{{ route('admin.blog.destroy', encrypt($post->id)) }}"
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
                            @endforeach

                            @if($posts->isEmpty())
                            <tr>
                                <td colspan="12" class="text-center">No blog posts found.</td>
                            </tr>
                            @endif
                        </tbody>

                    </table>
                </div>

                {{-- Pagination --}}
                <div class="d-flex justify-content-end">
                    {{ $posts->links() }}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection