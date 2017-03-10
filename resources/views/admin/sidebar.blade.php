<!DOCTYPE html>
<html lang="en" ng-app="myApp">

<head>
    <meta charset="utf-8">
    <title>Nacos Vote Admin {{'title'}}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="author" content="lumbex">

    <link type='text/css' href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600' rel='stylesheet'>

    <link type="text/css" href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">        <!-- Font Awesome -->
    <link type="text/css" href="{{ asset('fonts/themify-icons/themify-icons.css') }}" rel="stylesheet">        <!-- Themify Icons -->
    <link type="text/css" href="{{ asset('css/styles.css') }}" rel="stylesheet">        <!-- Core CSS with all styles -->


    <link type="text/css" href="{{ asset('plugins/codeprettifier/prettify.css') }}" rel="stylesheet">        <!-- Code Prettifier -->
    <link type="text/css" href="{{ asset('plugins/iCheck/skins/minimal/blue.css') }}" rel="stylesheet">        <!-- iCheck -->
    <!--<link type="text/css" href="/plugins/dropzone/css/dropzone.css" rel="stylesheet">              &lt;!&ndash; iCheck &ndash;&gt;-->


    <link type="text/css" href="{{ asset('plugins/fullcalendar/fullcalendar.css') }}" rel="stylesheet">        <!-- FullCalendar -->
    <link type="text/css" href="{{ asset('plugins/jvectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet">        <!-- jVectorMap -->
    <link type="text/css" href="{{ asset('plugins/switchery/switchery.css') }}" rel="stylesheet">        <!-- Switchery -->

</head>

