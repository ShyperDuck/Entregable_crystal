<!DOCTYPE html>
<html lang="es">


<!-- Mirrored from labartisan.net/demo/kagont/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Oct 2023 18:56:25 GMT -->
<head>
    <title>Crystal Pass</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon logo -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/x-icon/Logo Crystal.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- preloader start here -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- preloader ending here -->


    <!-- ==========Header Section Starts Here========== -->
    <header class="header-section">
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo">
                        <a href="index.html">
                            <img src="assets/images/logo/logo_baner.png" width="185" alt="logo">
                        </a>
                    </div>
                    <div class="menu-area">
                        <ul class="menu">
                            <li>
                                <a href="index.html" class="menu-aboton">Inicio</a>
                            </li>
                            -->

                            <li>
                                <a href="#0" class="menu-aboton">Features</a>
                                <ul class="submenu">
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="login.html">Log In</a></li>
                                    <li><a href="registration.html">Sign Up</a></li>
                                    <li><a href="pricing-plan.html">Pricing Plan</a></li>
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="shop-single.html">Shop Single</a></li>
                                    <li><a href="cart.html">Cart Page</a></li>
                                    <li><a href="404.html">404 Page</a></li>
                                    <li><a href="coming-soon.html">Coming-soon</a></li>

                                </ul>
                            </li>
                            -->
                             
                            <li>
                                <a href="#0" class="menu-aboton">Speakers</a>
                                <ul class="submenu">
                                    <li><a href="speakers.html">All Speakers</a></li>
                                    <li><a href="speaker-details.html">Speaker Details</a></li>
                                </ul>
                            </li>
                            -->
                            
                            <li>
                                <a href="#0" class="menu-aboton">Nosotros</a>

                                <ul class="submenu">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                </ul>
                                -->
                            </li>
                            <li><a href="contact.html" class="menu-aboton">Contacto</a></li>
                        </ul>
                        <div class="cart-ticket">
                            <!--
                            <div class="cart-icon">
                                <a href="#">
                                    <i class="icofont-bag"></i>
                                    <span>3</span>
                                </a>

                                <div class="cart-content">
                                    <ul class="cart-list">
                                        <li class="cart-item">
                                            <div class="cart-inner">
                                                <div class="cart-thumb">
                                                    <img src="assets/images/product/menu_cart_01.jpg" alt="product">
                                                </div>
                                                <div class="cart-details">
                                                    <h6><a href="#">Product Text Here</a></h6>
                                                    <p>Quantity: 1 <span>$56</span></p>
                                                    <div class="close-btn">
                                                        <a href="#"><i class="icofont-close"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="cart-item">
                                            <div class="cart-inner">
                                                <div class="cart-thumb">
                                                    <img src="assets/images/product/menu_cart_02.jpg" alt="product">
                                                </div>
                                                <div class="cart-details">
                                                    <h6><a href="#">Product Text Here</a></h6>
                                                    <p>Quantity: 1 <span>$56</span></p>
                                                    <div class="close-btn">
                                                        <a href="#"><i class="icofont-close"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="cart-item">
                                            <div class="cart-inner">
                                                <div class="cart-thumb">
                                                    <img src="assets/images/product/menu_cart_03.jpg" alt="product">
                                                </div>
                                                <div class="cart-details">
                                                    <h6><a href="#">Product Text Here</a></h6>
                                                    <p>Quantity: 1 <span>$56</span></p>
                                                    <div class="close-btn">
                                                        <a href="#"><i class="icofont-close"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <a href="#" class="lab-btn">
                                        Checkout
                                    </a>
                                </div>
                            </div>
--> 

@if (Route::has('login'))
    <div>
        @auth
            <div>
                <a href="{{ url('/dashboard') }}" class="menu-iboton">Dashboard</a>
            </div>
        @else
            <div>
                <a href="{{ route('login') }}" class="menu-iboton">Log in</a>
            </div>
            @if (Route::has('register'))
                <div>
                    <a href="{{ route('register') }}" class="menu-iboton">Register</a>
                </div>
            @endif
        @endauth
    </div>
