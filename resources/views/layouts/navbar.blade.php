
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Hiba El Farissi || Personal Portfolio</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/icon.png">
        <!-- CSS here -->
         <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/vendor/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/vendor/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/vendor/fontawesome-pro.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/vendor/hover-reveal.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/vendor/icomoon.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/vendor/spacing.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    </head>
<body>

    <!-- Preloader start -->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!-- Preloader start -->

    <!-- Backtotop start -->
    <div class="backtotop-wrap cursor-pointer">
        <svg class="backtotop-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Backtotop end -->

     <!-- Offcanvas area start -->
   <div class="fix">
        <div class="offcanvas__area">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="/">
                                {{-- <img src="assets/imgs/logo/logo.svg" alt="logo not found"> --}}
                                <img src="assets/imgs/logoo.png" alt="logo not found">
                             </a>
                        </div>
                        <div class="offcanvas__close">
                            <button class="offcanvas-close-icon animation--flip">
                                <span class="offcanvas-m-lines">
                                    <span class="offcanvas-m-line line--1"></span><span
                                        class="offcanvas-m-line line--2"></span><span
                                        class="offcanvas-m-line line--3"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="mobile-menu fix"></div>
                    <div class="offcanvas__social">
                        <h4 class="offcanvas__title mb-20">Subscribe & Follow</h4>
                        <div class="theme__social">
                            <a href="https://web.facebook.com/liya.hiba.5/"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/lea_heba/"><i class="icon-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/hiba-el-farissi-8161b5279/"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="https://github.com/HibaElFarissi"><i class="fa-brands fa-github"></i></a>
                        </div>
                    </div>
                    <div class="offcanvas__btn">
                        <div class="header__btn-wrap">
                            <a class="bd-btn is-btn-anim" href="#">
                                <span class="bd-btn-inner">
                                    <span class="bd-btn-normal">Purchase now</span>
                                    <span class="bd-btn-hover">Purchase now</span>
                                    <i class="contentHidden"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>
    <div class="offcanvas__overlay-white"></div>
    <!-- Offcanvas area end-->

    <!-- Header area start -->
    <header>
        <div id="header-sticky" class="header__area header-transparent">
            <div class="container">
                <div class="mega__menu-wrapper p-relative">
                    {{-- logo --}}
                    <div class="header__main">
                        <div class="header__left">
                            {{-- @forelse ($logos as $item ) --}}
                                <div class="header__logo">
                                    <a href="/">
                                        <img src="assets/imgs/logoo.png" alt="logo not found">
                                        {{-- <img src="storage/{{ $item->image }}" alt="Banner-image"> --}}
                                    </a>
                                </div>
                            {{-- @empty
                                <p>no logo found !</p>
                            @endforelse --}}

                        </div>
                        <div class="header__middle">
                            <div class="mean__menu-wrapper d-none d-md-block">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul class="onepage-menu">
                                            <li>
                                                <a href="/">Home</a>
                                            </li>
                                            <li>
                                                <a href="/About">About</a>
                                            </li>
                                            <li><a href="/Service">Services</a>
                                            </li>
                                            <li><a href="/Projects">Protolio</a>
                                            </li>
                                            <li><a href="/Blog">Blog</a>
                                            </li>
                                        </ul>
                                    </nav>

                                    <div class="header__hamburger ml-20 d-none">
                                        <button type="button" class="hamburger-btn offcanvas-open-btn">
                                            <span>01</span>
                                            <span>01</span>
                                            <span>01</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header__right">
                            <div class="header__action d-flex align-items-center">
                                <div
                                    class="header__btn-wrap d-none d-sm-inline-flex d-inline-flex align-items-center gap-5">
                                    <a class="bd-btn is-btn-anim bordered-blue" href="{{ route('download.cv') }}">
                                        <span class="bd-btn-inner">
                                            <span class="bd-btn-normal">Dowland CV</span>
                                            <span class="bd-btn-hover">Dowland CV</span>
                                            <i class="contentHidden"></i>
                                        </span>
                                    </a>

                                </div>
                                <div class="header__hamburger ml-20 d-lg-none">
                                    <div class="sidebar__toggle">
                                        <a class="bar-icon" href="javascript:void(0)">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="header__hamburger ml-20 d-none">
                                    <button type="button" class="hamburger-btn offcanvas-open-btn">
                                        <span>01</span>
                                        <span>01</span>
                                        <span>01</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header area end -->

    <!-- Body main wrapper start -->
    <main>
        @yield('content')
    </main>
    <!-- Body main wrapper end -->

