@extends('backend.admin.layouts.app', ['page_slug' => 'blog'])

@section('content')
<div class="row mt-4">
    <div class="col-md-10 mx-auto">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3>Edit Blog Post</h3>
                <a href="{{ route('admin.blog.index') }}" class="btn btn-secondary btn-sm">Back</a>
            </div>

            <div class="card-body">
                {{-- Validation Errors --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{-- Edit Form --}}
                <form action="{{ route('admin.blog.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title', $post->title) }}">
                    </div>

                    <div class="mb-3">
                        <label>Slug</label>
                        <input type="text" name="slug" class="form-control" value="{{ old('slug', $post->slug) }}">
                    </div>

                    <div class="mb-3">
                        <label>Short Description</label>
                        <textarea name="short_description" class="form-control" rows="3">{{ old('short_description', $post->short_description) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label>Long Description</label>
                        <textarea name="long_description" class="form-control" rows="5">{{ old('long_description', $post->long_description) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label>Featured Image</label><br>
                        @if ($post->featured_image)
                            <img src="{{ asset('storage/' . $post->featured_image) }}" width="80"><br><br>
                        @endif
                        <input type="file" name="featured_image" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Image</label><br>
                        @if ($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" width="80"><br><br>
                        @endif
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Video URL</label>
                        <input type="text" name="video_url" class="form-control" value="{{ old('video_url', $post->video_url) }}">
                    </div>

                    <div class="mb-3">
                        <label>Video Thumbnail</label><br>
                        @if ($post->video_thumbnail)
                            <img src="{{ asset('storage/' . $post->video_thumbnail) }}" width="80"><br><br>
                        @endif
                        <input type="file" name="video_thumbnail" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option value="draft" {{ $post->status == 'draft' ? 'selected' : '' }}>Draft</option>
                            <option value="published" {{ $post->status == 'published' ? 'selected' : '' }}>Published</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success">Update Post</button>
                </form>
                {{-- End Edit Form --}}
            </div>
        </div>
    </div>
</div>
@endsection
