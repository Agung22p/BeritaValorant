<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        @stack('header')
    </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('assets/darkpan') }}/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/darkpan') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ asset('assets/darkpan') }}/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
        rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/darkpan') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/darkpan') }}/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{ asset('assets/darkpan') }}/img/user.jpg" alt=""
                            style="width: 40px; height: 40px;">
                        <div
                            class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                        </div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">
                            @stack('nama')
                        </h6>
                        <span>
                            @stack('level')
                        </span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    @if (session()->has('admin'))
                        <a href="{{ route('admin.index') }}"
                            class="nav-item nav-link {{ Route::is('admin.index') ? 'active' : '' }}"><i
                                class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    @elseif (session()->has('kontributor'))
                        <a href="{{ route('dashboard') }}"
                            class="nav-item nav-link {{ Route::is('dashboard') ? 'active' : '' }}"><i
                                class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    @else
                        <a href="{{ route('home') }}"
                            class="nav-item nav-link {{ Route::is('home') ? 'active' : '' }}"><i
                                class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    @endif
                    <a href="{{ route('caraousel') }}"
                        class="nav-item nav-link {{ Route::is('caraousel') ? 'active' : '' }}"><i
                            class="fa fa-th me-2"></i>Caraousel</a>
                    <a href="{{ route('kategori') }}"
                        class="nav-item nav-link {{ Route::is('kategori') ? 'active' : '' }}"><i
                            class="bi bi-grid me-2"></i>Kategori
                        Konten</a>
                    <a href="{{ route('konten') }}"
                        class="nav-item nav-link {{ Route::is('konten') ? 'active' : '' }}"><i
                            class="bi bi-table me-2"></i>Konten</a>
                    @if (session()->has('admin'))
                        <a href="{{ route('admin.user') }}"
                            class="nav-item nav-link {{ Route::is('admin.user') ? 'active' : '' }}"><i
                                class="fa fa-user me-2"></i>User</a>
                        <a href="{{ route('admin.config') }}"
                            class="nav-item nav-link {{ Route::is('admin.config') ? 'active' : '' }}"><i
                                class="bi bi-pencil-square me-2"></i>Konfigurasi</a>
                    @endif
                    <a href="{{ route('admin.galeri') }}"
                        class="nav-item nav-link {{ Route::is('admin.galeri') ? 'active' : '' }}"><i
                            class="bi bi-images me-2"></i>Galeri</a>
                    <a href="{{ route('admin.saran') }}"
                        class="nav-item nav-link {{ Route::is('admin.saran') ? 'active' : '' }}"><i
                            class="bi bi-chat-left-dots me-2"></i>Saran</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div
                            class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="{{ asset('assets/darkpan') }}/img/user.jpg"
                                        alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="{{ asset('assets/darkpan') }}/img/user.jpg"
                                        alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="{{ asset('assets/darkpan') }}/img/user.jpg"
                                        alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div
                            class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="{{ asset('assets/darkpan') }}/img/user.jpg"
                                alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">
                                @stack('nama')
                            </span>
                        </a>
                        <div
                            class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="{{ route('auth.logout') }}" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            @yield('content')


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            Designed By <a href="#">Agung</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/darkpan') }}/lib/chart/chart.min.js"></script>
    <script src="{{ asset('assets/darkpan') }}/lib/easing/easing.min.js"></script>
    <script src="{{ asset('assets/darkpan') }}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{ asset('assets/darkpan') }}/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{ asset('assets/darkpan') }}/lib/tempusdominus/js/moment.min.js"></script>
    <script src="{{ asset('assets/darkpan') }}/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="{{ asset('assets/darkpan') }}/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/darkpan') }}/js/main.js"></script>

    <script>
        $('#disappear').delay('slow').slideDown('slow').delay(10000).slideUp(600);
    </script>
</body>

</html>