<!-- Footer area start -->
<footer>
    <section class="footer__area section-space-top">
        <div class="container">
            <div class="footer__top">
                <div class="footer__logo">
                    <a href="/">
                        <h5 class="text-uppercase">@ Social Media</h5>
                        {{-- <img src="assets/imgs/logo/logo.svg" alt="logo not found"> --}}
                        {{-- <img src="assets/imgs/logoo.png" alt="logo not found"> --}}
                    </a>
                </div>
                <div class="footer__content">
                    <div class="theme__social">
                        <a href="https://web.facebook.com/liya.hiba.5/"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/lea_heba/"><i class="icon-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/hiba-el-farissi-8161b5279/"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="https://github.com/HibaElFarissi"><i class="fa-brands fa-github"></i></a>
                    </div>
                </div>
            </div>
            <!-- Section divider -->
            <div class="section__divider">
                <hr>
            </div>
            <div class="footer__bottom">
                <div class="footer__widget">
                    <div class="footer__widget-title">
                        <h5>About Me</h5>
                    </div>
                    <div class="footer__widget-content">
                        <p class="mb-30">
                            Meet Hiba, a dynamic full-stack developer known for her passion for crafting exceptional digital experiences.
                             With expertise in both frontend and backend development, she brings a unique blend of creativity to every project she undertakes.
                             When not coding,
                             Hiba enjoys exploring new technologies.
                        </p>
                    </div>
                </div>


                <div class="footer__widget">
                    <div class="footer__widget-title">
                        <h5>Contact Me</h5>
                    </div>
                    <div class="footer__widget-content">
                        <div class="contact__info-item style-two">
                            <ul>
                                <li>
                                    <div class="contact__info">
                                        <div class="contact__info-icon">
                                            <span>
                                                <i class="icon-phone"></i>
                                            </span>
                                        </div>
                                        <div class="contact__info-content">
                                            <p>Phone</p>
                                            <h6><a href="tel:+212615256198">+212615256198</a></h6>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact__info">
                                        <div class="contact__info-icon">
                                            <span>
                                                <i class="icon-envelope"></i>
                                            </span>
                                        </div>
                                        <div class="contact__info-content">
                                            <p>Email</p>
                                            <h6><a href="mailto:elfarissihiba780@gmail.com">elfarissihiba780@gmail.com</a></h6>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="footer__widget">
                    <div class="footer__widget-title">
                        <h5>Services</h5>
                    </div>
                    <div class="footer__links">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="{{ url('About') }}">About Me</a></li>
                            <li><a href="{{ url('Service') }}">Services</a></li>
                            <li><a href="{{ url('Projects') }}">Protfolio</a></li>
                            <li><a href="{{ url('Blog') }}">Blog</a></li>
                        </ul>
                    </div>
                </div>
                {{-- Newsletter --}}
                <div class="footer__widget">
                    <div class="footer__widget-title">
                        <h5>Subscribe Now</h5>
                    </div>
                    <!-- Subscribe Form -->
                    <div class="footer__widget-content">
                        <p>Subscribe to get the latest news from me</p>
                    <form action="{{ route('send.email') }}"  method="POST" class="form-subcriber d-flex wow fadeIn animated">
                        @csrf
                            <div class="footer__input">
                                <input type="text" placeholder="Enter your mail" name="email">
                                <button class="footer__btn" type="submit"><i class="icon-plane"></i></button>
                            </div>
                        </form>
                        <p>*Send me a message</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Section divider -->
        <div class="section__divider">
            <hr>
        </div>
        <div class="footer__copyright style-two">
            <div class="container">
                <div class="footer__copyright">
                    <p>Copyright @ <?php echo date("Y") ?> <a href="/">Hiba EL Farissi.</a> All Right Reserved</p>
                </div>
            </div>
        </div>
    </section>
</footer>
<!-- Footer area end -->


    <!-- JS here -->
    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/meanmenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/tween-max.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/wow.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/vanilla.tilt.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/counterup.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/hover-reveal.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/parallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/parallax-scroll.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/js_circle-progress.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>


















