@extends('backend.layouts.master')
<!-- Start Page title -->
@section('title')
    Create Role Admin Panel
@endsection
<!-- END Page title -->
@section('styles')
<style>
    .form-check-label {
        text-transform: capitalize;
    }
</style>
@endsection
<!-- Start Admin Content Area -->
@section('admin-content')
<!-- start content title area -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Create Role</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ url('/admin') }}">Dashboard</a></li>
                    <li><a href="{{ url('/admin/roles') }}">All Roles</a></li>
                    <li><span>Create Role</span></li>
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
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <span class="header-title col-lg-4 float-left">Create New Role</span>
                        <h5 class="col-lg-6 text-center float-left ">@include('backend.layouts.partials.messages')</h5>
                        <span class="col-lg-2">
                            <a class="btn btn-dark text-white float-right" href="{{ route('admin.roles.index') }}">All Roles</a>
                        </span>
                    </div>
                    <form action="{{ route('admin.roles.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Role Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter a Role Name">
                        </div>

                        <div class="form-group">
                            <label for="name">Permissions</label>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="checkPermissionAll" value="1">
                                <label class="form-check-label" for="checkPermissionAll">All</label>
                            </div>
                            <hr>
                            @php $i = 1; @endphp
                            @foreach ($permission_groups as $group)
                                <div class="row">
                                    <div class="col-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="{{ $i }}Management" value="{{ $group->name }}" onclick="checkPermissionByGroup('role-{{ $i }}-management-checkbox', this)">
                                            <label class="form-check-label" for="checkPermission">{{ $group->name }}</label>
                                        </div>
                                    </div>

                                    <div class="col-9 role-{{ $i }}-management-checkbox">
                                        @php
                                            $permissions = App\User::getpermissionsByGroupName($group->name);
                                            $j = 1;
                                        @endphp
                                        @foreach ($permissions as $permission)
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" name="permissions[]" id="checkPermission{{ $permission->id }}" value="{{ $permission->name }}">
                                                <label class="form-check-label" for="checkPermission{{ $permission->id }}">{{ $permission->name }}</label>
                                            </div>
                                            @php  $j++; @endphp
                                        @endforeach
                                        <br>
                                    </div>
                                </div><hr>
                                @php  $i++; @endphp
                            @endforeach
                        </div>
                        <button type="submit" class="btn btn-success mt-4 pr-4 pl-4">Save Role</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- data table end -->
    </div>
</div>
<!-- END Page Content Area -->
<!-- END Admin Content Area -->
@endsection

@section('scripts')
     @include('backend.pages.roles.partials.scripts')
@endsection
