<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('backend.layouts.head')
    @yield('css')
    @stack('after_styles')
</head>

<body>
<div class="preloader-it">
    <div class="loader-pendulums"></div>
</div>

<div class="hk-wrapper hk-vertical-nav">

    <!-- Top Navbar -->@include('backend.layouts.navbar')<!-- /Top Navbar -->

    <!-- Vertical Nav -->@include('backend.layouts.sidebar')<!-- /Vertical Nav -->

    <!-- Main Content -->
    <div class="hk-pg-wrapper">

        <nav class="hk-breadcrumb" aria-label="breadcrumb">
            {{ Breadcrumbs::render() }}
        </nav>

        <div class="mt-xl-20 mt-sm-20 mt-15">
            @include('backend.layouts.message')
            @include('backend.layouts.alert')
            @yield('content')
        </div>

        <div class="hk-footer-wrap container-fluid">
            @include('backend.layouts.footer')
        </div>

    </div>
    <!-- /Main Content -->

</div>

@include('backend.layouts.script')
@stack('after_scripts')
</body>
</html>
