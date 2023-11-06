<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', 'Larave 7 Admin Role Permission')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Start stylesheet style css area -->
    @include('backend.layouts.partials.styles')
    @yield('styles')
    <!-- END stylesheet style css area -->
</head>

<body>
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        @include('backend.layouts.partials.sidebar')
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- Start Page header area start -->
            @include('backend.layouts.partials.header')
            <!-- END Page header area end -->
            <!-- Start Admin Content Area -->
            @yield('admin-content')
            <!-- END Admin Content Area -->
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        @include('backend.layouts.partials.footer')
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    @include('backend.layouts.partials.offset')
    <!-- offset area end -->
    <!-- Start Script js area -->
    @include('backend.layouts.partials.scripts')
    @yield('scripts')
    <!-- END Script js area -->
</body>
</html>
