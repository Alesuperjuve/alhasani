<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Al-Hasani | Digital System</title>
        <meta name="description" content="Al-Hasani Digital System">
        <meta name="author" content="Kimarotec">
        <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/fontello.css">
        <link href="assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
        <link href="assets/css/animate.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css"> 
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/icheck.min_all.css">
        <link rel="stylesheet" href="assets/css/price-range.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.css">  
        <link rel="stylesheet" href="assets/css/owl.theme.css">
        <link rel="stylesheet" href="assets/css/owl.transitions.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">

        <script>
            var countTOTALSANTRI        = {{ $statistik['totalSantri']}};
            var countSANTRIMASUK        = {{ $statistik['santriMasukTahunIni']}};
            var countTOTALKAMAR         = {{ $statistik['totalKamar']}};
            var countTOTALKAPASITAS     = {{ $statistik['totalKapasitas']}};
            var countKAPASITASTERISI    = {{ $statistik['kapasitasTerisi']}};
            var countKAPASITASSISA      = {{ $statistik['kapasitasSisa']}};
        </script>

    </head>
    <body>

        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- Body content -->

        <div class="header-connect">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-8  col-xs-12">
                        <div class="header-half header-call">
                            <p>
                                <span>PP Al-Hasani Kalibawang</span>
                                <span>| Sunan Pandanaran</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-2 col-md-offset-5  col-sm-3 col-sm-offset-1  col-xs-12">
                        <div class="header-half header-social">
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-vine"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        <!--End top header -->

        <nav class="navbar navbar-default ">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="assets/img/logo-alhasani-web.png" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse yamm" id="navigation">
                    <div class="button navbar-right">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}">
                                    <button class="navbar-btn nav-button wow bounceInRight login" data-wow-delay="0.45s">Login</button>
                                </a>
                            @else

                                <a href="{{ route('login') }}">
                                    <button class="navbar-btn nav-button wow bounceInRight login" data-wow-delay="0.45s">Login</button>
                                </a>

                                @if (Route::has('register'))
                        <button class="navbar-btn nav-button wow fadeInRight" data-wow-delay="0.48s">Disclaimer</button>
                        @endif

                            @endauth
                        

                        

                        

                        @endif
                    </div>
                   
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!-- End of nav bar -->

        <div class="slider-area">
            <div class="slider">
                <div id="bg-slider" class="owl-carousel owl-theme">

                    <div class="item"><img src="assets/img/slide1/slider-image-1.jpg" alt="GTA V"></div>
                    <div class="item"><img src="assets/img/slide1/slider-image-2.jpg" alt="The Last of us"></div>
                    <div class="item"><img src="assets/img/slide1/slider-image-1.jpg" alt="GTA V"></div>

                </div>
            </div>
            <div class="slider-content">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                        <h2>USE YOUR BRAINWARE!</h2>
                        <p>Digital System PP Al-Hasani Kalibawang</p>
                        
                    </div>
                </div>
            </div>
        </div>




        <!-- Count area -->
        <div class="count-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <!-- /.feature title -->
                        <h2>Data Adalah Fakta </h2> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xs-12 percent-blocks m-main" data-waypoint-scroll="true">
                        <div class="row">
                            <div class="col-sm-2 col-xs-6">
                                <div class="count-item">
                                    <div class="count-item-circle">
                                        <span class="pe-7s-study"></span>
                                    </div>
                                    <div class="chart" data-percent="0">
                                        <h2 class="percent" id="counter">0</h2>
                                        <h5>JUMLAH SANTRI </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2 col-xs-6">
                                <div class="count-item">
                                    <div class="count-item-circle">
                                        <span class="pe-7s-add-user"></span>
                                    </div>
                                    <div class="chart" data-percent="0">
                                        <h2 class="percent" id="counter1">0</h2>
                                        <h5>SANTRI BARU </h5>
                                        <p>{{ now()->year }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-2 col-xs-6">
                                <div class="count-item">
                                    <div class="count-item-circle">
                                        <span class="pe-7s-home"></span>
                                    </div>
                                    <div class="chart" data-percent="0">
                                        <h2 class="percent" id="counterKamar">0</h2>
                                        <h5>KAMAR</h5>
                                    </div>
                                </div> 
                            </div> 
                            <div class="col-sm-2 col-xs-6">
                                <div class="count-item">
                                    <div class="count-item-circle">
                                        <span class="pe-7s-graph"></span>
                                    </div>
                                    <div class="chart" data-percent="1">
                                        <h2 class="percent" id="counter2">0</h2>
                                        <h5>KUOTA KAMAR </h5>
                                    </div>
                                </div> 
                            </div> 
                            <div class="col-sm-2 col-xs-6">
                                <div class="count-item">
                                    <div class="count-item-circle">
                                        <span class="pe-7s-note2"></span>
                                    </div>
                                    <div class="chart" data-percent="1">
                                        <h2 class="percent"  id="counter3">0</h2>
                                        <h5>KUOTA TERISI</h5>
                                    </div>
                                </div> 

                            </div>
                            <div class="col-sm-2 col-xs-6">
                                <div class="count-item">
                                    <div class="count-item-circle">
                                        <span class="pe-7s-exapnd2"></span>
                                    </div>
                                    <div class="chart" data-percent="0">
                                        <h2 class="percent" id="counterKapsisa">0</h2>
                                        <h5>SISA KUOTA </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <!-- Footer area-->
        <div class="footer-area">

            <div class=" footer">
                <div class="container">
                    <div class="row">

                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>Al-Hasani </h4>
                                <div class="footer-title-line"></div>

                                <img src="assets/img/logo-alhasani-web.png" alt="" class="wow pulse" data-wow-delay="1s">
                                <p>Pondok pesantren berbasis Pandanaran.</p>
                                <ul class="footer-adress">
                                    <li><i class="pe-7s-map-marker strong"> </i> Kalibawang - Kulon Progo</li>
                                    <li><i class="pe-7s-mail strong"> </i> pengurus@alhasani.id</li>
                                    <li><i class="pe-7s-call strong"> </i> +62858-6640-2429</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>Pendidikan</h4>
                                <div class="footer-title-line"></div>
                                <ul class="footer-menu">
                                    <li>Tahfidz</li> 
                                    <li>Pengajian Kitab</li> 
                                    <li>MTs Al-Hasani</li> 
                                    <li>MA Al-Hasani</li> 
                                    <li>Mujahadah</li> 
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>BENEFIT</h4>
                                <div class="footer-title-line"></div>
                                <ul class="footer-blog">
                                    <li>
                                       
                                        <div class="col-md-12  col-sm-12 col-xs-12  blg-entry">
                                           
                                            <p style="line-height: 17px; padding: 8px 2px;">Semua kata terdata dan terbaca kapanpun kita mau, tanpa buang waktu</p>
                                        </div>
                                    </li> 

                                    


                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer news-letter">
                                <h4>Stay in touch</h4>
                                <div class="footer-title-line"></div>
                                <p>Digitalisasi akan membantu aktivitas kehidupan kita sehari-hari

</p>

                                <div class="social pull-right"> 
                                    <ul>
                                        <li><a class="wow fadeInUp animated" href="https://twitter.com/kimarotec"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="wow fadeInUp animated" href="https://www.facebook.com/kimarotec" data-wow-delay="0.2s"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="wow fadeInUp animated" href="https://plus.google.com/kimarotec" data-wow-delay="0.3s"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a class="wow fadeInUp animated" href="https://instagram.com/kimarotec" data-wow-delay="0.4s"><i class="fa fa-instagram"></i></a></li>
                                        <li><a class="wow fadeInUp animated" href="https://instagram.com/kimarotec" data-wow-delay="0.6s"><i class="fa fa-dribbble"></i></a></li>
                                    </ul> 
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <script src="assets/js/modernizr-2.6.2.min.js"></script>

        <script src="assets/js/jquery-1.10.2.min.js"></script> 
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-select.min.js"></script>
        <script src="assets/js/bootstrap-hover-dropdown.js"></script>

        <script src="assets/js/easypiechart.min.js"></script>
        <script src="assets/js/jquery.easypiechart.min.js"></script>

        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/wow.js"></script>

        <script src="assets/js/icheck.min.js"></script>
        <script src="assets/js/price-range.js"></script>

        <script src="assets/js/main.js"></script>

    </body>
</html>