<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', "Admin") }}</title>

    <!-- Bootstrap -->
    <link href="{{ url('/css/app.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ url('/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ url('/css/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ url('/css/green.css') }}" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="{{ url('/css/prettify.min.css') }}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{ url('/css/daterangepicker.css') }}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ url('/css/jqvmap.min.css') }}" rel="stylesheet"/>
    <!-- Select2 -->
    <link href="{{ url('/css/select2.min.css') }}" rel="stylesheet">
    <!-- Switchery -->
    <link href="{{ url('/css/switchery.min.css') }}" rel="stylesheet">
    <!-- starrr -->
    <link href="{{ url('/css/starrr.css') }}" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{ url('/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="{{ url('/css/custom.min.css') }}" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        @include('layouts.admin.menu_left')

        @include('layouts.admin.navbar_top')

        @yield('content')

        @include('layouts.admin.footer')
    </div>
</div>


<script src="{{ url('/js/app.js') }}"></script>
<!-- FastClick -->
<script src="{{ url('/js/fastclick.js') }}"></script>
<!-- NProgress -->
<script src="{{ url('/js/nprogress.js') }}"></script>
<!-- Chart.js -->
<script src="{{ url('/js/Chart.min.js') }}"></script>
<!-- gauge.js -->
<script src="{{ url('/js/gauge.min.js') }}"></script>
<!-- bootstrap-progressbar -->
<script src="{{ url('/js/bootstrap-progressbar.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ url('/js/icheck.min.js') }}"></script>
<!-- Skycons -->
<script src="{{ url('/js/skycons.js') }}"></script>
<!-- Flot -->
<script src="{{ url('/js/jquery.flot.js') }}"></script>
<script src="{{ url('/js/jquery.flot.pie.js') }}"></script>
<script src="{{ url('/js/jquery.flot.time.js') }}"></script>
<script src="{{ url('/js/jquery.flot.stack.js') }}"></script>
<script src="{{ url('/js/jquery.flot.resize.js') }}"></script>
<!-- Flot plugins -->
<script src="{{ url('/js/jquery.flot.orderBars.js') }}"></script>
<script src="{{ url('/js/jquery.flot.spline.min.js') }}"></script>
<script src="{{ url('/js/curvedLines.js') }}"></script>
<!-- DateJS -->
<script src="{{ url('/js/date.js') }}"></script>
<!-- JQVMap -->
<script src="{{ url('/js/jquery.vmap.js') }}"></script>
<script src="{{ url('/js/jquery.vmap.world.js') }}"></script>
<script src="{{ url('/js/jquery.vmap.sampledata.js') }}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{ url('/js/moment.min.js') }}"></script>
<script src="{{ url('/js/daterangepicker.js') }}"></script>

<!-- Custom Theme Scripts -->
<script src="{{ url('/js/custom.min.js') }}"></script>

@stack('modal')
@stack('scripts')

</body>
</html>