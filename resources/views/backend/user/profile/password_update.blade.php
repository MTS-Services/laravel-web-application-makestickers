@extends('frontend.layouts.app', ['page_slug' => 'test'])

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Change Password</h2>

    {{-- Success Message --}}
    @if (session('success'))
        <div class="bg-green-100 text-green-700 border border-green-300 rounded px-4 py-3 mb-6">
            {{ session('success') }}
        </div>
    @endif
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <div class="flex justify-between items-center bg-gradient-to-r from-red-600 to-red-500 text-white px-6 py-4">
            <h2 class="text-lg font-semibold">Update Your Password</h2>
            <a href="{{ route('user.profile') }}"
               class="text-sm bg-white text-red-600 px-3 py-1 rounded shadow hover:bg-red-50 transition">
                Back
            </a>
        </div>
        <form action="{{ route('user.profile.password') }}" method="POST" class="p-6 space-y-6">
            @csrf
            @method('PUT')

            {{-- Current Password --}}
            <div>
                <label for="current_password" class="block text-sm font-medium text-gray-700">Current Password</label>
                <div class="relative mt-1">
                    <input type="password" id="current_password" name="current_password"
                           class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500 @error('current_password') border-red-500 @enderror"
                           placeholder="Enter current password">
                    <span class="absolute inset-y-0 right-2 flex items-center cursor-pointer">
                        <i class="bi bi-eye-slash toggle-password" data-target="#current_password"></i>
                    </span>
                </div>
                @error('current_password')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- New Password --}}
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">New Password</label>
                <div class="relative mt-1">
                    <input type="password" id="password" name="password"
                           class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500 @error('password') border-red-500 @enderror"
                           placeholder="Enter new password">
                    <span class="absolute inset-y-0 right-2 flex items-center cursor-pointer">
                        <i class="bi bi-eye-slash toggle-password" data-target="#password"></i>
                    </span>
                </div>
                @error('password')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Confirm Password --}}
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                <div class="relative mt-1">
                    <input type="password" id="password_confirmation" name="password_confirmation"
                           class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500 @error('password_confirmation') border-red-500 @enderror"
                           placeholder="Confirm new password">
                    <span class="absolute inset-y-0 right-2 flex items-center cursor-pointer">
                        <i class="bi bi-eye-slash toggle-password" data-target="#password_confirmation"></i>
                    </span>
                </div>
                @error('password_confirmation')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Submit Button --}}
            <div class="pt-4">
                <button type="submit"
                        class="w-full py-3 text-white font-semibold bg-red-600 rounded-md hover:bg-red-700 transition">
                    <i class="bi bi-save-fill"></i> Change Password
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    // Toggle password visibility
    document.querySelectorAll('.toggle-password').forEach(toggle => {
        toggle.addEventListener('click', function() {
            let target = document.querySelector(this.getAttribute('data-target'));
            if (target.type === 'password') {
                target.type = 'text';
                this.classList.remove('bi-eye-slash');
                this.classList.add('bi-eye');
            } else {
                target.type = 'password';
                this.classList.remove('bi-eye');
                this.classList.add('bi-eye-slash');
            }
        });
    });
</script>

@endsection
