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
                                    <h4 class="page-title float-left">Typography</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Uplon</a></li>
                                        <li class="breadcrumb-item"><a href="#">UI Kit</a></li>
                                        <li class="breadcrumb-item active">Typography</li>
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
                                        <div class="col-12">
                                            <h4 class="m-t-0 header-title">Headings</h4>
                                            <p class="text-muted m-b-30 font-13">
                                                All HTML headings, <code class="highlighter-rouge">&lt;h1&gt;</code> through
                                                <code>&lt;h6&gt;</code>, are available. <code>.h1</code> through <code>.h6</code>
                                                classes are also available, for when you want to match the font styling of a heading
                                                but still want your text to be displayed inline.
                                            </p>

                                            <h1>This is a Heading 1</h1>
                                            <p class="text-muted">Suspendisse vel quam malesuada, aliquet sem sit
                                                amet, fringilla elit. Morbi
                                                tempor tincidunt tempor. Etiam id turpis viverra, vulputate sapien
                                                nec,
                                                varius sem. Curabitur ullamcorper fringilla eleifend. In ut eros
                                                hendrerit
                                                est consequat posuere et at velit.</p>

                                            <div class="clearfix"></div>

                                            <h2>This is a Heading 2</h2>
                                            <p class="text-muted">In nec rhoncus eros. Vestibulum eu mattis nisl.
                                                Quisque viverra viverra magna
                                                nec pulvinar. Maecenas pellentesque porta augue, consectetur
                                                facilisis diam
                                                porttitor sed. Suspendisse tempor est sodales augue rutrum
                                                tincidunt.
                                                Quisque a malesuada purus.</p>

                                            <div class="clearfix"></div>

                                            <h3>This is a Heading 3</h3>
                                            <p class="text-muted">Vestibulum auctor tincidunt semper. Phasellus ut
                                                vulputate lacus. Suspendisse
                                                ultricies mi eros, sit amet tempor nulla varius sed. Proin nisl
                                                nisi,
                                                feugiat quis bibendum vitae, dapibus in tellus.</p>

                                            <div class="clearfix"></div>

                                            <h4>This is a Heading 4</h4>
                                            <p class="text-muted">Nulla et mattis nunc. Curabitur scelerisque
                                                commodo condimentum. Mauris
                                                blandit, velit a consectetur egestas, diam arcu fermentum justo,
                                                eget
                                                ultrices arcu eros vel erat.</p>

                                            <div class="clearfix"></div>

                                            <h5>This is a Heading 5</h5>
                                            <p class="text-muted">Quisque nec turpis at urna dictum luctus.
                                                Suspendisse convallis dignissim
                                                eros at volutpat. In egestas mattis dui. Aliquam mattis dictum
                                                aliquet.
                                                Nulla sapien mauris, eleifend et sem ac, commodo dapibus odio.
                                                Vivamus
                                                pretium nec odio cursus elementum. Suspendisse molestie ullamcorper
                                                ornare.</p>

                                            <div class="clearfix"></div>

                                            <h6>This is a Heading 6</h6>
                                            <p class="text-muted">Donec ultricies, lacus id tempor condimentum, orci
                                                leo faucibus sem, a
                                                molestie libero lectus ac justo. ultricies mi eros, sit amet tempor
                                                nulla
                                                varius sed. Proin nisl nisi, feugiat quis bibendum vitae, dapibus in
                                                tellus.</p>
                                        </div>

                                    </div>


                                    <div class="row m-t-50">
                                        <div class="col-12">
                                            <h4 class="m-t-0 header-title">Display headings</h4>
                                            <p class="text-muted m-b-15 font-13">
                                                Traditional heading elements are designed to work best in the meat of your page content.
                                                When you need a heading to stand out, consider using a <strong>display heading</strong>—a
                                                larger, slightly more opinionated heading style.
                                            </p>

                                            <h1 class="display-1">Display 1</h1>
                                            <h1 class="display-2">Display 2</h1>
                                            <h1 class="display-3">Display 3</h1>
                                            <h1 class="display-4">Display 4</h1>
                                        </div>

                                    </div>


                                    <div class="row m-t-50">
                                        <div class="col-sm-6 m-t-20">
                                            <h4 class="m-t-0 header-title">Inline text elements</h4>
                                            <p class="text-muted m-b-30 font-13">
                                                Your awesome text goes here.
                                            </p>

                                            <p class="lead m-t-0">
                                                Your title goes here
                                            </p>

                                            You can use the mark tag to
                                            <mark>
                                                highlight</mark> text.

                                            <br><br>

                                            <del>This line of text is meant to be treated as deleted text.</del>

                                            <br><br>

                                            <ins>This line of text is meant to be treated as an addition to the document.</ins>

                                            <br><br>

                                            <strong>rendered as bold text</strong>

                                            <br><br>

                                            <em>rendered as italicized text</em>
                                        </div>

                                        <div class="col-sm-6 m-t-20">
                                            <h4 class="m-t-0 header-title">Contextual Text Colors</h4>
                                            <p class="text-muted m-b-30 font-13">
                                                Your awesome text goes here.
                                            </p>

                                            <p class="text-custom">
                                                Etiam porta sem malesuada magna mollis euismod.
                                            </p>
                                            <p class="text-pink">
                                                Donec ullamcorper nulla non metus auctor fringilla.
                                            </p>
                                            <p class="text-muted">
                                                Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.
                                            </p>
                                            <p class="text-primary">
                                                Nullam id dolor id nibh ultricies vehicula ut id elit.
                                            </p>
                                            <p class="text-success">
                                                Duis mollis, est non commodo luctus, nisi erat porttitor ligula.
                                            </p>
                                            <p class="text-info">
                                                Maecenas sed diam eget risus varius blandit sit amet non magna.
                                            </p>
                                            <p class="text-warning">
                                                Etiam porta sem malesuada magna mollis euismod.
                                            </p>
                                            <p class="text-danger">
                                                Donec ullamcorper nulla non metus auctor fringilla.
                                            </p>
                                            <p class="text-dark">
                                                Nullam id dolor id nibh ultricies vehicula ut id elit.
                                            </p>
                                            <p class="text-purple m-b-0">
                                                Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.
                                            </p>

                                        </div>

                                    </div>
                                    <!-- end row -->


                                    <div class="row m-t-50">
                                        <div class="col-sm-4 m-t-20">
                                            <h4 class="m-t-0 header-title">Unordered</h4>
                                            <p class="text-muted m-b-20 font-13">
                                                A list of items in which the order does not explicitly matter.
                                            </p>

                                            <ul>
                                                <li>
                                                    Lorem ipsum dolor sit amet
                                                </li>
                                                <li>
                                                    Consectetur adipiscing elit
                                                </li>
                                                <li>
                                                    Integer molestie lorem at massa
                                                </li>
                                                <li>
                                                    Facilisis in pretium nisl aliquet
                                                </li>
                                                <li>
                                                    Nulla volutpat aliquam velit
                                                    <ul>
                                                        <li>
                                                            Phasellus iaculis neque
                                                        </li>
                                                        <li>
                                                            Purus sodales ultricies
                                                        </li>
                                                        <li>
                                                            Vestibulum laoreet porttitor sem
                                                        </li>
                                                        <li>
                                                            Ac tristique libero volutpat at
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    Faucibus porta lacus fringilla vel
                                                </li>
                                                <li>
                                                    Aenean sit amet erat nunc
                                                </li>
                                                <li>
                                                    Eget porttitor lorem
                                                </li>
                                            </ul>

                                        </div>

                                        <div class="col-sm-4 m-t-20">
                                            <h4 class="m-t-0 header-title">Ordered</h4>
                                            <p class="text-muted m-b-20 font-13">
                                                A list of items in which the order does explicitly matter.
                                            </p>

                                            <ol>
                                                <li>
                                                    Lorem ipsum dolor sit amet
                                                </li>
                                                <li>
                                                    Consectetur adipiscing elit
                                                </li>
                                                <li>
                                                    Integer molestie lorem at massa
                                                </li>
                                                <li>
                                                    Facilisis in pretium nisl aliquet
                                                </li>
                                                <li>
                                                    Nulla volutpat aliquam velit
                                                    <ol>
                                                        <li>
                                                            Phasellus iaculis neque
                                                        </li>
                                                        <li>
                                                            Purus sodales ultricies
                                                        </li>
                                                        <li>
                                                            Vestibulum laoreet porttitor sem
                                                        </li>
                                                        <li>
                                                            Ac tristique libero volutpat at
                                                        </li>
                                                    </ol>
                                                </li>
                                                <li>
                                                    Faucibus porta lacus fringilla vel
                                                </li>
                                                <li>
                                                    Aenean sit amet erat nunc
                                                </li>
                                                <li>
                                                    Eget porttitor lorem
                                                </li>
                                            </ol>
                                        </div>

                                        <div class="col-sm-4 m-t-20">
                                            <h4 class="m-t-0 header-title">Unstyled</h4>
                                            <p class="text-muted m-b-20 font-13">
                                                <strong>This only applies to immediate children
                                                    list items</strong>, meaning you will need to add the class for any nested lists as well.
                                            </p>

                                            <ul class="list-unstyled">
                                                <li>
                                                    Lorem ipsum dolor sit amet
                                                </li>
                                                <li>
                                                    Integer molestie lorem at massa
                                                    <ul>
                                                        <li>
                                                            Phasellus iaculis neque
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    Faucibus porta lacus fringilla vel
                                                </li>
                                                <li>
                                                    Eget porttitor lorem
                                                </li>
                                            </ul>

                                            <h5>Inline</h5>
                                            <p class="text-muted m-b-15 font-13">
                                                Place all list items on a single line with <code>
                                                display: inline-block;</code>
                                                and some light padding.
                                            </p>

                                            <ul class="list-inline m-b-0">
                                                <li class="list-inline-item">
                                                    Lorem ipsum
                                                </li>
                                                <li class="list-inline-item">
                                                    Phasellus iaculis
                                                </li>
                                                <li class="list-inline-item">
                                                    Nulla volutpat
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                    <!-- end row -->


                                    <div class="row m-t-50">
                                        <div class="col-sm-6 m-t-20">
                                            <h4 class="m-t-0 header-title">Blockquotes</h4>
                                            <p class="text-muted m-b-30 font-13">
                                                Your awesome text goes here.
                                            </p>

                                            <blockquote class="blockquote">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                              </blockquote>

                                            <p class="text-muted m-b-15 m-t-20">
                                                Use text utilities as needed to change the alignment of your blockquote.
                                            </p>

                                            <blockquote class="blockquote border-0 text-center">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                            </blockquote>

                                            <blockquote class="blockquote blockquote-reverse text-right">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                            </blockquote>
                                        </div>

                                    </div>
                                    <!-- end row -->

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

        <!-- App js -->
        <script src="{{asset('assets/js/jquery.core.js')}}"></script>
        <script src="{{asset('assets/js/jquery.app.js')}}"></script>

    </body>
</html>