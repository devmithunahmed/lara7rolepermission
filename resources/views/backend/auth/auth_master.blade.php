<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('auth_title', 'Authentication')</title>
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
    <!-- login area start -->
    @yield('auth-content')
    <!-- login area end -->

    <!-- Start Script js area -->
    @include('backend.layouts.partials.scripts')
    @yield('scripts')
    <!-- END Script js area -->
</body>

</html>
