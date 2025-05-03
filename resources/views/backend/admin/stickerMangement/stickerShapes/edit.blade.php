@extends('backend.admin.layouts.app', ['page_slug' => 'stickerShapes'])
@section('title', 'Edit Sticker Shape')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Sticker Shape</h1>
            <a href="{{ route('am.sticker-shape.index') }}"
                class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
                <i class="fas fa-arrow-left fa-sm text-white-50"></i> Back to List
            </a>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Sticker Shape Details</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('am.sticker-shape.update', $stickershape->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ old('name', $stickershape->name) }}" required>
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="image" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <x-file-upload name="image" type="image" existingFile="{{ $stickershape->image }}" maxSize="2"/>
                            @error('image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="price_modifier" class="col-sm-2 col-form-label">Price Modifier ($)</label>
                        <div class="col-sm-10">
                            <input type="number" step="0.01" class="form-control" id="price_modifier"
                                name="price_modifier" value="{{ old('price_modifier', $stickershape->price_modifier) }}">
                            @error('price_modifier')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2">Status</div>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="status" name="status" value="1"
                                    {{ old('status', $stickershape->status) ? 'checked' : '' }}>
                                <label class="form-check-label" for="status">
                                    Active
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10 offset-sm-2">
                            <button type="submit" class="btn btn-primary">Update Sticker Shape</button>
                            <a href="{{ route('am.sticker-shape.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

