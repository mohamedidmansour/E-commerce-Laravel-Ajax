<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>COZA Store</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/admin/img/favicon.ico')}}">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/admin/css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/admin/css/font-awesome.min.css')}}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/admin/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/owl.transitions.css')}}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/admin/css/animate.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/admin/css/normalize.css')}}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/admin/css/meanmenu.min.css')}}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/admin/css/main.css')}}">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/admin/css/morrisjs/morris.css')}}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/admin/css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/admin/css/metisMenu/metisMenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/metisMenu/metisMenu-vertical.css')}}">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/admin/css/calendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/calendar/fullcalendar.print.min.css')}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/admin/style.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/admin/css/responsive.css')}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{asset('assets/admin/js/vendor/modernizr-2.8.3.min.js')}}"></script>

    <!-- cropper CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/admin/css/cropper/cropper.min.css')}}">

</head>
@if(\Illuminate\Support\Facades\Session::has("id_admin") && \Illuminate\Support\Facades\Session::has("type_admin"))

@else
    <script>window.location = "/admin/login";</script>
@endif
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <br>
            <br>
            <a href="#"><img class="main-logo" src="{{asset('assets/client/images/icons/logo-01.png')}}" alt=""/></a>
            <br>
            <br>
            <strong><img src="{{asset('assets/admin/img/logo/logosn.png')}}" alt=""/></strong>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li class="active">
                        <a class="has-arrow" href="#">
                            <!-- <i class="fa big-icon fa-home icon-wrap"></i> -->
                            <span class="mini-click-non">Gestion Produit</span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="true">
                            <li><a title="Dashboard v.1" href="{{asset('product/list')}}"><i
                                            class="fa fa-bullseye sub-icon-mg" aria-hidden="true"></i> <span
                                            class="mini-sub-pro">List Produit</span></a></li>
                            <li><a title="Dashboard v.2" href="{{asset('product/create')}}"><i
                                            class="fa fa-circle-o sub-icon-mg" aria-hidden="true"></i> <span
                                            class="mini-sub-pro"></span>Ajouter Produit</a></li>
                            <li><a title="Dashboard v.3" href="{{asset('all_info')}}"><i class="fa fa-cube sub-icon-mg"
                                                                                         aria-hidden="true"></i> <span
                                            class="mini-sub-pro">Les Informations</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="index.html">
                            <!-- <i class="fa fa-bullseye sub-icon-mg icon-wrap"></i> -->
                            <span class="mini-click-non">Gestion Client</span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="true">
                            <li><a title="Dashboard v.1" href="{{asset('admin/listclient')}}"><i
                                            class="fa fa-bullseye sub-icon-mg" aria-hidden="true"></i> <span
                                            class="mini-sub-pro">List Client</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="index.html">
                            <!-- <i class="fa big-icon fa-home icon-wrap"></i> -->
                            <span class="mini-click-non">Gestion Commande</span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="true">
                            <li><a title="Dashboard v.1" href="index.html"><i class="fa fa-bullseye sub-icon-mg"
                                                                              aria-hidden="true"></i> <span
                                            class="mini-sub-pro">List Cmd


                                    </span></a></li>
                        </ul>
                    </li>
                    @if(session()->get('type_admin')== "sup")
                        <li>
                            <a class="has-arrow" href="{{asset('shop/create/val')}}">
                                <!-- <i class="fa big-icon fa-home icon-wrap"></i> -->
                                <span class="mini-click-non">Gestion Admin</span>
                            </a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Dashboard v.1" href="{{asset('admin/list')}}"><i
                                                class="fa fa-bullseye sub-icon-mg" aria-hidden="true"></i> <span
                                                class="mini-sub-pro">List Admin</span></a></li>
                                <li><a title="Dashboard v.2" href="{{asset('admin/create')}}"><i
                                                class="fa fa-circle-o sub-icon-mg" aria-hidden="true"></i> <span
                                                class="mini-sub-pro"></span>Ajouter Admin</a></li>
                            </ul>
                        </li>
                        @else
                        <li>googogo</li>
                    @endif
                </ul>

            </nav>
        </div>
    </nav>
