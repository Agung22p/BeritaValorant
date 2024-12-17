<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        @stack('header')
    </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/skydash') }}/vendors/feather/feather.css">
    <link rel="stylesheet" href="{{ asset('assets/skydash') }}/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/skydash') }}/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/skydash') }}/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="{{ asset('assets/skydash') }}/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/skydash') }}/js/select.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome') }}/css/fontawesome.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome') }}/css/solid.css" rel="stylesheet">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/skydash') }}/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('assets/skydash') }}/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="index.html"><img
                        src="{{ asset('assets/skydash') }}/images/logo.svg" class="mr-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img
                        src="{{ asset('assets/skydash') }}/images/logo-mini.svg" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item nav-search d-none d-lg-block">
                        <div class="input-group">
                            <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                                <span class="input-group-text" id="search">
                                    <i class="icon-search"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now"
                                aria-label="search" aria-describedby="search">
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">

                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            {{-- <img src="{{ asset('assets/skydash') }}/images/faces/face28.jpg" alt="profile" /> --}}
                            <i class="ti-user text-primary"></i>&ensp; @stack('nama')
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">

                            <a class="dropdown-item" href="{{ route('auth.logout') }}">
                                <i class="ti-power-off text-primary"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="ti-settings"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close ti-close"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                    </div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>

            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    @if (session()->has('admin'))
                        <li class="nav-item {{ Route::is('admin.index') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.index') }}">
                                <i class="icon-grid menu-icon"></i>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </li>
                    @elseif (session()->has('kontributor'))
                        <li class="nav-item {{ Route::is('dashboard') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('dashboard') }}">
                                <i class="icon-grid menu-icon"></i>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </li>
                    @else
                        <li class="nav-item {{ Route::is('home') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('home') }}">
                                <i class="icon-grid menu-icon"></i>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </li>
                    @endif
                    <li class="nav-item {{ Route::is('caraousel') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('caraousel') }}">
                            <i class="icon-columns menu-icon"></i>
                            <span class="menu-title">Caraousel</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::is('kategori') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('kategori') }}">
                            <i class="icon-align-right menu-icon"></i>
                            <span class="menu-title">Kategori Konten</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::is('konten') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('konten') }}">
                            <i class="icon-book menu-icon"></i>
                            <span class="menu-title">Konten</span>
                        </a>
                    </li>
                    @if (session()->has('admin'))
                        <li class="nav-item {{ Route::is('admin.user') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.user') }}">
                                <i class="icon-head menu-icon"></i>
                                <span class="menu-title">User</span>
                            </a>
                        </li>
                        <li class="nav-item {{ Route::is('admin.config') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.config') }}">
                                <i class="icon-cog menu-icon"></i>
                                <span class="menu-title">Konfigurasi</span>
                            </a>
                        </li>
                    @endif
                    <li class="nav-item {{ Route::is('admin.galeri') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.galeri') }}">
                            <i class="icon-image menu-icon"></i>
                            <span class="menu-title">Galeri</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::is('admin.saran') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.saran') }}">
                            <i class="icon-mail menu-icon"></i>
                            <span class="menu-title">Saran</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.
                            Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin
                                template</a> from BootstrapDash. All rights reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made
                            with <i class="ti-heart text-danger ml-1"></i></span>
                    </div>
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by <a
                                href="https://www.themewagon.com/" target="_blank">Themewagon</a></span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{ asset('assets/skydash') }}/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('assets/skydash') }}/vendors/chart.js/Chart.min.js"></script>
    <script src="{{ asset('assets/skydash') }}/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="{{ asset('assets/skydash') }}/vendors/sweetalert/sweetalert.min.js"></script>
    <script src="{{ asset('assets/skydash') }}/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="{{ asset('assets/skydash') }}/js/dataTables.select.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets/skydash') }}/js/off-canvas.js"></script>
    <script src="{{ asset('assets/skydash') }}/js/hoverable-collapse.js"></script>
    <script src="{{ asset('assets/skydash') }}/js/template.js"></script>
    <script src="{{ asset('assets/skydash') }}/js/file-upload.js"></script>
    {{-- <script src="{{ asset('assets/skydash') }}/js/typeahead.js"></script> --}}
    <script src="{{ asset('assets/skydash') }}/js/select2.js"></script>
    <script src="{{ asset('assets/skydash') }}/js/settings.js"></script>
    <script src="{{ asset('assets/skydash') }}/js/todolist.js"></script>
    <script src="{{ asset('assets/skydash') }}/js/alerts.js"></script>
    <script src="{{ asset('assets/skydash') }}/js/modal-demo.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('assets/skydash') }}/js/dashboard.js"></script>
    <script src="{{ asset('assets/skydash') }}/js/Chart.roundedBarCharts.js"></script>
    <!-- End custom js for this page-->
    <script>
        $('#disappear').delay('slow').slideDown('slow').delay(10000).slideUp(600);
    </script>
</body>

</html>
