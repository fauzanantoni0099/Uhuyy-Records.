<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Theta is a bootstrap & laravel admin dashboard template">
    <meta name="keywords" content="admin, admin dashboard, admin panel, admin template, analytics, bootstrap 4, crm, laravel admin, responsive, sass support, ui kits">
    <meta name="author" content="Themesbox17">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Admin - UhuyyRecords.</title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="/img/core-img/dis6.jpg">
    <!-- Start css -->
    <!-- Switchery css -->
    <link href="/back/assets/plugins/switchery/switchery.min.css" rel="stylesheet">
    <!-- jvectormap css -->
    <link href="/back/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">
    <!-- Datepicker css -->
    <link href="/back/assets/plugins/datepicker/datepicker.min.css" rel="stylesheet" type="text/css">
    <link href="/back/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/back/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="/back/assets/css/flag-icon.min.css" rel="stylesheet" type="text/css">
    <link href="/back/assets/css/style.css" rel="stylesheet" type="text/css">
    <!-- End css -->
</head>
<body class="vertical-layout">
<!-- Start Infobar Notifications Sidebar -->
<div id="infobar-settings-sidebar" class="infobar-settings-sidebar">
    <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
        <h4>Settings</h4><a href="javascript:void(0)" id="infobar-settings-close" class="infobar-settings-close"><img src="/back/assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close"></a>
    </div>
    <div class="infobar-settings-sidebar-body">
        <div class="custom-layout-setting">
            <div class="row align-items-center pb-3">
                <div class="col-12">
                    <div class="account-box active">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <div class="account-box">
                                <img
                                    src="/back/assets/images/users/men.svg"
                                    class="img-fluid"
                                    alt="user"
                                />
                                <h5>{{ Auth::user()->name }}</h5>
                                <p>Logout</p>
                            </div>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="infobar-notifications-sidebar-overlay"></div>
