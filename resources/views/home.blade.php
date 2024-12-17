<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @if (Route::is('home'))
        <title>{{ $config->judul_website }}</title>
    @else
        <title>@stack('judul')</title>
    @endif



    <link rel="shortcut icon" href="favicon.ico">

    <!-- Fonts START -->
    <link
        href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all"
        rel="stylesheet" type="text/css">
    <!-- Fonts END -->

    <!-- Global styles START -->
    <link href="{{ asset('assets/metronic') }}/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('assets/metronic') }}/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Global styles END -->

    <!-- Page level plugin styles START -->
    <link href="{{ asset('assets/metronic') }}/assets/pages/css/animate.css" rel="stylesheet">
    <link href="{{ asset('assets/metronic') }}/assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
    <link href="{{ asset('assets/metronic') }}/assets/plugins/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
    <!-- Page level plugin styles END -->

    <!-- Theme styles START -->
    <link href="{{ asset('assets/metronic') }}/assets/pages/css/components.css" rel="stylesheet">
    <link href="{{ asset('assets/metronic') }}/assets/pages/css/slider.css" rel="stylesheet">
    <link href="{{ asset('assets/metronic') }}/assets/corporate/css/style.css" rel="stylesheet">
    <link href="{{ asset('assets/metronic') }}/assets/pages/css/gallery.css" rel="stylesheet">
    <link href="{{ asset('assets/metronic') }}/assets/corporate/css/style-responsive.css" rel="stylesheet">
    <link href="{{ asset('assets/metronic') }}/assets/corporate/css/themes/red.css" rel="stylesheet">
    <link href="{{ asset('assets/metronic') }}/assets/corporate/css/custom.css" rel="stylesheet">
    <!-- Theme styles END -->
</head>
<!-- Head END -->

<!-- Body BEGIN -->

