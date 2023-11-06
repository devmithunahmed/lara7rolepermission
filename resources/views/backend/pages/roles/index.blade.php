@extends('backend.layouts.master')
<!-- Start Page title -->
@section('title')
    Roles Admin Panel
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
                <h4 class="page-title pull-left">Roles</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ url('/admin') }}">Dashboard</a></li>
                    <li><span>Roles</span></li>
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
                    <h4 class="header-title mt-2 float-left">All Roles List</h4>
                    <span class="text-center">@include('backend.layouts.partials.messages')</span>
                    <p class="mb-2 float-right">
                        @if (Auth::guard('admin')->user()->can('role.create'))
                            <a class="btn btn-info text-white" href="{{ url('admin/roles/create') }}">
                                <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp; Create Role
                            </a>
                        @endif
                    </p>
                </div>
                <div class="data-tables">
                    <table id="DataTable" class="text-center">
                        <thead class="bg-primary text-capitalize text-white">
                            <tr>
                                <th width="5%">Sl</th>
                                <th width="15%">Role Name</th>
                                <th width="40%">Permissions List</th>
                                <th width="15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($roles as $role)
                           <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $role->name }}</td>
                                <td>
                                    @foreach ($role->permissions as $perm)
                                        <span class="badge badge-info mr-1">
                                            {{ $perm->name }}
                                        </span>
                                    @endforeach
                                </td>
                                <td>
                                    @if (Auth::guard('admin')->user()->can('role.edit'))
                                        <a class="btn btn-outline-success" href="{{ route('admin.roles.edit', $role->id) }}">
                                            <i class="fa fa-pencil-square-o fa-lg"></i>
                                        </a>
                                    @endif
                                    @if (Auth::guard('admin')->user()->can('role.delete'))
                                        <a class="btn btn-outline-danger" href="{{ route('admin.roles.destroy', $role->id) }}"
                                            onclick="event.preventDefault(); document.getElementById('delete-form-{{ $role->id }}').submit();">
                                                <i class="fa fa-trash fa-lg"></i>
                                        </a>
                                    @endif
                                    <form id="delete-form-{{ $role->id }}" action="{{ route('admin.roles.destroy', $role->id) }}" method="POST" style="display: none;">
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
