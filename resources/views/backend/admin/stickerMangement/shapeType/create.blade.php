@extends('backend.admin.layouts.app', ['page_slug' => 'typeshape'])
@section('title', 'Cerate Type Shape')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create Type-Shape </h1>
            <a href="{{ route('am.type-shape.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
                <i class="fas fa-arrow-left fa-sm text-white-50"></i> Back to List
            </a>
        </div>

        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{ route('am.type-shape.store') }}" method="POST">
                    @csrf

                    <div class="form-group row">
                        <label for="sticker_type_id" class="col-sm-2 col-form-label">Sticker Type</label>
                        <div class="col-sm-10">
                            <select class="form-control " id="sticker_type_id" name="sticker_type_id">
                                <option value="">Select Sticker Type</option>
                                @foreach ($stickerTypes as $type)
                                    <option value="{{ $type->id }}"
                                        {{ old('sticker_type_id') == $type->id ? 'selected' : '' }}>
                                        {{ $type->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('sticker_type_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="sticker_shape_id" class="col-sm-2 col-form-label">Shape</label>
                        <div class="col-sm-10">
                            <select class="form-control " id="sticker_shape_id" name="sticker_shape_id">
                                <option value="">Select Shape</option>
                                @foreach ($stickerShapes as $shape)
                                    <option value="{{ $shape->id }}"
                                        {{ old('sticker_shape_id') == $shape->id ? 'selected' : '' }}>
                                        {{ $shape->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('sticker_shape_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10 offset-sm-2">
                            <button type="submit" class="btn btn-primary">Create </button>
                            <a href="{{ route('am.type-shape.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
