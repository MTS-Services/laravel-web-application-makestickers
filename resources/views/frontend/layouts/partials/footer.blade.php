<footer class=" bg-primary text-white pt-16 pb-0">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8 text-font-14px text-center md:text-left">

        <!-- Column 1 -->
        <div>
            <h4 class="font-bold mb-3">Who We Are</h4>
            <ul class="space-y-1">
                <li><a href="#" class="hover:underline">Custom Stickers</a></li>
                <li><a href="#" class="hover:underline">Custom Labels</a></li>
                <li><a href="{{route('frontend.about')}}" class="hover:underline">About Us</a></li>
                <li><a href="#" class="hover:underline">Careers</a></li>
            </ul>
        </div>

        <!-- Column 2 -->
        <div>
            <h4 class="font-bold mb-3">Customer Service</h4>
            <ul class="space-y-1">
                <li><a href="{{route('frontend.shipping')}}" class="hover:underline">Shipping & Turnaround</a></li>
                <li><a href="{{route('frontend.faq')}}" class="hover:underline">Common Questions</a></li>
                <li><a href="{{route('frontend.returns')}}" class="hover:underline">Return Policy</a></li>
                <li><a href="{{route('frontend.contact')}}" class="hover:underline">Contact Us</a></li>
            </ul>
        </div>

        <!-- Column 3 -->
        <div class=" text-center sm:text-left">
            <h4 class="font-bold mb-4">Follow Us</h4>
            <div class="flex space-x-4 text-font-20px ps-24 sm:ps-0">
                <a href="#" class="hover:text-light-gray"><i class="fab fa-facebook"></i></a>
                <a href="#" class="hover:text-light-gray"><i class="fab fa-x-twitter"></i></a>
                <a href="#" class="hover:text-light-gray"><i class="fab fa-instagram"></i></a>
                <a href="#" class="hover:text-light-gray"><i class="fab fa-linkedin"></i></a>
            </div>

            <div class="flex space-x-4 text-font-20px my-2 ps-24 sm:ps-0">
                <a href="#" class="hover:text-light-gray"><i class="fab fa-tiktok"></i></a>
                <a href="#" class="hover:text-light-gray"><i class="fab fa-threads"></i></a>
                <a href="#" class="hover:text-light-gray"><i class="fab fa-youtube"></i></a>
            </div>
        </div>

        <!-- Column 4 -->
        <div>
            <h4 class="font-bold mb-3">Contact Us</h4>
            <p class="text-font-14px mb-1">Our offices are open Mon–Fri 8am–4:30pm (CT)</p>
            <p class="font-semibold">Call Us</p>
            <p class="mb-2">1-800-347-2744</p>
            <a href="#"
                class="inline-block bg-yellow-400 hover:bg-yellow-500 text-black text-font-14px font-semibold px-4 py-1 rounded">Send
                a Message</a>
        </div>

    </div>


  <!-- Bottom Strip -->
  <div class="bg-[#093A50] mt-8 py-4">
    <div class="max-w-5xl mx-auto px-6 text-center text-xs text-light-gray space-y-2">
      <div class="flex justify-center items-center space-x-2">
        <!-- Add your payment icons here -->
        <img src="{{ asset('Frontend/images/footer_icons_color.png') }}" alt="Visa" class="h-6">
        <!-- Add others -->
      </div>
      <p>Makestickers.com is a registered trademark of Graphicsland, Inc. 
        <a href="#" class="hover:underline">Terms</a> | 
        <a href="#" class="hover:underline">Privacy Policy</a> | 
        <a href="#" class="hover:underline">Trademark</a> | 
        <a href="#" class="hover:underline">Sitemap</a>
      </p>
      <p>Copyright ©2025 Graphicsland, Inc. All Rights Reserved.</p>
    </div>
  </div>
</footer>
