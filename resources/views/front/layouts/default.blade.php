<!DOCTYPE html>
<html dir="ltr" lang="en">

@include('front.partials.head')

<body>
<div id="wrapper" class="clearfix">
    @include('front.partials.navbar')

    @yield('content')

    @include('front.partials.footer')
        <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>

    @include('front.partials.scripts')


</body>
</html>
