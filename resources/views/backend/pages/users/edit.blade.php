@extends('backend.layouts.master')
<!-- Start Page title -->
@section('title')
    Edit {{ $user->name }} User Panel
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
                <h4 class="page-title pull-left">Edit {{ $user->name }} User</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ url('/admin') }}">Dashboard</a></li>
                    <li><a href="{{ url('/admin/users') }}">All Users</a></li>
                    <li><span>Edit {{ $user->name }} User</span></li>
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
                        <h4 class="header-title mt-2 float-left">Edit {{ $user->name }} User Data</h4>
                        <span class="text-center">@include('backend.layouts.partials.messages')</span>
                        <p class="mb-2 float-right">
                            <a class="btn btn-dark text-white float-right" href="{{ route('admin.users.index') }}">All Users</a>
                        </p>
                    </div>
                    <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="userName">Edit User Name</label>
                                <input type="text" class="form-control" id="userName" name="name" value="{{ $user->name }}">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="userEmail">Edit User Email</label>
                                <input type="email" class="form-control" id="userEmail" name="email" value="{{ $user->email }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="userPassword">Current Password</label>
                                <input type="password" class="form-control" id="userPassword" name="password" placeholder="Enter Current User Password">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Enter User Confirm Password">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="Assign Role">Assign Role</label>
                                <select id="roles" name="roles[]" class="form-control select2" multiple>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->name }}" {{ $user->hasRole($role->name) ? 'selected' : '' }}>{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success mt-4 pr-4 pl-4">Save User</button>
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
