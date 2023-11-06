@extends('backend.layouts.master')
<!-- Start Page title -->
@section('title')
    Admin Dashboard || Admin Panel
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
                <h4 class="page-title pull-left">Admins</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ url('/admin') }}">Dashboard</a></li>
                    <li><span>Admins</span></li>
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
                    <h4 class="header-title mt-2 float-left">All Administrator List</h4>
                    <span class="text-center">@include('backend.layouts.partials.messages')</span>
                    <p class="mb-2 float-right">
                        @if (Auth::guard('admin')->user()->can('admin.create'))
                            <a class="btn btn-info text-white" href="{{ url('admin/admins/create') }}">
                                <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp; Create Admin
                            </a>
                        @endif
                    </p>
                </div>
                <div class="clearfix"></div>
                <div class="data-tables">

                    <table id="DataTable" class="text-center">
                        <thead class="bg-primary text-capitalize text-white text-center">
                            <tr>
                                <th width="5%">Sl</th>
                                <th width="15%">Name</th>
                                <th width="15%">Email</th>
                                <th width="30%">Roles</th>
                                <th width="15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($admins as $admin)
                           <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $admin->name }}</td>
                                <td>{{ $admin->email }}</td>
                                <td>
                                    @foreach ($admin->roles as $perm)
                                        <span class="badge badge-info mr-1">
                                            {{ $perm->name }}
                                        </span>
                                    @endforeach
                                </td>
                                <td>
                                    @if (Auth::guard('admin')->user()->can('admin.edit'))
                                    <a class="btn btn-outline-success" href="{{ route('admin.admins.edit', $admin->id) }}">
                                        <i class="fa fa-pencil-square-o fa-lg"></i>
                                    </a>
                                    @endif

                                    @if (Auth::guard('admin')->user()->can('admin.delete'))
                                    <a class="btn btn-outline-danger" href="{{ route('admin.admins.destroy', $admin->id) }}"
                                        onclick="event.preventDefault(); document.getElementById('delete-form-{{ $admin->id }}').submit();">
                                            <i class="fa fa-trash fa-lg"></i>
                                    </a>
                                    @endif

                                    <form id="delete-form-{{ $admin->id }}" action="{{ route('admin.admins.destroy', $admin->id) }}" method="POST" style="display: none;">
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
