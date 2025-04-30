@php
    $fileUrl = $existingFile ? asset($existingFile) : '';
@endphp

<div class="custom-upload-container {{ $type }}Upload">
    <input type="file" name="{{ $name }}" class="d-none" data-maxSize="{{ $maxSize }}"
        accept="{{ $type == 'image' ? 'image/*' : ($type == 'video' ? 'video/*' : '') }}">

    {{-- Upload UI --}}
    <div class="upload-content {{ $existingFile ? 'd-none' : '' }}">
        <i
            class="bi bi-{{ $type == 'image' ? 'image' : ($type == 'video' ? 'camera-video' : 'file-earmark-text') }} upload-icon"></i>
        <h3 class="upload-title">Upload {{ ucfirst($type) }}</h3>
        <p class="upload-subtitle">
            {{ $type == 'image' ? 'PNG, JPG, or JPEG' : ($type == 'video' ? 'MP4, MOV, or AVI' : 'PDF, DOCX, ZIP, etc.') }}
            (Max {{ $maxSize }}MB)
        </p>
        <button type="button"
            class="btn btn-outline-{{ $type == 'image' ? 'primary' : ($type == 'video' ? 'success' : 'secondary') }} btn-sm {{ $type }}UploadButton">
            Select File
        </button>
    </div>

    {{-- Preview Media --}}
    <div class="preview-media {{ $existingFile ? '' : 'd-none' }}">
        @if ($type === 'image')
            <img src="{{ storage_url($existingFile) }}" alt="Image Preview" class="file">
        @elseif($type === 'video')
            <video class="file" controls>
                <source src="{{ storage_url($existingFile) }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        @else
            <i class="bi bi-file-earmark-text file" style="font-size: 4rem; color: #6c757d;"></i>
        @endif
    </div>

    {{-- File Details --}}
    <div class="file-details {{ $existingFile ? '' : 'd-none' }}">
        <div class="file-info">
            <div class="file-name">
                {{ $existingFile ? basename($existingFile) : '' }}
            </div>
            <div class="file-size">
                {{-- Size can't be calculated unless backend sends it; leave empty or prefill if known --}}
                {{ formatFileSize(storage_url($existingFile)) }}
            </div>
        </div>
        <button type="button" class="remove-btn bi bi-x-lg" title="Remove file"></button>
    </div>
</div>
