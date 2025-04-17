@extends('frontend.layouts.app', ['page_slug' => 'pouch'])
@section('title', 'Pouches')

@push('styles')
    
@endpush

@section('content')
    <div class="w-[1300px] mx-auto">
        <section>
            <div>
                <h1 class="text-4xl font-bold">Custom Printed Stand-Up Pouches</h1>
                <div class="flex gap-5 items-center">
                    <div class="w-fit flex items-center gap-4 border border-gray p-2 rounded-full mt-1">
                        <div class="text-yellow-400">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div>
                            <p><span class="font-black">5</span> out of 5</p>
                        </div>
                    </div>
                    <span class="text-gray">100 reviews</span>
                </div>
            </div>
        </section>

        {{-- slider section  --}}
        <section class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-6 items-start">
         {{-- left side: sliders (takes 2/3 width) --}}
         <div class="col-span-1 md:col-span-2">
             <!-- Swiper Main -->
             <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2 mb-4">
                 <div class="swiper-wrapper">
                     <div class="swiper-slide"><img src="https://swiperjs.com/demos/images/nature-1.jpg" /></div>
                     <div class="swiper-slide"><img src="https://swiperjs.com/demos/images/nature-2.jpg" /></div>
                     <div class="swiper-slide"><img src="https://swiperjs.com/demos/images/nature-3.jpg" /></div>
                     <div class="swiper-slide"><img src="https://swiperjs.com/demos/images/nature-4.jpg" /></div>
                     <div class="swiper-slide"><img src="https://swiperjs.com/demos/images/nature-5.jpg" /></div>
                     <div class="swiper-slide"><img src="https://swiperjs.com/demos/images/nature-6.jpg" /></div>
                     <div class="swiper-slide"><img src="https://swiperjs.com/demos/images/nature-7.jpg" /></div>
                 </div>
                 <div class="swiper-button-next"></div>
                 <div class="swiper-button-prev"></div>
             </div>
     
             <!-- Swiper Thumbs -->
             <div thumbsSlider="" class="swiper mySwiper">
                 <div class="swiper-wrapper">
                     <div class="swiper-slide"><img src="https://swiperjs.com/demos/images/nature-1.jpg" /></div>
                     <div class="swiper-slide"><img src="https://swiperjs.com/demos/images/nature-2.jpg" /></div>
                     <div class="swiper-slide"><img src="https://swiperjs.com/demos/images/nature-3.jpg" /></div>
                     <div class="swiper-slide"><img src="https://swiperjs.com/demos/images/nature-4.jpg" /></div>
                     <div class="swiper-slide"><img src="https://swiperjs.com/demos/images/nature-5.jpg" /></div>
                 </div>
             </div>
             <p class="mt-8">Our custom printed stand-up pouches feature a premium matte exterior and a metallized interior for a professional look. Each pouch includes a push-to-close zipper, universal hang hole, and easy-open tear notches. These pouches are FDA-compliant for direct food contact, making them suitable for snacks, supplements, powders, and more. Available in multiple sizes and fully customizable with your branding.</p>
         </div>
     
         {{-- right side: content --}}
        <div>
         <div class="content col-span-1 border border-gray p-4 rounded-lg">
            <h2 class="text-xl font-bold mb-3">Printing Options</h2>
            <div class="flex justify-between gap-2">
              <div class="flex items-center gap-2">
                 <p>Size</p>
                 <a href="#" class="text-blue-600">View help</a>
              </div>
              <p class="font-bold">Quantity</p>
            </div>

            <div class="flex justify-between gap-2 mt-3"> 
              <select  class="border border-gray bg-white rounded-lg p-4">
                 <option value="#">5.75" W x 7.5" H x 2.5" D</option>
                 <option value="#">5.75" W x 7.5" H x 2.5" D</option>
                 <option value="#">5.75" W x 7.5" H x 2.5" D</option>
              </select>
              {{-- quantity select  --}}
              <select  class="border border-gray bg-white rounded-lg p-4 w-[190px]">
                 <option value="#">1</option>
                 <option value="#">100</option>
                 <option value="#">1090</option>
              </select>
            </div>
            <div class="flex justify-between mt-10">
              <h2 class="text-xl font-bold">Total Price:</h2>
              <span>125$</span>
            </div>
            <div class="flex justify-between">
              <button class="hover:bg-blue-600 hover:text-white p-2 font-black rounded-lg text-blue-500 mt-4 border border-blue-600">COUSTOMIZE TEMPLETE</button>
              <button class="bg-blue-600 text-white p-2 font-black rounded-lg hover:bg-white  hover:text-blue-500 mt-4 border border-blue-600"><i class="fa-solid fa-upload"></i> UPLOAD FILE</button>
            </div>
            <div class="flex flex-col">
              <p class="text-center mt-4">or</p>
            <a class="text-center mt-4 text-blue-600">skip and send file(s) later</a>
            </div>
        </div>
        <div>
         <div class="text-center border border-gray p-4 rounded-lg mt-10">
            `<h2 class="text-lg italic">Order today and get your pouches by</h2>
            `<h2 class="text-3xl font-black">Wednesday, April 30</h2>
            <hr class="my-4">
            <p>Need them sooner?</p>
            <p>With
              <span class="font-bold text-red-500 italic"><i class="fa-solid fa-bolt text-red-500"></i> Rush Service</span>
               get them
               Wednesday, April 23</p>
         </div>
      </div>
        </div>
        
     </section> 
     
     {{-- Stand Up Pouch Features  --}}
     <section>
      <div>
         <h2 class="text-4xl mt-14 font-bold text-center">Stand Up Pouch Features</h2>
     <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-10">
      <div class="p-4">
         <div class="flex flex-col md:flex-row bg-white rounded-2xl shadow-lg overflow-hidden">
           <!-- Image -->
           <div class="md:w-1/2">
             <img
               src="{{ asset('frontend/pouch-photo/7d7654fdb5cc4f779c08cf10c29fd715.webp') }}"
               alt="Pouch Image"
               class="w-full h-[300px] object-cover"
             />
           </div>
       
           <!-- Content -->
           <div class="md:w-1/2 p-6 flex flex-col justify-center">
             <h2 class="text-xl font-bold text-gray-800 mb-4">
               Matte Finish, Metallized Material
             </h2>
             <hr class="border-t border-gray-300 mb-4" />
             <p class="text-gray-600">
               Pouches have a metallized interior and a matte exterior. The metallized material provides a barrier for oxygen and moisture.
             </p>
           </div>
         </div>
       </div>
      <div class="p-4">
         <div class="flex flex-col md:flex-row bg-white rounded-2xl shadow-lg overflow-hidden">
           <!-- Image -->
           <div class="md:w-1/2">
             <img
               src="{{ asset('frontend/pouch-photo/7d7654fdb5cc4f779c08cf10c29fd715.webp') }}"
               alt="Pouch Image"
               class="w-full h-[300px] object-cover"
             />
           </div>
       
           <!-- Content -->
           <div class="md:w-1/2 p-6 flex flex-col justify-center">
             <h2 class="text-xl font-bold text-gray-800 mb-4">
               Matte Finish, Metallized Material
             </h2>
             <hr class="border-t border-gray-300 mb-4" />
             <p class="text-gray-600">
               Pouches have a metallized interior and a matte exterior. The metallized material provides a barrier for oxygen and moisture.
             </p>
           </div>
         </div>
       </div>
      <div class="p-4">
         <div class="flex flex-col md:flex-row bg-white rounded-2xl shadow-lg overflow-hidden">
           <!-- Image -->
           <div class="md:w-1/2">
             <img
               src="{{ asset('frontend/pouch-photo/7d7654fdb5cc4f779c08cf10c29fd715.webp') }}"
               alt="Pouch Image"
               class="w-full h-[300px] object-cover"
             />
           </div>
       
           <!-- Content -->
           <div class="md:w-1/2 p-6 flex flex-col justify-center">
             <h2 class="text-xl font-bold text-gray-800 mb-4">
               Matte Finish, Metallized Material
             </h2>
             <hr class="border-t border-gray-300 mb-4" />
             <p class="text-gray-600">
               Pouches have a metallized interior and a matte exterior. The metallized material provides a barrier for oxygen and moisture.
             </p>
           </div>
         </div>
       </div>
      <div class="p-4">
         <div class="flex flex-col md:flex-row bg-white rounded-2xl shadow-lg overflow-hidden">
           <!-- Image -->
           <div class="md:w-1/2">
             <img
               src="{{ asset('frontend/pouch-photo/7d7654fdb5cc4f779c08cf10c29fd715.webp') }}"
               alt="Pouch Image"
               class="w-full h-[300px] object-cover"
             />
           </div>
       
           <!-- Content -->
           <div class="md:w-1/2 p-6 flex flex-col justify-center">
             <h2 class="text-xl font-bold text-gray-800 mb-4">
               Matte Finish, Metallized Material
             </h2>
             <hr class="border-t border-gray-300 mb-4" />
             <p class="text-gray-600">
               Pouches have a metallized interior and a matte exterior. The metallized material provides a barrier for oxygen and moisture.
             </p>
           </div>
         </div>
       </div>
      <div class="p-4">
         <div class="flex flex-col md:flex-row bg-white rounded-2xl shadow-lg overflow-hidden">
           <!-- Image -->
           <div class="md:w-1/2">
             <img
               src="{{ asset('frontend/pouch-photo/7d7654fdb5cc4f779c08cf10c29fd715.webp') }}"
               alt="Pouch Image"
               class="w-full h-[300px] object-cover"
             />
           </div>
       
           <!-- Content -->
           <div class="md:w-1/2 p-6 flex flex-col justify-center">
             <h2 class="text-xl font-bold text-gray-800 mb-4">
               Matte Finish, Metallized Material
             </h2>
             <hr class="border-t border-gray-300 mb-4" />
             <p class="text-gray-600">
               Pouches have a metallized interior and a matte exterior. The metallized material provides a barrier for oxygen and moisture.
             </p>
           </div>
         </div>
       </div>
      <div class="p-4">
         <div class="flex flex-col md:flex-row bg-white rounded-2xl shadow-lg overflow-hidden">
           <!-- Image -->
           <div class="md:w-1/2">
             <img
               src="{{ asset('frontend/pouch-photo/7d7654fdb5cc4f779c08cf10c29fd715.webp') }}"
               alt="Pouch Image"
               class="w-full h-[300px] object-cover"
             />
           </div>
       
           <!-- Content -->
           <div class="md:w-1/2 p-6 flex flex-col justify-center">
             <h2 class="text-xl font-bold text-gray-800 mb-4">
               Matte Finish, Metallized Material
             </h2>
             <hr class="border-t border-gray-300 mb-4" />
             <p class="text-gray-600">
               Pouches have a metallized interior and a matte exterior. The metallized material provides a barrier for oxygen and moisture.
             </p>
           </div>
         </div>
       </div>
     </div>
          
      </div>
     </section>
     {{-- Pouches to Life --}}
     
     <section>
      <div>
         <div>
            <h2 class="text-4xl mt-10 font-bold text-center">How We Bring Your Pouches to Life</h2>
         </div>
        <div class="grid grid-cols-4">
         <div class="mt-10">
            <div class="card w-96 shadow-sm">
               <figure>
                 <img
                   src="{{ asset('frontend/pouch-photo/info-product-order.svg') }}"
                   alt="Shoes" />
               </figure>
               <div class="card-body">
                 <h2 class="card-title">Order Your Custom Pouches</h2>
                 <p>Upload your own design or use our downloadable templates for easy designing and ordering</p>
                 <div class="card-actions justify-end">
                  
                 </div>
               </div>
             </div>
         </div>
         <div class="mt-10">
            <div class="card w-96 shadow-sm">
               <figure>
                 <img
                   src="{{ asset('frontend/pouch-photo/info-product-order.svg') }}"
                   alt="Shoes" />
               </figure>
               <div class="card-body">
                 <h2 class="card-title">Order Your Custom Pouches</h2>
                 <p>Upload your own design or use our downloadable templates for easy designing and ordering</p>
                 <div class="card-actions justify-end">
                  
                 </div>
               </div>
             </div>
         </div>
         <div class="mt-10">
            <div class="card w-96 shadow-sm">
               <figure>
                 <img
                   src="{{ asset('frontend/pouch-photo/info-product-order.svg') }}"
                   alt="Shoes" />
               </figure>
               <div class="card-body">
                 <h2 class="card-title">Order Your Custom Pouches</h2>
                 <p>Upload your own design or use our downloadable templates for easy designing and ordering</p>
                 <div class="card-actions justify-end">
                  
                 </div>
               </div>
             </div>
         </div>
         <div class="mt-10">
            <div class="card w-96 shadow-sm">
               <figure>
                 <img
                   src="{{ asset('frontend/pouch-photo/info-product-order.svg') }}"
                   alt="Shoes" />
               </figure>
               <div class="card-body">
                 <h2 class="card-title">Order Your Custom Pouches</h2>
                 <p>Upload your own design or use our downloadable templates for easy designing and ordering</p>
                 <div class="card-actions justify-end">
                  
                 </div>
               </div>
             </div>
         </div>
        </div>
      </div>
     </section>
    </div>

@endsection

@push('scripts')
    <!-- Initialize Swiper -->
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
        });
        var swiper2 = new Swiper(".mySwiper2", {
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: swiper,
            },
        });
    </script>
@endpush
