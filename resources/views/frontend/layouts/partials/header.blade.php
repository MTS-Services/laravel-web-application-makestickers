<header class="bg-white shadow-md">
    <nav class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

        <!-- Logo -->
        <div>
            <div class="flex items-center space-x-2">
                <img src="{{ asset('build/assets/images/makestickers-logo.png') }}" alt="Make Stickers" class="h-10">

            </div>


        </div>

        <!-- Right Buttons -->
        <div class="text-right hidden xl:block">
            <!-- change popover-1 and --anchor-1 names. Use unique names for each dropdown -->
            <button popovertarget="popover-1" class="py-2 px-4 hover:text-tertiary" style="anchor-name:--anchor-1">
                ACCOUNT <i class="fas fa-caret-down"></i>
            </button>
            <ul class="dropdown dropdown-end menu w-fit rounded-box bg-base-100 shadow-sm"
                popover id="popover-1" style="position-anchor:--anchor-1">
                <li><a href="#" class="px-5 my-1">My Dashboard</a></li>
                <li><a href="#" class="px-5 my-1">Order History</a></li>
                <li><a href="#" class="px-5 my-1">My Favorites</a></li>
                <li><a href="#" class="px-5 my-1 Btn btn-tertiary container center">Login</a></li>
            </ul>
            <div class="dropdown dropdown-end ">
                <div tabindex="0" role="button" class="py-2 px-4 hover:text-tertiary" popovertarget="popover-1">ABOUT US <i class="fas fa-caret-down"></i></div>
                <ul tabindex="0" class="dropdown-content menu  bg-base-100 rounded-box px-4 shadow-sm w-52 ">
                    <li><a href="#" class="px-5 my-1">Blog</a></li>
                    <li><a href="#" class="px-5 my-1">Sticker Trends</a></li>
                    <li><a href="#" class="px-5 my-1">About Us</a></li>
                    <li><a href="#" class="px-5 my-1 ">Careers</a></li>
                </ul>
            </div>
            <div class="dropdown dropdown-end ">
                <div tabindex="0 " class="py-2 px-4 hover:text-tertiary">HELP <i class="fas fa-caret-down"></i></div>
                <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box px-4 shadow-sm w-52 ">
                    <li><a href="#" class="px-5 my-1">FAQ</a></li>
                    <li><a href="#" class="px-5 my-1">Shipping</a></li>
                    <li><a href="#" class="px-5 my-1">Contact Us</a></li>
                </ul>
            </div>

            <!-- Desktop Nav -->
            <div class="hidden md:flex space-x-6 text-sm font-semibold my-4">
                <a href="#" class="hover:text-tertiary">CUSTOM STICKERS</a>
                <a href="#" class="hover:text-tertiary">CUSTOM LABELS</a>
                <a href="#" class="hover:text-tertiary">POUCHES</a>
                <a href="#" class="hover:text-tertiary">DESIGNS</a>
                <a href="#" class="hover:text-tertiary"><i class="fas fa-shopping-cart"></i> CART</a>
            </div>
        </div>

        <div class="text-center xl:hidden">
            <button type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>

    </nav>


    <!-- drawer component -->
    <div id="drawer-navigation" class="fixed top-0 left-0 z-40 w-64 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white dark:bg-gray-700" tabindex="-1" aria-labelledby="drawer-navigation-label">
        <h5 id="drawer-navigation-label" class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400">Menu</h5>


        <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray rounded-lg text-sm p-1.5 absolute top-2.5 end-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
            <i class="fa-solid fa-xmark"></i>
        </button>


        <div class="py-4 overflow-y-auto">
            <ul class="space-y-2 font-medium">
                <li>
                    <button type="button" class="flex items-center w-full p-2 text-base text-gray transition duration-75 rounded-lg group hover:bg-gray-100 " aria-controls="account" data-collapse-toggle="account">
                        <i class="fa-solid fa-user"></i>
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap hover:text-tertiary">ACCOUNT</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="account" class="hidden py-2 space-y-2">
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-gray transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 hover:text-tertiary">
                                My Dashboard</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-gray transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 hover:text-tertiary">Order History</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-gray transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 hover:text-tertiary">
                                My Favorites</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-gray transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 hover:text-tertiary">
                                Log In</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <button type="button" class="flex items-center w-full p-2 text-base text-gray transition duration-75 rounded-lg group hover:bg-gray-100 dark:hover:bg-gray-700" aria-controls="aboutus" data-collapse-toggle="aboutus">

                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap hover:text-tertiary">ABOUT US</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="aboutus" class="hidden py-2 space-y-2">
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-gray transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 hover:text-tertiary">Blog</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-gray transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 hover:text-tertiary">Sticker Trends</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-gray transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 hover:text-tertiary">About Us</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-gray transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 hover:text-tertiary">Careers</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <button type="button" class="flex items-center w-full p-2 text-base text-gray transition duration-75 rounded-lg group hover:bg-gray-100 dark:hover:bg-gray-700" aria-controls="help" data-collapse-toggle="help">

                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap hover:text-tertiary">HELP</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="help" class="hidden py-2 space-y-2">
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-gray transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 hover:text-tertiary">
                                FAQ
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-gray transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 hover:text-tertiary">Shipping</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-gray transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 hover:text-tertiary">Contact Us</a>
                        </li>
                    </ul>
                </li>
                <div class="divider"></div>

                <!-- mobile -->

                <div class=" flex flex-col text-light  text-sm font-semibold my-4">
                    <a href="#" class="hover:text-tertiary py-3">CUSTOM STICKERS</a>
                    <a href="#" class="hover:text-tertiary py-3">CUSTOM LABELS</a>
                    <a href="#" class="hover:text-tertiary py-3">POUCHES</a>
                    <a href="#" class="hover:text-tertiary py-3">DESIGNS</a>
                    <a href="#" class="hover:text-tertiary py-3"><i class="fas fa-shopping-cart"></i> CART</a>
                </div>

            </ul>
        </div>
    </div>


</header>
