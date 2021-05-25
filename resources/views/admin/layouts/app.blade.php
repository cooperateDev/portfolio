<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--CSRF Token--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Adminity : Widget</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
   

    <!-- Retina iPad Touch Icon-->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">   
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="{{asset('assets/css/lib/chartist/chartist.min.css')}}" rel="stylesheet">

    <link href="{{asset('assets/css/lib/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/lib/themify-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/lib/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/lib/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/lib/weather-icons.css')}}" rel="stylesheet">
     <link href="{{asset('assets/css/lib/datatable/dataTables.bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/lib/datatable/buttons.bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/lib/menubar/sidebar.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/lib/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/lib/unix.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    @yield('style')
</head>

<body>
    @if(Auth::check())
    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <li><a href="{{url('admin/member')}}"><i class="ti-user"></i> Member Management </a></li>
                    <li><a href="{{url('admin/task')}}"><i class="ti-briefcase"></i> Task Management</a></li>
                    <li><a href="{{url('admin/slide')}}"><i class="ti-image"></i> Slide Management</a></li>
                    <li><a href="{{url('admin/category')}}"><i class="ti-layers-alt"></i> Category Management</a></li>
                    
                </ul>
            </div>
        </div>
    </div>
    <div class="header">
        <div class="pull-left">
            <div class="logo"><a href="index.html"><!-- <img src="assets/images/logo.png" alt="" /> --><span>WIN - WIN</span></a></div>
            <div class="hamburger sidebar-toggle">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
        </div>
        <div class="pull-right p-r-15">
            <ul>
               
                <li class="header-icon dib"><img class="avatar-img" src="{{asset('assets/images/avatar/1.jpg')}}" alt="" /> <span class="user-avatar">{{Auth::user()->name}} <i class="ti-angle-down f-s-10"></i></span>
                    <div class="drop-down dropdown-profile">
                        <div class="dropdown-content-body">
                            <ul>
                                <li><a href="#"><i class="ti-user"></i> <span>Profile</span></a></li>
                                <li><a href="{{url('admin/logout')}}"><i class="ti-power-off"></i> <span>Logout</span></a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    @endif
    @yield('page')
    <script src="{{asset('assets/js/lib/jquery.min.js')}}"></script>
      <!-- jquery vendor -->

    <script src="{{asset('assets/js/lib/jquery.nanoscroller.min.js')}}"></script>
      <!-- nano scroller -->

    <script src="{{asset('assets/js/lib/menubar/sidebar.js')}}"></script>
    <script src="{{asset('assets/js/lib/preloader/pace.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/weather/jquery.simpleWeather.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/weather/weather-init.js')}}"></script>
    <script src="{{asset('assets/js/lib/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/sparklinechart/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/owl-carousel/owl.carousel-init.js')}}"></script>
    <script src="{{asset('assets/js/lib/data-table/datatables.min.js')}}"></script>
    <script src="{{asset('assets/js/scripts.js')}}"></script>
    @yield('scripts')

</body>

</html>