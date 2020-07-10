<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('public/backend/images/favicon.ico')}}" type="image/ico" />

    <title>Student Panel | Public University Admission System</title>

    <!-- Bootstrap -->
    <link href="{{ asset('public/backend/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('public/backend/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('public/backend/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('public/backend/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
    <!-- toastr CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <!-- bootstrap-progressbar -->
    <link href="{{asset('public/backend/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('public/backend/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('public/backend/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('public/backend/build/css/custom.min.css')}}" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="{{ route('home') }}" class="site_title"><i class="fa fa-paw"></i> <span>Student Panel</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="{{asset('public/backend/images/img.jpg')}}" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>{{ Auth()->user()->full_name }}</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a href="{{ route('home') }}"><i class="fa fa-home"></i> Dashboard </a></li>
                            @php
                                $check = DB::table('admissions')->where('status',1)->where('user_id',Auth::user()->id)->first();
                                $applied = DB::table('admissions')->where('status',2)->where('user_id',Auth::user()->id)->first();
                            @endphp
                            @if($check == true)
                                <li><a href="{{ route('admit.card') }}"><i class="fa fa-print"></i> Admit Card </a></li>
                            @elseif($check == false && $applied == true)
                                <li><a><i class="fa fa-edit"></i> Admission <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ route('applied') }}">Applied</a></li>
                                    </ul>
                                </li>
                            @else
                                <li><a><i class="fa fa-edit"></i> Admission <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        @php
                                            $checkHSC = DB::table('hscs')->where('user_id',Auth::id())->first();
                                        @endphp
                                        @if(!$checkHSC)
                                            <li><a href="{{ route('basic.infos') }}">Basic Info</a></li>
                                        @else
                                            <li><a href="{{ route('basicinfo.update') }}">Basic Info</a></li>
                                            <li><a href="{{ route('apply.admission') }}">Apply Admission</a></li>
                                        @endif
                                    </ul>
                                </li>
                            @endif

                            @php
                                $result_published = DB::table('result_publishes')->where('published',1)->first();
                                $result = \App\Result::where('user_roll',\Illuminate\Support\Facades\Auth::user()->hsc_roll)->first();
                            @endphp

                            @if($result_published && $result)
                                <li><a href="{{ route('uni.migrate') }}"><i class="fa fa-table"></i> Result</a></li>

                            @elseif($result_published)
                                <li><a href="{{ route('fail') }}"><i class="fa fa-table"></i> Result</a></li>
                            @endif
                        </ul>
                    </div>

                </div>

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('public/backend/images/img.jpg')}}" alt="">{{ Auth()->user()->full_name }}
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="javascript:;"> Profile</a></li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="badge bg-red pull-right">50%</span>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li><a href="javascript:;">Help</a></li>
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->


        <!-- page content -->
        <div class="right_col" role="main">
            @yield('content')
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Copyright &copy; <a href="#">AHM</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="{{asset('public/backend/vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('public/backend/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('public/backend/vendors/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{asset('public/backend/vendors/nprogress/nprogress.js')}}"></script>
<!-- Chart.js -->
<script src="{{asset('public/backend/vendors/Chart.js/dist/Chart.min.js')}}"></script>
<!-- gauge.js -->
<script src="{{asset('public/backend/vendors/gauge.js/dist/gauge.min.js')}}"></script>
<!-- bootstrap-progressbar -->
<script src="{{asset('public/backend/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('public/backend/vendors/iCheck/icheck.min.js')}}"></script>
<!-- Skycons -->
<script src="{{asset('public/backend/vendors/skycons/skycons.js')}}"></script>
<!-- Flot -->
<script src="{{asset('public/backend/vendors/Flot/jquery.flot.js')}}"></script>
<script src="{{asset('public/backend/vendors/Flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('public/backend/vendors/Flot/jquery.flot.time.js')}}"></script>
<script src="{{asset('public/backend/vendors/Flot/jquery.flot.stack.js')}}"></script>
<script src="{{asset('public/backend/vendors/Flot/jquery.flot.resize.js')}}"></script>
<!-- Flot plugins -->
<script src="{{asset('public/backend/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
<script src="{{asset('public/backend/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
<script src="{{asset('public/backend/vendors/flot.curvedlines/curvedLines.js')}}"></script>
<!-- DateJS -->
<script src="{{asset('public/backend/vendors/DateJS/build/date.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('public/backend/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
<script src="{{asset('public/backend/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
<script src="{{asset('public/backend/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{asset('public/backend/vendors/moment/min/moment.min.js')}}"></script>
<script src="{{asset('public/backend/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

<!-- For toastr sweet alert message -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>

<script>
        @if(Session::has('messege'))
    var type="{{Session::get('alert-type','info')}}"
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('messege') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('messege') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('messege') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('messege') }}");
            break;
    }
    @endif
</script>

<script>
    $(document).on("click", "#delete", function(e){
        e.preventDefault();
        var link = $(this).attr("href");
        swal({
            title: "Are you Want to delete?",
            text: "Once Delete, This will be Permanently Delete!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    window.location.href = link;
                } else {
                    swal("Safe Data!");
                }
            });
    });
</script>

<!-- Custom Theme Scripts -->
<script src="{{asset('public/backend/build/js/custom.min.js')}}"></script>

</body>
</html>
