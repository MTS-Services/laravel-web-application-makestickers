@extends('frontend.layouts.app', ['page_slug' => 'blog'])
@section('title', 'Blogs')

@section('content')

<div class="container py-10">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($blogs as $blog)
        <div class="card bg-white w-full shadow-sm">
            <figure class="w-full">
                <img src="{{ storage_url($blog->image) }}" alt="{{ $blog->title }}" class="w-full aspect-video object-cover" />
            </figure>
            <div class="card-body">
                <a href="#" class="card-title font-Montserrat hover:text-primary">
                    {{ $blog->title }}
                </a>
                <p>
                    {{ $blog->short_desc }}
                </p>
                <div class="card-actions justify-start gap-5">
                    <div class="avatar">
                        <div class="w-10 rounded-full">
                            <img src="{{storage_url($blog->admin?->image) }}" />
                        </div>
                    </div>
                    <div>
                        <p class="text-sm">{{$blog->created_by_name}}</p>
                        <p class="text-xs text-gray-400">{{ timeFormat($blog->created_at) }}</p>
                    </div>
                </div>
            </div>
        </div>
        
        @empty
        <p class="text-center text-gray-400">No Data Found</p>
        @endforelse
    </div>
</div>

@endsection