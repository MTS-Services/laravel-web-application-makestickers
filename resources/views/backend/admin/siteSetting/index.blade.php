@extends('backend.admin.layouts.app', ['page_slug' => 'site_setting'])
@section('title', 'Site Setting')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Site Setting</h3>
                </div>
                <div class="card-body">
                    <form
                        action="{{ isset($site_setting) ? route('settings.update', encrypt($site_setting->id)) : route('settings.store') }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @if (isset($site_setting))
                            @method('PUT')
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Site </label>
                                    <input type="text" name="title" placeholder="Site Title"
                                        value="{{ isset($site_setting) ? $site_setting->title : old('title') }}"
                                        class="form-control" id="title">
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="keywords" class="form-label">Site keywords</label>
                                    <input type="text" name="keywords" placeholder="Site keywords"
                                        value="{{ isset($site_setting) ? $site_setting->keywords : old('keywords') }}"
                                        class="form-control" id="keywords">
                                    @error('keywords')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="description" class="form-label">Site Description</label>
                                    <input type="text" name="description"
                                        value="{{ isset($site_setting) ? $site_setting->description : old('description') }}"
                                        placeholder="Site Description" class="form-control" id="description">
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Site Email</label>
                                    <input type="email" name="email" placeholder="Site Email"
                                        value="{{ isset($site_setting) ? $site_setting->email : old('email') }}"
                                        class="form-control" id="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Site Phone</label>
                                    <input type="text" name="phone" placeholder="Site Phone"
                                        value="{{ isset($site_setting) ? $site_setting->phone : old('phone') }}"
                                        class="form-control" id="phone">

                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="fax" class="form-label">Site Fax</label>
                                    <input type="text" name="fax" placeholder="Site Fax"
                                        value="{{ isset($site_setting) ? $site_setting->fax : old('fax') }}"
                                        class="form-control" id="fax">

                                    @error('fax')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="address" class="form-label">Site Address</label>
                                    <input type="text" name="address" placeholder="Site Address"
                                        value="{{ isset($site_setting) ? $site_setting->address : old('address') }}"
                                        class="form-control" id="address">

                                    @error('address')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="facebook" class="form-label">Facebook</label>
                                    <input type="text" name="facebook" placeholder="Facebook"
                                        value="{{ isset($site_setting) ? $site_setting->facebook : old('facebook') }}"
                                        class="form-control" id="facebook">

                                    @error('facebook')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="twitter" class="form-label">Twitter</label>
                                    <input type="text" name="twitter" placeholder="Twitter"
                                        value="{{ isset($site_setting) ? $site_setting->twitter : old('twitter') }}"
                                        class="form-control" id="twitter">

                                    @error('twitter')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="linkedin" class="form-label">Linkedin</label>
                                    <input type="text" name="linkedin" placeholder="Linkedin"
                                        value="{{ isset($site_setting) ? $site_setting->linkedin : old('linkedin') }}"
                                        class="form-control" id="linkedin">

                                    @error('linkedin')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="instagram" class="form-label">Instagram</label>
                                    <input type="text" name="instagram" placeholder="Instagram"
                                        value="{{ isset($site_setting) ? $site_setting->instagram : old('instagram') }}"
                                        class="form-control" id="instagram">

                                    @error('instagram')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="youtube" class="form-label">Youtube</label>
                                    <input type="text" name="youtube" placeholder="Youtube"
                                        value="{{ isset($site_setting) ? $site_setting->youtube : old('youtube') }}"
                                        class="form-control" id="youtube">

                                    @error('youtube')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="logo" class="form-label">Site Logo</label>
                                    @if (isset($site_setting) && $site_setting->logo)
                                        <x-file-upload name="logo" type="image" maxSize="2"
                                            existingFile="{{ $site_setting->logo }}" />
                                    @else
                                        <x-file-upload name="logo" type="image" maxSize="2" />
                                    @endif

                                    @error('logo')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="favicon" class="form-label">Site Favicon</label>
                                    @if (isset($site_setting) && $site_setting->favicon)
                                        <x-file-upload name="favicon" type="image" maxSize="2"
                                            existingFile="{{ $site_setting->favicon }}" />
                                    @else
                                        <x-file-upload name="favicon" type="image" maxSize="2" />
                                    @endif

                                    @error('favicon')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Site Setting</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