<body class="corporate">
    <!-- BEGIN STYLE CUSTOMIZER -->
    <div class="color-panel hidden-sm hidden">
        <div class="color-mode-icons icon-color"></div>
        <div class="color-mode-icons icon-color-close"></div>
        <div class="color-mode">
            <p>THEME COLOR</p>
            <ul class="inline">
                <li class="color-red current " data-style="red"></li>
                <li class="color-blue color-default" data-style="blue"></li>
                <li class="color-green" data-style="green"></li>
                <li class="color-orange" data-style="orange"></li>
                <li class="color-gray" data-style="gray"></li>
                <li class="color-turquoise" data-style="turquoise"></li>
            </ul>
        </div>
    </div>
    <!-- END BEGIN STYLE CUSTOMIZER -->

    <!-- BEGIN TOP BAR -->
    <div class="pre-header">
        <div class="container">
            <div class="row">
                <!-- BEGIN TOP BAR LEFT PART -->
                <div class="col-md-6 col-sm-6 additional-shop-info">
                    <ul class="list-unstyled list-inline">
                        <li><a href="{{ $config->no_wa }}"><i
                                    class="fa fa-phone"></i><span>{{ $config->no_wa }}</span></a></li>
                        <li><i class="fa fa-envelope-o"></i><span>{{ $config->email }}</span></li>
                    </ul>
                </div>
                <!-- END TOP BAR LEFT PART -->
                <!-- BEGIN TOP BAR MENU -->
                <div class="col-md-6 col-sm-6 additional-nav">
                    <ul class="list-unstyled list-inline pull-right">
                        <li><a href="{{ route('auth') }}">Log in</a></li>
                    </ul>
                </div>
                <!-- END TOP BAR MENU -->
            </div>
        </div>
    </div>
    <!-- END TOP BAR -->
    <!-- BEGIN HEADER -->
    <div class="header">
        <div class="container">
            <a class="site-logo" href="index.html"><img
                    src="{{ asset('assets/metronic') }}/assets/corporate/img/logos/valorant-logo.png" width="50"
                    alt="Metronic FrontEnd"></a>

            <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

            <!-- BEGIN NAVIGATION -->
            <div class="header-navigation pull-right font-transform-inherit">
                <ul>
                    <li class="{{ Route::is('home') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                            Kategori Konten
                        </a>

                        <ul class="dropdown-menu">
                            @foreach ($kategories as $kategori)
                                <li><a href="javascript:void(0)"
                                        onclick="filterKontenByKategori('{{ $kategori->id }}')">{{ $kategori->nama_kategori }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>


                    <li><a href="{{ route('home.galeri') }}">Gallery</a></li>

                    <!-- BEGIN TOP SEARCH -->
                    <li class="menu-search">
                        <span class="sep"></span>
                        <i class="fa fa-search search-btn"></i>
                        <div class="search-box">
                            <form action="{{ route('home') }}" method="GET">
                                <div class="input-group">
                                    <input type="text" placeholder="Search" name="search" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="submit">Search</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </li>
                    <!-- END TOP SEARCH -->
                </ul>
            </div>
            <!-- END NAVIGATION -->
        </div>
    </div>
    <!-- Header END -->
    @if (Route::is('home') && !request()->has('search'))

        <!-- BEGIN SLIDER -->
        <div class="page-slider margin-bottom-60">
            <div id="carousel-example-generic" class="carousel slide carousel-slider">

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    @foreach ($caraousels as $caraousel)
                        <div class="item carousel-item-{{ $loop->iteration }} {{ $loop->first ? 'active' : '' }}"
                            style="background: url('{{ asset('images/' . $caraousel->foto) }}'); background-size: cover; background-position: center center;">
                            {{-- <div class="container">
                                <div class="carousel-position-six text-uppercase text-center rounded-3">
                                    <h2 class="margin-bottom-20 animate-delay carousel-title-v6"
                                        style="background: hsla(0, 0%, 100%, 0.7); padding: 2rem; border-radius: 8px;"
                                        data-animation="animated fadeInDown">
                                        {{ $caraousel->judul }}
                                    </h2>
                                </div>
                            </div> --}}
                        </div>
                    @endforeach

                </div>

                <!-- Controls -->
                <a class="left carousel-control carousel-control-shop carousel-control-frontend"
                    href="#carousel-example-generic" role="button" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                </a>
                <a class="right carousel-control carousel-control-shop carousel-control-frontend"
                    href="#carousel-example-generic" role="button" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <!-- END SLIDER -->
    @endif


    <div class="main" id="main">
        <div class="container">
            @stack('crumb')
            <!-- BEGIN SIDEBAR & CONTENT -->
            <div class="row margin-bottom-40 margin-top-40" style="padding-top: 40px;">
                <!-- BEGIN CONTENT -->
                <div class="col-md-12 col-sm-12">
                    @if (Route::is('home'))
                        <h1>Halaman Konten</h1>
                    @else
                        <h1>@stack('header')</h1>
                    @endif
                    <div class="content-page">
                        <div class="row">
                            @yield('content')
                            @if (Route::is('home'))
                                <!-- BEGIN LEFT SIDEBAR -->
                                <div class="col-md-9 col-sm-9 blog-posts">
                                    @if ($kontens->count() != 0)
                                        @foreach ($kontens as $konten)
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4">
                                                    <img class="img-responsive" alt=""
                                                        src="{{ asset('images/' . $konten->foto) }}">
                                                </div>
                                                <div class="col-md-8 col-sm-8">
                                                    <h2><a
                                                            href="{{ route('home.detail', $konten->slug) }}">{{ $konten->judul }}</a>
                                                    </h2>
                                                    <ul class="blog-info">
                                                        <li><i class="fa fa-calendar"></i> {{ $konten->tanggal }}</li>
                                                        <li><i class="fa fa-user"></i> {{ $konten->username }}</li>
                                                        <li><i class="fa fa-tags"></i> {{ $konten->nama_kategori }}
                                                        </li>
                                                    </ul>
                                                    <p>{{ \Illuminate\Support\Str::limit($konten->keterangan, 50, $end = '...') }}
                                                    </p>
                                                    <a href="{{ route('home.detail', $konten->slug) }}"
                                                        class="more">Read
                                                        more <i class="icon-angle-right"></i></a>
                                                </div>
                                            </div>
                                            <hr class="blog-post-sep">
                                        @endforeach
                                        {{ $kontens->withQueryString()->links('pagination.default') }}
                                    @else
                                        Konten Tidak Tersedia
                                    @endif
                                </div>
                                <!-- END LEFT SIDEBAR -->
                            @endif

                            @if (!Route::is('home.galeri'))
                                <!-- BEGIN RIGHT SIDEBAR -->
                                <div class="col-md-3 col-sm-3 blog-sidebar">
                                    <!-- CATEGORIES START -->
                                    <h2 class="no-top-space">Kategori Konten</h2>
                                    <ul class="nav sidebar-categories margin-bottom-40">
                                        @foreach ($kategories as $kategori)
                                            @if (Route::is('home'))
                                                <li><a href="javascript:void(0)"
                                                        onclick="filterKontenByKategori('{{ $kategori->id }}')">{{ $kategori->nama_kategori }}</a>
                                                </li>
                                            @elseif (Route::is('home.detail'))
                                                <li><a href="{{ route('home') }}?kategori={{ $kategori->id }}"
                                                        onclick="filterKontenByKategori('{{ $kategori->id }}')">{{ $kategori->nama_kategori }}</a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                    <!-- CATEGORIES END -->

                                    <!-- BEGIN RECENT NEWS -->
                                    <h2>Konten Terbaru</h2>
                                    <div class="recent-news margin-bottom-10">
                                        @foreach ($recent_kontens as $recent_konten)
                                            <div class="row margin-bottom-10">
                                                <div class="col-md-3">
                                                    <img class="" style="object-fit: cover;"
                                                        alt="{{ $recent_konten->judul }}"
                                                        src="{{ asset('images/' . $recent_konten->foto) }}"
                                                        width="50px" height="50px">
                                                </div>
                                                <div class="col-md-9 recent-news-inner">
                                                    <h3><a
                                                            href="{{ route('home.detail', $recent_konten->slug) }}">{{ $recent_konten->judul }}</a>
                                                    </h3>
                                                    <p>{{ \Illuminate\Support\Str::limit($recent_konten->keterangan, 40, $end = '...') }}
                                                    </p>
                                                </div>
                                            </div>
                                        @endforeach
                                        {{-- <div class="row margin-bottom-10">
                                        <div class="col-md-3">
                                            <img class="img-responsive" alt=""
                                                src="{{ asset('assets/metronic') }}/assets/pages/img/people/img1-large.jpg">
                                        </div>
                                        <div class="col-md-9 recent-news-inner">
                                            <h3><a href="javascript:;">Deiusto anissimos</a></h3>
                                            <p>Decusamus tiusto odiodig nis simos ducimus qui sint</p>
                                        </div>
                                    </div>
                                    <div class="row margin-bottom-10">
                                        <div class="col-md-3">
                                            <img class="img-responsive" alt=""
                                                src="{{ asset('assets/metronic') }}/assets/pages/img/people/img3-large.jpg">
                                        </div>
                                        <div class="col-md-9 recent-news-inner">
                                            <h3><a href="javascript:;">Tesiusto baissimos</a></h3>
                                            <p>Decusamus tiusto odiodig nis simos ducimus qui sint</p>
                                        </div>
                                    </div> --}}
                                    </div>
                                    <!-- END RECENT NEWS -->

                                </div>
                                <!-- END RIGHT SIDEBAR -->
                            @endif

                        </div>
                    </div>
                </div>
                <!-- END CONTENT -->
            </div>
            <!-- END SIDEBAR & CONTENT -->
            <div class="post-comment padding-top-40">
                <h3>Tinggalkan Masukkan</h3>
                <form role="form" method="post" action="{{ route('home.saran.simpan') }}">
                    @csrf
                    <div class="form-group">
                        <label>Nama</label>
                        <input class="form-control" type="text" name="nama">
                    </div>

                    <div class="form-group">
                        <label>Email <span class="color-red">*</span></label>
                        <input class="form-control" type="text" name="email">
                    </div>

                    <div class="form-group">
                        <label>Pesan</label>
                        <textarea class="form-control" rows="8" name="isi_saran"></textarea>
                    </div>
                    <p><button class="btn btn-primary margin-bottom-40" type="submit">
                            Kirim</button>
                    </p>
                </form>
            </div>
        </div>

    </div>

    <!-- BEGIN PRE-FOOTER -->
    <div class="pre-footer">
        <div class="container">
            <div class="row">
                <!-- BEGIN BOTTOM ABOUT BLOCK -->
                <div class="col-md-3 col-sm-6 pre-footer-col">
                    <h2>About us</h2>
                    <p>{{ $config->profil_website }}</p>


                </div>
                <!-- END BOTTOM ABOUT BLOCK -->

                <!-- BEGIN BOTTOM CONTACTS -->
                <div class="col-md-3 col-sm-6 pre-footer-col">
                    <h2>Our Contacts</h2>
                    <address class="margin-bottom-40">
                        Email: <a href="mailto:{{ $config->email }}">{{ $config->email }}</a><br>
                        WhatsApp: <a href="{{ $config->no_wa }}">{{ $config->no_wa }}</a>
                    </address>
                </div>
                <!-- END BOTTOM CONTACTS -->

                <div class="col-md-3 col-sm-6 pre-footer-col" style="padding-left: 50px;">
                    <h2>Quick Links</h2>
                    <ul class="nav footer-links margin-bottom-40">
                        <li class=""><a href="{{ route('home') }}">Home</a>
                        </li>
                        @foreach ($kategories as $kategori)
                            @if (Route::is('home'))
                                <li><a href="javascript:void(0)"
                                        onclick="filterKontenByKategori('{{ $kategori->id }}')">{{ $kategori->nama_kategori }}</a>
                                </li>
                            @elseif (Route::is('home.detail'))
                                <li><a href="{{ route('home') }}?kategori={{ $kategori->id }}"
                                        onclick="filterKontenByKategori('{{ $kategori->id }}')">{{ $kategori->nama_kategori }}</a>
                                </li>
                            @endif
                        @endforeach


                        <li><a href="{{ route('home.galeri') }}">Gallery</a></li>
                    </ul>
                </div>





                <div class="col-md-3 col-sm-6 pre-footer-col" style="padding-left: 50px;">
                    <h2>Konten Terbaru</h2>
                    <ul class="nav footer-links margin-bottom-40">
                        @foreach ($recent_kontens as $recent_konten)
                            <li><a
                                    href="{{ route('home.detail', $recent_konten->slug) }}">{{ $recent_konten->judul }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <!-- END PRE-FOOTER -->


    <!-- BEGIN FOOTER -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <!-- BEGIN COPYRIGHT -->
                <div class="col-md-4 col-sm-4 padding-top-10">
                    2024 © Agung. ALL Rights Reserved. <a href="javascript:;">Privacy Policy</a> | <a
                        href="javascript:;">Terms of Service</a>
                </div>
                <!-- END COPYRIGHT -->
                <!-- BEGIN PAYMENTS -->
                <div class="col-md-4 col-sm-4">
                    <ul class="social-footer list-unstyled list-inline text-center">
                        <li><a href="{{ $config->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="{{ $config->instagram }}" target="_blank"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li><a href="{{ $config->no_wa }}" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
                    </ul>
                </div>
                <!-- END PAYMENTS -->
                <div class="col-md-4 col-sm-4 text-right">
                    <p class="powered">Created by: <a href="">Muhammad Agung Permadi</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- END FOOTER -->
    <form action="" method="get" id="frmFilter">
        @if (Route::is('home'))
            <input type="hidden" name="page" id="page" value="{{ $page }}">
            <input type="hidden" name="size" id="size" value="{{ $size }}">
        @endif
        <input type="hidden" name="kategori" id="kategori" value="{{ $q_kategori }}">
    </form>

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="assets/plugins/respond.min.js"></script>
    <![endif]-->
    <script src="{{ asset('assets/metronic') }}/assets/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="{{ asset('assets/metronic') }}/assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="{{ asset('assets/metronic') }}/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript">
    </script>
    <script src="{{ asset('assets/metronic') }}/assets/corporate/scripts/back-to-top.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="{{ asset('assets/metronic') }}/assets/plugins/fancybox/source/jquery.fancybox.pack.js"
        type="text/javascript"></script><!-- pop up -->
    <script src="{{ asset('assets/metronic') }}/assets/plugins/owl.carousel/owl.carousel.min.js" type="text/javascript">
    </script><!-- slider for products -->

    <script src="{{ asset('assets/metronic') }}/assets/corporate/scripts/layout.js" type="text/javascript"></script>
    <script src="{{ asset('assets/metronic') }}/assets/pages/scripts/bs-carousel.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();
            Layout.initOWL();
            Layout.initTwitter();
            Layout.initFixHeaderWithPreHeader(); /* Switch On Header Fixing (only if you have pre-header) */
            Layout.initNavScrolling();
        });

        function filterKontenByKategori(kategori) {
            $("#kategori").val(kategori);
            $("#frmFilter").submit();
        }
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->

</html>
