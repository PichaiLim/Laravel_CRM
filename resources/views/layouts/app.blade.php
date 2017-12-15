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

<script type="text/javascript" rel="script">
    $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
            items: 2,
            lazyLoad: true,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            itemsDesktop: [1000, 5], //5 items between 1000px and 901px
            itemsDesktopSmall: [900, 3], // 3 items betweem 900px and 601px
            itemsTablet: [600, 2], //2 items between 600 and 0;
        });

    });
</script>
</body>

</html>