<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('front.layouts.includes.head')
    @stack('css')
    <title>@stack('title','Pustok')</title>
</head>

<body>
    <div class="site-wrapper" id="top">
        <x-front-header-component />
        @yield('content')
        <!--=================================
    Footer
===================================== -->
    </div>
    <x-front-footer-component />
    <!-- Use Minified Plugins Version For Fast Page Load -->
    @include('front.layouts.includes.foot')
</body>

</html>