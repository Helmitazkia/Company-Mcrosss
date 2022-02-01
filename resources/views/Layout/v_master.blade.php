<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="utf-8" />
        <title>{{ $title }}</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="Bluetec Saas Software Startup Website Template" name="description" />
        <meta content="" name="keywords" />
        <meta content="" name="author" />

        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->

        <!-- CSS Files
    ================================================== -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap-grid.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css" />
        <link href="css/animate.css" rel="stylesheet" type="text/css" />
        <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" />
        <link href="css/owl.theme.css" rel="stylesheet" type="text/css" />
        <link href="css/owl.transitions.css" rel="stylesheet" type="text/css" />
        <link href="css/magnific-popup.css" rel="stylesheet" type="text/css" />
        <link href="css/jquery.countdown.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />

        <!-- color scheme -->
        <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css" />
        <link href="css/coloring.css" rel="stylesheet" type="text/css" />


    </head>

    <body>
        <div id="wrapper">
            <!-- header begin -->
            <header class="header-light transparent scroll-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex justify-content-between">
                                <div class="align-self-center header-col-left">
                                    <!-- logo begin -->
                                    <!-- logo begin -->
                                    <div id="logo">
                                        <a href="index.html">
                                            <img alt="" src="images/lg.jpg" / style=" border-radius: 50px;">
                                        </a>
                                    </div>
                                    <!-- logo close -->
                                    <!-- logo close -->
                                </div>
                                <div class="align-self-center ml-auto header-col-mid">
                                    <!-- mainmenu begin -->
                                    <ul id="mainmenu">
                                        <li>
                                            <a href="/">Home</a>
                                        </li>
                                        <li>
                                            <a href="/Product">Product</a>
                                        </li>
                                        <li>
                                            <a href="/About">Company</a>
                                            <ul>
                                                <li><a href="/About">About Us</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="/Story">Our History</a>
                                        </li>
                                        <li>
                                            <a href="/Service">Services</a>
                                            <ul>
                                                <li><a href="/Service">Service Single</a></li>
                                                <li><a href="/Contact">Contact Us</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="align-self-center ml-auto header-col-right">
                                    <span id="menu-btn"></span>
                                </div>
                             
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- header close -->


            @yield('content')

            

            <!-- footer begin -->
            <footer class="footer-light">
                <div class="container">
                    <div class="row">
						<div class="col-lg-4">
                            <div class="widget">
                                <a href="index.html"><img alt="" src="images/lg.jpg" / style=" border-radius: 50px;"></a>
                                <div class="spacer-20"></div>
                                <p>      Jika saat ini Anda membutuhkan sebuah website yang mengutamakan kualitas, Anda sudah berada di tempat yang tepat.</p>
                            </div>
                        </div>
						
                        <div class="col-lg-2">
                                    <div class="widget">
                                        <h5>Demo</h5>
                                        <ul>
											<li><a href="index.html">Home</a></li>
                                            <li><a href="Product.html">Store</a></li>
                                            <li><a href="about-us.html">Company</a></li>
                                            <li><a href="about-us.html">Tentang Kami</a></li>
                                        
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-2">
                                    <div class="widget">
                                        <h5>Pages</h5>
                                        <ul>
                                            <li><a href="about-us.html">Our History</a></li>
                                            <li><a href="our-team.html">Service Single</a></li>
                                            <li><a href="our-history.html">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>


                        <div class="col-lg-4">
                            <div class="widget">
                                <h5>Berita</h5>
                                <p>Kontak kami untuk mendapatkan berita terbaru, pembaruan, dan penawaran khusus di kotak masuk Kami.</p>
                                <!----<form action="blank.php" class="row" id="form_subscribe" method="post" name="form_subscribe">
                                    <div class="col text-center">
                                        <input class="form-control" id="name_1" name="name_1" placeholder="enter your email" type="text" /> <a href="#" id="btn-submit"><i class="arrow_right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </form>
                                <div class="spacer-10"></div>
                                <small>Your email is safe with us. We don't spam.</small>-->
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 sm-text-center mb-sm-30">
                            <div class="mt10">&copy; Copyright 2022 - Mcrosss by our-team</div>
                        </div>

                        <div class="col-md-6 text-md-right text-sm-left">
                            <div class="social-icons">
                                <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- footer close -->

            <div id="preloader">
                <div class="spinner">
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                </div>
            </div>
        </div>

        <!-- Javascript Files
    ================================================== -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.isotope.min.js"></script>
        <script src="js/easing.js"></script>
        <script src="js/owl.carousel.js"></script>
        <script src="js/validation.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/enquire.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/jquery.plugin.js"></script>
        <script src="js/typed.js"></script>
        <script src="js/jquery.countTo.js"></script>
        <script src="js/jquery.countdown.js"></script>
        <script src="js/designesia.js"></script>


    </body>
</html>
