@extends('frontend.layouts.app', ['page_slug' => 'blog'])
@section('title', 'Blogs')

@section('content')

    <div class="container py-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="card bg-white w-full shadow-sm">
                <figure class="w-full aspect-video">
                    <img src="https://placehold.co/600x400" alt="Shoes" class="w-full h-auto object-cover" />
                </figure>
                <div class="card-body">
                    <a href="#" class="card-title font-Montserrat hover:text-primary">Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Mollitia, ex.</a>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem, ea?</p>
                    <div class="card-actions justify-start gap-5">
                        <div class="avatar">
                            <div class="w-10 rounded-full">
                                <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                            </div>
                        </div>
                        <div>
                            <p class="text-sm">John Doe</p>
                            <p class="text-xs text-gray-400">25 Jan 2023</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card bg-white w-full shadow-sm">
                <figure class="w-full aspect-video">
                    <img src="https://placehold.co/600x400" alt="Shoes" class="w-full h-auto object-cover" />
                </figure>
                <div class="card-body">
                    <a href="#" class="card-title font-Montserrat hover:text-primary">Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Mollitia, ex.</a>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem, ea?</p>
                    <div class="card-actions justify-start gap-5">
                        <div class="avatar">
                            <div class="w-10 rounded-full">
                                <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                            </div>
                        </div>
                        <div>
                            <p class="text-sm">John Doe</p>
                            <p class="text-xs text-gray-400">25 Jan 2023</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card bg-white w-full shadow-sm">
                <figure class="w-full aspect-video">
                    <img src="https://placehold.co/600x400" alt="Shoes" class="w-full h-auto object-cover" />
                </figure>
                <div class="card-body">
                    <a href="#" class="card-title font-Montserrat hover:text-primary">Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Mollitia, ex.</a>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem, ea?</p>
                    <div class="card-actions justify-start gap-5">
                        <div class="avatar">
                            <div class="w-10 rounded-full">
                                <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                            </div>
                        </div>
                        <div>
                            <p class="text-sm">John Doe</p>
                            <p class="text-xs text-gray-400">25 Jan 2023</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card bg-white w-full shadow-sm">
                <figure class="w-full aspect-video">
                    <img src="https://placehold.co/600x400" alt="Shoes" class="w-full h-auto object-cover" />
                </figure>
                <div class="card-body">
                    <a href="#" class="card-title font-Montserrat hover:text-primary">Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Mollitia, ex.</a>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem, ea?</p>
                    <div class="card-actions justify-start gap-5">
                        <div class="avatar">
                            <div class="w-10 rounded-full">
                                <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                            </div>
                        </div>
                        <div>
                            <p class="text-sm">John Doe</p>
                            <p class="text-xs text-gray-400">25 Jan 2023</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
