@extends('backend.layouts.master')
<!-- Start Page title -->
@section('title')
    Users Panel
@endsection
<!-- END Page title -->

@section('styles')

@endsection
<!-- Start Admin Content Area -->
@section('admin-content')
<!-- start content title area -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">users</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ url('/admin') }}">Dashboard</a></li>
                    <li><span>users</span></li>
                </ul>
            </div>
        </div>
        @include('backend.layouts.partials.logout')
    </div>
</div>
<!-- end content title area -->
<!-- Start Page Content Area -->
<div class="main-content-inner">
    <!-- Primary table start -->
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="header-title mt-2 float-left">All Users List</h4>
                    <span class="text-center">@include('backend.layouts.partials.messages')</span>
                    <p class="mb-2 float-right">
                        <a class="btn btn-info text-white" href="{{ url('admin/users/create') }}">
                            <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp; Create User
                        </a>
                    </p>
                </div>
                <div class="clearfix"></div>
                <div class="data-tables">

                    <table id="DataTable" class="text-center">
                        <thead class="bg-primary text-capitalize text-white text-center">
                            <tr>
                                <th width="5%">Sl</th>
                                <th width="10%">Name</th>
                                <th width="10%">Email</th>
                                <th width="30%">Roles</th>
                                <th width="10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($users as $user)
                           <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @foreach ($user->roles as $perm)
                                        <span class="badge badge-info mr-1">
                                            {{ $perm->name }}
                                        </span>
                                    @endforeach
                                </td>
                                <td>
                                    <a class="btn btn-outline-success" href="{{ route('admin.users.edit', $user->id) }}">
                                        <i class="fa fa-pencil-square-o fa-lg"></i>
                                    </a>

                                    <a class="btn btn-outline-danger" href="{{ route('admin.users.destroy', $user->id) }}"
                                        onclick="event.preventDefault(); document.getElementById('delete-form-{{ $user->id }}').submit();">
                                            <i class="fa fa-trash fa-lg"></i>
                                    </a>

                                    <form id="delete-form-{{ $user->id }}" action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display: none;">
                                        @method('DELETE')
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Primary table end -->
</div>
<!-- END Page Content Area -->
<!-- END Admin Content Area -->
@endsection

@section('scripts')

@endsection
