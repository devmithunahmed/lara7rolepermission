<!-- php fontend code start -->
@php
    $usr = Auth::guard('admin')->user();
@endphp
<!-- php fontend code END -->
<!-- sidebar menu area start -->
<div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="{{ url('/admin') }}"><h1 class="text-white">ADMIN</h1></a>
            {{-- <a href="{{ url('/admin') }}"><img src="{{ asset('backend/assets/images/icon/logo.png')}}" alt="logo"></a> --}}
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    <li class="{{ Route::is('admin.dashboard') ? 'active' : '' }}">
                        <a href="{{ route('admin.dashboard') }}"><i class="ti-dashboard"></i> <span>dashboard</span></a>
                    </li>
                    @if ($usr->can('role.view') || $usr->can('role.create') || $usr->can('role.edit') || $usr->can('role.delete'))
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-users"></i>
                            <span>ROLES & PERMISSIONS</span>
                        </a>
                        <ul class="collapse {{ Route::is('admin.roles.create') ||
                                                Route::is('admin.roles.index') ||
                                                Route::is('admin.roles.edit') ? 'in' : '' }}">
                            @if ($usr->can('role.view'))
                                <li class="{{ Route::is('admin.roles.index')  || Route::is('admin.roles.edit') ? 'active' : '' }}">
                                    <a href="{{ route('admin.roles.index') }}">All Roles</a>
                                </li>
                            @endif
                            @if ($usr->can('role.create'))
                                <li class="{{ Route::is('admin.roles.create')  ? 'active' : '' }}">
                                    <a href="{{ route('admin.roles.create') }}">Create Role</a>
                                </li>
                            @endif
                        </ul>
                    </li>
                    @endif
                    @if ($usr->can('admin.view') || $usr->can('admin.create') || $usr->can('admin.edit') || $usr->can('admin.delete'))
                        <li>
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i>
                                <span>ADMINS</span>
                            </a>
                            <ul class="collapse {{ Route::is('admin.admins.create') ||
                                                    Route::is('admin.admins.index') ||
                                                    Route::is('admin.admins.edit') ? 'in' : '' }}">
                                @if ($usr->can('admin.view'))
                                    <li class="{{ Route::is('admin.admins.index')  || Route::is('admin.admins.edit') ? 'active' : '' }}">
                                        <a href="{{ route('admin.admins.index') }}">All admins</a>
                                    </li>
                                @endif
                                @if ($usr->can('admin.create'))
                                    <li class="{{ Route::is('admin.admins.create')  ? 'active' : '' }}">
                                        <a href="{{ route('admin.admins.create') }}">Create Admin</a>
                                    </li>
                                @endif
                            </ul>
                        </li>
                    @endif
                    @if ($usr->can('user.view') || $usr->can('user.create') || $usr->can('user.edit') || $usr->can('user.delete'))
                        <li>
                            <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-user"></i>
                                <span>USERS</span>
                            </a>
                            <ul class="collapse {{ Route::is('admin.users.create') ||
                                                    Route::is('admin.users.index') ||
                                                    Route::is('admin.users.edit') ? 'in' : '' }}">
                                @if ($usr->can('user.view'))
                                    <li class="{{ Route::is('admin.users.index')  || Route::is('admin.users.edit') ? 'active' : '' }}">
                                        <a href="{{ route('admin.users.index') }}">All users</a>
                                    </li>
                                @endif
                                @if ($usr->can('user.create'))
                                    <li class="{{ Route::is('admin.users.create')  ? 'active' : '' }}">
                                        <a href="{{ route('admin.users.create') }}">Create Users</a>
                                    </li>
                                @endif
                            </ul>
                        </li>
                    @endif



                    {{-- <li class="active">
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                        <ul class="collapse">
                            <li class="active"><a href="{{ url('/admin') }}">ICO dashboard</a></li>
                            <li><a href="{{ url('/admin') }}">Ecommerce dashboard</a></li>
                            <li><a href="{{ url('/admin') }}">SEO dashboard</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-pie-chart"></i><span>Charts</span></a>
                        <ul class="collapse">
                            <li><a href="{{ url('/admin') }}">bar chart</a></li>
                            <li><a href="{{ url('/admin') }}">line Chart</a></li>
                            <li><a href="{{ url('/admin') }}">pie chart</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-palette"></i><span>UI Features</span></a>
                        <ul class="collapse">
                            <li><a href="{{ url('/admin') }}l">Accordion</a></li>
                            <li><a href="{{ url('/admin') }}">Alert</a></li>
                            <li><a href="{{ url('/admin') }}">Badge</a></li>
                            <li><a href="{{ url('/admin') }}">Button</a></li>
                            <li><a href="{{ url('/admin') }}">Button Group</a></li>
                            <li><a href="{{ url('/admin') }}">Cards</a></li>
                            <li><a href="{{ url('/admin') }}">Dropdown</a></li>
                            <li><a href="{{ url('/admin') }}">List Group</a></li>
                            <li><a href="">Media Object</a></li>
                            <li><a href="">Modal</a></li>
                            <li><a href="">Pagination</a></li>
                            <li><a href="">Popover</a></li>
                            <li><a href="">Progressbar</a></li>
                            <li><a href="">Tab</a></li>
                            <li><a href="">Typography</a></li>
                            <li><a href="">Form</a></li>
                            <li><a href="">grid system</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-slice"></i><span>icons</span></a>
                        <ul class="collapse">
                            <li><a href="">fontawesome icons</a></li>
                            <li><a href="">themify icons</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-table"></i>
                            <span>Tables</span></a>
                        <ul class="collapse">
                            <li><a href="">basic table</a></li>
                            <li><a href="">table layout</a></li>
                            <li><a href="">datatable</a></li>
                        </ul>
                    </li>
                    <li><a href=""><i class="ti-map-alt"></i> <span>maps</span></a></li>
                    <li><a href=""><i class="ti-receipt"></i> <span>Invoice Summary</span></a></li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layers-alt"></i> <span>Pages</span></a>
                        <ul class="collapse">
                            <li><a href="">Login</a></li>
                            <li><a href="">Login 2</a></li>
                        </ul>
                    </li> --}}
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- sidebar menu area end -->
