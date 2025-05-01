@extends('frontend.layouts.app', ['page_slug' => 'test'])

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
    <h2 class="text-2xl font-semibold text-black mb-6">Edit User Profile</h2>

    {{-- Success Message --}}
    @if (session('success'))
        <div class="bg-secondary-hover text-secondary-hover border border-secondary-hover rounded px-4 py-3 mb-6">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <div class="flex justify-between items-center bg-gradient-to-r from-primary-hover to-indigo-600 text-white px-6 py-4">
            <h2 class="text-lg font-semibold">Update Profile</h2>
            <a href="{{ route('user.profile') }}"
               class="text-sm bg-white text-primary-hover px-3 py-1 rounded shadow hover:bg-primary-hovertransition">
                Back
            </a>
        </div>

        <form action="{{ route('user.profile.update') }}" method="POST" enctype="multipart/form-data"
              class="p-6 space-y-6">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                {{-- Left Column --}}
                <div class="space-y-4">
                    {{-- Name --}}
                    <div>
                        <label for="name" class="block text-sm font-medium text-black">Name</label>
                        <input type="text" id="name" name="name"
                               value="{{ old('name', user()->name) }}"
                               class="mt-1 block w-full border-black rounded-md shadow-sm focus:ring-primary-hover focus:border-primary-hover @error('name') border-tertiary @enderror">
                        @error('name')
                            <p class="text-tertiary text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Email --}}
                    <div>
                        <label for="email" class="block text-sm font-medium text-black">Email</label>
                        <input type="email" id="email" name="email"
                               value="{{ old('email', user()->email) }}"
                               class="mt-1 block w-full border-black rounded-md shadow-sm focus:ring-primary-hover focus:border-primary-hover @error('email') border-tertiary @enderror">
                        @error('email')
                            <p class="text-tertiary text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Phone --}}
                    <div>
                        <label for="phone" class="block text-sm font-medium text-black">Phone</label>
                        <input type="text" id="phone" name="phone"
                               value="{{ old('phone', user()->phone_number) }}"
                               class="mt-1 block w-full border-black rounded-md shadow-sm focus:ring-primary-hover focus:border-primary-hover @error('phone') border-tertiary @enderror">
                        @error('phone')
                            <p class="text-tertiary text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Address --}}
                    <div>
                        <label for="address" class="block text-sm font-medium text-black">Address</label>
                        <input type="text" id="address" name="address"
                               value="{{ old('address', user()->address) }}"
                               class="mt-1 block w-full border-black rounded-md shadow-sm focus:ring-primary-hover focus:border-primary-hover @error('address') border-tertiary @enderror">
                        @error('address')
                            <p class="text-tertiary text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Date of Birth --}}
                    <div>
                        <label for="dob" class="block text-sm font-medium text-black">Date of Birth</label>
                        <input type="date" id="dob" name="dob"
                               value="{{ old('dob', user()->dob) }}"
                               class="mt-1 block w-full border-black rounded-md shadow-sm focus:ring-primary-hover focus:border-primary-hover @error('dob') border-tertiary @enderror">
                        @error('dob')
                            <p class="text-tertiary text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                {{-- Right Column --}}
                <div class="space-y-4">
                    {{-- Gender --}}
                    <div>
                        <label for="gender" class="block text-sm font-medium text-black">Gender</label>
                        <select name="gender" id="gender"
                                class="mt-1 block w-full border-black rounded-md shadow-sm focus:ring-primary-hover focus:border-primary-hover @error('gender') border-tertiary @enderror">
                            <option value="0" {{ old('gender', user()->gender) == '0' ? 'selected' : '' }}>Unset</option>
                            <option value="1" {{ old('gender', user()->gender) == '1' ? 'selected' : '' }}>Male</option>
                            <option value="2" {{ old('gender', user()->gender) == '2' ? 'selected' : '' }}>Female</option>
                        </select>
                        @error('gender')
                            <p class="text-tertiary text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Image Upload --}}
                    <div>
                        <label for="image" class="block text-sm font-medium text-black">Profile Image</label>
                        <input type="file" id="image" name="image"
                               class="mt-1 block w-full border-black rounded-md shadow-sm focus:ring-primary-hover focus:border-primary-hover @error('image') border-tertiary @enderror">
                        @error('image')
                            <p class="text-tertiary text-sm mt-1">{{ $message }}</p>
                        @enderror

                        @if(user()->image)
                            <div class="mt-4">
                                <img src="{{ Storage::url(user()->image) }}" alt="Current Profile Image"
                                     class="w-24 h-24 object-cover rounded-full border border-black shadow">
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            {{-- Submit --}}
            <div class="pt-4">
                <button type="submit"
                        class="inline-flex items-center px-6 py-2 bg-primary-hover text-white text-sm font-medium rounded-md shadow hover:bg-primary-hover transition">
                    Update Profile
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