</div>
<!-- Start Welcome area -->
<div class="all-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="logo-pro">
                    <a href="index.html"><img class="main-logo" src="{{asset('assets/admin/img/logo/logo.png')}}"
                                              alt=""/></a>
                </div>
            </div>
        </div>
    </div>
    <div class="header-advance-area">
        <div class="header-top-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="header-top-wraper">
                            <div class="row">
                                <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                    <div class="menu-switcher-pro">
                                        <button type="button" id="sidebarCollapse"
                                                class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                            <i class="fa fa-bars"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                    <div class="header-top-menu tabl-d-n">
                                        <ul class="nav navbar-nav mai-top-nav">
                                            <li class="nav-item"><a href="#" class="nav-link">Home</a>
                                            </li>
                                            <li class="nav-item"><a href="#" class="nav-link">About</a>
                                            </li>
                                            <li class="nav-item"><a href="#" class="nav-link">Services</a>
                                            </li>
                                            <li class="nav-item"><a href="#" class="nav-link">Support</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                    <div class="header-right-info">
                                        <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                            <li class="nav-item dropdown">
                                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                                                   class="nav-link dropdown-toggle"><i
                                                            class="fa fa-envelope-o adminpro-chat-pro"
                                                            aria-hidden="true"></i><span
                                                            class="indicator-ms"></span></a>
                                                <div role="menu"
                                                     class="author-message-top dropdown-menu animated zoomIn">
                                                    <div class="message-single-top">
                                                        <h1>Message</h1>
                                                    </div>
                                                    <ul class="message-menu">
                                                        <li>
                                                            <a href="#">
                                                                <div class="message-img">
                                                                    <img src="{{asset('assets/admin/img/contact/1.jpg')}}"
                                                                         alt="">
                                                                </div>
                                                                <div class="message-content">
                                                                    <span class="message-date">16 Sept</span>
                                                                    <h2></h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="message-view">
                                                        <a href="#">View All Messages</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item"><a href="#" data-toggle="dropdown" role="button"
                                                                    aria-expanded="false"
                                                                    class="nav-link dropdown-toggle"><i
                                                            class="fa fa-bell-o" aria-hidden="true"></i><span
                                                            class="indicator-nt"></span></a>
                                                <div role="menu"
                                                     class="notification-author dropdown-menu animated zoomIn">
                                                    <div class="notification-single-top">
                                                        <h1>Notifications</h1>
                                                    </div>

                                                    <div class="notification-view">
                                                        <a href="#">View All Notification</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                                                   class="nav-link dropdown-toggle">
                                                    <i class="fa fa-user adminpro-user-rounded header-riht-inf"
                                                       aria-hidden="true"></i>
                                                    <span class="admin-name"></span>
                                                    <i class="fa fa-angle-down adminpro-icon adminpro-down-arrow"></i>
                                                </a>
                                                <ul role="menu"
                                                    class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                    <li><a href="register.html"><span
                                                                    class="fa fa-home author-log-ic"></span>Register</a>
                                                    </li>
                                                    <li><a href="#"><span class="fa fa-user author-log-ic"></span>My
                                                            Profile</a>
                                                    </li>
                                                    <li><a href="lock.html"><span
                                                                    class="fa fa-diamond author-log-ic"></span> Lock</a>
                                                    </li>
                                                    <li><a href="#"><span class="fa fa-cog author-log-ic"></span>Settings</a>
                                                    </li>

                                                    <li>
                                                        @if(\Illuminate\Support\Facades\Session::has("id_admin"))
                                                            <a href="{{url('admin/deconnexion')}}">
                                                                @endif
                                                                <span class="fa fa-lock author-log-ic"></span>Log
                                                                Out</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown"
                                                                                     role="button" aria-expanded="false"
                                                                                     class="nav-link dropdown-toggle"><i
                                                            class="fa fa-tasks"></i></a>

                                                <div role="menu"
                                                     class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated zoomIn">
                                                    <ul class="nav nav-tabs custon-set-tab">
                                                        <li class="active"><a data-toggle="tab" href="#Notes">News</a>
                                                        </li>
                                                        <li><a data-toggle="tab" href="#Projects">Activity</a>
                                                        </li>
                                                        <li><a data-toggle="tab" href="#Settings">Settings</a>
                                                        </li>
                                                    </ul>

                                                    <div class="tab-content custom-bdr-nt">
                                                        <div id="Notes" class="tab-pane fade in active">
                                                            <div class="notes-area-wrap">
                                                                <div class="note-heading-indicate">
                                                                    <h2><i class="fa fa-comments-o"></i> Latest News
                                                                    </h2>
                                                                    <p>You have 10 New News.</p>
                                                                </div>
                                                                <div class="notes-list-area notes-menu-scrollbar">
                                                                    <ul class="notes-menu-list">
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="{{asset('assets/admin/img/contact/4.jpg')}}"
                                                                                             alt=""/>
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem
                                                                                            Ipsum is that it has a
                                                                                            more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="Projects" class="tab-pane fade">
                                                            <div class="projects-settings-wrap">
                                                                <div class="note-heading-indicate">
                                                                    <h2><i class="fa fa-cube"></i> Recent Activity</h2>
                                                                    <p> You have 20 Recent Activity.</p>
                                                                </div>
                                                                <div class="project-st-list-area project-st-menu-scrollbar">
                                                                    <ul class="projects-st-menu-list">
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="project-list-flow">
                                                                                    <div class="projects-st-heading">
                                                                                        <h2>New User Registered</h2>
                                                                                        <p> The point of using Lorem
                                                                                            Ipsum is that it has a more
                                                                                            or less normal.</p>
                                                                                        <span class="project-st-time">1 hours ago</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="Settings" class="tab-pane fade">
                                                            <div class="setting-panel-area">
                                                                <div class="note-heading-indicate">
                                                                    <h2><i class="fa fa-gears"></i> Settings Panel</h2>
                                                                    <p> You have 20 Settings. 5 not completed.</p>
                                                                </div>
                                                                <ul class="setting-panel-list">
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Show notifications</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox"
                                                                                               name="collapsemenu"
                                                                                               class="onoffswitch-checkbox"
                                                                                               id="example">
                                                                                        <label class="onoffswitch-label"
                                                                                               for="example">
                                                                                            <span class="onoffswitch-inner"></span>
                                                                                            <span class="onoffswitch-switch"></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Disable Chat</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox"
                                                                                               name="collapsemenu"
                                                                                               class="onoffswitch-checkbox"
                                                                                               id="example3">
                                                                                        <label class="onoffswitch-label"
                                                                                               for="example3">
                                                                                            <span class="onoffswitch-inner"></span>
                                                                                            <span class="onoffswitch-switch"></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>

                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul class="mobile-menu-nav">
                                    <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span
                                                    class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                        <ul class="collapse dropdown-header-top">
                                            <li><a href="index.html">Dashboard v.1</a></li>
                                            <li><a href="index-1.html">Dashboard v.2</a></li>
                                            <li><a href="index-3.html">Dashboard v.3</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu end -->
        <div class="breadcome-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcome-list single-page-breadcome">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="breadcome-heading">
                                        <form role="search" class="" action="{{url('searchepartAdmin')}}" method="post">
                                            {{csrf_field()}}
                                            <input type="text" placeholder="Search..." class="form-control" required
                                                   name="sear">
                                            <button type="submit" name="rechrecheparadmin"
                                                    style="background-color: #cb331f;border: none;position: relative;left: 160px;top: -30px;">
                                                <i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <ul class="breadcome-menu">
                                        <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                        </li>
                                        <li><span class="bread-blod">List Product</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @yield("content")
    <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>Copyright &copy; 2018 Colorlib All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jquery
    ============================================ -->
