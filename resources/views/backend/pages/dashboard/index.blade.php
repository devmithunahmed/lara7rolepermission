@extends('backend.layouts.master')
<!-- Start Page title -->
@section('title')
    Dashboard Admin Panel
@endsection
<!-- END Page title -->
<!-- Start Admin Content Area -->
@section('admin-content')
<!-- start content title area -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Dashboard</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ url('/admin') }}">Home</a></li>
                    <li><span>Dashboard</span></li>
                </ul>
            </div>
        </div>
        @include('backend.layouts.partials.logout')
    </div>
</div>
<!-- end content title area -->
<!-- Start Page Content Area -->
<div class="main-content-inner">
    <div class="row">
        <!-- seo fact area start -->
        <div class="col-lg-8">
            <div class="row">
                <div class="col-md-6 mt-5 mb-3">
                    <div class="card">
                        <div class="seo-fact sbg1">
                            <a href="{{ route('admin.roles.index') }}">
                                <div class="p-4 d-flex justify-content-between align-items-center">
                                    <div class="seofct-icon"><i class="fa fa-users"></i> Role</div>
                                    <h2>{{ $total_roles }}</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-md-5 mb-3">
                    <div class="card">
                        <div class="seo-fact sbg2">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon"><i class="ti-share"></i> Admin</div>
                                <h2>{{ $total_admins }}</h2>
                            </div>
                            <a href="{{ route('admin.admins.index') }}" class="text-center p-2"><div class="seofct-icon">View All Admins</div></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3 mb-lg-0">
                    <div class="card">
                        <div class="seo-fact sbg3">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon"><i class="ti-share"></i>Permission</div>
                                <h2>{{ $total_permissions }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="seo-fact sbg4">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon"><i class="fa fa-user"></i>Users</div>
                                <h2>{{ $total_users }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- seo fact area end -->
        <!-- Social Campain area start -->
        <div class="col-lg-4 mt-5">
            <div class="card">
                <div class="card-body pb-0">
                    <h4 class="header-title">Social ads Campain</h4>
                    <div id="socialads" style="height: 245px;"></div>
                </div>
            </div>
        </div>
        <!-- Social Campain area end -->
        <!-- Statistics area start -->
    </div>
</div>
<!-- END Page Content Area -->
@endsection
