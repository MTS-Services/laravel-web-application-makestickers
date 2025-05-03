@extends('backend.admin.layouts.app', ['page_slug' => 'stickerShapes'])
@section('title', 'Add Sticker Shape')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create Sticker Shape</h1>
            <a href="{{ route('am.sticker-shapes.index') }}"
                class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
                <i class="fas fa-arrow-left fa-sm text-white-50"></i> Back to List
            </a>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Sticker Shape Details</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('am.sticker-shapes.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ old('name') }}" required>
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="image" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <x-file-upload name="image" type="image" maxSize="2"/>
                            <small class="form-text text-muted">Upload an image for the sticker shape (optional). Supported
                                formats: JPG, PNG, SVG.</small>
                            @error('image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="price_modifier" class="col-sm-2 col-form-label">Price Modifier ($)</label>
                        <div class="col-sm-10">
                            <input type="number" step="0.01" class="form-control " id="price_modifier"
                                name="price_modifier" value="{{ old('price_modifier', '0.00') }}">
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
                                    {{ old('status', '1') ? 'checked' : '' }}>
                                <label class="form-check-label" for="status">
                                    Active
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10 offset-sm-2">
                            <button type="submit" class="btn btn-primary">Create Sticker Shape</button>
                            <a href="{{ route('am.sticker-shapes.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


{{-- @section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Add New Sticker Shape</h1>

    <form action="{{ route('am.sticker-shapes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name">Shape Name</label>
            <input type="text" name="name" class="form-control" required value="{{ old('name') }}">
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="form-group">
            <label for="price_modifier">Price Modifier</label>
            <input type="number" step="0.01" name="price_modifier" class="form-control" required value="{{ old('price_modifier') }}">
            @error('price_modifier') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="form-group">
            <label for="image">Shape Image (optional)</label>
            <input type="file" name="image" class="form-control-file">
            @error('image') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Create Shape</button>
        <a href="{{ route('am.sticker-shapes.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection --}}
