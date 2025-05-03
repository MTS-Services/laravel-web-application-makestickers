@extends('backend.admin.layouts.app', ['page_slug' => 'material'])
@section('title', 'Edit Material')
@section('content')
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Edit Matarial</h4>
                    <div>
                        <a href="{{ route('am.material.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('am.material.update', encrypt($material->id)) }}') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="name" name="name" value="{{ $material->name }}">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Description</label>
                                    <input type="description"
                                        class="form-control @error('description') is-invalid @enderror" id="description"
                                        name="description" value="{{ $material->description }}">
                                    @error('description')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="icons" class="form-label">Icon</label>
                                    <input type="text" class="form-control @error('icons') is-invalid @enderror"
                                        id="icons" name="icons" value="{{ $material->icons }}">
                                    @error('icons')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="price_modifier" class="form-label">Price</label>
                                    <input type="text" class="form-control @error('price_modifier') is-invalid @enderror"
                                        id="price_modifier" name="price_modifier" value="{{ $material->price_modifier }}">
                                    @error('price_modifier')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
