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


                {{-- Dropdown --}}
                <li class="nav-item  @if (isset($page_slug) && ($page_slug == 'a' || $page_slug == 'b')) active submenu @endif">
                    <a data-bs-toggle="collapse" href="#dropdown2"
                        @if (isset($page_slug) && ($page_slug == 'a' || $page_slug == 'b')) aria-expanded="true" @endif>
                        <i class="icon-people"></i>
                        <p>{{ __('Dropdown') }}</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse @if (isset($page_slug) && ($page_slug == 'a' || $page_slug == 'v')) show @endif" id="dropdown2">
                        <ul class="nav nav-collapse">
                            <li class="@if (isset($page_slug) && $page_slug == 'a') active @endif">
                                <a href="">
                                    <span class="sub-item">{{ __('Item 1') }}</span>
                                </a>
                            </li>
                            <li class="@if (isset($page_slug) && $page_slug == 'v') active @endif">
                                <a href="">
                                    <span class="sub-item">{{ __('Item 2') }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item  @if (isset($page_slug) && ($page_slug == 'size' || $page_slug == 'size_price')) active submenu @endif">
                    <a data-bs-toggle="collapse" href="#dropdown2"
                        @if (isset($page_slug) && ($page_slug == 'size' || $page_slug == 'size_price')) aria-expanded="true" @endif>
                        <i class="icon-people"></i>
                        <p>{{ __('Size Management') }}</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse @if (isset($page_slug) && ($page_slug == 'size' || $page_slug == 'size_price')) show @endif" id="dropdown2">
                        <ul class="nav nav-collapse">
                            <li class="@if (isset($page_slug) && $page_slug == 'size') active @endif">
                                <a href="{{ route('size.size.index') }}">
                                    <span class="sub-item">{{ __('Size') }}</span>
                                </a>
                            </li>
                            <li class="@if (isset($page_slug) && $page_slug == 'size_price') active @endif">
                                <a href="">
                                    <span class="sub-item">{{ __('Size Price') }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                {{-- Single label --}}
                <li class="nav-item  @if (isset($page_slug) && $page_slug == 'c') active @endif">
                    <a href="">
                        <i class="icon-chart"></i>
                        <p>{{ __('Single label') }}</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
