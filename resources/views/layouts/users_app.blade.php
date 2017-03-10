<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />

    <title>Nacos Voting | {{$title or ''}} </title>
    <meta name="author" content="lucas Lumbex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- Favicon Icon -->

    <!-- CSS -->
    <link href="{{ asset('users/css/style.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('users/css/bootstrap.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('users/css/ionicons.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('users/css/plugin/animate.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('users/css/lucasStyle.css') }}" rel="stylesheet" type="text/css" >
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    @yield('css')

    <style>
        body {
            font-family: SQMarket, Lato;
            overflow-x: hidden;
        }
        section{
            overflow-x: hidden;
        }
    </style>

</head>

<body class="full-intro">
<!-- Preloader -->
<section id="preloader">
    <div class="loader" id="loader">
        <div class="loader-img"></div>
    </div>
</section>
<!-- End Preloader -->


<!-- Site Wraper -->
<div class="wrapper">

    <!-- HEADER -->
    <header class="header">
        <div class="container">

            <!-- logo -->
            <div class="logo">
                <a href="/users/index">
                    <h3>naccos<span class="color">&nbsp;voting</span></h3>
                </a>
            </div>
            <!--End logo-->

            <!-- Navigation Menu -->
            <nav class='navigation'>
                <ul>

                    <li>
                        <a href="/users/index">Home</a>
                    </li>


                    <li>
                        <a href="/users/index#how">How It Works</a>
                    </li>

                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>

                    @else
                        <li>
                            <a href="/users/vote_center">Vote Center</a>
                        </li>
                        <li>
                            <a href="/users/vote_results">Results</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/users/profile') }}"><i class="fa fa-btn fa-user"></i> Profile</a></li>
                                <li><a href="{{ url('/profile_edit') }}"><i class="fa fa-btn fa-edit"></i> Edit Profile</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i> Logout</a></li>
                            </ul>
                        </li>
                        @if($vot_timer->is_vote_active == 1)
                            <li>
                                <a>
                                    <label class="label label-success">Voting is LIVE</label>
                                </a>
                            </li>
                        @else
                            <li>
                                <a>
                                    <label class="label label-danger">Voting is NOT LIVE</label>
                                </a>
                            </li>
                        @endif

                    @endif
                </ul>
            </nav>
            <!--End Navigation Menu -->

        </div>
    </header>
    <!-- END HEADER -->


    <!-- CONTENT --------------------------------------------------------------------------------->

    @yield('content')

    <footer class="footer pt-80">
        <!-- Copyright Bar -->
        <section class="copyright pb-60">
            <div class="container">
                <p class="">
                    &copy; 2017 <a href="index.html"><b>Naccos Voting</b></a>. All Rights Reserved.
                    <br />
                    Project by <a target="_blank" href="#"><b>Yero Sexy 13CG015XXX</b> </a>.
                </p>
            </div>
        </section>
        <!-- End Copyright Bar -->

    </footer>
    <!-- END FOOTER -->


    <!-- Scroll Top -->
    <a class="scroll-top">
        <i class="fa fa-angle-double-up"></i>
    </a>
    <!-- End Scroll Top -->

</div>
<!-- Site Wraper End -->


<!-- JS -->
<script type="text/javascript" src="{{ asset('users/js/jquery-1.11.2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('users/js/plugin/jquery.easing.js') }}"></script>
<script type="text/javascript" src="{{ asset('users/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('users/js/plugin/jquery.flexslider.js') }}"></script>
<script type="text/javascript" src="{{ asset('users/js/plugin/jquery.viewportchecker.js') }}"></script>
<script type="text/javascript" src="{{ asset('users/js/plugin/jquery.stellar.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('users/js/plugin/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('users/js/plugin/jquery.colorbox-min.js') }}"></script>
<script type="text/javascript" src="{{ asset('users/js/plugin/masonry.pkgd.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('users/js/plugin/imagesloaded.pkgd.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('users/js/plugin/jquery.fs.tipper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('users/js/theme.js') }}"></script>

<script type="text/javascript" src="{{ asset('plugins/form-jasnyupload/fileinput.min.js') }}"></script> 							<!-- Load File Input -->



</body>

</html>


{{--<header id="topnav" class="navbar navbar-default navbar-fixed-top" role="banner">--}}

    {{--<div class="logo-area">--}}
		{{--<span id="trigger-sidebar" class="toolbar-trigger toolbar-icon-bg">--}}
			{{--<a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">--}}
				{{--<span class="icon-bg">--}}
					{{--<i class="ti ti-menu"></i>--}}
				{{--</span>--}}
			{{--</a>--}}
		{{--</span>--}}

        {{--<a class="navbar-brand">Nacos Voting</a>--}}

    {{--</div><!-- logo-area -->--}}

    {{--<ul class="nav navbar-nav toolbar pull-right">--}}

        {{--@if (Auth::guest())--}}
            {{--<li><a href="{{ url('/login') }}">Login</a></li>--}}
            {{--<li><a href="{{ url('/register') }}">Register</a></li>--}}
        {{--@else--}}
            {{--<li class="dropdown">--}}
                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
                    {{--{{ Auth::user()->matric_no }} <span class="caret"></span>--}}
                {{--</a>--}}

                {{--<ul class="dropdown-menu" role="menu">--}}
                    {{--<li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
        {{--@endif--}}


    {{--</ul>--}}
{{--</header>--}}
