
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
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/imgs/icon.png') }}">
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
                            @forelse ($logo as $item )
                                <div class="header__logo">
                                    <a href="/">
                                        {{-- <img src="assets/imgs/logoo.png" alt="logo not found"> --}}
                                        <img src="{{ asset('storage/' . $item->image) }}"alt="{{ $item->image }}">
                                    </a>
                                </div>
                            @empty
                                <p>no logo found !</p>
                            @endforelse
                        </div>
                        <div class="header__middle">
                            <div class="mean__menu-wrapper d-none d-md-block">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul class="onepage-menu">
                                            {{-- <li>
                                                <a href="/">Home</a>
                                            </li> --}}
                                            <li>
                                                <a href="{{ route('About') }}">About</a>
                                            </li>
                                            <li><a href="{{ route('Our-services') }}">Services</a>
                                            </li>
                                            <li><a href="{{ route('Projects') }}">Projects</a>
                                            </li>
                                            <li><a href="{{ route('Design_all') }}">Designs</a>
                                            </li>
                                            <li><a href="{{ route('Video_all') }}">Videos</a>
                                            </li>
                                            <li><a href="{{ route('Blog') }}">Blogs</a>
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
                                            <span class="bd-btn-normal">DOWLAND CV</span>
                                            <span class="bd-btn-hover">DOWLAND CV</span>
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



