@extends('backend.layouts.master')
<!-- Start Page title -->
@section('title')
    Admin Create
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
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Create Admin</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ url('/admin') }}">Dashboard</a></li>
                    <li><span>Create Admin</span></li>
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
                        <h4 class="header-title mt-2 float-left">Create New admin</h4>
                        <span class="text-center">@include('backend.layouts.partials.messages')</span>
                        <p class="mb-2 float-right">
                            <a class="btn btn-dark text-white float-right" href="{{ route('admin.admins.index') }}">All Admins</a>
                        </p>
                    </div>
                    <form action="{{ route('admin.admins.store') }}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="adminName">Admin Name</label>
                                <input type="text" class="form-control" id="adminName" name="name" placeholder="Enter admin Name">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="adminEmail">Admin Email</label>
                                <input type="email" class="form-control" id="adminEmail" name="email" placeholder="Enter admin email address">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="adminPassword">Admin Password</label>
                                <input type="password" class="form-control" id="adminPassword" name="password" placeholder="Enter admin Password" required>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="password_confirmation">Admin Confirm Password</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Enter admin Confirm Password" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="Assign Role">Assign Role & Permissions</label>
                                <select id="roles" name="roles[]" class="form-control select2" multiple>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->name }}" class="form-control">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="userName">Admin User Name</label>
                                <input type="text" class="form-control" id="userName" name="username" placeholder="Enter userName" required>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success mt-4 pr-4 pl-4">Save Admin</button>
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