<script src="{{asset('assets/admin/js/vendor/jquery-1.11.3.min.js')}}"></script>
<!-- bootstrap JS
    ============================================ -->
<script src="{{asset('assets/admin/js/bootstrap.min.js')}}"></script>
<!-- wow JS
    ============================================ -->
<script src="{{asset('assets/admin/js/wow.min.js')}}"></script>
<!-- price-slider JS
    ============================================ -->
<script src="{{asset('assets/admin/js/jquery-price-slider.js')}}"></script>
<!-- meanmenu JS
    ============================================ -->
<script src="{{asset('assets/admin/js/jquery.meanmenu.js')}}"></script>
<!-- owl.carousel JS
    ============================================ -->
<script src="{{asset('assets/admin/js/owl.carousel.min.js')}}"></script>
<!-- sticky JS
    ============================================ -->
<script src="{{asset('assets/admin/js/jquery.sticky.js')}}"></script>
<!-- scrollUp JS
    ============================================ -->
<script src="{{asset('assets/admin/js/jquery.scrollUp.min.js')}}"></script>
<!-- mCustomScrollbar JS
    ============================================ -->
<script src="{{asset('assets/admin/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('assets/admin/js/scrollbar/mCustomScrollbar-active.js')}}"></script>
<!-- metisMenu JS
    ============================================ -->
<script src="{{asset('assets/admin/js/metisMenu/metisMenu.min.js')}}"></script>
<script src="{{asset('assets/admin/js/metisMenu/metisMenu-active.js')}}"></script>
<!-- morrisjs JS
    ============================================ -->
<script src="{{asset('assets/admin/js/morrisjs/raphael-min.js')}}"></script>
<script src="{{asset('assets/admin/js/morrisjs/morris.js')}}"></script>
<script src="{{asset('assets/admin/js/morrisjs/morris-active.js')}}"></script>
<!-- morrisjs JS
    ============================================ -->
<script src="{{asset('assets/admin/js/sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('assets/admin/js/sparkline/jquery.charts-sparkline.js')}}"></script>
<!-- calendar JS
    ============================================ -->
<script src="{{asset('assets/admin/js/calendar/moment.min.js')}}"></script>
<script src="{{asset('assets/admin/js/calendar/fullcalendar.min.js')}}"></script>
<script src="{{asset('assets/admin/js/calendar/fullcalendar-active.js')}}"></script>
<!-- plugins JS
    ============================================ -->
<script src="{{asset('assets/admin/js/plugins.js')}}"></script>
<!-- main JS
    ============================================ -->
<script src="{{asset('assets/admin/js/main.js')}}"></script>

<!-- cropper JS
    ============================================ -->
<script src="{{asset('assets/admin/js/cropper/cropper.min.js')}}"></script>
<script src="{{asset('assets/admin/js/cropper/cropper-actice.js')}}"></script>

<!-- tab JS
    ============================================ -->
<script src="{{asset('assets/admin/js/tab.js')}}"></script>
</body>
</html>