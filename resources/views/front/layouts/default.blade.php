<!DOCTYPE HTML>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

    @include('front.partials.head')
</head>
<body>
    <!-- <div class="colorlib-loader"></div> -->
    <div id="page">
    @include('front.partials.navbar')

    @yield('content')
    @include('front.partials.footer')

    @include('front.partials.scripts')
</body>
</html>