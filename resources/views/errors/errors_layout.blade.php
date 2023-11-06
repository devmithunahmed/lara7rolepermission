<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('error-title', 'Error Forbidden')</title>
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
    <!-- error area start -->
    <div class="error-area ptb--100 text-center">
        <div class="container">
            <div class="error-content">
                @yield('error-content')
            </div>
        </div>
    </div>
    <!-- error area end -->

    <!-- Start Script js area -->
    @include('backend.layouts.partials.scripts')
    @yield('scripts')
    <!-- END Script js area -->
</body>

</html>
