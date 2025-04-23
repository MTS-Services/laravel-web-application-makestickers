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
                        <input type="text" name="title" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug (optional)</label>
                        <input type="text" name="slug" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="short_description" class="form-label">Short Description</label>
                        <textarea name="short_description" class="form-control" rows="2" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="long_description" class="form-label">Long Description</label>
                        <textarea name="long_description" class="form-control" rows="5" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="featured_image" class="form-label">Featured Image</label>
                        <input type="file" name="featured_image" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">SEO Image (optional)</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="video_url" class="form-label">Video URL (optional)</label>
                        <input type="url" name="video_url" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="video_thumbnail" class="form-label">Video Thumbnail (optional)</label>
                        <input type="file" name="video_thumbnail" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" class="form-control" required>
                            <option value="draft">Draft</option>
                            <option value="published">Published</option>
                            <option value="archived">Archived</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success">Publish Blog Post</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
