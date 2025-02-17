<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Metronic Frontend</title>


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
    <link href="{{ asset('assets/metronic') }}/assets/corporate/css/style-responsive.css" rel="stylesheet">
    <link href="{{ asset('assets/metronic') }}/assets/corporate/css/themes/blue.css" rel="stylesheet">
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
                        <li><i class="fa fa-phone"></i><span>+1 456 6717</span></li>
                        <li><i class="fa fa-envelope-o"></i><span>info@keenthemes.com</span></li>
                    </ul>
                </div>
                <!-- END TOP BAR LEFT PART -->
                <!-- BEGIN TOP BAR MENU -->
                <div class="col-md-6 col-sm-6 additional-nav">
                    <ul class="list-unstyled list-inline pull-right">
                        <li><a href="page-login.html">Log In</a></li>
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
                    src="{{ asset('assets/metronic') }}/assets/corporate/img/logos/logo-corp-blue.png"
                    alt="Metronic FrontEnd"></a>

            <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

            <!-- BEGIN NAVIGATION -->
            <div class="header-navigation pull-right font-transform-inherit">
                <ul>
                    <li class="dropdown active">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                            Home

                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="index.html">Home Default</a></li>
                            <li class="active"><a href="index-header-fix.html">Home with Header Fixed</a></li>
                            <li><a href="index-without-topbar.html">Home without Top Bar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-megamenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                            Mega Menu

                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="header-navigation-content">
                                    <div class="row">
                                        <div class="col-md-4 header-navigation-col">
                                            <h4>Footwear</h4>
                                            <ul>
                                                <li><a href="index.html">Astro Trainers</a></li>
                                                <li><a href="index.html">Basketball Shoes</a></li>
                                                <li><a href="index.html">Boots</a></li>
                                                <li><a href="index.html">Canvas Shoes</a></li>
                                                <li><a href="index.html">Football Boots</a></li>
                                                <li><a href="index.html">Golf Shoes</a></li>
                                                <li><a href="index.html">Hi Tops</a></li>
                                                <li><a href="index.html">Indoor Trainers</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4 header-navigation-col">
                                            <h4>Clothing</h4>
                                            <ul>
                                                <li><a href="index.html">Base Layer</a></li>
                                                <li><a href="index.html">Character</a></li>
                                                <li><a href="index.html">Chinos</a></li>
                                                <li><a href="index.html">Combats</a></li>
                                                <li><a href="index.html">Cricket Clothing</a></li>
                                                <li><a href="index.html">Fleeces</a></li>
                                                <li><a href="index.html">Gilets</a></li>
                                                <li><a href="index.html">Golf Tops</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4 header-navigation-col">
                                            <h4>Accessories</h4>
                                            <ul>
                                                <li><a href="index.html">Belts</a></li>
                                                <li><a href="index.html">Caps</a></li>
                                                <li><a href="index.html">Gloves</a></li>
                                            </ul>

                                            <h4>Clearance</h4>
                                            <ul>
                                                <li><a href="index.html">Jackets</a></li>
                                                <li><a href="index.html">Bottoms</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                            Pages

                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="page-about.html">About Us</a></li>
                            <li><a href="page-services.html">Services</a></li>
                            <li><a href="page-prices.html">Prices</a></li>
                            <li><a href="page-faq.html">FAQ</a></li>
                            <li><a href="page-gallery.html">Gallery</a></li>
                            <li><a href="page-search-result.html">Search Result</a></li>
                            <li><a href="page-404.html">404</a></li>
                            <li><a href="page-500.html">500</a></li>
                            <li><a href="page-login.html">Login Page</a></li>
                            <li><a href="page-forgotton-password.html">Forget Password</a></li>
                            <li><a href="page-reg-page.html">Signup Page</a></li>
                            <li><a href="page-careers.html">Careers</a></li>
                            <li><a href="page-site-map.html">Site Map</a></li>
                            <li><a href="page-contacts.html">Contact</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                            Multilevel

                        </a>

                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a href="index.html">Multi level <i class="fa fa-angle-right"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="index.html">Second Level Link</a></li>
                                    <li><a href="index.html">Second Level Link</a></li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-toggle" data-toggle="dropdown" data-target="#"
                                            href="javascript:;">
                                            Second Level Link
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="index.html">Third Level Link</a></li>
                                            <li><a href="index.html">Third Level Link</a></li>
                                            <li><a href="index.html">Third Level Link</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                            Portfolio

                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="portfolio-4.html">Portfolio 4</a></li>
                            <li><a href="portfolio-3.html">Portfolio 3</a></li>
                            <li><a href="portfolio-2.html">Portfolio 2</a></li>
                            <li><a href="portfolio-item.html">Portfolio Item</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                            Blog

                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="blog.html">Blog Page</a></li>
                            <li><a href="blog-item.html">Blog Item</a></li>
                        </ul>
                    </li>


                    <li><a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes&amp;utm_source=download&amp;utm_medium=banner&amp;utm_campaign=metronic_frontend_freebie"
                            target="_blank">Admin theme</a></li>

                    <!-- BEGIN TOP SEARCH -->
                    <li class="menu-search">
                        <span class="sep"></span>
                        <i class="fa fa-search search-btn"></i>
                        <div class="search-box">
                            <form action="#">
                                <div class="input-group">
                                    <input type="text" placeholder="Search" class="form-control">
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

    <!-- BEGIN SLIDER -->
    <div class="page-slider margin-bottom-40">
        <div id="carousel-example-generic" class="carousel slide carousel-slider">
            <!-- Indicators -->
            <ol class="carousel-indicators carousel-indicators-frontend">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <!-- First slide -->
                <div class="item carousel-item-eight active">
                    <div class="container">
                        <div class="carousel-position-six text-uppercase text-center">
                            <h2 class="margin-bottom-20 animate-delay carousel-title-v5"
                                data-animation="animated fadeInDown">
                                Expore the power <br />
                                <span class="carousel-title-normal">of Metronic</span>
                            </h2>
                            <p class="carousel-subtitle-v5 border-top-bottom margin-bottom-30"
                                data-animation="animated fadeInDown">This is what you were looking for</p>
                            <a class="carousel-btn-green" href="#" data-animation="animated fadeInUp">Purchase
                                Now!</a>
                        </div>
                    </div>
                </div>

                <!-- Second slide -->
                <div class="item carousel-item-nine">
                    <div class="container">
                        <div class="carousel-position-six">
                            <h2 class="animate-delay carousel-title-v6 text-uppercase"
                                data-animation="animated fadeInDown">
                                Need a website design?
                            </h2>
                            <p class="carousel-subtitle-v6 text-uppercase" data-animation="animated fadeInDown">
                                This is what you were looking for
                            </p>
                            <p class="carousel-subtitle-v7 margin-bottom-30" data-animation="animated fadeInDown">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br />
                                Sed est nunc, sagittis at consectetur id.
                            </p>
                            <a class="carousel-btn-green" href="#" data-animation="animated fadeInUp">Purchase
                                Now!</a>
                        </div>
                    </div>
                </div>

                <!-- Third slide -->
                <div class="item carousel-item-ten">
                    <div class="container">
                        <div class="carousel-position-six">
                            <h2 class="animate-delay carousel-title-v6 text-uppercase"
                                data-animation="animated fadeInDown">
                                Powerful &amp; Clean
                            </h2>
                            <p class="carousel-subtitle-v6 text-uppercase" data-animation="animated fadeInDown">
                                Responsive Website &amp; Admin Theme
                            </p>
                            <p class="carousel-subtitle-v7 margin-bottom-30" data-animation="animated fadeInDown">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br />
                                Sed est nunc, sagittis at consectetur id.
                            </p>
                        </div>
                    </div>
                </div>
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

    <div class="main">
        <div class="container">

        </div>
    </div>

    <!-- BEGIN PRE-FOOTER -->
    <div class="pre-footer">
        <div class="container">
            <div class="row">
                <!-- BEGIN BOTTOM ABOUT BLOCK -->
                <div class="col-md-4 col-sm-6 pre-footer-col">
                    <h2>About us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam sit nonummy nibh euismod
                        tincidunt ut laoreet dolore magna aliquarm erat sit volutpat.</p>


                </div>
                <!-- END BOTTOM ABOUT BLOCK -->

                <!-- BEGIN BOTTOM CONTACTS -->
                <div class="col-md-4 col-sm-6 pre-footer-col">
                    <h2>Our Contacts</h2>
                    <address class="margin-bottom-40">
                        35, Lorem Lis Street, Park Ave<br>
                        California, US<br>
                        Phone: 300 323 3456<br>
                        Fax: 300 323 1456<br>
                        Email: <a href="mailto:info@metronic.com">info@metronic.com</a><br>
                        Skype: <a href="skype:metronic">metronic</a>
                    </address>

                    <div class="pre-footer-subscribe-box pre-footer-subscribe-box-vertical">
                        <h2>Newsletter</h2>
                        <p>Subscribe to our newsletter and stay up to date with the latest news and deals!</p>
                        <form action="#">
                            <div class="input-group">
                                <input type="text" placeholder="youremail@mail.com" class="form-control">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="submit">Subscribe</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END BOTTOM CONTACTS -->

                <!-- BEGIN TWITTER BLOCK -->
                <div class="col-md-4 col-sm-6 pre-footer-col">
                    <h2 class="margin-bottom-0">Latest Tweets</h2>
                    <a class="twitter-timeline" href="https://twitter.com/twitterapi" data-tweet-limit="2"
                        data-theme="dark" data-link-color="#57C8EB" data-widget-id="455411516829736961"
                        data-chrome="noheader nofooter noscrollbar noborders transparent">Loading tweets by
                        @keenthemes...</a>
                </div>
                <!-- END TWITTER BLOCK -->
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
                    2015 © Keenthemes. ALL Rights Reserved. <a href="javascript:;">Privacy Policy</a> | <a
                        href="javascript:;">Terms of Service</a>
                </div>
                <!-- END COPYRIGHT -->
                <!-- BEGIN PAYMENTS -->
                <div class="col-md-4 col-sm-4">
                    <ul class="social-footer list-unstyled list-inline pull-right">
                        <li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="javascript:;"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="javascript:;"><i class="fa fa-skype"></i></a></li>
                        <li><a href="javascript:;"><i class="fa fa-github"></i></a></li>
                        <li><a href="javascript:;"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="javascript:;"><i class="fa fa-dropbox"></i></a></li>
                    </ul>
                </div>
                <!-- END PAYMENTS -->
                <!-- BEGIN POWERED -->
                <div class="col-md-4 col-sm-4 text-right">
                    <p class="powered">Powered by: <a href="http://www.keenthemes.com/">KeenThemes.com</a></p>
                </div>
                <!-- END POWERED -->
            </div>
        </div>
    </div>
    <!-- END FOOTER -->

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
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->

</html>
