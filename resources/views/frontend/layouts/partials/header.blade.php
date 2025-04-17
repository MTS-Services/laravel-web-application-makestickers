<header class="bg-white shadow-md">
    <nav class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

        <!-- Logo -->
         <div>
            <div class="flex items-center space-x-2">
                <img src="{{ asset('build/assets/images/logo.png') }}" alt="Make Stickers" class="h-8">
                
            </div>

          
         </div>

         <!-- Right Buttons -->
         <div class=" text-right">        
           <select class="bg-white p-0 text-sm leading-tight">
                <option disabled selected class="p-0 m-0">👤 LOG IN</option>
                <option class="p-0 m-0">My Dashboard</option>
                <option class="p-0 m-0">Order History</option>
                <option class="p-0 m-0">My Favorites</option>
                <option class="p-0 m-0">Login</option>
            </select>

            <select class="bg-white p-0 text-sm leading-tight">
                <option disabled selected class="p-0 m-0">ABOUT US</option>
                <option class="p-0 m-0">Blog</option>
                <option class="p-0 m-0">Sticker Trends</option>
                <option class="p-0 m-0">About Us</option>
                <option class="p-0 m-0">Careers</option>
            </select>

            <select class="bg-white p-0 text-sm leading-tight">
                <option disabled selected class="p-0 m-0">HELP</option>
                <option class="p-0 m-0">FAQ</option>
                <option class="p-0 m-0">Shipping</option>
                <option class="p-0 m-0">Contact Us</option>
            </select>


              <!-- Desktop Nav -->
              <div class="hidden md:flex space-x-6 text-sm font-semibold my-4">
                <a href="#" class="hover:text-red-500">CUSTOM STICKERS</a>
                <a href="#" class="hover:text-red-500">CUSTOM LABELS</a>
                <a href="#" class="hover:text-red-500">POUCHES</a>
                <a href="#" class="hover:text-red-500">DESIGNS</a>
                <a href="#" class="hover:text-red-500">🛒 CART</a>
            </div>
         </div>
      



        <!-- Mobile Menu Button -->
        <div class="md:hidden">
            <button id="menuToggle" class="text-2xl focus:outline-none">☰</button>
        </div>
    </nav>

    <!-- Mobile Nav Menu -->
    <div id="mobileMenu" class="md:hidden px-6 pb-4 space-y-2 text-sm font-semibold hidden">
        <a href="#" class="block hover:text-red-500">CUSTOM STICKERS</a>
        <a href="#" class="block hover:text-red-500">CUSTOM LABELS</a>
        <a href="#" class="block hover:text-red-500">POUCHES</a>
        <a href="#" class="block hover:text-red-500">DESIGNS</a>
        <a href="#" class="block hover:text-red-500">🛒 CART</a>
        <hr>
        <a href="#" class="block hover:text-red-500">👤 LOG IN</a>
        <a href="#" class="block hover:text-red-500">ABOUT US</a>
        <a href="#" class="block hover:text-red-500">HELP</a>
    </div>
</header>