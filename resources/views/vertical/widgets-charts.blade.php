<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App Favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

        <!-- App title -->
        <title>Uplon - Bootstrap 4 Responsive Admin Dashboard Template</title>

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="{{asset('plugins/morris/morris.css')}}">

        <!--Chartist Chart CSS -->
        <link rel="stylesheet" href="{{asset('plugins/chartist/dist/chartist.min.css')}}">

        <!-- Switchery css -->
        <link href="{{asset('plugins/switchery/switchery.min.css')}}" rel="stylesheet" />

        <!-- Bootstrap CSS -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- App CSS -->
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />

        <!-- Modernizr js -->
        <script src="{{asset('assets/js/modernizr.min.js')}}"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo">
                        <i class="zmdi zmdi-group-work icon-c-logo"></i>
                        <span>Uplon</span></a>
                </div>

                <nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <i class="zmdi zmdi-notifications-none noti-icon"></i>
                                <span class="noti-icon-badge"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><small><span class="badge badge-danger">7</span>Notification</small></h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success"><i class="icon-bubble"></i></div>
                                    <p class="notify-details">Robert S. Taylor commented on Admin<small class="text-muted">1min ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="icon-user"></i></div>
                                    <p class="notify-details">New user registered.<small class="text-muted">1min ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="icon-like"></i></div>
                                    <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">1min ago</small></p>
                                </a>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                                    View All
                                </a>

                            </div>
                        </li>

                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <i class="zmdi zmdi-email noti-icon"></i>
                                <span class="noti-icon-badge"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg" aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title bg-success">
                                    <h5><small><span class="badge badge-danger">7</span>Messages</small></h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-faded">
                                        <img src="{{asset('assets/images/users/avatar-2.jpg" alt="img" class="rounded-circle img-fluid">
                                    </div>
                                    <p class="notify-details">
                                        <b>Robert Taylor</b>
                                        <span>New tasks needs to be done</span>
                                        <small class="text-muted">1min ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-faded">
                                        <img src="{{asset('assets/images/users/avatar-3.jpg" alt="img" class="rounded-circle img-fluid">
                                    </div>
                                    <p class="notify-details">
                                        <b>Carlos Crouch</b>
                                        <span>New tasks needs to be done</span>
                                        <small class="text-muted">1min ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-faded">
                                        <img src="{{asset('assets/images/users/avatar-4.jpg" alt="img" class="rounded-circle img-fluid">
                                    </div>
                                    <p class="notify-details">
                                        <b>Robert Taylor</b>
                                        <span>New tasks needs to be done</span>
                                        <small class="text-muted">1min ago</small>
                                    </p>
                                </a>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                                    View All
                                </a>

                            </div>
                        </li>

                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link waves-effect waves-light right-bar-toggle" href="javascript:void(0);">
                                <i class="zmdi zmdi-format-subject noti-icon"></i>
                            </a>
                        </li>

                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <img src="{{asset('assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Welcome ! John</small> </h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-account-circle"></i> <span>Profile</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-settings"></i> <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-lock-open"></i> <span>Lock Screen</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-power"></i> <span>Logout</span>
                                </a>

                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="zmdi zmdi-menu"></i>
                            </button>
                        </li>
                        <li class="hidden-mobile app-search">
                            <form role="search" class="">
                                <input type="text" placeholder="Search..." class="form-control">
                                <a href=""><i class="fa fa-search"></i></a>
                            </form>
                        </li>
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                            <li class="text-muted menu-title">Navigation</li>

                            <li class="has_sub">
                                <a href="{{route('index')}}" class="waves-effect"><span class="badge badge-pill badge-primary float-right">1</span><i class="zmdi zmdi-view-dashboard"></i><span> Dashboard </span> </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-format-underlined"></i> <span> User Interface </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('ui-buttons')}}">Buttons</a></li>
                                    <li><a href="{{route('ui-cards')}}">Cards</a></li>
                                    <li><a href="{{route('ui-dropdowns')}}">Dropdowns</a></li>
                                    <li><a href="{{route('ui-checkbox-radio')}}">Checkboxs-Radios</a></li>
                                    <li><a href="{{route('ui-navs')}}">Navs</a></li>
                                    <li><a href="{{route('ui-progress')}}">Progress</a></li>
                                    <li><a href="{{route('ui-modals')}}">Modals</a></li>
                                    <li><a href="{{route('ui-notification')}}">Notification</a></li>
                                    <li><a href="{{route('ui-alerts')}}">Alerts</a></li>
                                    <li><a href="{{route('ui-carousel')}}">Carousel</a></li>
                                    <li><a href="{{route('ui-bootstrap')}}">Bootstrap UI</a></li>
                                    <li><a href="{{route('ui-typography')}}">Typography</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-album"></i> <span> Components </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('components-grid')}}">Grid</a></li>
                                    <li><a href="{{route('components-range-sliders')}}">Range sliders</a></li>
                                    <li><a href="{{route('components-sweet-alert')}}">Sweet Alerts</a></li>
                                    <li><a href="{{route('components-ratings')}}">Ratings</a></li>
                                    <li><a href="{{route('components-treeview')}}">Treeview</a></li>
                                    <li><a href="{{route('components-tour')}}">Tour</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="{{route('calendar')}}" class="waves-effect"><i class="zmdi zmdi-calendar"></i><span> Calendar </span> </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-widgets"></i> <span> Widgets </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('widgets-tiles')}}">Tile Box</a></li>
                                    <li><a href="{{route('widgets-charts')}}">Chart Widgets</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-fire"></i> <span> Icons </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('icons-materialdesign')}}">Material Design</a></li>
                                    <li><a href="{{route('icons-ionicons')}}">Ion Icons</a></li>
                                    <li><a href="{{route('icons-fontawesome')}}">Font awesome</a></li>
                                    <li><a href="{{route('icons-themify')}}">Themify Icons</a></li>
                                    <li><a href="{{route('icons-simple-line')}}">Simple line Icons</a></li>
                                    <li><a href="{{route('icons-weather')}}">Weather Icons</a></li>
                                    <li><a href="{{route('icons-pe7')}}">PE7 Icons</a></li>
                                    <li><a href="{{route('icons-typicons')}}">Typicons</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><span class="badge badge-pill badge-warning float-right">8</span><i class="zmdi zmdi-collection-text"></i><span> Forms </span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('form-elements')}}">General Elements</a></li>
                                    <li><a href="{{route('form-advanced')}}">Advanced Form</a></li>
                                    <li><a href="{{route('form-validation')}}">Form Validation</a></li>
                                    <li><a href="{{route('form-pickers')}}">Form Pickers</a></li>
                                    <li><a href="{{route('form-wizard')}}">Form Wizard</a></li>
                                    <li><a href="{{route('form-mask')}}">Form Masks</a></li>
                                    <li><a href="{{route('form-uploads')}}">Multiple File Upload</a></li>
                                    <li><a href="{{route('form-xeditable')}}">X-editable</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-format-list-bulleted"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('tables-basic')}}">Basic Tables</a></li>
                                    <li><a href="{{route('tables-datatable')}}">Data Table</a></li>
                                    <li><a href="{{route('tables-responsive')}}">Responsive Table</a></li>
                                    <li><a href="{{route('tables-tablesaw')}}">Tablesaw</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-chart"></i><span> Charts </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('chart-flot')}}">Flot Chart</a></li>
                                    <li><a href="{{route('chart-morris')}}">Morris Chart</a></li>
                                    <li><a href="{{route('chart-chartjs')}}">Chartjs</a></li>
                                    <li><a href="{{route('chart-peity')}}">Peity Charts</a></li>
                                    <li><a href="{{route('chart-chartist')}}">Chartist Charts</a></li>
                                    <li><a href="{{route('chart-c3')}}">C3 Charts</a></li>
                                    <li><a href="{{route('chart-sparkline')}}">Sparkline charts</a></li>
                                    <li><a href="{{route('chart-knob')}}">Jquery Knob</a></li>
                                </ul>
                            </li>

                            <li class="text-muted menu-title">More</li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><span class="badge badge-success badge-pill float-right">13</span><i class="zmdi zmdi-collection-item"></i><span> Pages </span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('pages-starter')}}">Starter Page</a></li>
                                    <li><a href="{{route('pages-login')}}">Login</a></li>
                                    <li><a href="{{route('pages-register')}}">Register</a></li>
                                    <li><a href="{{route('pages-recoverpw')}}">Recover Password</a></li>
                                    <li><a href="{{route('pages-lock-screen')}}">Lock Screen</a></li>
                                    <li><a href="{{route('pages-404')}}">Error 404</a></li>
                                    <li><a href="{{route('pages-500')}}">Error 500</a></li>
                                    <li><a href="{{route('pages-timeline')}}">Timeline</a></li>
                                    <li><a href="{{route('pages-invoice')}}">Invoice</a></li>
                                    <li><a href="{{route('pages-pricing')}}">Pricing</a></li>
                                    <li><a href="{{route('pages-gallery')}}">Gallery</a></li>
                                    <li><a href="{{route('pages-maintenance')}}">Maintenance</a></li>
                                    <li><a href="{{route('pages-comingsoon')}}">Coming Soon</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-blur-linear"></i><span>Multi Level </span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li class="has_sub">
                                        <a href="javascript:void(0);" class="waves-effect"><span>Menu Level 1.1</span>  <span class="menu-arrow"></span>    </a>
                                        <ul>
                                            <li><a href="javascript:void(0);"><span>Menu Item</span></a></li>
                                            <li><a href="javascript:void(0);"><span>Menu Item</span></a></li>
                                            <li><a href="javascript:void(0);"><span>Menu Item</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"><span>Menu Level 1.2</span></a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="page-title-box">
                                    <h4 class="page-title float-left">Charts Widgets</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Uplon</a></li>
                                        <li class="breadcrumb-item"><a href="#">Widgets</a></li>
                                        <li class="breadcrumb-item active">Charts Widgets</li>
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card-box">

                                    <h4 class="header-title m-t-0">Stacked Bar Chart</h4>
                                    <p class="text-muted font-13 m-b-30">
                                        Create stacked bar charts using Morris.Bar(options), where options is an object
                                        containing the configuration options.
                                    </p>

                                    <div class="row text-center m-t-30">
                                        <div class="col-4">
                                            <h3 data-plugin="counterup" class="text-success">1,507</h3>
                                            <p class="text-muted">Total Sales</p>
                                        </div>
                                        <div class="col-4">
                                            <h3 data-plugin="counterup" class="text-danger">916</h3>
                                            <p class="text-muted">Open Compaign</p>
                                        </div>
                                        <div class="col-4">
                                            <h3 data-plugin="counterup" class="text-warning">22</h3>
                                            <p class="text-muted">Daily Sales</p>
                                        </div>
                                    </div>

                                    <div id="morris-bar-stacked" style="height: 300px;"></div>

                                </div>
                            </div><!-- end col-->

                            <div class="col-xl-6">
                                <div class="card-box">

                                    <h4 class="header-title m-t-0">Area Chart</h4>
                                    <p class="text-muted font-13 m-b-30">
                                        Create an area chart using Morris.Area(options). Area charts take all the
                                        same options as line charts.
                                    </p>

                                    <div class="row text-center m-t-30">
                                        <div class="col-4">
                                            <h3 data-plugin="counterup" class="text-danger">2,532</h3>
                                            <p class="text-muted">Total Sales</p>
                                        </div>
                                        <div class="col-4">
                                            <h3 data-plugin="counterup" class="text-warning">895</h3>
                                            <p class="text-muted">Open Compaign</p>
                                        </div>
                                        <div class="col-4">
                                            <h3 data-plugin="counterup" class="text-success">25</h3>
                                            <p class="text-muted">Daily Sales</p>
                                        </div>
                                    </div>

                                    <div id="morris-area-example" style="height: 300px;"></div>

                                </div>
                            </div><!-- end col-->

                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card-box">

                                    <h4 class="header-title m-t-0">Total Revenue</h4>
                                    <p class="text-muted font-13 m-b-30">
                                        Here's an example of how to animate donut charts using Chartist.Svg.animate and SMIL.
                                    </p>

                                    <div class="text-center m-b-30">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-custom">Today</button>
                                            <button type="button" class="btn btn-custom">This Week</button>
                                            <button type="button" class="btn btn-custom">Last Week</button>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div id="animating-donut" class="ct-chart ct-golden-section"></div>
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list-unstyled chart-detail-list m-t-30">
                                                <li class="m-b-10">
                                                    <h6 style="color: #3db9dc;"><i class="zmdi zmdi-circle-o m-r-5"></i>Series A</h6>
                                                </li>
                                                <li class="m-b-10">
                                                    <h6 style="color: #1bb99a;"><i class="zmdi zmdi-circle-o m-r-5"></i>Series B</h6>
                                                </li>
                                                <li class="m-b-10">
                                                    <h6 style="color: #f1b53d;"><i class="zmdi zmdi-circle-o m-r-5"></i>Series C</h6>
                                                </li>
                                                <li class="m-b-10">
                                                    <h6 style="color: #ff7aa3;"><i class="zmdi zmdi-circle-o m-r-5"></i>Series D</h6>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div><!-- end col-->

                            <div class="col-xl-6">
                                <div class="card-box">

                                    <h4 class="header-title m-t-0">Sales Analytics</h4>
                                    <p class="text-muted font-13 m-b-30">
                                        A very simple pie chart with label interpolation to show percentage instead of
                                        the actual data series value.
                                    </p>

                                    <div class="text-center m-b-30">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-custom">Today</button>
                                            <button type="button" class="btn btn-custom">This Week</button>
                                            <button type="button" class="btn btn-custom">Last Week</button>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8 col-sm-12">
                                            <div id="simple-pie" class="ct-chart ct-golden-section simple-pie-chart-chartist"></div>
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <ul class="list-unstyled chart-detail-list m-t-30">
                                                <li class="m-b-10">
                                                    <h6 style="color: #3db9dc;"><i class="zmdi zmdi-circle-o m-r-5"></i>Desktops</h6>
                                                </li>
                                                <li class="m-b-10">
                                                    <h6 style="color: #1bb99a;"><i class="zmdi zmdi-circle-o m-r-5"></i>Tablets</h6>
                                                </li>
                                                <li class="m-b-10">
                                                    <h6 style="color: #f1b53d;"><i class="zmdi zmdi-circle-o m-r-5"></i>Mobiles</h6>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div><!-- end col-->


                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card-box">
                                    <h4 class="text-dark header-title m-t-0 m-b-30">Total Revenue</h4>

                                    <div class="widget-chart text-center">
                                        <input data-plugin="knob" data-width="150" data-height="150" data-linecap=round data-fgColor="#5d9cec" value="55" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15"/>

                                        <p class="text-muted font-13 m-t-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Nunc nec dui vitae urna cursus lacinia. In venenatis eget justo in dictum. Vestibulum auctor raesent quisnm.</p>

                                        <div class="row text-center m-t-30">
                                            <div class="col-4">
                                                <h3 data-plugin="counterup" class="text-muted">1,507</h3>
                                                <p class="text-muted">Total Sales</p>
                                            </div>
                                            <div class="col-4">
                                                <h3 data-plugin="counterup" class="text-muted">916</h3>
                                                <p class="text-muted">Open Compaign</p>
                                            </div>
                                            <div class="col-4">
                                                <h3 data-plugin="counterup" class="text-muted">22</h3>
                                                <p class="text-muted">Daily Sales</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-xl-4">
                                <div class="card-box">
                                    <h4 class="text-dark header-title m-t-0 m-b-30">Total Revenue</h4>

                                    <div class="widget-chart text-center">
                                        <input data-plugin="knob" data-width="150" data-height="150" data-linecap=round data-fgColor="#fb6d9d" value="80" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15"/>

                                        <p class="text-muted font-13 m-t-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Nunc nec dui vitae urna cursus lacinia. In venenatis eget justo in dictum. Vestibulum auctor raesent quisnm.</p>

                                        <div class="row text-center m-t-30">
                                            <div class="col-4">
                                                <h3 data-plugin="counterup" class="text-muted">1,507</h3>
                                                <p class="text-muted">Total Sales</p>
                                            </div>
                                            <div class="col-4">
                                                <h3 data-plugin="counterup" class="text-muted">916</h3>
                                                <p class="text-muted">Open Compaign</p>
                                            </div>
                                            <div class="col-4">
                                                <h3 data-plugin="counterup" class="text-muted">22</h3>
                                                <p class="text-muted">Daily Sales</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-xl-4">
                                <div class="card-box">
                                    <h4 class="text-dark header-title m-t-0 m-b-30">Total Revenue</h4>

                                    <div class="widget-chart text-center">
                                        <input data-plugin="knob" data-width="150" data-height="150" data-linecap=round data-fgColor="#34d3eb" value="60" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15"/>

                                        <p class="text-muted font-13 m-t-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Nunc nec dui vitae urna cursus lacinia. In venenatis eget justo in dictum. Vestibulum auctor raesent quisnm.</p>

                                        <div class="row text-center m-t-30">
                                            <div class="col-4">
                                                <h3 data-plugin="counterup" class="text-muted">1,507</h3>
                                                <p class="text-muted">Total Sales</p>
                                            </div>
                                            <div class="col-4">
                                                <h3 data-plugin="counterup" class="text-muted">916</h3>
                                                <p class="text-muted">Open Compaign</p>
                                            </div>
                                            <div class="col-4">
                                                <h3 data-plugin="counterup" class="text-muted">22</h3>
                                                <p class="text-muted">Daily Sales</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">

                                    <div class="row">
                                        <div class="col-xl-6">
                                            <h4 class="header-title m-t-0">Bi-polar bar chart</h4>
                                            <p class="text-muted font-13 m-b-30">
                                                A bi-polar bar chart with a range limit set with low and high. There is
                                                also an interpolation function used to skip every odd grid line / label.
                                            </p>

                                            <div class="text-center">
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <button type="button" class="btn btn-secondary">Today</button>
                                                    <button type="button" class="btn btn-secondary">This Week</button>
                                                    <button type="button" class="btn btn-secondary">Last Week</button>
                                                </div>
                                            </div>

                                            <div class="p-20">
                                                <div id="bi-polar-bar" class="ct-chart ct-golden-section"></div>
                                            </div>

                                        </div>

                                        <div class="col-xl-6">
                                            <h4 class="header-title m-t-0">Line chart with area</h4>
                                            <p class="text-muted font-13 m-b-30">
                                                This chart uses the showArea option to draw line, dots but also an area
                                                shape. Use the low option to specify a fixed lower bound that will make
                                                the area expand.
                                            </p>

                                            <div class="text-center">
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <button type="button" class="btn btn-secondary">Today</button>
                                                    <button type="button" class="btn btn-secondary">This Week</button>
                                                    <button type="button" class="btn btn-secondary">Last Week</button>
                                                </div>
                                            </div>

                                            <div class="p-20">
                                                <div id="chart-with-area" class="ct-chart ct-golden-section"></div>
                                            </div>

                                        </div>
                                    </div><!-- end row -->
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->



            </div>
            <!-- End content-page -->


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <div class="nicescroll">
                    <ul class="nav nav-pills nav-justified">
                        <li class="nav-item">
                            <a href="#home-2"  class="nav-link active" data-toggle="tab" aria-expanded="false">
                                Activity
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#messages-2" class="nav-link" data-toggle="tab" aria-expanded="true">
                                Settings
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="home-2">
                            <div class="timeline-2">
                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">5 minutes ago</small>
                                        <p><strong><a href="#" class="text-info">John Doe</a></strong> Uploaded a photo <strong>"DSC000586.jpg"</strong></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">30 minutes ago</small>
                                        <p><a href="" class="text-info">Lorem</a> commented your post.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">59 minutes ago</small>
                                        <p><a href="" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">1 hour ago</small>
                                        <p><strong><a href="#" class="text-info">John Doe</a></strong>Uploaded 2 new photos</p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">3 hours ago</small>
                                        <p><a href="" class="text-info">Lorem</a> commented your post.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">5 hours ago</small>
                                        <p><a href="" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="messages-2">

                            <div class="row m-t-10">
                                <div class="col-8">
                                    <h5 class="m-0">Notifications</h5>
                                    <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                                </div>
                                <div class="col-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small"/>
                                </div>
                            </div>

                            <div class="row m-t-10">
                                <div class="col-8">
                                    <h5 class="m-0">API Access</h5>
                                    <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                                </div>
                                <div class="col-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small"/>
                                </div>
                            </div>

                            <div class="row m-t-10">
                                <div class="col-8">
                                    <h5 class="m-0">Auto Updates</h5>
                                    <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                                </div>
                                <div class="col-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small"/>
                                </div>
                            </div>

                            <div class="row m-t-10">
                                <div class="col-8">
                                    <h5 class="m-0">Online Status</h5>
                                    <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                                </div>
                                <div class="col-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small"/>
                                </div>
                            </div>

                        </div>
                    </div>
                </div> <!-- end nicescroll -->
            </div>
            <!-- /Right-bar -->

            <footer class="footer">
                2016 - 2019 © Uplon.
            </footer>


        </div>
        <!-- END wrapper -->


        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/js/detect.js')}}"></script>
        <script src="{{asset('assets/js/fastclick.js')}}"></script>
        <script src="{{asset('assets/js/jquery.blockUI.js')}}"></script>
        <script src="{{asset('assets/js/waves.js')}}"></script>
        <script src="{{asset('assets/js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('assets/js/jquery.scrollTo.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('plugins/switchery/switchery.min.js')}}"></script>

        <!--Morris Chart-->
        <script src="{{asset('plugins/morris/morris.min.js')}}"></script>
        <script src="{{asset('plugins/raphael/raphael.min.js')}}"></script>

        <!-- Counter Up  -->
        <script src="{{asset('plugins/waypoints/lib/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('plugins/counterup/jquery.counterup.js')}}"></script>

        <!--Chartist Chart-->
        <script src="{{asset('plugins/chartist/dist/chartist.min.js')}}"></script>
        <script src="{{asset('plugins/chartist/dist/chartist-plugin-tooltip.min.js')}}"></script>

        <!-- Knob -->
        <script src="{{asset('plugins/jquery-knob/jquery.knob.js')}}"></script>

        <!-- Charts Widget init -->
        <script src="{{asset('assets/pages/jquery.chart-widgets.init.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets/js/jquery.core.js')}}"></script>
        <script src="{{asset('assets/js/jquery.app.js')}}"></script>


    </body>
</html>