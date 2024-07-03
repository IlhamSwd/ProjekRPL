<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bidan</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="{{ url('site.webmanifest') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('assets/img/favicon.ico') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/progressbar_barfiller.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">

</head>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ url('assets/img/logo/loder.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href={{ url('index.html') }}><img src=""
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                    <!-- Button -->
                                    <li class="button-header margin-left "><a href="{{ route('register') }}" class="btn">Sign Up</a></li>
                                    <li class="button-header"><a href="{{ route('login') }}" class="btn3">Sign In</a></li>
                                    </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!-- Slider Area Start-->
        <div class="slider-area slider-bg ">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider d-flex align-items-center slider-height ">
                    <div class="container">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-xl-5 col-lg-5 col-md-9 ">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay=".6s ">Website Aplikasi Bidan</h1>
                                    <p data-animation="fadeInLeft" data-delay=".8s">
                                        Aplikasi ini adalah buatan dari kami mahasiswa
                                        Universitas Multi Data Palembang.</p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="hero__img d-none d-lg-block f-right">
                                    <img src="{{ url('assets/img/hero/hero_right.png') }}" alt=""
                                        data-animation="fadeInRight" data-delay="1s">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider Shape -->
            <div class="slider-shape d-none d-lg-block">
                <img class="slider-shape1" src="{{ url('assets/img/hero/top-left-shape.png') }}" alt="">
            </div>
        </div>
        <!-- Pricing Card End -->
    </main>
    <!-- JS here -->

    <script src="{{ url('assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ url('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{ url('assets/js/popper.min.js')}}"></script>
    <script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ url('assets/js/jquery.slicknav.min.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ url('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('assets/js/slick.min.js') }}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ url('assets/js/wow.min.js') }}"></script>
    <script src="{{ url('assets/js/animated.headline.js') }}"></script>
    <script src="{{ url('assets/js/jquery.magnific-popup.js') }}"></script>

    <!-- Date Picker -->
    <script src="{{ url('assets/js/gijgo.min.js') }}"></script>

    <!-- Video bg -->
    <script src="{{ url('assets/js/jquery.vide.js') }}"></script>

    <!-- Nice-select, sticky -->
    <script src="{{ url('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ url('assets/js/jquery.sticky.js') }}"></script>
    <!-- Progress -->
    <script src="{{ url('assets/js/jquery.barfiller.js') }}"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="{{ url('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ url('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ url('assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ url('assets/js/hover-direction-snake.min.js') }}"></script>

    <!-- contact js -->
    <script src="{{ url('assets/js/contact.js') }}"></script>
    <script src="{{ url('assets/js/jquery.form.js') }}"></script>
    <script src="{{ url('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ url('assets/js/mail-script.js') }}"></script>
    <script src="{{ url('assets/js/jquery.ajaxchimp.min.js') }}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ url('assets/js/plugins.js') }}"></script>
    <script src="{{ url('assets/js/main.js') }}"></script>

</body>

</html>
