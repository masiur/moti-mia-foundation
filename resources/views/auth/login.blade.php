<!DOCTYPE html>

<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
@include('admin.partials.styles')
    <!-- END GLOBAL MANDATORY STYLES -->
    <style>
        #particle {
            background-color: #000000;
            position:fixed;
            top:0;
            right:0;
            bottom:0;
            left:0;
            z-index:-1 !important;
        }
        .overlay {
            position: relative;
        }
    </style>
</head>
<!-- END HEAD -->

<body class="login">
<div id="particle"></div>
<div class="login-box">
    <div class="login-logo">
        <a href="/"><b>Admin</b>LTE</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form action="{{route('web.do.login') }}" method="POST" id="login-form">
            {{ csrf_field() }}
            <div class="form-group has-feedback">
                <input name="email" type="email" class="form-control" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input name="password" type="password" class="form-control" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-12 text-center">
                    <button type="submit" class="btn btn-primary btn-flat">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
{{--        <a href="#">I forgot my password</a><br>--}}
{{--        <a href="register.html" class="text-center">Register a new membership</a>--}}
    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<!-- BEGIN LOGO -->
<div class="copyright"> {{date('Y') }} © {{\App\BaseSettings\Settings::$company_name }} </div>

@include('admin.partials.scripts')
<script src="{{asset('assets/particles/particles.min.js') }}"></script>
{{--<script src="{{asset('assets/pages/scripts/login.min.js') }}" type="text/javascript"></script>--}}
<script>
    particlesJS.load('particle', 'particles.json', function() {
        console.log('callback - particles.js config loaded');
    });
    jQuery("#forget-password").click(function() {
        jQuery("#login-form").hide();
        jQuery(".forget-form").show();
    });
    jQuery("#back-btn").click(function() {
        jQuery("#login-form").show();
        jQuery(".forget-form").hide();
    });

</script>
<!-- END CORE PLUGINS -->
@include('admin.partials.toastr')
</body>

</html>