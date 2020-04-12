<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Online Public University Admission System">
    <meta name="author" content="Abu Horaira Mobin">
    <title>University Admission System</title>
    <link rel="favicon" href="{{ asset('public/frontend/assets/images/favicon.png') }}">
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/bootstrap-theme.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/style.css') }}">
    <link rel='stylesheet' id='camera-css'  href='{{ asset('frontend/assets/css/camera.css') }}' type='text/css' media='all'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{ asset('public/frontend/assets/js/html5shiv.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/respond.min.js') }}"></script>
    <![endif]-->

    <style>
        .banner{
            background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url('{{ asset("public/frontend/assets/images/banner.jpg") }}');
            background-size: cover;
            height: 80vh;
            background-position: center center;

        }
        .banner-content{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
        .delay1{
            color: #fff !important;
        }
    </style>
</head>
<body>


    @include('particals.navbar')
    @includeWhen(Request::is('/'),'particals.header_banner')

        @yield('content')

    @include('particals.footer')





<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="{{ asset('public/frontend/assets/js/modernizr-latest.js') }}"></script>
<script type='text/javascript' src="{{ asset('public/frontend/assets/js/jquery.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('public/frontend/assets/js/fancybox/jquery.fancybox.pack.js') }}"></script>

<script type='text/javascript' src="{{ asset('public/frontend/assets/js/jquery.mobile.customized.min.js') }}"></script>
<script type='text/javascript' src={{ asset('public/frontend/assets/js/jquery.easing.1.3.js') }}></script>
<script type='text/javascript' src="{{ asset('public/frontend/assets/js/camera.min.js') }}"></script>
<script src="{{ asset('public/frontend/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/frontend/assets/js/custom.js') }}"></script>
<script>
    jQuery(function(){

        jQuery('#camera_wrap_4').camera({
            transPeriod: 500,
            time: 3000,
            height: '600',
            loader: 'false',
            pagination: true,
            thumbnails: false,
            hover: false,
            playPause: false,
            navigation: false,
            opacityOnGrid: false,
            imagePath: 'assets/images/'
        });

    });

</script>

</body>
</html>
