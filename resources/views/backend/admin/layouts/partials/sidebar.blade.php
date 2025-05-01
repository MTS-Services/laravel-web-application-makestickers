<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="{{ route('admin.dashboard') }}" class="logo">
                <h3 class="text-light">{{ config('app.name', 'Ecommerce') }}</h3>
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item  @if (isset($page_slug) && $page_slug == 'dashboard') active @endif">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class='bx bxs-dashboard'></i>
                        <p>{{ __('Dashboard') }}</p>
                    </a>
                </li>

                @if (admin()->can('admin-list') || admin()->can('role-list') || admin()->can('permission-list'))
                    <li class="nav-item  @if (isset($page_slug) && ($page_slug == 'admin' || $page_slug == 'role' || $page_slug == 'permission')) active submenu @endif">
                        <a data-bs-toggle="collapse" href="#adminManagement"
                            @if (isset($page_slug) && ($page_slug == 'admin' || $page_slug == 'role' || $page_slug == 'permission')) aria-expanded="true" @endif>
                            <i class="icon-people"></i>
                            <p>{{ __('Admin Management') }}</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse @if (isset($page_slug) && ($page_slug == 'admin' || $page_slug == 'role' || $page_slug == 'permission')) show @endif" id="adminManagement">
                            <ul class="nav nav-collapse">
                                @can('admin-list')
                                    <li class="@if (isset($page_slug) && $page_slug == 'admin') active @endif">
                                        <a href="{{ route('am.admin.index') }}">
                                            <span class="sub-item">{{ __('Admins') }}</span>
                                        </a>
                                    </li>
                                @endcan
                                @can('role-list')
                                    <li class="@if (isset($page_slug) && $page_slug == 'role') active @endif">
                                        <a href="{{ route('am.role.index') }}">
                                            <span class="sub-item">{{ __('Roles') }}</span>
                                        </a>
                                    </li>
                                @endcan
                                @can('permission-list')
                                    <li class="@if (isset($page_slug) && $page_slug == 'permission') active @endif">
                                        <a href="{{ route('am.permission.index') }}">
                                            <span class="sub-item">{{ __('Permissions') }}</span>
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </div>
                    </li>
                @endif

                @can('test-list')
                    <li class="nav-item  @if (isset($page_slug) && $page_slug == 'test') active @endif">
                        <a href="{{ route('admin.test.index') }}">
                            <i class="icon-chart"></i>
                            <p>{{ __('Test') }}</p>
                        </a>
                    </li>
                @endcan

                <li class="nav-item  @if (isset($page_slug) &&
                        ($page_slug == 'product' ||
                            $page_slug == 'label_category' ||
                            $page_slug == 'sticker_category' ||
                            $page_slug == 'third_category' ||
                            $page_slug == 'material_category')) active submenu @endif">
                    <a data-bs-toggle="collapse" href="#1"
                        @if (isset($page_slug) &&
                                ($page_slug == 'product' ||
                                    $page_slug == 'label_category' ||
                                    $page_slug == 'sticker_category' ||
                                    $page_slug == 'third_category' ||
                                    $page_slug == 'material_category')) aria-expanded="true" @endif>
                        <i class="icon-people"></i>
                        <p>{{ __('Products Management') }}</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse @if (isset($page_slug) &&
                            ($page_slug == 'product' ||
                                $page_slug == 'label_category' ||
                                $page_slug == 'sticker_category' ||
                                $page_slug == 'third_category' ||
                                $page_slug == 'material_category')) show @endif" id="1">
                        <ul class="nav nav-collapse">
                            <li class="@if (isset($page_slug) && $page_slug == 'product') active @endif">
                                <a href="{{ route('admin.product.index') }}">
                                    <span class="sub-item">{{ __('Product') }}</span>
                                </a>
                            </li>
                            <li class="@if (isset($page_slug) && $page_slug == 'sticker_category') active @endif">
                                <a href="{{ route('admin.sticker-category.index') }}">
                                    <span class="sub-item">{{ __('Sticker Category') }}</span>
                                </a>
                            </li>
                            <li class="@if (isset($page_slug) && $page_slug == 'label_category') active @endif">
                                <a href="{{ route('admin.label-category.index') }}">
                                    <span class="sub-item">{{ __('Label Category') }}</span>
                                </a>
                            </li>
                            <li class="@if (isset($page_slug) && $page_slug == 'material_category') active @endif">
                                <a href="{{ route('admin.material-category.index') }}">
                                    <span class="sub-item">{{ __('Material Category') }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                                
                <li class="nav-item  @if (isset($page_slug) && ($page_slug == 'faqcategory' || $page_slug == 'faq')) active submenu @endif">
                    <a data-bs-toggle="collapse" href="#2"
                        @if (isset($page_slug) && ($page_slug=='faqcategory' || $page_slug=='faq' )) aria-expanded="true" @endif>
                        <i class="icon-people"></i>
                        <p>{{ __('Faq Management') }}</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse @if (isset($page_slug) && ($page_slug == 'faqcategory' || $page_slug == 'faq')) show @endif" id="2">
                        <ul class="nav nav-collapse">
                            <li class="@if (isset($page_slug) && $page_slug == 'faqcategory') active @endif">
                                <a href="{{route('admin.faqcategory.index')}}">
                                    <span class="sub-item">{{ __('Faq_Categories') }}</span>
                                </a>
                            </li>
                            <li class="@if (isset($page_slug) && $page_slug == 'faq') active @endif">
                                <a href="{{route('admin.faq.index')}}">
                                    <span class="sub-item">{{ __('FAQ') }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item  @if (isset($page_slug) && $page_slug == 'blog') active @endif">
                    <a href="{{route('admin.blog.index')}}">
                        <i class="icon-chart"></i>
                        <p>{{ __('Bolg Posts') }}</p>
                    </a>
                </li>
                <li class="nav-item  @if (isset($page_slug) && $page_slug == 'site_setting') active @endif">
                    <a href="{{ route('settings.index') }}">
                        <i class="icon-chart"></i>
                        <p>{{ __('Site Setting') }}</p>
                    </a>
                </li>


                {{-- Single Label --}}
                 <li class="nav-item  @if (isset($page_slug) && $page_slug == 'order') active @endif">
                    <a href="{{ route('order.index') }}">
                        <i class="icon-chart"></i>
                        <p>{{ __('Order') }}</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>