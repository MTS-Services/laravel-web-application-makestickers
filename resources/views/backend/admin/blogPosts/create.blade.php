@extends('backend.admin.layouts.app', ['page_slug' => 'blog'])

@section('content')
<div class="row mt-4">
    <div class="col-md-10 mx-auto">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3>Create New Blog Post</h3>
                <a href="{{ route('admin.blog.index') }}" class="btn btn-sm btn-secondary ">Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control">
                        @error('title')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" name="slug" class="form-control">
                        @error('slug')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="short_desc" class="form-label">Short Description</label>
                        <textarea name="short_desc" class="form-control" rows="1"></textarea>
                        @error('short_desc')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="long_desc" class="form-label">Long Description</label>
                        <textarea name="long_desc" class="form-control" rows="2"></textarea>
                        @error('long_desc')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="featured_image" class="form-label">Featured Image</label>
                        <x-file-upload name="featured_image" type="image" maxSize="2" />
                        @error('featured_image')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">SEO Image (optional)</label>
                        <x-file-upload name="image" type="image" maxSize="2" />
                        @error('image')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="video" class="form-label">Video (optional)</label>
                        <x-file-upload name="video" type="video" maxSize="50" />
                        @error('video')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="video_thumbnail" class="form-label">Video Thumbnail (optional)</label>
                        <x-file-upload name="video_thumbnail" type="image" maxSize="2" />
                        @error('video_thumbnail')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" class="form-control">
                            <option value="1" selected>Draft</option>
                            <option value="2">Published</option>
                            <option value="0">Hide</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success">Publish Blog Post</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection