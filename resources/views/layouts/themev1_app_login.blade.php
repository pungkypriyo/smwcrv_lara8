<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-textdirection="ltr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="Powerfull app instead. :)">
        <meta name="keywords" content="Powerfull app instead.">
        <meta name="author" content="{{ config('app.author', 'samawacreative') }}">

        {{-- CSRF Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="apple-touch-icon" href="{{asset('img/logo/smwcrvd_web_logo_73x73.png')}}">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/logo/smwcrvd_web_logo_73x73.png')}}">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CMuli:300,400,500,700" rel="stylesheet">
        <!-- BEGIN VENDOR CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('theme-v1/app-assets/css/vendors.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('theme-v1/app-assets/vendors/css/forms/icheck/icheck.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('theme-v1/app-assets/vendors/css/forms/icheck/custom.css')}}">
        <!-- END VENDOR CSS-->
        <!-- BEGIN ROBUST CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('theme-v1/app-assets/css/app.css')}}">
        <!-- END ROBUST CSS-->
        <!-- BEGIN Page Level CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('theme-v1/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('theme-v1/app-assets/css/core/colors/palette-gradient.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('theme-v1/app-assets/css/pages/login-register.css')}}">
        <!-- END Page Level CSS-->
        <!-- BEGIN Custom CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('theme-v1/assets/css/style.css')}}">
        <!-- END Custom CSS-->
    </head>

    <body>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

        @yield('content')


    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <!-- BEGIN VENDOR JS-->
    <script src="{{asset('theme-v1/app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{asset('theme-v1/app-assets/vendors/js/forms/icheck/icheck.min.js')}}"></script>
    <script src="{{asset('theme-v1/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="{{asset('theme-v1/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{asset('theme-v1/app-assets/js/core/app.js')}}"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{asset('theme-v1/app-assets/js/scripts/forms/form-login-register.js')}}"></script>
    <!-- END PAGE LEVEL JS-->

    </body>
</html>
