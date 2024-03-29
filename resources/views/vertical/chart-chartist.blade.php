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
                                        <img src="{{asset('assets/images/users/avatar-2.jpg')}}" alt="img" class="rounded-circle img-fluid">
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
                                        <img src="{{asset('assets/images/users/avatar-3.jpg')}}" alt="img" class="rounded-circle img-fluid">
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
                                        <img src="{{asset('assets/images/users/avatar-4.jpg')}}" alt="img" class="rounded-circle img-fluid">
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
                                <img src="{{asset('assets/images/users/avatar-1.jpg')}}" alt="user" class="rounded-circle">
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
                                <a href="index')}}" class="waves-effect"><span class="badge badge-pill badge-primary float-right">1</span><i class="zmdi zmdi-view-dashboard"></i><span> Dashboard </span> </a>
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
                                    <li><a href="widgets-tiles')}}">Tile Box</a></li>
                                    <li><a href="widgets-charts')}}">Chart Widgets</a></li>
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
                                    <h4 class="page-title float-left">Chartist charts</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Uplon</a></li>
                                        <li class="breadcrumb-item"><a href="#">Charts</a></li>
                                        <li class="breadcrumb-item active">Chartist charts</li>
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">

                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <h4 class="header-title m-t-0">Advanced Smil Animations</h4>
                                            <p class="text-muted font-13 m-b-30">
                                                Chartist provides a simple API to animate the elements on the Chart using
                                                SMIL. Usually you can achieve most animation with CSS3 animations but
                                                in some cases you'd like to animate SVG properties that are not available in CSS.
                                            </p>

                                            <div class="p-20">
                                                <div id="smil-animations" class="ct-chart ct-golden-section"></div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-6">
                                            <h4 class="header-title m-t-0">Simple line chart</h4>
                                            <p class="text-muted font-13 m-b-30">
                                                An example of a simple line chart with three series. You can edit this example in realtime.
                                            </p>

                                            <div class="p-20">
                                                <div id="simple-line-chart" class="ct-chart ct-golden-section"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->

                                    <div class="row m-t-50">
                                        <div class="col-sm-6 m-t-20">
                                            <h4 class="header-title m-t-0">Line Scatter Diagram</h4>
                                            <p class="text-muted font-13 m-b-30">
                                                This advanced example uses a line chart to draw a scatter diagram. The
                                                data object is created with a functional style random mechanism.
                                            </p>

                                            <div class="p-20">
                                                <div id="scatter-diagram" class="ct-chart ct-golden-section"></div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 m-t-20">
                                            <h4 class="header-title m-t-0">Line chart with tooltips</h4>
                                            <p class="text-muted font-13 m-b-30">
                                                An example of a simple line chart with two series. You can edit this
                                                example in realtime.
                                            </p>

                                            <div class="p-20">
                                                <div id="line-chart-tooltips" class="ct-chart ct-golden-section"></div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end row -->


                                    <div class="row m-t-50">

                                        <div class="col-sm-6 m-t-20">
                                            <h4 class="header-title m-t-0">Line chart with area</h4>
                                            <p class="text-muted font-13 m-b-30">
                                                This chart uses the showArea option to draw line, dots but also an area
                                                shape. Use the low option to specify a fixed lower bound that will make
                                                the area expand.
                                            </p>

                                            <div class="p-20">
                                                <div id="chart-with-area" class="ct-chart ct-golden-section"></div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 m-t-20">
                                            <h4 class="header-title m-t-0">Bi-polar Line chart with area only</h4>
                                            <p class="text-muted font-13 m-b-30">
                                                You can also only draw the area shapes of the line chart. Area shapes
                                                will always be constructed around their areaBase (that can be configured
                                                in the options) which also allows you to draw nice bi-polar areas.
                                            </p>

                                            <div class="p-20">
                                                <div id="bi-polar-line" class="ct-chart ct-golden-section"></div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end row -->

                                    <div class="row m-t-50">

                                        <div class="col-sm-6 m-t-20">
                                            <h4 class="header-title m-t-0">SVG Path animation</h4>
                                            <p class="text-muted font-13 m-b-30">
                                                Path animation is made easy with the SVG Path API. The API allows you to
                                                modify complex SVG paths and transform them for different animation
                                                morphing states.
                                            </p>

                                            <div class="p-20">
                                                <div id="svg-animation" class="ct-chart ct-golden-section"></div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 m-t-20">
                                            <h4 class="header-title m-t-0">Line Interpolation / Smoothing</h4>
                                            <p class="text-muted font-13 m-b-30">
                                                By default Chartist uses a cardinal spline algorithm to smooth the lines.
                                                However, like all other things in Chartist, this can be customized easily!
                                            </p>

                                            <div class="p-20">
                                                <div id="line-smoothing" class="ct-chart ct-golden-section"></div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end row -->

                                    <div class="row m-t-50">

                                        <div class="col-sm-6 m-t-20">
                                            <h4 class="header-title m-t-0">Different configuration for different series</h4>
                                            <p class="text-muted font-13 m-b-30">
                                                By naming your series using the series object notation with a name property,
                                                you can enable the individual configuration of series specific settings.
                                            </p>

                                            <div class="p-20">
                                                <div id="different-series" class="ct-chart ct-golden-section"></div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 m-t-20">
                                            <h4 class="header-title m-t-0">SVG Animations chart</h4>
                                            <p class="text-muted font-13 m-b-30">
                                                This advanced example uses a line chart to draw a scatter diagram.
                                                The data object is created with a functional style random mechanism.
                                            </p>

                                            <div class="p-20">
                                                <div id="svg-dot-animation" class="ct-chart ct-golden-section"></div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end row -->


                                    <div class="row m-t-50">

                                        <div class="col-sm-6 m-t-20">
                                            <h4 class="header-title m-t-0">Bi-polar bar chart</h4>
                                            <p class="text-muted font-13 m-b-30">
                                                A bi-polar bar chart with a range limit set with low and high. There is
                                                also an interpolation function used to skip every odd grid line / label.
                                            </p>

                                            <div class="p-20">
                                                <div id="bi-polar-bar" class="ct-chart ct-golden-section"></div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 m-t-20">
                                            <h4 class="header-title m-t-0">Overlapping bars on mobile</h4>
                                            <p class="text-muted font-13 m-b-30">
                                                This example makes use of label interpolation and the seriesBarDistance
                                                property that allows you to make bars overlap over each other.
                                            </p>

                                            <div class="p-20">
                                                <div id="overlapping-bars" class="ct-chart ct-golden-section"></div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end row -->


                                    <div class="row m-t-50">

                                        <div class="col-sm-6 m-t-20">
                                            <h4 class="header-title m-t-0">Multi-line labels</h4>
                                            <p class="text-muted font-13 m-b-30">
                                                Chartist will figure out if your browser supports foreignObject and it
                                                will use them to create labels that are based on regular HTML text elements.
                                            </p>

                                            <div class="p-20">
                                                <div id="multi-line-chart" class="ct-chart ct-golden-section"></div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 m-t-20">
                                            <h4 class="header-title m-t-0">Stacked bar chart</h4>
                                            <p class="text-muted font-13 m-b-30">
                                                You can also set your bar chart to stack the series bars on top of each
                                                other easily by using the stackBars property in your configuration.
                                            </p>

                                            <div class="p-20">
                                                <div id="stacked-bar-chart" class="ct-chart ct-golden-section"></div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end row -->


                                    <div class="row m-t-50">

                                        <div class="col-sm-6 m-t-20">
                                            <h4 class="header-title m-t-0">Horizontal bar chart</h4>
                                            <p class="text-muted font-13 m-b-30">
                                                Guess what! Creating horizontal bar charts is as simple as it can get.
                                                There's no new chart type you need to learn, just passing an additional option is enough.
                                            </p>

                                            <div class="p-20">
                                                <div id="horizontal-bar-chart" class="ct-chart ct-golden-section"></div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 m-t-20">
                                            <h4 class="header-title m-t-0">Extreme responsive configuration</h4>
                                            <p class="text-muted font-13 m-b-30">
                                                As all settings of a chart can be customized with the responsive configuration
                                                override mechanism of Chartist, you can create a chart that adopts to every media condition!
                                            </p>

                                            <div class="p-20">
                                                <div id="extreme-chart" class="ct-chart ct-golden-section"></div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end row -->

                                    <div class="row m-t-50">

                                        <div class="col-sm-6 m-t-20">
                                            <h4 class="header-title m-t-0">Distributed series</h4>
                                            <p class="text-muted font-13 m-b-30">
                                                Sometime it's desired to have bar charts that show one bar per series
                                                distributed along the x-axis. If this option is enabled, you need to
                                                make sure that you pass a single series array to Chartist that contains the series values.
                                            </p>

                                            <div class="p-20">
                                                <div id="distributed-series" class="ct-chart ct-golden-section"></div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 m-t-20">
                                            <h4 class="header-title m-t-0">Label placement</h4>
                                            <p class="text-muted font-13 m-b-30">
                                                You can change the position of the labels on line and bar charts easily
                                                by using the position option inside of the axis configuration.
                                            </p>

                                            <div class="p-20">
                                                <div id="label-placement-chart" class="ct-chart ct-golden-section"></div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end row -->


                                    <div class="row m-t-50">

                                        <div class="col-sm-6 m-t-20">
                                            <h4 class="header-title m-t-0">Animating a Donut with Svg.animate</h4>
                                            <p class="text-muted font-13 m-b-30">
                                                Although it'd be also possible to achieve this animation with CSS, with
                                                some minor suboptimal things, here's an example of how to animate donut
                                                charts using Chartist.Svg.animate and SMIL.
                                            </p>

                                            <div class="p-20">
                                                <div id="animating-donut" class="ct-chart ct-golden-section"></div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 m-t-20">
                                            <h4 class="header-title m-t-0">Simple pie chart</h4>
                                            <p class="text-muted font-13 m-b-30">
                                                A very simple pie chart with label interpolation to show percentage instead
                                                of the actual data series value.
                                            </p>

                                            <div class="p-20">
                                                <div id="simple-pie" class="ct-chart ct-golden-section simple-pie-chart-chartist"></div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end row -->


                                    <div class="row m-t-50">

                                        <div class="col-sm-6 m-t-20">
                                            <h4 class="header-title m-t-0">Pie chart with custom labels</h4>
                                            <p class="text-muted font-13 m-b-30">
                                                This pie chart is configured with custom labels specified in the data object.
                                                On desktop we use the labelOffset property to offset the labels from the center.
                                            </p>

                                            <div class="p-20">
                                                <div id="pie-chart" class="ct-chart ct-golden-section"></div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 m-t-20">
                                            <h4 class="header-title m-t-0">Gauge chart</h4>
                                            <p class="text-muted font-13 m-b-30">
                                                This pie chart uses donut, startAngle and total to draw a gauge chart.
                                            </p>

                                            <div class="p-20">
                                                <div id="gauge-chart" class="ct-chart ct-golden-section"></div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end row -->

                                </div>
                            </div><!-- end col-->

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

        <!--Chartist Chart-->
        <script src="{{asset('plugins/chartist/dist/chartist.min.js')}}"></script>
        <script src="{{asset('plugins/chartist/dist/chartist-plugin-tooltip.min.js')}}"></script>
        <script src="assets/pages/jquery.chartist.init.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets/js/jquery.core.js')}}"></script>
        <script src="{{asset('assets/js/jquery.app.js')}}"></script>

    </body>
</html>