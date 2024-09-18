<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.default.header_css')
    @stack('css')
</head>
<body class="home page-template-default page page-id-2 wp-custom-logo kc-elm theme-vnthemes kingcomposer kc-css-system woocommerce-no-js woocommerce">
    @include('layout.default.header')
    @include('layout.default.nav')
    @include('layout.default.breakcrum')
    @yield('content')
    @include('layout.default.footer')
    @include('layout.default.footer_js')
</body>
</html>