<body class="animated-content">
<header id="topnav" class="navbar navbar-default navbar-fixed-top" role="banner">

    <div class="logo-area">
		<span id="trigger-sidebar" class="toolbar-trigger toolbar-icon-bg">
			<a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
				<span class="icon-bg">
					<i class="ti ti-menu"></i>
				</span>
			</a>
		</span>

        <a class="navbar-brand">Monitrix</a>

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
                                    <a href="/dashboard">
                                        <i class="ti ti-home"></i>
                                        <span>Dashboard</span>
                                        <!--<span class="badge badge-teal">2</span>-->
                                    </a>
                                </li>
                                <li class="hasChild"><a href="javascript:;"><i class="ti ti-user"></i><span>Brand Agents</span></a>
                                    <ul class="acc-menu">
                                        <li><a href="/agents/allAgents"><span>All Brand Agents</span></a></li>
                                        <li><a href="/agents/activeAgents"><span>Active Brand Agents</span></a></li>
                                        <li><a href="/agents/inactiveAgents"><span>Inactive Brand Agents</span></a></li>
                                        <li><a href="/agents/create"><span>Add Brand Agents</span></a></li>
                                    </ul>
                                </li>
                                <li class="hasChild"><a href="javascript:;"><i class="ti ti-spray"></i><span>Response</span></a>
                                    <ul class="acc-menu">
                                        <li><a href="/response/allPossibleResponse"><span>All Possible Response</span></a></li>
                                        <li><a href="/response/addPossibleResponse"><span>Add Possible Response</span></a></li>
                                    </ul>
                                </li>
                                <li class="hasChild">
                                    <a href="javascript:;">
                                        <i class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488.4 488.4" width="22" height="20">
                                                <style>.clrYelowish{fill:#cddc39;}</style>
                                                <path class="clrYelowish" d="M409.8 0H78.7c-7.9 0-14.2 6.4-14.2 14.3v459.9c0 7.9 6.4 14.3 14.3 14.3h331.1c7.9 0 14.3-6.4 14.3-14.2V14.3C424 6.4 417.6 0 409.8 0zM78.7 8.5h331.1c3.2 0 5.8 2.6 5.8 5.8v16.1H72.9V14.3C72.9 11.1 75.5 8.5 78.7 8.5zM409.8 479.9H78.7c-3.2 0-5.7-2.6-5.7-5.7v-13.7h187.6c2.3 0 4.3-1.9 4.3-4.2 0-2.3-1.9-4.2-4.2-4.2H72.9V38.8h342.6v30.2h-62.3c-2.3 0-4.2 1.9-4.2 4.3 0 2.3 1.9 4.3 4.3 4.3h62.3v396.7C415.5 477.3 412.9 479.9 409.8 479.9z"></path>
                                                <path class="clrYelowish" d="M159.2 196.8c36 0 65.3-29.3 65.3-65.2s-29.3-65.2-65.2-65.2c-36 0-65.3 29.3-65.3 65.3S123.2 196.8 159.2 196.8zM159.2 188.3c-14.5 0-27.8-5.5-37.8-14.5l38.1-36.5 41.5 32.5C190.6 181.2 175.7 188.3 159.2 188.3zM215.9 131.6c0 11.7-3.6 22.6-9.7 31.6l-42.8-33.5V75C192.8 77.2 215.9 101.7 215.9 131.6zM155 75v51.7l-50.8-8.9C110 94.5 130.3 76.8 155 75zM102.7 126.2l47.5 8.3 -34.7 33.2c-8.1-9.8-13-22.4-13-36.1C102.4 129.8 102.5 128 102.7 126.2z"></path>
                                                <path class="clrYelowish" d="M369.2 115.7H265.9c-2.3 0-4.2 1.9-4.2 4.3 0 2.3 1.9 4.3 4.3 4.3h103.3c2.3 0 4.3-1.9 4.3-4.2C373.4 117.6 371.5 115.7 369.2 115.7z"></path>
                                                <path class="clrYelowish" d="M369.2 171.5H265.9c-2.3 0-4.2 1.9-4.2 4.3 0 2.3 1.9 4.3 4.3 4.3h103.3c2.3 0 4.3-1.9 4.3-4.2C373.4 173.4 371.5 171.5 369.2 171.5z"></path>
                                                <path class="clrYelowish" d="M369.2 227.4H112.8c-2.3 0-4.2 1.9-4.2 4.3 0 2.3 1.9 4.3 4.3 4.3h256.4c2.3 0 4.3-1.9 4.3-4.2C373.4 229.3 371.5 227.4 369.2 227.4z"></path>
                                                <path class="clrYelowish" d="M369.2 283.3H112.8c-2.3 0-4.2 1.9-4.2 4.3 0 2.3 1.9 4.3 4.3 4.3h256.4c2.3 0 4.3-1.9 4.3-4.2C373.4 285.2 371.5 283.3 369.2 283.3z"></path>
                                                <path class="clrYelowish" d="M369.2 339.1H112.8c-2.3 0-4.2 1.9-4.2 4.3 0 2.3 1.9 4.3 4.3 4.3h256.4c2.3 0 4.3-1.9 4.3-4.2C373.4 341 371.5 339.1 369.2 339.1z"></path>
                                                <path class="clrYelowish" d="M369.2 395H112.8c-2.3 0-4.2 1.9-4.2 4.3 0 2.3 1.9 4.3 4.3 4.3h256.4c2.3 0 4.3-1.9 4.3-4.2C373.4 396.9 371.5 395 369.2 395z"></path>
                                                <path class="clrYelowish" d="M337.2 452h-54.7c-2.3 0-4.2 1.9-4.2 4.3 0 2.3 1.9 4.3 4.3 4.3h54.7c2.3 0 4.3-1.9 4.3-4.2C341.4 453.9 339.5 452 337.2 452z"></path>
                                            </svg>
                                        </i>
                                        <span>Attendance</span>
                                    </a>
                                    <ul class="acc-menu">
                                        <li><a href="/attendance/allAttendance"><span>Attendance Records</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="/stormRemarks/allStormRemarks">
                                        <i class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488.4 488.4" width="22" height="20">
                                                <style>.clrYelowish{fill:#cddc39;}</style>
                                                <path class="clrYelowish" d="M409.8 0H78.7c-7.9 0-14.2 6.4-14.2 14.3v459.9c0 7.9 6.4 14.3 14.3 14.3h331.1c7.9 0 14.3-6.4 14.3-14.2V14.3C424 6.4 417.6 0 409.8 0zM78.7 8.5h331.1c3.2 0 5.8 2.6 5.8 5.8v16.1H72.9V14.3C72.9 11.1 75.5 8.5 78.7 8.5zM409.8 479.9H78.7c-3.2 0-5.7-2.6-5.7-5.7v-13.7h187.6c2.3 0 4.3-1.9 4.3-4.2 0-2.3-1.9-4.2-4.2-4.2H72.9V38.8h342.6v30.2h-62.3c-2.3 0-4.2 1.9-4.2 4.3 0 2.3 1.9 4.3 4.3 4.3h62.3v396.7C415.5 477.3 412.9 479.9 409.8 479.9z"></path>
                                                <path class="clrYelowish" d="M159.2 196.8c36 0 65.3-29.3 65.3-65.2s-29.3-65.2-65.2-65.2c-36 0-65.3 29.3-65.3 65.3S123.2 196.8 159.2 196.8zM159.2 188.3c-14.5 0-27.8-5.5-37.8-14.5l38.1-36.5 41.5 32.5C190.6 181.2 175.7 188.3 159.2 188.3zM215.9 131.6c0 11.7-3.6 22.6-9.7 31.6l-42.8-33.5V75C192.8 77.2 215.9 101.7 215.9 131.6zM155 75v51.7l-50.8-8.9C110 94.5 130.3 76.8 155 75zM102.7 126.2l47.5 8.3 -34.7 33.2c-8.1-9.8-13-22.4-13-36.1C102.4 129.8 102.5 128 102.7 126.2z"></path>
                                                <path class="clrYelowish" d="M369.2 115.7H265.9c-2.3 0-4.2 1.9-4.2 4.3 0 2.3 1.9 4.3 4.3 4.3h103.3c2.3 0 4.3-1.9 4.3-4.2C373.4 117.6 371.5 115.7 369.2 115.7z"></path>
                                                <path class="clrYelowish" d="M369.2 171.5H265.9c-2.3 0-4.2 1.9-4.2 4.3 0 2.3 1.9 4.3 4.3 4.3h103.3c2.3 0 4.3-1.9 4.3-4.2C373.4 173.4 371.5 171.5 369.2 171.5z"></path>
                                                <path class="clrYelowish" d="M369.2 227.4H112.8c-2.3 0-4.2 1.9-4.2 4.3 0 2.3 1.9 4.3 4.3 4.3h256.4c2.3 0 4.3-1.9 4.3-4.2C373.4 229.3 371.5 227.4 369.2 227.4z"></path>
                                                <path class="clrYelowish" d="M369.2 283.3H112.8c-2.3 0-4.2 1.9-4.2 4.3 0 2.3 1.9 4.3 4.3 4.3h256.4c2.3 0 4.3-1.9 4.3-4.2C373.4 285.2 371.5 283.3 369.2 283.3z"></path>
                                                <path class="clrYelowish" d="M369.2 339.1H112.8c-2.3 0-4.2 1.9-4.2 4.3 0 2.3 1.9 4.3 4.3 4.3h256.4c2.3 0 4.3-1.9 4.3-4.2C373.4 341 371.5 339.1 369.2 339.1z"></path>
                                                <path class="clrYelowish" d="M369.2 395H112.8c-2.3 0-4.2 1.9-4.2 4.3 0 2.3 1.9 4.3 4.3 4.3h256.4c2.3 0 4.3-1.9 4.3-4.2C373.4 396.9 371.5 395 369.2 395z"></path>
                                                <path class="clrYelowish" d="M337.2 452h-54.7c-2.3 0-4.2 1.9-4.2 4.3 0 2.3 1.9 4.3 4.3 4.3h54.7c2.3 0 4.3-1.9 4.3-4.2C341.4 453.9 339.5 452 337.2 452z"></path>
                                            </svg>
                                        </i>
                                        <span>Sales Remarks</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/gmaps/activeAgentsMap">
                                        <i class="ti ti-map"></i>
                                        <span>Maps</span></a>
                                </li>
                                <li>
                                    <a href="/leaderboard">
                                        <i class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 612 612">
                                                <style>.clrOrangeish{fill:#ff5722;}</style>
                                                <path class="clrOrangeish" d="M47.8 363.3c-5.3 0-9.5-4.3-9.5-9.5 0-5.3 4.3-9.5 9.5-9.5l47.1 0.1 79.5-92.4c3.4-4 9.4-4.5 13.4-1 0.6 0.5 1.2 1.2 1.6 1.8L258.5 339l145.5-163.7c3.5-3.9 9.5-4.3 13.5-0.8l0.8 0.8 87.1 87 31.8-47.7c2.9-4.4 8.8-5.5 13.2-2.6 4.4 2.9 5.5 8.8 2.6 13.2l-38 57c-0.4 0.6-0.8 1.2-1.4 1.8 -3.7 3.7-9.8 3.7-13.5 0l-88.5-88.5L265.3 360.1l0 0c-0.4 0.4-0.8 0.8-1.2 1.1 -4.1 3.3-10.1 2.6-13.4-1.5l-69.3-86.7 -74.8 87 0 0c-1.8 2.1-4.4 3.3-7.3 3.3L47.8 363.3 47.8 363.3zM417.9 174.9l0.4 0.4L417.9 174.9z"></path>
                                                <path class="clrOrangeish" d="M296.5 57.4c5.3 0 9.6 4.3 9.6 9.6 0 5.3-4.3 9.6-9.6 9.6H19.1v344.4h573.7V76.5h-258.2c-5.3 0-9.6-4.3-9.6-9.6 0-5.3 4.3-9.6 9.6-9.6H602.2h0.2c5.3 0 9.6 4.3 9.6 9.6V430.2v0.2c0 5.3-4.3 9.6-9.6 9.6H9.8 9.6c-5.3 0-9.6-4.3-9.6-9.6V67.2v-0.3c0-5.3 4.3-9.6 9.6-9.6L296.5 57.4 296.5 57.4z"></path>
                                                <path class="clrOrangeish" d="M286.9 9.5c0-5.3 4.3-9.5 9.5-9.5 5.3 0 9.5 4.3 9.5 9.5l0 57.4c0 5.3-4.3 9.5-9.5 9.5 -5.3 0-9.5-4.3-9.5-9.5L286.9 9.5z"></path>
                                                <path class="clrOrangeish" d="M286.9 468.5c0-5.3 4.3-9.5 9.5-9.5 5.3 0 9.5 4.3 9.5 9.5l0 95.7c0 5.2-4.3 9.5-9.5 9.5 -5.3 0-9.5-4.3-9.5-9.5L286.9 468.5z" ></path>
                                                <path class="clrOrangeish" d="M153.4 465.9c1.4-5.1 6.7-8 11.8-6.6 5.1 1.4 8 6.7 6.6 11.8l-38.2 133.9c-1.4 5.1-6.7 8-11.8 6.6 -5.1-1.4-8-6.7-6.6-11.8L153.4 465.9z"></path>
                                                <path class="clrOrangeish" d="M421.1 471.1c-1.4-5.1 1.5-10.4 6.6-11.8 5.1-1.4 10.4 1.5 11.8 6.6l38.2 133.9c1.4 5.1-1.5 10.4-6.6 11.8 -5.1 1.4-10.4-1.5-11.8-6.6L421.1 471.1z"></path>
                                                <path class="clrOrangeish" d="M9.6 478.3c-5.3 0-9.6-4.3-9.6-9.6s4.3-9.6 9.6-9.6H602.4c5.3 0 9.6 4.3 9.6 9.6 0 5.3-4.3 9.6-9.6 9.6H9.6z" ></path>
                                            </svg>
                                        </i>
                                        <span>Leaderboard</span>
                                    </a>
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
                        <li class="active"><a href="">{{'active Page}}</a></li>
                    </ol>
                    <div class="container-fluid">

                        <!--apropriate content-->
                        <div data-widget-group="group1">
                            <div class="row">
                                <div class="col-md-12">

                                    {{--@yield('content')--}}

                                </div>
                            </div>
                        </div>

                    </div> <!-- .container-fluid -->
                </div> <!-- #page-content -->

            </div>
            <footer role="contentinfo">
                <div class="clearfix">
                    <ul class="list-unstyled list-inline pull-left">
                        <li><h6 style="margin: 0;">&copy; 2016 Monitrix</h6></li>
                    </ul>
                    <button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i class="ti ti-arrow-up"></i></button>
                </div>
            </footer>
        </div>
    </div>
</div>


</body>

</html>