{{--
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Hiba El Farissi || Personal Portfolio</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
    <!-- Place favicon.ico in the root directory -->
    {{-- <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/icon.png"> --}}
    <!-- CSS here -->
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/fontawesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/hover-reveal.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>
<body> --}}

    <!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

    <!-- Preloader start -->
    {{-- <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div> --}}
    <!-- Preloader start -->

    <!-- Backtotop start -->
    {{-- <div class="backtotop-wrap cursor-pointer">
        <svg class="backtotop-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div> --}}
    <!-- Backtotop end -->

    <!-- Offcanvas area start -->
    {{-- <div class="fix">
        <div class="offcanvas__area">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="/">
                                <img src="assets/imgs/logo/logo.svg" alt="logo not found"> --}}
                                {{-- <img src="assets/imgs/logoo.png" alt="logo not found"> --}}
                            {{-- </a>
                        </div>
                        <div class="offcanvas__close">
                            <button class="offcanvas-close-icon animation--flip">
                                <span class="offcanvas-m-lines">
                                    <span class="offcanvas-m-line line--1"></span><span
                                        class="offcanvas-m-line line--2"></span><span
                                        class="offcanvas-m-line line--3"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="mobile-menu fix"></div>
                    <div class="offcanvas__social">
                        <h4 class="offcanvas__title mb-20">Subscribe & Follow</h4>
                        <div class="theme__social">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="icon-twiter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#"><i class="fa-brands fa-behance"></i></a>
                        </div>
                    </div>
                    <div class="offcanvas__btn">
                        <div class="header__btn-wrap">
                            <a class="bd-btn is-btn-anim" href="#">
                                <span class="bd-btn-inner">
                                    <span class="bd-btn-normal">Purchase now</span>
                                    <span class="bd-btn-hover">Purchase now</span>
                                    <i class="contentHidden"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>
    <div class="offcanvas__overlay-white"></div> --}}
    <!-- Offcanvas area end-->

    <!-- Header area start -->
    {{-- <header>
        <div id="header-sticky" class="header__area header-transparent">
            <div class="container">
                <div class="mega__menu-wrapper p-relative">
                    <div class="header__main">
                        <div class="header__left">
                            <div class="header__logo">
                                <a href="/"> --}}
                                    {{-- <img class="logo__white" src="assets/imgs/logo/logo.svg" alt="logo not found"> --}}
                                    {{-- <img src="assets/imgs/logoo.png" alt="logo not found">
                                </a>
                            </div>
                        </div>
                        <div class="header__middle">
                            <div class="mean__menu-wrapper d-none d-md-block">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul class="onepage-menu">
                                            <li>
                                                <a href="/">Home</a>
                                            </li>
                                            <li>
                                                <a href="/About">About</a>
                                            </li>
                                            <li><a href="/Service">Services</a>
                                            </li>
                                            <li><a href="/Projects">Protolio</a>
                                            </li>
                                            <li><a href="/Blog">Blog</a>
                                            </li>
                                        </ul>
                                    </nav>

                                    <div class="header__hamburger ml-20 d-none">
                                        <button type="button" class="hamburger-btn offcanvas-open-btn">
                                            <span>01</span>
                                            <span>01</span>
                                            <span>01</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header__right">
                            <div class="header__action d-flex align-items-center">
                                <div
                                    class="header__btn-wrap d-none d-sm-inline-flex d-inline-flex align-items-center gap-5">
                                    <a class="bd-btn is-btn-anim bordered-blue" href="{{ route('download.cv') }}">
                                        <span class="bd-btn-inner">
                                            <span class="bd-btn-normal">Dowland CV</span>
                                            <span class="bd-btn-hover">Dowland CV</span>
                                            <i class="contentHidden"></i>
                                        </span>
                                    </a>

                                </div>
                                <div class="header__hamburger ml-20 d-lg-none">
                                    <div class="sidebar__toggle">
                                        <a class="bar-icon" href="javascript:void(0)">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="header__hamburger ml-20 d-none">
                                    <button type="button" class="hamburger-btn offcanvas-open-btn">
                                        <span>01</span>
                                        <span>01</span>
                                        <span>01</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header> --}}
    <!-- Header area end -->

    {{-- <main>
        @yield('content')
    </main> --}}


<!-- Footer area start -->
{{-- <footer>
    <section class="footer__area section-space-top">
        <div class="container">
            <div class="footer__top">
                <div class="footer__logo">
                    <a href="/">
                        <h5 class="text-uppercase">@ Social Media</h5> --}}
                        {{-- <img src="assets/imgs/logo/logo.svg" alt="logo not found"> --}}
                        {{-- <img src="assets/imgs/logoo.png" alt="logo not found"> --}}
                    {{-- </a>
                </div>
                <div class="footer__content">
                    <div class="theme__social">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="icon-twiter"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="#"><i class="fa-brands fa-behance"></i></a>
                    </div>
                </div>
            </div> --}}
            <!-- Section divider -->
            {{-- <div class="section__divider">
                <hr>
            </div>
            <div class="footer__bottom">
                <div class="footer__widget">
                    <div class="footer__widget-title">
                        <h5>About Me</h5>
                    </div>
                    <div class="footer__widget-content">
                        <p class="mb-30">
                            Meet Hiba, a dynamic full-stack developer known for her passion for crafting exceptional digital experiences.
                             With expertise in both frontend and backend development, she brings a unique blend of creativity to every project she undertakes.
                             When not coding,
                             Hiba enjoys exploring new technologies.
                        </p>
                    </div>
                </div>


                <div class="footer__widget">
                    <div class="footer__widget-title">
                        <h5>Contact Me</h5>
                    </div>
                    <div class="footer__widget-content">
                        <div class="contact__info-item style-two">
                            <ul>
                                <li>
                                    <div class="contact__info">
                                        <div class="contact__info-icon">
                                            <span>
                                                <i class="icon-phone"></i>
                                            </span>
                                        </div>
                                        <div class="contact__info-content">
                                            <p>Phone</p>
                                            <h6><a href="tel:+212615256198">+212615256198</a></h6>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact__info">
                                        <div class="contact__info-icon">
                                            <span>
                                                <i class="icon-envelope"></i>
                                            </span>
                                        </div>
                                        <div class="contact__info-content">
                                            <p>Email</p>
                                            <h6><a href="mailto:elfarissihiba780@gmail.com">elfarissihiba780@gmail.com</a></h6>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>




                <div class="footer__widget">
                    <div class="footer__widget-title">
                        <h5>Services</h5>
                    </div>
                    <div class="footer__links">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="{{ url('About') }}">About Me</a></li>
                            <li><a href="{{ url('Service') }}">Services</a></li>
                            <li><a href="{{ url('Projects') }}">Protfolio</a></li>
                            <li><a href="{{ url('Blog') }}">Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer__widget">
                    <div class="footer__widget-title">
                        <h5>Subscribe Now</h5>
                    </div>
                    <div class="footer__widget-content">
                        <p>Subscribe to get the latest news from me</p>
                        <form action="#">
                            <div class="footer__input">
                                <input type="text" placeholder="Enter your mail">
                                <button class="footer__btn" type="submit"><i class="icon-plane"></i></button>
                            </div>
                        </form>
                        <p>*I am not going to save your data</p>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Section divider -->
        {{-- <div class="section__divider">
            <hr>
        </div>
        <div class="footer__copyright style-two">
            <div class="container">
                <div class="footer__copyright">
                    <p>Copyright @ 2024 <a href="/">Hiba EL Farissi.</a> All Right Reserved</p>
                </div>
            </div>
        </div>
    </section>
</footer> --}}
<!-- Footer area end -->

<!-- JS here -->
{{-- <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/meanmenu.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/swiper.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/tween-max.js') }}"></script>
<script src="{{ asset('assets/js/plugins/wow.js') }}"></script>
<script src="{{ asset('assets/js/vendor/magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/vanilla.tilt.js') }}"></script>
<script src="{{ asset('assets/js/plugins/counterup.js') }}"></script>
<script src="{{ asset('assets/js/plugins/nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/hover-reveal.js') }}"></script>
<script src="{{ asset('assets/js/plugins/parallax.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/parallax-scroll.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jarallax.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/ajax-form.js') }}"></script>
<script src="{{ asset('assets/js/vendor/js_circle-progress.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script> --}}

{{-- @endsection --}}