<!-- End Infobar Notifications Sidebar -->
<!-- Start Containerbar -->
<div id="containerbar">
    <!-- Start Leftbar -->
    <div class="leftbar">
        <!-- Start Sidebar -->
        <div class="sidebar">
            <!-- Start Logobar -->
            <div class="logobar">
                <a href="{{'/home'}}" class="logo logo-large"><img src="/img/core-img/logow.png" class="img-fluid" alt="logo"></a>
                <a href="{{'/home'}}" class="logo logo-small"><img src="/img/core-img/logow.png" class="img-fluid" alt="logo"></a>
            </div>
            <!-- End Logobar -->
            <!-- Start Profilebar -->
            <div class="profilebar text-center">
                <img src="/img/core-img/uhuy.png" class="img-fluid" alt="profile" style="width: 150px">
                <div class="profilename">
                    <h5 class="text-white">{{\Illuminate\Support\Facades\Auth::user()->name}}</h5>
                </div>
            </div>
            <!-- End Profilebar -->
            <!-- Start Navigationbar -->
            <div class="navigationbar">
                <ul class="vertical-menu">
                    <li><a href="{{route('artist.index')}}">
                            <img src="/back/assets/images/svg-icon/dashboard.svg">
                            <span>Artists</span>
                        </a>
                    </li>
                    <li><a href="{{route('album.index')}}">
                            <img src="/back/assets/images/svg-icon/layouts.svg">
                            <span>Albums</span>
                        </a>
                    </li>
                    <li><a href="{{route('song.index')}}">
                            <img src="/back/assets/images/svg-icon/app.svg">
                            <span>Songs</span>
                        </a>
                    </li>
                    <li><a href="{{route('event.index')}}">
                            <img src="/back/assets/images/svg-icon/widgets.svg">
                            <span>Events</span>
                        </a>
                    </li>
                    <li><a href="{{route('testimonial.index')}}">
                            <img src="/back/assets/images/svg-icon/basic.svg">
                            <span>Testimonial</span>
                        </a>
                    </li>
                    <li><a href="{{route('message.index')}}">
                            <img src="/back/assets/images/svg-icon/email.svg">
                            <span>Message</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End Navigationbar -->
        </div>
        <!-- End Sidebar -->
    </div>
    <!-- End Leftbar -->
    <!-- Start Rightbar -->
    <div class="rightbar">
        <!-- Start Topbar Mobile -->
        <div class="topbar-mobile">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="mobile-logobar">
                        <a href="index.html" class="mobile-logo"><img src="/back/assets/images/logo.svg" class="img-fluid" alt="logo"></a>
                    </div>
                    <div class="mobile-togglebar">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <div class="topbar-toggle-icon">
                                    <a class="topbar-toggle-hamburger" href="javascript:void();">
                                        <img src="/back/assets/images/svg-icon/horizontal.svg" class="img-fluid menu-hamburger-horizontal" alt="horizontal">
                                        <img src="/back/assets/images/svg-icon/verticle.svg" class="img-fluid menu-hamburger-vertical" alt="verticle">
                                    </a>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="menubar">
                                    <a class="menu-hamburger" href="javascript:void();">
                                        <img src="/back/assets/images/svg-icon/collapse.svg" class="img-fluid menu-hamburger-collapse" alt="collapse">
                                        <img src="/back/assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close">
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Topbar -->
        <div class="topbar">
            <!-- Start row -->
            <div class="row align-items-center">
                <!-- Start col -->
                <div class="col-md-12 align-self-center">
                    <div class="togglebar">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <div class="menubar">
                                    <a class="menu-hamburger" href="javascript:void();">
                                        <img src="/back/assets/images/svg-icon/collapse.svg" class="img-fluid menu-hamburger-collapse" alt="collapse">
                                        <img src="/back/assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close">
                                    </a>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="searchbar">
                                    <form>
                                        <div class="input-group">
                                            <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                                            <div class="input-group-append">
                                                <button class="btn" type="submit" id="button-addon2"><img src="/back/assets/images/svg-icon/search.svg" class="img-fluid" alt="search"></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="infobar">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <div class="settingbar">
                                    <a href="javascript:void(0)" id="infobar-settings-open" class="infobar-icon">
                                        <img src="/back/assets/images/svg-icon/logout.svg" class="img-fluid" alt="settings">
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End col -->
            </div>
            <!-- End row -->
        </div>
        <!-- End Topbar -->
        <!-- Start Contentbar -->
        @include('sweetalert::alert')
       @yield('content')
        <!-- End Contentbar -->
        <!-- Start Footerbar -->
        <div class="footerbar">
            <footer class="footer">
                <p class="mb-0">© 2024   UhuyyRecords - Taffy Developer.</p>
            </footer>
        </div>
        <!-- End Footerbar -->
    </div>
    <!-- End Rightbar -->
</div>
<!-- End Containerbar -->
<!-- Start js -->
<script src="/back/assets/js/jquery.min.js"></script>
<script src="/back/assets/js/popper.min.js"></script>
<script src="/back/assets/js/bootstrap.min.js"></script>
<script src="/back/assets/js/modernizr.min.js"></script>
<script src="/back/assets/js/detect.js"></script>
<script src="/back/assets/js/jquery.slimscroll.js"></script>
<script src="/back/assets/js/vertical-menu.js"></script>
<!-- Switchery js -->
<script src="/back/assets/plugins/switchery/switchery.min.js"></script>
<!-- Chart js -->
<script src="/back/assets/plugins/chart.js/chart.min.js"></script>
<script src="/back/assets/plugins/chart.js/chart-bundle.min.js"></script>
<!-- Piety Chart js -->
<script src="/back/assets/plugins/peity/jquery.peity.min.js"></script>
<!-- Vector Maps js -->
<script src="/back/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="/back/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- Custom Dashboard Social js -->
<script src="/back/assets/js/custom/custom-dashboard-social.js"></script>
<!-- Core js -->
<script src="/back/assets/js/core.js"></script>
<!-- End js -->
</body>
</html>