@endif






            </div>

                        <!-- toggle icons -->
                        <div class="header-bar d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ==========Header Section Ends Here========== -->


    <!-- ==========Banner Section start Here========== -->
    <section class="banner-section">
        <div class="container">
            <div class="banner-wrapper shape-a">
                <div class="row gy-5 align-items-center">
                    <div class="col-lg-6 col-12">
                        <div class="banner-content">
                            <ul id="countdown" class="countdown count-down" data-date="Jan 1, 2024 21:14:01">
                                <li class="clock-item"><span class="count-number days">56</span>
                                    <p class="count-text">Dias</p>
                                </li>

                                <li class="clock-item"><span class="count-number hours">16</span>
                                    <p class="count-text">Horas</p>
                                </li>

                                <li class="clock-item"><span class="count-number minutes">25</span>
                                    <p class="count-text">Min</p>
                                </li>

                                <li class="clock-item"><span class="count-number seconds">19</span>
                                    <p class="count-text">Seg</p>
                                </li>
                            </ul>
                            <h1>Concierto Huanca 2023</h1>
                            <p>Únete a nuestra familia Huanca hoy! Escribenos para más información.</p>
                            <a href="registration.html" class="lab-btn"><span>Adquirir</span> </a>
                            
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="banner-image">
                            <img src="assets/images/banner/01.png" alt="banner-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Banner Section end Here========== -->

    <!-- ==========schedule Section start Here========== -->
    <section class="schedule-section padding-tb padding-b bg-image">
        <div class="container">
            <div class="section-header">
                <h2>Eventos</h2>
                <p>Planea tus proximos eventos</p>
            </div>
            <div class="section-wrapper shape-b">
                <div class="row gx-4 gy-5">
                    <div class="col-lg-6">
                        <div class="schedule-left schedule-pack">
                            <h5>10 Noviembre 2023</h5>
                            <div class="schedule-list" id="accordionExample">
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                <span class="accor-thumb">
                                                    <img src="assets/images/event/member/01.png" alt="speaker">
                                                    <span class="child-thumb">
                                                        <img src="assets/images/event/member/02.png" alt="speaker">
                                                    </span>
                                                    <span class="child-thumb-2">
                                                        <img src="assets/images/event/member/03.png" alt="speaker">
                                                    </span>
                                                </span>
                                                <span class="h7">Canto andino</span>
                                            </span>

                                        </button>
                                    </div>
                                    <div id="collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Phosrescen ntiate prncple centered networks via magnetc
                                                Apildous eviscuate standards complant fulys tested metrs
                                                without creative desi futureproof web</p>
                                            <ul class="ev-schedule-meta d-flex flex-wrap">
                                                <li><span><i class="icofont-user"></i></span>Diane, Cuning</li>
                                                <li><span><i class="icofont-clock-time"></i></span>8:00am - 9:00am</li>
                                                <li><span><i class="icofont-location-pin"></i></span>Summer C</li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true"
                                            aria-controls="collapseTwo">
                                            <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                <span class="accor-thumb">
                                                    <img src="assets/images/event/member/02.png" alt="speaker">
                                                    <span class="child-thumb">
                                                        <img src="assets/images/event/member/03.png" alt="speaker">
                                                    </span>
                                                </span>
                                                <span class="h7">Digital Event Information</span>
                                            </span>

                                        </button>
                                    </div>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Phosrescen ntiate prncple centered networks via magnetc
                                                Apildous eviscuate standards complant fulys tested metrs
                                                without creative desi futureproof web</p>
                                            <ul class="ev-schedule-meta d-flex flex-wrap">
                                                <li><span><i class="icofont-user"></i></span>Diane, Cuning</li>
                                                <li><span><i class="icofont-clock-time"></i></span>8:00am - 9:00am</li>
                                                <li><span><i class="icofont-location-pin"></i></span>Summer C</li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingThree">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="true"
                                            aria-controls="collapseThree">
                                            <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                <span class="accor-thumb">
                                                    <img src="assets/images/event/member/03.png" alt="speaker">
                                                    <span class="child-thumb">
                                                        <img src="assets/images/event/member/02.png" alt="speaker">
                                                    </span>
                                                </span>
                                                <span class="h7">Reinventing Experiences</span>
                                            </span>

                                        </button>
                                    </div>
                                    <div id="collapseThree" class="accordion-collapse collapse show"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Phosrescen ntiate prncple centered networks via magnetc
                                                Apildous eviscuate standards complant fulys tested metrs
                                                without creative desi futureproof web</p>
                                            <ul class="ev-schedule-meta d-flex flex-wrap">
                                                <li><span><i class="icofont-user"></i></span>Diane, Cuning</li>
                                                <li><span><i class="icofont-clock-time"></i></span>8:00am - 9:00am</li>
                                                <li><span><i class="icofont-location-pin"></i></span>Summer C</li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="true" aria-controls="collapseFour">
                                            <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                <span class="accor-thumb">
                                                    <img src="assets/images/event/member/04.png" alt="speaker">

                                                </span>
                                                <span class="h7">Lunch Brack</span>
                                            </span>

                                        </button>
                                    </div>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Phosrescen ntiate prncple centered networks via magnetc
                                                Apildous eviscuate standards complant fulys tested metrs
                                                without creative desi futureproof web</p>
                                            <ul class="ev-schedule-meta d-flex flex-wrap">
                                                <li><span><i class="icofont-user"></i></span>Diane, Cuning</li>
                                                <li><span><i class="icofont-clock-time"></i></span>8:00am - 9:00am</li>
                                                <li><span><i class="icofont-location-pin"></i></span>Summer C</li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                            aria-expanded="true" aria-controls="collapseFive">
                                            <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                <span class="accor-thumb">
                                                    <img src="assets/images/event/member/05.png" alt="speaker">
                                                    <span class="child-thumb">
                                                        <img src="assets/images/event/member/06.png" alt="speaker">
                                                    </span>
                                                </span>
                                                <span class="h7">Registration & Breakfast</span>
                                            </span>

                                        </button>
                                    </div>
                                    <div id="collapseFive" class="accordion-collapse collapse"
                                        aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Phosrescen ntiate prncple centered networks via magnetc
                                                Apildous eviscuate standards complant fulys tested metrs
                                                without creative desi futureproof web</p>
                                            <ul class="ev-schedule-meta d-flex flex-wrap">
                                                <li><span><i class="icofont-user"></i></span>Diane, Cuning</li>
                                                <li><span><i class="icofont-clock-time"></i></span>8:00am - 9:00am</li>
                                                <li><span><i class="icofont-location-pin"></i></span>Summer C</li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingSix">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true"
                                            aria-controls="collapseSix">
                                            <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                <span class="accor-thumb">
                                                    <img src="assets/images/event/member/06.png" alt="speaker">
                                                    <span class="child-thumb">
                                                        <img src="assets/images/event/member/02.png" alt="speaker">
                                                    </span>
                                                    <span class="child-thumb-2">
                                                        <img src="assets/images/event/member/03.png" alt="speaker">
                                                    </span>
                                                </span>
                                                <span class="h7">Digital Event Information</span>
                                            </span>

                                        </button>
                                    </div>
                                    <div id="collapseSix" class="accordion-collapse collapse"
                                        aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Phosrescen ntiate prncple centered networks via magnetc
                                                Apildous eviscuate standards complant fulys tested metrs
                                                without creative desi futureproof web</p>
                                            <ul class="ev-schedule-meta d-flex flex-wrap">
                                                <li><span><i class="icofont-user"></i></span>Diane, Cuning</li>
                                                <li><span><i class="icofont-clock-time"></i></span>8:00am - 9:00am</li>
                                                <li><span><i class="icofont-location-pin"></i></span>Summer C</li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingSeven">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                            aria-expanded="true" aria-controls="collapseSeven">
                                            <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                <span class="accor-thumb">
                                                    <img src="assets/images/event/member/07.png" alt="speaker">
                                                    <span class="child-thumb">
                                                        <img src="assets/images/event/member/02.png" alt="speaker">
                                                    </span>
                                                </span>
                                                <span class="h7">Reinventing Experiences</span>
                                            </span>

                                        </button>
                                    </div>
                                    <div id="collapseSeven" class="accordion-collapse collapse"
                                        aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Phosrescen ntiate prncple centered networks via magnetc
                                                Apildous eviscuate standards complant fulys tested metrs
                                                without creative desi futureproof web</p>
                                            <ul class="ev-schedule-meta d-flex flex-wrap">
                                                <li><span><i class="icofont-user"></i></span>Diane, Cuning</li>
                                                <li><span><i class="icofont-clock-time"></i></span>8:00am - 9:00am</li>
                                                <li><span><i class="icofont-location-pin"></i></span>Summer C</li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingEight">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseEight"
                                            aria-expanded="true" aria-controls="collapseEight">
                                            <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                <span class="accor-thumb">
                                                    <img src="assets/images/event/member/04.png" alt="speaker">

                                                </span>
                                                <span class="h7">Dinner Break</span>
                                            </span>

                                        </button>
                                    </div>
                                    <div id="collapseEight" class="accordion-collapse collapse"
                                        aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Phosrescen ntiate prncple centered networks via magnetc
                                                Apildous eviscuate standards complant fulys tested metrs
                                                without creative desi futureproof web</p>
                                            <ul class="ev-schedule-meta d-flex flex-wrap">
                                                <li><span><i class="icofont-user"></i></span>Diane, Cuning</li>
                                                <li><span><i class="icofont-clock-time"></i></span>8:00am - 9:00am</li>
                                                <li><span><i class="icofont-location-pin"></i></span>Summer C</li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingNine">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseNine"
                                            aria-expanded="true" aria-controls="collapseNine">
                                            <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                <span class="accor-thumb">
                                                    <img src="assets/images/event/member/08.png" alt="speaker">
                                                    <span class="child-thumb">
                                                        <img src="assets/images/event/member/02.png" alt="speaker">
                                                    </span>
                                                    <span class="child-thumb-2">
                                                        <img src="assets/images/event/member/03.png" alt="speaker">
                                                    </span>
                                                </span>
                                                <span class="h7">Live Music Performance</span>
                                            </span>

                                        </button>
                                    </div>
                                    <div id="collapseNine" class="accordion-collapse collapse"
                                        aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Phosrescen ntiate prncple centered networks via magnetc
                                                Apildous eviscuate standards complant fulys tested metrs
                                                without creative desi futureproof web</p>
                                            <ul class="ev-schedule-meta d-flex flex-wrap">
                                                <li><span><i class="icofont-user"></i></span>Diane, Cuning</li>
                                                <li><span><i class="icofont-clock-time"></i></span>8:00am - 9:00am</li>
                                                <li><span><i class="icofont-location-pin"></i></span>Summer C</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="schedule-right schedule-pack">
                            <h5>11 Noviembre 2023</h5>
                            <div class="schedule-list" id="accordionExample-2">
                                <div class="accordion-item">
                                    <div class="accordion-header" id="heading-One">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse-One"
                                            aria-expanded="true" aria-controls="collapse-One">
                                            <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                <span class="accor-thumb">
                                                    <img src="assets/images/event/member/01.png" alt="speaker">
                                                    <span class="child-thumb">
                                                        <img src="assets/images/event/member/02.png" alt="speaker">
                                                    </span>
                                                    <span class="child-thumb-2">
                                                        <img src="assets/images/event/member/03.png" alt="speaker">
                                                    </span>
                                                </span>
                                                <span class="h7">Registration & Breakfast</span>
                                            </span>

                                        </button>
                                    </div>
                                    <div id="collapse-One" class="accordion-collapse collapse"
                                        aria-labelledby="heading-One" data-bs-parent="#accordionExample-2">
                                        <div class="accordion-body">
                                            <p>Phosrescen ntiate prncple centered networks via magnetc
                                                Apildous eviscuate standards complant fulys tested metrs
                                                without creative desi futureproof web</p>
                                            <ul class="ev-schedule-meta d-flex flex-wrap">
                                                <li><span><i class="icofont-user"></i></span>Diane, Cuning</li>
                                                <li><span><i class="icofont-clock-time"></i></span>8:00am - 9:00am</li>
                                                <li><span><i class="icofont-location-pin"></i></span>Summer C</li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="heading-Two">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse-Two"
                                            aria-expanded="true" aria-controls="collapse-Two">
                                            <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                <span class="accor-thumb">
                                                    <img src="assets/images/event/member/02.png" alt="speaker">
                                                    <span class="child-thumb">
                                                        <img src="assets/images/event/member/03.png" alt="speaker">
                                                    </span>
                                                </span>
                                                <span class="h7">Digital Event Information</span>
                                            </span>

                                        </button>
                                    </div>
                                    <div id="collapse-Two" class="accordion-collapse collapse"
                                        aria-labelledby="heading-Two" data-bs-parent="#accordionExample-2">
                                        <div class="accordion-body">
                                            <p>Phosrescen ntiate prncple centered networks via magnetc
                                                Apildous eviscuate standards complant fulys tested metrs
                                                without creative desi futureproof web</p>
                                            <ul class="ev-schedule-meta d-flex flex-wrap">
                                                <li><span><i class="icofont-user"></i></span>Diane, Cuning</li>
                                                <li><span><i class="icofont-clock-time"></i></span>8:00am - 9:00am</li>
                                                <li><span><i class="icofont-location-pin"></i></span>Summer C</li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="heading-Three">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse-Three"
                                            aria-expanded="true" aria-controls="collapse-Three">
                                            <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                <span class="accor-thumb">
                                                    <img src="assets/images/event/member/03.png" alt="speaker">
                                                    <span class="child-thumb">
                                                        <img src="assets/images/event/member/02.png" alt="speaker">
                                                    </span>
                                                </span>
                                                <span class="h7">Reinventing Experiences</span>
                                            </span>

                                        </button>
                                    </div>
                                    <div id="collapse-Three" class="accordion-collapse collapse"
                                        aria-labelledby="heading-Three" data-bs-parent="#accordionExample-2">
                                        <div class="accordion-body">
                                            <p>Phosrescen ntiate prncple centered networks via magnetc
                                                Apildous eviscuate standards complant fulys tested metrs
                                                without creative desi futureproof web</p>
                                            <ul class="ev-schedule-meta d-flex flex-wrap">
                                                <li><span><i class="icofont-user"></i></span>Diane, Cuning</li>
                                                <li><span><i class="icofont-clock-time"></i></span>8:00am - 9:00am</li>
                                                <li><span><i class="icofont-location-pin"></i></span>Summer C</li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="heading-Four">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse-Four"
                                            aria-expanded="true" aria-controls="collapse-Four">
                                            <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                <span class="accor-thumb">
                                                    <img src="assets/images/event/member/04.png" alt="speaker">

                                                </span>
                                                <span class="h7">Lunch Brack</span>
                                            </span>

                                        </button>
                                    </div>
                                    <div id="collapse-Four" class="accordion-collapse collapse"
                                        aria-labelledby="heading-Four" data-bs-parent="#accordionExample-2">
                                        <div class="accordion-body">
                                            <p>Phosrescen ntiate prncple centered networks via magnetc
                                                Apildous eviscuate standards complant fulys tested metrs
                                                without creative desi futureproof web</p>
                                            <ul class="ev-schedule-meta d-flex flex-wrap">
                                                <li><span><i class="icofont-user"></i></span>Diane, Cuning</li>
                                                <li><span><i class="icofont-clock-time"></i></span>8:00am - 9:00am</li>
                                                <li><span><i class="icofont-location-pin"></i></span>Summer C</li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="heading-Five">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-Five" aria-expanded="true"
                                            aria-controls="collapse-Five">
                                            <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                <span class="accor-thumb">
                                                    <img src="assets/images/event/member/05.png" alt="speaker">
                                                    <span class="child-thumb">
                                                        <img src="assets/images/event/member/06.png" alt="speaker">
                                                    </span>
                                                    <span class="child-thumb-2">
                                                        <img src="assets/images/event/member/02.png" alt="speaker">
                                                    </span>
                                                </span>
                                                <span class="h7">Registration & Breakfast</span>
                                            </span>

                                        </button>
                                    </div>
                                    <div id="collapse-Five" class="accordion-collapse collapse show"
                                        aria-labelledby="heading-Five" data-bs-parent="#accordionExample-2">
                                        <div class="accordion-body">
                                            <p>Phosrescen ntiate prncple centered networks via magnetc
                                                Apildous eviscuate standards complant fulys tested metrs
                                                without creative desi futureproof web</p>
                                            <ul class="ev-schedule-meta d-flex flex-wrap">
                                                <li><span><i class="icofont-user"></i></span>Diane, Cuning</li>
                                                <li><span><i class="icofont-clock-time"></i></span>8:00am - 9:00am</li>
                                                <li><span><i class="icofont-location-pin"></i></span>Summer C</li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="heading-Six">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse-Six"
                                            aria-expanded="true" aria-controls="collapse-Six">
                                            <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                <span class="accor-thumb">
                                                    <img src="assets/images/event/member/06.png" alt="speaker">
                                                    <span class="child-thumb">
                                                        <img src="assets/images/event/member/02.png" alt="speaker">
                                                    </span>
                                                    <span class="child-thumb-2">
                                                        <img src="assets/images/event/member/03.png" alt="speaker">
                                                    </span>
                                                </span>
                                                <span class="h7">Digital Event Information</span>
                                            </span>

                                        </button>
                                    </div>
                                    <div id="collapse-Six" class="accordion-collapse collapse"
                                        aria-labelledby="heading-Six" data-bs-parent="#accordionExample-2">
                                        <div class="accordion-body">
                                            <p>Phosrescen ntiate prncple centered networks via magnetc
                                                Apildous eviscuate standards complant fulys tested metrs
                                                without creative desi futureproof web</p>
                                            <ul class="ev-schedule-meta d-flex flex-wrap">
                                                <li><span><i class="icofont-user"></i></span>Diane, Cuning</li>
                                                <li><span><i class="icofont-clock-time"></i></span>8:00am - 9:00am</li>
                                                <li><span><i class="icofont-location-pin"></i></span>Summer C</li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="heading-Seven">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse-Seven"
                                            aria-expanded="true" aria-controls="collapse-Seven">
                                            <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                <span class="accor-thumb">
                                                    <img src="assets/images/event/member/07.png" alt="speaker">
                                                    <span class="child-thumb">
                                                        <img src="assets/images/event/member/02.png" alt="speaker">
                                                    </span>
                                                </span>
                                                <span class="h7">Reinventing Experiences</span>
                                            </span>

                                        </button>
                                    </div>
                                    <div id="collapse-Seven" class="accordion-collapse collapse"
                                        aria-labelledby="heading-Seven" data-bs-parent="#accordionExample-2">
                                        <div class="accordion-body">
                                            <p>Phosrescen ntiate prncple centered networks via magnetc
                                                Apildous eviscuate standards complant fulys tested metrs
                                                without creative desi futureproof web</p>
                                            <ul class="ev-schedule-meta d-flex flex-wrap">
                                                <li><span><i class="icofont-user"></i></span>Diane, Cuning</li>
                                                <li><span><i class="icofont-clock-time"></i></span>8:00am - 9:00am</li>
                                                <li><span><i class="icofont-location-pin"></i></span>Summer C</li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="heading-Eight">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse-Eight"
                                            aria-expanded="true" aria-controls="collapse-Eight">
                                            <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                <span class="accor-thumb">
                                                    <img src="assets/images/event/member/04.png" alt="speaker">

                                                </span>
                                                <span class="h7">Dinner Break</span>
                                            </span>

                                        </button>
                                    </div>
                                    <div id="collapse-Eight" class="accordion-collapse collapse"
                                        aria-labelledby="heading-Eight" data-bs-parent="#accordionExample-2">
                                        <div class="accordion-body">
                                            <p>Phosrescen ntiate prncple centered networks via magnetc
                                                Apildous eviscuate standards complant fulys tested metrs
                                                without creative desi futureproof web</p>
                                            <ul class="ev-schedule-meta d-flex flex-wrap">
                                                <li><span><i class="icofont-user"></i></span>Diane, Cuning</li>
                                                <li><span><i class="icofont-clock-time"></i></span>8:00am - 9:00am</li>
                                                <li><span><i class="icofont-location-pin"></i></span>Summer C</li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="heading-Nine">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse-Nine"
                                            aria-expanded="true" aria-controls="collapse-Nine">
                                            <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                <span class="accor-thumb">
                                                    <img src="assets/images/event/member/08.png" alt="speaker">
                                                    <span class="child-thumb">
                                                        <img src="assets/images/event/member/02.png" alt="speaker">
                                                    </span>
                                                    <span class="child-thumb-2">
                                                        <img src="assets/images/event/member/03.png" alt="speaker">
                                                    </span>
                                                </span>
                                                <span class="h7">Live Music Performance</span>
                                            </span>

                                        </button>
                                    </div>
                                    <div id="collapse-Nine" class="accordion-collapse collapse"
                                        aria-labelledby="heading-Nine" data-bs-parent="#accordionExample-2">
                                        <div class="accordion-body">
                                            <p>Phosrescen ntiate prncple centered networks via magnetc
                                                Apildous eviscuate standards complant fulys tested metrs
                                                without creative desi futureproof web</p>
                                            <ul class="ev-schedule-meta d-flex flex-wrap">
                                                <li><span><i class="icofont-user"></i></span>Diane, Cuning</li>
                                                <li><span><i class="icofont-clock-time"></i></span>8:00am - 9:00am</li>
                                                <li><span><i class="icofont-location-pin"></i></span>Summer C</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="schedule-btns text-center mt-5">
                    <a href="#" class="lab-btn">Download Schedule</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========schedule Section end Here========== -->


    <!-- Speakers section start here 
    <section class="speakers-section padding-tb padding-b">
        <div class="container">
            <div class="section-header">
                <h2>Our Speakers</h2>
                <p>Meet Our World’s Leading Speakers</p>
            </div>
            <div class="section-wrapper shape-b">
                <div class="row g-5">
                    <div class="col-lg-6 col-12">
                        <div class="speaker-item">
                            <div class="speaker-inner">
                                <div class="speaker-thumb">
                                    <img src="assets/images/speakers/01.png" alt="speaker">
                                </div>
                                <div class="speaker-content">
                                    <div class="spkr-content-title">
                                        <h5><a href="speaker-details.html">Zisnad Q. Alex</a> </h5>
                                        <p>Speaker</p>
                                    </div>
                                    <div class="spkr-content-details">
                                        <p>Completey conceplua high quality
                                            nice markes rather than long term
                                            impact human capital</p>
                                        <ul class="social-icons">
                                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                            <li><a href="#"><i class="icofont-instagram"></i></a></li>
                                            <li><a href="#"><i class="icofont-dribble"></i></a></li>
                                            <li><a href="#"><i class="icofont-vimeo"></i></a></li>
                                            <li><a href="#"><i class="icofont-behance"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="speaker-item">
                            <div class="speaker-inner">
                                <div class="speaker-thumb">
                                    <img src="assets/images/speakers/02.png" alt="speaker">
                                </div>
                                <div class="speaker-content">
                                    <div class="spkr-content-title">
                                        <h5><a href="speaker-details.html">Taylor R. Miller </a> </h5>
                                        <p>Speaker</p>
                                    </div>
                                    <div class="spkr-content-details">
                                        <p>Completey conceplua high quality
                                            nice markes rather than long term
                                            impact human capital</p>
                                        <ul class="social-icons">
                                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                            <li><a href="#"><i class="icofont-instagram"></i></a></li>
                                            <li><a href="#"><i class="icofont-dribble"></i></a></li>
                                            <li><a href="#"><i class="icofont-vimeo"></i></a></li>
                                            <li><a href="#"><i class="icofont-behance"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="speaker-item">
                            <div class="speaker-inner">
                                <div class="speaker-thumb">
                                    <img src="assets/images/speakers/03.png" alt="speaker">
                                </div>
                                <div class="speaker-content">
                                    <div class="spkr-content-title">
                                        <h5><a href="speaker-details.html"> Robot S. Jhonson</a> </h5>
                                        <p>Speaker</p>
                                    </div>
                                    <div class="spkr-content-details">
                                        <p>Completey conceplua high quality
                                            nice markes rather than long term
                                            impact human capital</p>
                                        <ul class="social-icons">
                                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                            <li><a href="#"><i class="icofont-instagram"></i></a></li>
                                            <li><a href="#"><i class="icofont-dribble"></i></a></li>
                                            <li><a href="#"><i class="icofont-vimeo"></i></a></li>
                                            <li><a href="#"><i class="icofont-behance"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="speaker-item">
                            <div class="speaker-inner">
                                <div class="speaker-thumb">
                                    <img src="assets/images/speakers/04.png" alt="speaker">
                                </div>
                                <div class="speaker-content">
                                    <div class="spkr-content-title">
                                        <h5><a href="speaker-details.html">Ekez O. Menth</a> </h5>
                                        <p>Speaker</p>
                                    </div>
                                    <div class="spkr-content-details">
                                        <p>Completey conceplua high quality
                                            nice markes rather than long term
                                            impact human capital</p>
                                        <ul class="social-icons">
                                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                            <li><a href="#"><i class="icofont-instagram"></i></a></li>
                                            <li><a href="#"><i class="icofont-dribble"></i></a></li>
                                            <li><a href="#"><i class="icofont-vimeo"></i></a></li>
                                            <li><a href="#"><i class="icofont-behance"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="speaker-item">
                            <div class="speaker-inner">
                                <div class="speaker-thumb">
                                    <img src="assets/images/speakers/05.png" alt="speaker">
                                </div>
                                <div class="speaker-content">
                                    <div class="spkr-content-title">
                                        <h5><a href="speaker-details.html">Broklyn L. Doel</a> </h5>
                                        <p>Speaker</p>
                                    </div>
                                    <div class="spkr-content-details">
                                        <p>Completey conceplua high quality
                                            nice markes rather than long term
                                            impact human capital</p>
                                        <ul class="social-icons">
                                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                            <li><a href="#"><i class="icofont-instagram"></i></a></li>
                                            <li><a href="#"><i class="icofont-dribble"></i></a></li>
                                            <li><a href="#"><i class="icofont-vimeo"></i></a></li>
                                            <li><a href="#"><i class="icofont-behance"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="speaker-item">
                            <div class="speaker-inner">
                                <div class="speaker-thumb">
                                    <img src="assets/images/speakers/06.png" alt="speaker">
                                </div>
                                <div class="speaker-content">
                                    <div class="spkr-content-title">
                                        <h5><a href="speaker-details.html">Mr. Rassel H.</a> </h5>
                                        <p>Speaker</p>
                                    </div>
                                    <div class="spkr-content-details">
                                        <p>Completey conceplua high quality
                                            nice markes rather than long term
                                            impact human capital</p>
                                        <ul class="social-icons">
                                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                            <li><a href="#"><i class="icofont-instagram"></i></a></li>
                                            <li><a href="#"><i class="icofont-dribble"></i></a></li>
                                            <li><a href="#"><i class="icofont-vimeo"></i></a></li>
                                            <li><a href="#"><i class="icofont-behance"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="download-button text-center mt-5">
                    <a class="lab-btn">Download Schedule</a>
                </div>
            </div>
        </div>
    </section>
     Speakers section end here -->

    <!-- ======= Sponsor sectin start here ======== -->
    <section class="sponsor-section padding-tb padding-b bg-image">
        <div class="container">
            <div class="section-header">
                <h2>Event Sponsors</h2>
                <p>Check Who Makes The Event Possible</p>
            </div>
            <div class="section-wrapper text-center shape-b">
                <div class="all-sponsor">
                    <div class="platinum-sponsor">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="assets/images/sponsor/01.png" alt="sponsor">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/sponsor/02.png" alt="sponsor">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/sponsor/03.png" alt="sponsor">
                            </div>
                        </div>
                    </div>
                    <div class="gold-sponsor">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="assets/images/sponsor/04.png" alt="sponsor">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/sponsor/05.png" alt="sponsor">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/sponsor/06.png" alt="sponsor">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/sponsor/07.png" alt="sponsor">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/sponsor/08.png" alt="sponsor">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/sponsor/09.png" alt="sponsor">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/sponsor/10.png" alt="sponsor">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/sponsor/11.png" alt="sponsor">
                            </div>
                        </div>
                    </div>
                    <div class="silver-sponsor">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="assets/images/sponsor/12.png" alt="sponsor">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/sponsor/13.png" alt="sponsor">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/sponsor/14.png" alt="sponsor">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/sponsor/15.png" alt="sponsor">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/sponsor/16.png" alt="sponsor">
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="lab-btn"><span>
                        Become a Sponsor
                    </span></a>
            </div>
        </div>
    </section>
    <!-- ======= Sponsor sectin end here ======== -->

    <!-- ===== Pricing Plan Start here  ==== 
    <section class="pricing-plan-section padding-tb padding-b">
        <div class="container">
            <div class="section-header">
                <h2>Our Pricing Plan</h2>
                <p>Choose Your Plan That Fits You Best</p>
            </div>
            <div class="section-wrapper">
                <div class="row g-4 justify-content-center">
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="pricing-item">
                            <div class="pricing-inner">
                                <div class="pricing-header">
                                    <h3>1-Day-Pass</h3>
                                    <p>For Normal Seating</p>

                                </div>
                                <div class="pricing-content">
                                    <ul class="facilites">
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> Event Attendance
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> Networking Area Access
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> Tea And Coffee
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> Lunch
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> Free Wifi
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> 3 Lottery Ticket
                                        </li>
                                    </ul>
                                    <div class="get-ticket">
                                        <a href="#">
                                            <ul>
                                                <li class="vat">
                                                    <h4>$24</h4>
                                                    <p>ex. VAT</p>
                                                </li>
                                                <li class="icon"><i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                </li>
                                                <li class="ticket-text">
                                                    <p>Get Ticket</p>
                                                </li>
                                            </ul>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="pricing-item">
                            <div class="pricing-inner">
                                <div class="pricing-header">
                                    <h3>Full Pass</h3>
                                    <p>For Corporate Seating</p>

                                </div>
                                <div class="pricing-content">
                                    <ul class="facilites">
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> Event Attendance
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> Networking Area Access
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> Tea And Coffee
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> Lunch
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> Free Wifi
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> 3 Lottery Ticket
                                        </li>
                                    </ul>
                                    <div class="get-ticket">
                                        <a href="#">
                                            <ul>
                                                <li class="vat">
                                                    <h4>$24</h4>
                                                    <p>ex. VAT</p>
                                                </li>
                                                <li class="icon"><i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                </li>
                                                <li class="ticket-text">
                                                    <p>Get Ticket</p>
                                                </li>
                                            </ul>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="pricing-item">
                            <div class="pricing-inner">
                                <div class="pricing-header">
                                    <h3>VIP Pass</h3>
                                    <p>For VIP Seating</p>

                                </div>
                                <div class="pricing-content">
                                    <ul class="facilites">
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> Event Attendance
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> Networking Area Access
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> Tea And Coffee
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> Lunch
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> Free Wifi
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> 3 Lottery Ticket
                                        </li>
                                    </ul>
                                    <div class="get-ticket">
                                        <a href="#">
                                            <ul>
                                                <li class="vat">
                                                    <h4>$24</h4>
                                                    <p>ex. VAT</p>
                                                </li>
                                                <li class="icon"><i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                </li>
                                                <li class="ticket-text">
                                                    <p>Get Ticket</p>
                                                </li>
                                            </ul>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     ===== Pricing Plan end here  ==== -->

    <!-- ===== Event Gift start here  ==== 
    <section class="event-gift-section padding-tb padding-b bg-image">
        <div class="container">
            <div class="row flex-lg-row-reverse">
                <div class="col-lg-6 col-12">
                    <div class="section-header">
                        <h2>Event Gifts</h2>
                        <p>Our Complimentary Gifts For You</p>
                    </div>
                    <div class="section-wrapper">
                        <div class="gift-content">
                            <p>
                                It is a long established fact that a reader will be distracted by theing
                                readable content of a page when looking at its layout. The point info
                                using Lorem Ipsum is that it has a more-or-less
                            </p>
                            <ul class="gift-list">
                                <li class="gift-item"><span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </span> Exclusive T-shirt</li>
                                <li class="gift-item"><span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </span> Lather Bag</li>
                                <li class="gift-item"><span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </span> Mug</li>
                                <li class="gift-item"><span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </span> Gift Hamper</li>
                            </ul>
                            <div class="register-button">
                                <a href="#" class="lab-btn"><span>Register Now</span> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="image-part">
                        <img src="assets/images/gift/01.png" alt="gift-img">
                    </div>
                </div>
            </div>
        </div>
    </section>
     ===== Event Gift end here  ==== -->

    <!-- ===== News Section Start here  ==== 
    <section class="news-section padding-tb padding-b">
        <div class="container">
            <div class="section-header">
                <h2>Recent News</h2>
                <p>Start Your Remarkable Journey</p>
            </div>
            <div class="section-wrapper">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="news-item">
                            <div class="news-inner">
                                <div class="news-thumb">
                                    <img src="assets/images/news/01.jpg" alt="Image">
                                </div>
                                <div class="news-content">
                                    <h6><a href="#">
                                            How Marching For Science
                                            Risks Politicizing It
                                        </a>
                                    </h6>
                                    <p><span><i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span> December 24, 2021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="news-item">
                            <div class="news-inner">
                                <div class="news-thumb">
                                    <img src="assets/images/news/02.jpg" alt="Image">
                                </div>
                                <div class="news-content">
                                    <h6><a href="#">
                                            How Marching For Science
                                            Risks Politicizing It
                                        </a>
                                    </h6>
                                    <p><span><i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span> December 24, 2021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="news-item">
                            <div class="news-inner">
                                <div class="news-thumb">
                                    <img src="assets/images/news/03.jpg" alt="Image">
                                </div>
                                <div class="news-content">
                                    <h6><a href="#">
                                            How Marching For Science
                                            Risks Politicizing It
                                        </a>
                                    </h6>
                                    <p><span><i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span> December 24, 2021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        ===== News Section end here  ==== -->

    <!-- Footer Section start here -->
    <footer class="footer-section" style="background-image: url(assets/images/bg-images/footer-bg.png);">
        <div class="footer-top">
            <div class="container">
                <div class="row g-3 justify-content-center g-lg-0">
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="footer-top-item lab-item">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="assets/images/footer/footer-top/01.png" alt="Phone-icon">
                                </div>
                                <div class="lab-content">
                                    <span>Celular: +51 996 671 246</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="footer-top-item lab-item">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="assets/images/footer/footer-top/02.png" alt="email-icon">
                                </div>
                                <div class="lab-content">
                                    <span>Correo: CrystalPass@gmail.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="footer-top-item lab-item">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="assets/images/footer/footer-top/03.png" alt="location-icon">
                                </div>
                                <div class="lab-content">
                                    <span>Dirección: Jr. Lima 433 - Huancayo</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-middle padding-tb">
            <div class="container">
                <div class="row shape-c">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="footer-middle-item-wrapper">
                            <div class="footer-middle-item mb-5 mb-lg-0">
                                <div class="fm-item-title">
                                    <h5>Ubicacion</h5>
                                </div>
                                <div class="fm-item-content">
                                    <p class="mb-30">Encuentranos en Jr. Lima 433 - Huancayo</p>
                                    <img class="rounded footer-abt-img" src="   "
                                        alt="about-image">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="footer-middle-item-wrapper">
                            <div class="footer-middle-item-3 mb-5 mb-lg-0">
                                <div class="fm-item-title">
                                    <h5>OUR NEWSLETTER</h5>
                                </div>
                                <div class="fm-item-content">
                                    <p>Tienes una sugerencia o deseas trabajarcon nosotros, escribenos.</p>
                                    <form>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Correo">
                                        </div>
                                        <button type="submit" class="lab-btn">Enviar mensaje <i
                                                class="icofont-paper-plane"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-bottom-content text-center">
                            <p>&copy;2023 <a href="index.html">Crystal Pass</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section end here -->


    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="icofont-bubble-up"></i><span class="pluse_1"></span><span
            class="pluse_2"></span></a>
    <!-- scrollToTop ending here -->


    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/fontawesome.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/circularProgressBar.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/lightcase.js"></script>
    <script src="assets/js/functions.js"></script>
</body>


<!-- Mirrored from labartisan.net/demo/kagont/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Oct 2023 18:58:42 GMT -->
</html>