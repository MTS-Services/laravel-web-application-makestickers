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


                {{-- Material Management --}}
                <li class="nav-item  @if (isset($page_slug) && ($page_slug == 'material' || $page_slug == 'material_attribute' || $page_slug == 'material_attribute_value' || $page_slug == 'sticker_type_material')) active submenu @endif">
                    <a data-bs-toggle="collapse" href="#dropdown2"
                        @if (isset($page_slug) && ($page_slug == 'material' || $page_slug == 'material_attribute' || $page_slug == 'material_attribute_value'|| $page_slug == 'sticker_type_material')) aria-expanded="true" @endif>
                        <i class="icon-people"></i>
                        <p>{{ __('Material Management') }}</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse @if (isset($page_slug) && ($page_slug == 'material' || $page_slug == 'material_attribute' || $page_slug == 'material_attribute_value' || $page_slug == 'sticker_type_material')) show @endif" id="dropdown2">
                        <ul class="nav nav-collapse">
                            <li class="@if (isset($page_slug) && $page_slug == 'material') active @endif">
                                <a href="{{ route('am.material.index') }}">
                                    <span class="sub-item">{{ __('Material') }}</span>
                                </a>
                            </li>
                            <li class="@if (isset($page_slug) && $page_slug == 'material_attribute') active @endif">
                                <a href="{{ route('am.material-attribute.index') }}">
                                    <span class="sub-item">{{ __('Material Attribute') }}</span>
                                </a>
                            </li>
                            <li class="@if (isset($page_slug) && $page_slug == 'material_attribute_value') active @endif">
                                <a href="{{ route('am.material-attribute-value.index') }}">
                                    <span class="sub-item">{{ __('Material Attribute Value') }}</span>
                                </a>
                            </li>
                            <li class="@if (isset($page_slug) && $page_slug == 'sticker_type_material') active @endif">
                                <a href="{{ route('am.sticker-type-material.index') }}">
                                    <span class="sub-item">{{ __('Sticker Type Material') }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- Dropdown --}}
                <li class="nav-item  @if (isset($page_slug) &&
                        ($page_slug == 'stickerCategory' || $page_slug == 'stickerType' || $page_slug == 'stickerShapes')) active submenu @endif">
                    <a data-bs-toggle="collapse" href="#dropdown2"
                        @if (isset($page_slug) &&
                                ($page_slug == 'stickerCategory' || $page_slug == 'stickerType' || $page_slug == 'stickerShapes')) aria-expanded="true" @endif>
                        <i class="icon-people"></i>
                        <p>{{ __('Sticker Management') }}</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse @if (isset($page_slug) &&
                            ($page_slug == 'stickerCategory' || $page_slug == 'stickerType' || $page_slug == 'stickerShapes')) show @endif" id="dropdown2">
                        <ul class="nav nav-collapse">
                            <li class="@if (isset($page_slug) && $page_slug == 'stickerCategory') active @endif">
                                <a href="{{ route('am.sticker-category.index') }}">
                                    <span class="sub-item">{{ __('Sticker Category') }}</span>
                                </a>
                            </li>
                            <li class="@if (isset($page_slug) && $page_slug == 'stickerType') active @endif">
                                <a href="{{ route('am.sticker-types.index') }}">
                                    <span class="sub-item">{{ __('Sticker Type') }}</span>
                                </a>
                            </li>
                            <li class="@if (isset($page_slug) && $page_slug == 'stickerShapes') active @endif">
                                <a href="{{ route('am.sticker-shapes.index') }}">
                                    <span class="sub-item">{{ __('Sticker Shapes') }}</span>
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
