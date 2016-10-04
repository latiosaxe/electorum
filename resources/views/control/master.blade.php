<!doctype html>
<html lang="ES">
<head>
    <meta charset="UTF-8">
    <title>Electorum</title>

    <!-- Bootstrap -->
    <link href="assets/control/libs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/control/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/control/libs/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    {{--<link href="assets/control/libs/vendors/iCheck/skins/flat/green.css" rel="stylesheet">--}}
    <!-- Datatables -->
    <link href="assets/control/libs/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="assets/control/libs/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="assets/control/libs/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="assets/control/libs/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="assets/control/libs/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="assets/control/css/custom.min.css"/>
</head>
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentellela Alela!</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile">
                    <div class="profile_pic">
                        <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>Olegario</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="index.html">Dashboard</a></li>
                                    <li><a href="index2.html">Dashboard2</a></li>
                                    <li><a href="index3.html">Dashboard3</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout">
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
                                <img src="images/img.jpg" alt="">Olegario
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="javascript:;"> Perfil</a></li>
                                <li>
                                    <a href="javascript:;">
                                        {{--<span class="badge bg-red pull-right">50%</span>--}}
                                        <span>Ajustes</span>
                                    </a>
                                </li>
                                <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Salir</a></li>
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
                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="assets/control/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="assets/control/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="assets/control/libs/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="assets/control/libs/nprogress/nprogress.js"></script>
<!-- bootstrap-progressbar -->
<script src="assets/control/libs/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>


<script src="assets/control/js/custom.min.js"></script>

@yield('javascript')
</body>
</html>