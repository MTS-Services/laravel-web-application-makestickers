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

                <li class="nav-item  @if (isset($page_slug) && $page_slug == 'test') active @endif">
                    <a href="{{ route('admin.test.index') }}">
                        <i class="icon-chart"></i>
                        <p>{{ __('Test') }}</p>
                    </a>
                </li>

                <li class="nav-item  @if (isset($page_slug) && ($page_slug == 'b' || $page_slug == 'c')) active submenu @endif">
                    <a data-bs-toggle="collapse" href="#1"
                        @if (isset($page_slug) && ($page_slug == 'b' || $page_slug == 'c')) aria-expanded="true" @endif>
                        <i class="icon-people"></i>
                        <p>{{ __('Dropdown') }}</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse @if (isset($page_slug) && ($page_slug == 'b' || $page_slug == 'c')) show @endif" id="1">
                        <ul class="nav nav-collapse">
                            <li class="@if (isset($page_slug) && $page_slug == 'b') active @endif">
                                <a href="">
                                    <span class="sub-item">{{ __('Sub item 1') }}</span>
                                </a>
                            </li>
                            <li class="@if (isset($page_slug) && $page_slug == 'c') active @endif">
                                <a href="">
                                    <span class="sub-item">{{ __('Sub item 2') }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item  @if (isset($page_slug) && $page_slug == 'site_setting') active @endif">
                    <a href="{{ route('settings.index') }}">
                        <i class="icon-chart"></i>
                        <p>{{ __('Site Setting') }}</p>
                    </a>
                </li>

                {{-- Single Label --}}
                {{-- <li class="nav-item  @if (isset($page_slug) && $page_slug == 'a') active @endif">
                    <a href="">
                        <i class="icon-chart"></i>
                        <p>{{ __('Single label') }}</p>
                    </a>
                </li> --}}

                {{-- Submenu --}}
                {{-- <li class="nav-item  @if (isset($page_slug) && ($page_slug == 'b' || $page_slug == 'c')) active submenu @endif">
                    <a data-bs-toggle="collapse" href="#1"
                        @if (isset($page_slug) && ($page_slug == 'b' || $page_slug == 'c')) aria-expanded="true" @endif>
                        <i class="icon-people"></i>
                        <p>{{ __('Dropdown') }}</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse @if (isset($page_slug) && ($page_slug == 'b' || $page_slug == 'c')) show @endif" id="1">
                        <ul class="nav nav-collapse">
                            <li class="@if (isset($page_slug) && $page_slug == 'b') active @endif">
                                <a href="">
                                    <span class="sub-item">{{ __('Sub item 1') }}</span>
                                </a>
                            </li>
                            <li class="@if (isset($page_slug) && $page_slug == 'c') active @endif">
                                <a href="">
                                    <span class="sub-item">{{ __('Sub item 2') }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> --}}
            </ul>
        </div>
    </div>
</div>
