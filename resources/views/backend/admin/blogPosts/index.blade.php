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

                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Short Description</th>
                                <th>Long Description</th>
                                <th>Featured Image</th>
                                <th>Image</th>
                                <th>Video url</th>
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
                                <td>{{ Str::limit($post->title, 40) }}</td>
                                <td>{{ $post->slug }}</td>
                                <td>{{ Str::limit($post->short_description, 50) }}</td>
                                <td>{{ Str::limit(strip_tags($post->long_description), 50) }}</td>
                                <td>
                                    <img src="{{ storage_url($post->featured_image) }}" width="60" alt="{{$post->title}}">
                                </td>
                                <td>
                                    <img src="{{ storage_url($post->image) }}" width="60" alt="{{$post->title}}">
                                </td>
                                <td>
                                    @if (isVideo($post->video))
                                    <video src="{{ storage_url($post->video) }}" width="60" controls></video>
                                    @else
                                    No Video Found
                                    @endif
                                </td>
                                <td>
                                    @if($post->video_thumbnail)
                                    <img src="{{ asset('storage/' . $post->video_thumbnail) }}" width="60" alt="Video Thumbnail">
                                    @else
                                    N/A
                                    @endif
                                </td>
                                <td>
                                    <span class="badge bg-{{ $post->status == 'published' ? 'success' : ($post->status == 'draft' ? 'warning' : 'secondary') }}">
                                        {{ ucfirst($post->status) }}
                                    </span>
                                </td>
                                <td>{{ $post->created_at->format('d M Y') }}</td>
                                <td>
                                    <a href="{{ route('admin.blog.edit', $post->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('admin.blog.destroy', $post->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this post?')">
                                            Delete
                                        </button>
                                    </form>
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