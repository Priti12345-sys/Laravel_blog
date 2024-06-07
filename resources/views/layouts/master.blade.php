<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/assets/img/favicon.png">
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/css/now-ui-dashboard.css?v=1.0.1" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="/assets/css/custom.css" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper">
        <div class="sidebar" data-color="orange">
            <div class="logo">
                <a href="#" class="simple-text logo-mini">
                    CT
                </a>
                <a href="#" class="simple-text logo-normal">
                    Creative Tim
                </a>
            </div>
            
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute bg-primary fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="#">@yield('title')</a>
                    </div>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav">
                            <li class="nav-item {{ Request::is('home') ? 'active' : '' }}">
                                <a class="nav-link" href="/home">
                                    <i class="now-ui-icons design_app"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>
                            <li class="nav-item {{ Request::is('category') ? 'active' : '' }}">
                                <a class="nav-link" href="/category">
                                    <i class="now-ui-icons education_atom"></i>
                                    <p>Category</p>
                                </a>
                            </li>
                            <li class="nav-item {{ Request::is('blogpost') ? 'active' : '' }}">
                                <a class="nav-link" href="/blogpost">
                                    <i class="now-ui-icons location_map-big"></i>
                                    <p>Blog Post</p>
                                </a>
                            </li>
                            <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
                                <a class="nav-link" href="/about">
                                    <i class="now-ui-icons location_map-big"></i>
                                    <p>About Us</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/profile">
                                    <i class="now-ui-icons users_single-02"></i>
                                    <p>Profile</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <form id="logout-form" action="/logout" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="nav-link btn btn-link" style="background: none; border: none; cursor: pointer;">
                                        <i class="now-ui-icons media-1_button-power"></i>
                                        <p>Logout</p>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="panel-header panel-header-sm"></div>
            <div class="content">
                @yield('content')
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul>
                            <li>
                                <a href="https://www.creative-tim.com">Creative Tim</a>
                            </li>
                            <li>
                                <a href="http://presentation.creative-tim.com">About Us</a>
                            </li>
                            <li>
                                <a href="http://blog.creative-tim.com">Blog</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright">
                        &copy; <script>document.write(new Date().getFullYear())</script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>
<!-- Core JS Files -->
<script src="/assets/js/core/jquery.min.js"></script>
<script src="/assets/js/core/popper.min.js"></script>
<script src="/assets/js/core/bootstrap.min.js"></script>
<script src="/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!-- Google Maps Plugin -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="/assets/js/plugins/chartjs.min.js"></script>
<!-- Notifications Plugin -->
<script src="/assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="/assets/js/now-ui-dashboard.js?v=1.0.1"></script>
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="/assets/demo/demo.js"></script>
@yield('scripts')

</html>
