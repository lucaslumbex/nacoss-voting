<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Nacos Votting | {{$title}}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
{{--    <link type="text/css" href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">        <!-- Font Awesome -->--}}
    <link type="text/css" href="{{ asset('fonts/themify-icons/themify-icons.css') }}" rel="stylesheet">        <!-- Themify Icons -->
{{--    <link type="text/css" href="{{ asset('css/styles.css') }}" rel="stylesheet">        <!-- Core CSS with all styles -->--}}


    <link type="text/css" href="{{ asset('plugins/codeprettifier/prettify.css') }}" rel="stylesheet">        <!-- Code Prettifier -->
    <link type="text/css" href="{{ asset('plugins/iCheck/skins/minimal/blue.css') }}" rel="stylesheet">        <!-- iCheck -->
    <!--<link type="text/css" href="/plugins/dropzone/css/dropzone.css" rel="stylesheet">              &lt;!&ndash; iCheck &ndash;&gt;-->


    <link type="text/css" href="{{ asset('plugins/fullcalendar/fullcalendar.css') }}" rel="stylesheet">        <!-- FullCalendar -->
    <link type="text/css" href="{{ asset('plugins/jvectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet">        <!-- jVectorMap -->
    <link type="text/css" href="{{ asset('plugins/switchery/switchery.css') }}" rel="stylesheet">        <!-- Switchery -->

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/lucasStyle.css') }}" rel="stylesheet" type="text/css" >
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    @yield('css')


    <style>
        body {
            font-family: SQMarket, Lato;
            overflow-x: hidden;
        }

    </style>
</head>
<body id="app-layout background-color">
{{--<nav class="navbar navbar-default navbar-static-top">--}}
    {{--<div class="container">--}}
        {{--<div class="navbar-header">--}}

            {{--<!-- Collapsed Hamburger -->--}}
            {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">--}}
                {{--<span class="sr-only">Toggle Navigation</span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
            {{--</button>--}}

            {{--<!-- Branding Image -->--}}
            {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                {{--Laravel--}}
            {{--</a>--}}
        {{--</div>--}}

        {{--<div class="collapse navbar-collapse" id="app-navbar-collapse">--}}
            {{--<!-- Left Side Of Navbar -->--}}
            {{--<ul class="nav navbar-nav">--}}
                {{--<li><a href="{{ url('/home') }}">Home</a></li>--}}
            {{--</ul>--}}

            {{--<!-- Right Side Of Navbar -->--}}
            {{--<ul class="nav navbar-nav navbar-right">--}}
                {{--<!-- Authentication Links -->--}}
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
        {{--</div>--}}
    {{--</div>--}}
{{--</nav>--}}

<header id="topnav" class="navbar navbar-default navbar-fixed-top" role="banner">

    <div class="logo-area">
		<span id="trigger-sidebar" class="toolbar-trigger toolbar-icon-bg">
			<a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
				<span class="icon-bg">
					<i class="ti ti-menu"></i>
				</span>
			</a>
		</span>

        <a class="navbar-brand">Nacos Voting</a>

    </div><!-- logo-area -->

    <ul class="nav navbar-nav toolbar pull-right">

        @if (Auth::guest())
            <li><a href="{{ url('/login') }}">Login</a></li>
            <li><a href="{{ url('/register') }}">Register</a></li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->matric_no }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                </ul>
            </li>
        @endif


    </ul>
</header>
<div id="wrapper">
    <div id="layout-static">
        <div class="static-sidebar-wrapper sidebar-default">
            <div class="static-sidebar">
                <div class="sidebar">
                    <div class="widget stay-on-collapse" id="widget-sidebar">
                        <nav role="navigation" class="widget-body">
                            <ul class="acc-menu">
                                <li class="nav-separator"><span>Explore</span></li>
                                <li>
                                    <a href="/admin/dashboard">
                                        <i class="ti ti-home"></i>
                                        <span>Dashboard</span>
                                        <!--<span class="badge badge-teal">2</span>-->
                                    </a>
                                </li>
                                <li class="hasChild"><a href="javascript:;"><i class="ti ti-user"></i><span>Users</span></a>
                                    <ul class="acc-menu">
                                        <li><a href="/admin/user/"><span>All Users</span></a></li>
                                    </ul>
                                </li>
                                <li class="hasChild"><a href="javascript:;"><i class="ti ti-spray"></i><span>Student Info</span></a>
                                    <ul class="acc-menu">
                                        <li><a href="/admin/student_info/"><span>All Student Info</span></a></li>
                                        <li><a href="/admin/student_info/create"><span>Add Student Info</span></a></li>
                                    </ul>
                                </li>
                                <li class="hasChild"><a href="javascript:;"><i class="ti ti-spray"></i><span>Voting Categories</span></a>
                                    <ul class="acc-menu">
                                        <li><a href="/admin/category/"><span>All Voting Categories</span></a></li>
                                        <li><a href="/admin/category/create"><span>Add Voting Categories</span></a></li>
                                    </ul>
                                </li>
                                <li class="hasChild"><a href="javascript:;"><i class="ti ti-spray"></i><span>Candidates</span></a>
                                    <ul class="acc-menu">
                                        <li><a href="/admin/candidate/"><span>All Candidates</span></a></li>
                                        <li><a href="/admin/candidate/create"><span>Add Candidates</span></a></li>
                                    </ul>
                                </li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="static-content-wrapper">
            <div class="static-content">
                <div class="page-content">
                    <ol class="breadcrumb">

                        <li class=""><a >Home</a></li>
                        <li class="active"><a href="">{{$ActivePage}}</a></li>
                    </ol>
                    <div class="container-fluid">

                        <!--apropriate content-->
                        <div data-widget-group="group1">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="">
                                        @yield('content')

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- .container-fluid -->
                </div> <!-- #page-content -->

            </div>
            <footer role="contentinfo">
                <div class="clearfix">
                    <ul class="list-unstyled list-inline pull-left">
                        <li><h6 style="margin: 0;">&copy; 2017 Nacos Voting</h6></li>
                    </ul>
                    <button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i class="ti ti-arrow-up"></i></button>
                </div>
            </footer>
        </div>
    </div>
</div>





<!-- JavaScripts -->
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script> 							<!-- Load jQuery -->
<script type="text/javascript" src="{{ asset('js/jqueryui-1.10.3.min.js') }}"></script> 							<!-- Load jQuery -->
<script type="text/javascript" src="{{ asset('js/angular.js') }}"></script> 							<!-- Load jQuery -->
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script> 							<!-- Load jQuery -->
<script type="text/javascript" src="{{ asset('controllers/controller.js') }}"></script> 							<!-- Load jQuery -->

<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script> 							<!-- Load Bootstrap -->
<script type="text/javascript" src="{{ asset('js/enquire.min.js') }}"></script> 							<!-- Load Enquire -->

<script type="text/javascript" src="{{ asset('plugins/velocityjs/velocity.min.js') }}"></script> 							<!-- Load jQuery -->
<script type="text/javascript" src="{{ asset('plugins/velocityjs/velocity.ui.min.js') }}"></script> 							<!-- Load jQuery -->

<script type="text/javascript" src="{{ asset('plugins/wijets/wijets.js') }}"></script> 							<!-- Load Wijet -->

<script type="text/javascript" src="{{ asset('plugins/codeprettifier/prettify.js') }}"></script> 							<!-- Load Prettifier -->
<script type="text/javascript" src="{{ asset('plugins/bootstrap-switch/bootstrap-switch.js') }}"></script> 							<!-- Load Swith/Toggle Button -->

<script type="text/javascript" src="{{ asset('plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js') }}"></script> 							<!-- Load  Bootstrap Tabdrop -->
<script type="text/javascript" src="{{ asset('plugins/iCheck/icheck.min.js') }}"></script> 							<!-- Load iCheck -->
<script type="text/javascript" src="{{ asset('plugins/nanoScroller/js/jquery.nanoscroller.min.js') }}"></script> 							<!-- Load nano scroller -->

<script type="text/javascript" src="{{ asset('js/application.js') }}"></script>
<script type="text/javascript" src="{{ asset('demo/demo.js') }}"></script>
<script type="text/javascript" src="{{ asset('demo/demo-switcher.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/form-jasnyupload/fileinput.min.js') }}"></script> 							<!-- Load File Input -->

{{--<script type="text/javascript" src="{{ asset('demo/demo-formcomponents.js') }}"></script>--}}
<!-- End loading site level scripts -->

<script type="text/javascript" src="{{ asset('plugins/sparklines/jquery.sparklines.min.js') }}"></script> 							<!-- Load Sparkline -->

<script type="text/javascript" src="{{ asset('plugins/switchery/switchery.js') }}"></script> 							<!-- Load Switchery -->
<script type="text/javascript" src="{{ asset('plugins/easypiechart/jquery.easypiechart.js') }}"></script> 							<!-- Load easypiechart -->
<script type="text/javascript" src="{{ asset('plugins/fullcalendar/moment.min.js') }}"></script> 							<!-- Load Moment.js Dependency -->
<script type="text/javascript" src="{{ asset('plugins/fullcalendar/fullcalendar.min.js') }}"></script> 							<!-- Load Calendar Plugin -->

<!-- Load page level scripts-->

<script type="text/javascript" src="{{ asset('plugins/datatables/jquery.dataTables.js') }}"></script> 			<!-- Load jQuery dataTables -->
<script type="text/javascript" src="{{ asset('plugins/datatables/dataTables.bootstrap.js') }}"></script>		<!-- Load bootstrap dataTables -->
<script type="text/javascript" src="{{ asset('demo/demo-datatables.js') }}"></script> 							<!-- Load demo dataTables -->

<!-- End loading page level scripts-->


{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>--}}
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
