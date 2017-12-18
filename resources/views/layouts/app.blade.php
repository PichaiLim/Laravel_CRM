<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name','PichaiDev') }}</title>


    <link rel="stylesheet" href="{{ url('/css/app.css') }}">
    <link rel="stylesheet" href="{{ url('/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('/css/owl.carousel.min.css') }}">

</head>

<body>

@include('layouts.header')

<!-- content -->

    @yield('content')

<!-- ./content -->

@include('layouts.footer')


<script src="{{ url('/js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ url('/js/app.js') }}" type="text/javascript"></script>
<script src="{{ url('/js/owl.carousel.min.js') }}" type="text/javascript"></script>
</body>

</html>