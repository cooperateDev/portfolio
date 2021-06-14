
<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>W.W</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/LineIcons.css') }}">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.css') }}">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick.css') }}">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.css') }}">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/default.css') }}">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/custom.css') }}">

</head>

<body>
    
    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== NAVBAR PART START ======-->

    <section class="header-area">
        <div class="navbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="#">
                                <img src="assets/images/logo.png" alt="Logo">
                            </a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarEight" aria-controls="navbarEight" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarEight">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">HOME</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">SERVICE</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#portfolio">PORTFOLIO</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#testimonial">Testimonial</a>
                                    </li>
                                </ul>
                            </div><!-- 

                            <div class="navbar-btn d-none mt-15 d-lg-inline-block">
                                <a class="menu-bar" href="#side-menu-right"><i class="lni-menu"></i></a>
                            </div> -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->
        
        <div id="home" class="slider-area">
            <div class="bd-example">
                <div id="carouselOne" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselOne" data-slide-to="0" class="active"></li>
                        @foreach($slides as $key => $slide)
                            @if($key != 0)
                                <li data-target="#carouselOne" data-slide-to="{{ $key }}"></li>
                            @endif
                        @endforeach
                    </ol>

                    <div class="carousel-inner">
                        @foreach($slides as $key => $slide)
                            @if($key == 0)
                                <div class="carousel-item bg_cover active" style="background-image: url({{ asset('upload/images/slide' . '/' . $slide->url) }})">
                                    <div class="carousel-caption">
                                        <div class="container">
                                            <div class="row justify-content-center">
                                                <div class="col-xl-6 col-lg-7 col-sm-10">
                                                    <!-- <h2 class="carousel-title">Refreshing Design & Easy to Customize</h2> -->
                                                    <!-- <ul class="carousel-btn rounded-buttons">
                                                        <li><a class="main-btn rounded-three" href="#">GET STARTED</a></li>
                                                        <li><a class="main-btn rounded-one" href="#">DOWNLOAD</a></li>
                                                    </ul> -->
                                                </div>
                                            </div> <!-- row -->
                                        </div> <!-- container -->
                                    </div> <!-- carousel caption -->
                                </div> <!-- carousel-item -->
                            @else
                                <div class="carousel-item bg_cover" style="background-image: url({{ asset('upload/images/slide' . '/' . $slide->url) }})">
                                    <div class="carousel-caption">
                                        <div class="container">
                                            <div class="row justify-content-center">
                                                <div class="col-xl-6 col-lg-7 col-sm-10">
                                                    <!-- <h2 class="carousel-title">Refreshing Design & Easy to Customize</h2> -->
                                                    <!-- <ul class="carousel-btn rounded-buttons">
                                                        <li><a class="main-btn rounded-three" href="#">GET STARTED</a></li>
                                                        <li><a class="main-btn rounded-one" href="#">DOWNLOAD</a></li>
                                                    </ul> -->
                                                </div>
                                            </div> <!-- row -->
                                        </div> <!-- container -->
                                    </div> <!-- carousel caption -->
                                </div> <!-- carousel-item -->
                            @endif
                        @endforeach
                    </div> <!-- carousel-inner -->

                    <a class="carousel-control-prev" href="#carouselOne" role="button" data-slide="prev">
                        <i class="lni-arrow-left-circle"></i>
                    </a>

                    <a class="carousel-control-next" href="#carouselOne" role="button" data-slide="next">
                        <i class="lni-arrow-right-circle"></i>
                    </a>
                </div> <!-- carousel -->
            </div> <!-- bd-example -->
        </div>

    </section>
    
    <!--====== ABOUT PART START ======-->

    <section id="about" class="about-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <!-- <div class="about-image text-center wow fadeInUp" data-wow-duration="1.5s" data-wow-offset="100">
                        <img src="assets/images/services.png" alt="services">
                    </div> -->
                    <div class="section-title text-center mt-30 pb-40">
                        <h4 class="title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.6s">Service</h4>
                        <!-- <p class="text wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1s">An open platform for presentations and content collaboration. Sign up to get early access.</p> -->
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            
            <div class="row">
                @foreach($categories as $key => $category)
                    <div class="col-lg-6">
                        <div class="single-about d-sm-flex mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.4s">
                            <div class="about-icon">
                                <img src="{{ asset('upload/images/category' . '/' . $category->url) }}" alt="Icon">
                            </div>
                            <div class="about-content media-body">
                                <h4 class="about-title">{{ $category->title }}</h4>
                                <p class="text">{{ $category->desc }}</p>
                            </div>
                        </div> <!-- single about -->
                    </div>
                @endforeach
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== ABOUT PART ENDS ======-->
    
    <!--====== portfolio PART START ======-->

    <section id="portfolio" class="portfolio-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h3 class="title">Our Portfolio</h3>
                        <!-- <p class="text">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p> -->
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="portfolio-menu pt-30 text-center">
                        <ul>
                            <li data-filter="*" class="active">ALL WORK</li>
                            @foreach($categories as $key => $category)
                                <li data-filter=".{{ $category->title }}">{{ $category->title }}</li>
                            @endforeach
                        </ul>
                    </div> <!-- portfolio menu -->
                </div>
            </div> <!-- row -->
            <div class="row grid">
                @foreach($tasks as $key => $task)
                    <div class="col-lg-4 col-sm-6 {{ $task->title }}">
                        <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                            <div class="portfolio-image">
                                <img src="{{ asset('upload/images/task') . '/' . $task->url }}" alt="">
                                <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                    <div class="portfolio-content">
                                        <div class="portfolio-icon">
                                            <a class="image-popup" href="{{ asset('upload/images/task') . '/' . $task->url }}"><i class="lni-zoom-in"></i></a>
                                        </div>
                                        <div class="portfolio-icon">
                                            <a href="{{ $task->link }}" target="_blank"><i class="lni-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-text">
                                <h4 class="portfolio-title"><a href="#">{{ $task->name }}</a></h4>
                                <p class="text">{{ $task->desc }}</p>
                            </div>
                        </div> <!-- single portfolio -->
                    </div>
                @endforeach
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== portfolio PART ENDS ======-->
    
    <!--====== TESTIMONIAL THREE PART START ======-->

    <section id="testimonial" class="testimonial-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h3 class="title">Testimonial</h3>
                        <!-- <p class="text">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p> -->
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="row testimonial-active">
                        @foreach($users as $key => $user)
                            <div class="col-lg-4">
                                <div class="single-testimonial mt-30 mb-30 text-center">
                                    <div class="testimonial-image">
                                        <img src="{{ asset('upload/images/avatar' . '/' . $user->avatar) }}" alt="Author">
                                    </div>
                                    <div class="testimonial-content">
                                        <p class="text">{{ $user->skill }}</p>
                                        <h6 class="author-name">{{ $user->name }}</h6>
                                        <!-- <span class="sub-title">CEO, GrayGrids</span> -->
                                    </div>
                                </div> <!-- single testimonial -->
                            </div>
                        @endforeach
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TESTIMONIAL THREE PART ENDS ======-->
    
    <!--====== FOOTER FOUR PART START ======-->

    <footer id="footer" class="footer-area">
        <div class="footer-copyright">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="copyright text-center text-lg-left mt-10">
                            <p class="text">Win.Win Company</p>
                        </div> <!--  copyright -->
                    </div>
                    <div class="col-lg-2">
                        <div class="footer-logo text-center mt-10">
                            <a href="index.html"><img src="assets/images/logo.png" alt="Logo"></a>
                        </div> <!-- footer logo -->
                    </div>
                    <div class="col-lg-5">
                        <ul class="social text-center text-lg-right mt-10">
                            <li><a href="https://facebook.com/uideckHQ"><i class="lni-facebook-filled"></i></a></li>
                            <li><a href="https://twitter.com/uideckHQ"><i class="lni-twitter-original"></i></a></li>
                            <li><a href="https://instagram.com/uideckHQ"><i class="lni-instagram-original"></i></a></li>
                            <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                        </ul> <!-- social -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer copyright -->
    </footer>

    <!--====== FOOTER FOUR PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->  

    <!--====== PART START ======-->

    <!--====== PART ENDS ======-->

    <!--====== jquery js ======-->
    <script src="{{ asset('assets/frontend/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/vendor/jquery-1.12.4.min.js') }}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/popper.min.js') }}"></script>

    <!--====== Slick js ======-->
    <script src="{{ asset('assets/frontend/js/slick.min.js') }}"></script>

    <!--====== Isotope js ======-->
    <script src="{{ asset('assets/frontend/js/isotope.pkgd.min.js') }}"></script>

    <!--====== Images Loaded js ======-->
    <script src="{{ asset('assets/frontend/js/imagesloaded.pkgd.min.js') }}"></script>

    <!--====== Magnific Popup js ======-->
    <script src="{{ asset('assets/frontend/js/jquery.magnific-popup.min.js') }}"></script>

    <!--====== Scrolling js ======-->
    <script src="{{ asset('assets/frontend/js/scrolling-nav.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.easing.min.js') }}"></script>

    <!--====== wow js ======-->
    <script src="{{ asset('assets/frontend/js/wow.min.js') }}"></script>

    <!--====== Main js ======-->
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>

</body>

</html>
