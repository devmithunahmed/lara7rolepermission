@extends('backend.layouts.master')
<!-- Start Page title -->
@section('title')
    Edit {{ $admin->name }} admin Admin
@endsection
<!-- END Page title -->
@section('styles')
<link href="{{ asset('backend/assets/css/select2.min.css') }}" rel="stylesheet" />
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
        <div class="col-md-6 col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Edit {{ $admin->name }} Admin</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ url('/admin') }}">Dashboard</a></li>
                    <li><a href="{{ url('/admin/admins') }}">All Admins</a></li>
                    <li><span>Edit {{ $admin->name }} Admin</span></li>
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
                    <div class="d-flex justify-content-between">
                        <h4 class="header-title mt-2 float-left">Update {{ $admin->name }} Admin Data</h4>
                        <span class="text-center">@include('backend.layouts.partials.messages')</span>
                        <p class="mb-2 float-right">
                            <a class="btn btn-dark text-white float-right" href="{{ route('admin.admins.index') }}">All Admins</a>
                        </p>
                    </div>
                    <form action="{{ route('admin.admins.update', $admin->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="adminName">Edit Admin Name</label>
                                <input type="text" class="form-control" id="adminName" name="name" value="{{ $admin->name }}">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="adminEmail">Edit Admin Email</label>
                                <input type="email" class="form-control" id="adminEmail" name="email" value="{{ $admin->email }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="adminPassword">Admin New Password</label>
                                <input type="password" class="form-control" id="adminPassword" name="password" placeholder="Enter New Password">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="password_confirmation">Admin Confirm Password</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Enter Confirm Password">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="Assign Role">Update Assign Role & Permissions</label>
                                <select id="roles" name="roles[]" class="form-control select2" multiple>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->name }}" {{ $admin->hasRole($role->name) ? 'selected' : '' }}>{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="userName">Edit Admin User Name</label>
                                <input type="text" class="form-control" id="userName" name="username" value="{{ $admin->username }}">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success mt-4 pr-4 pl-4">Update Admin</button>
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
<script src="{{ asset('backend/assets/js/select2.min.js') }}"></script>
<script>
    // In the select2 Javascript
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>
@endsection
