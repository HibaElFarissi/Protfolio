@extends('layouts.navbar')

@section('content')

    <!-- Offcanvas area start -->
    <div class="fix">
        <div class="offcanvas__area">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="index.html">
                                <img src="assets/imgs/logo/logo.svg" alt="logo not found">
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
    <div class="offcanvas__overlay-white"></div>
    <!-- Offcanvas area end-->


    <!-- Body main wrapper start -->
    <main>

        <!-- breadcrumb area  start -->
        <section class="breadcrumb__area p-relative style-one is-breadcrumb-space">
            <div class="breadcrumb__thumb-bg include-bg bg__thumb-position"
                data-background="assets/imgs/breadcrumb/breadcrumb-bg-05.png"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-7 col-xl-7 col-lg-8">
                        <div class="breadcrumb__content-wrapper p-relative z-index-1 text-center">
                            <div class="breadcrumb__title-wrapperr">
                                <h1 class="breadcrumb__title mb-25">Blog Standard</h1>
                            </div>
                            <div class="breadcrumb__menu">
                                <nav>
                                    <ul>
                                        <li><span><a href="index.html">Home</a></span></li>
                                        <li><span><a href="blog.html">Blog</a></span></li>
                                        <li><span>Blog Standard</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area  end -->

        <!-- postbox area start -->
        <section class="postbox__area section-space">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-8 col-lg-8">
                        <div class="postbox__wrapper">
                            <article class="postbox__item">
                                <div class="postbox__thumb">
                                    <a href="#">
                                        <img src="assets/imgs/blog/post/blog-post-01.png" alt="image not found">
                                    </a>
                                </div>
                                <div class="postbox__content theme-bg-secondary">
                                    <div class="postbox__meta">
                                        <span>
                                            <i class="fa-light fa-user"></i>
                                            Allex Berly
                                        </span>
                                        <span>
                                            <i class="fa-light fa-calendar"></i>
                                            Nov 12, 2023
                                        </span>
                                        <span>
                                            <i class="fa-light fa-comment"></i>
                                            10 Comments
                                        </span>
                                    </div>
                                    <h4 class="postbox__title">
                                        <a href="blog-details.html">How to Design Your Project Faster and More
                                            Efficiently</a>
                                    </h4>
                                    <div class="postbox__text">
                                        <p>Some mistakenly believe that because you’re offering a certification it must
                                            be generalized and meant to give anyone a wide range of digital skills. But
                                            the benefits of continuous This is also a flexible form of learning. You may
                                            have a suite of microlearning courses. employees who feel that their skills
                                            are not being put to good use in their current job Choose which ones are
                                            important for any specific role within your company. </p>
                                    </div>
                                    <div class="postbox__btn">
                                        <a class="bd-btn is-btn-anim" href="blog-details.html">
                                            <span class="bd-btn-inner">
                                                <span class="bd-btn-normal">Know more</span>
                                                <span class="bd-btn-hover">Know more</span>
                                                <i class="contentHidden"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </article>
                            <article class="postbox__item">
                                <div class="postbox__thumb postbox__video p-relative">
                                    <a href="blog-details.html">
                                        <img src="assets/imgs/blog/post/blog-post-02.png" alt="image not found">
                                    </a>
                                    <a href="https://youtu.be/-WRZI63emjs" class="play-btn pulse-btn popup-video"><i
                                            class="fas fa-play"></i></a>
                                </div>
                                <div class="postbox__content theme-bg-secondary">
                                    <div class="postbox__meta">
                                        <span>
                                            <i class="fa-light fa-user"></i>
                                            Nayeem
                                        </span>
                                        <span>
                                            <i class="fa-light fa-calendar"></i>
                                            Nov 12, 2023
                                        </span>
                                        <span>
                                            <i class="fa-light fa-comment"></i>
                                            10 Comments
                                        </span>
                                    </div>
                                    <h4 class="postbox__title">
                                        <a href="blog-details.html">Easiest Way To Manage Project Employee And Others
                                            Work</a>
                                    </h4>
                                    <div class="postbox__text">
                                        <p>Investing in offering those paths early on can help you retain staff instead
                                            of letting them go. After all, this is the era of hybrid and remote working
                                            so flexibility and career advancement. employees who feel that their skills
                                            are not being put to good use in their current job </p>
                                    </div>
                                    <div class="postbox__btn">
                                        <a class="bd-btn is-btn-anim" href="blog-details.html">
                                            <span class="bd-btn-inner">
                                                <span class="bd-btn-normal">Know more</span>
                                                <span class="bd-btn-hover">Know more</span>
                                                <i class="contentHidden"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </article>
                            <article class="postbox__item">
                                <div class="postbox__quote theme-bg-secondary">
                                    <div class="postbox__quote-thumb">
                                        <img src="assets/imgs/shape/postbox-quote.png" alt="image not found">
                                    </div>
                                    <div class="postbox__quote-content">
                                        <span>Motivational Quote</span>
                                        <h5>“You have to be burning with an idea, or a problem, or a wrong that you want
                                            to right. If you’re not passion enough from the start,never stick it out.” .
                                        </h5>
                                        <cite>Steve Jobs</cite>
                                    </div>
                                </div>
                            </article>
                            <article class="postbox__item">
                                <div class="postbox__slider swiper p-relative">
                                    <div class="swiper-wrapper">
                                        <div class="postbox__slider-item swiper-slide">
                                            <img src="assets/imgs/blog/post/slider/postblog-slider-01.png"
                                                alt="image not found">
                                        </div>
                                        <div class="postbox__slider-item swiper-slide">
                                            <img src="assets/imgs/blog/post/slider/postblog-slider-02.png"
                                                alt="image not found">
                                        </div>
                                        <div class="postbox__slider-item swiper-slide">
                                            <img src="assets/imgs/blog/post/slider/postblog-slider-03.png"
                                                alt="image not found">
                                        </div>
                                    </div>
                                    <!-- If we need navigation buttons -->
                                    <div class="postbox__navigation">
                                        <button class="postbox__button-prev circle-btn slider__nav-btn"><i
                                                class="fa-regular fa-arrow-left-long"></i></button>
                                        <button class="postbox__button-next circle-btn ml-5 slider__nav-btn"><i
                                                class="fa-regular fa-arrow-right-long"></i></button>
                                    </div>
                                </div>
                                <div class="postbox__content theme-bg-secondary">
                                    <div class="postbox__meta">
                                        <span>
                                            <i class="fa-light fa-user"></i>
                                            Allex Berly
                                        </span>
                                        <span>
                                            <i class="fa-light fa-calendar"></i>
                                            Nov 12, 2023
                                        </span>
                                        <span>
                                            <i class="fa-light fa-comment"></i>
                                            10 Comments
                                        </span>
                                    </div>
                                    <h4 class="postbox__title">
                                        <a href="blog-details.html">How to Design Your Project Faster and More
                                            Efficiently</a>
                                    </h4>
                                    <div class="postbox__text">
                                        <p>Some of the employees in your workforce are already digitally-savvy and
                                            actively pursue new training and in-demand skills on their own. These
                                            employees are valuable, but research demonstrates that you may lose them if
                                            you don’t allow them the opportunity to improve their skills further. Should
                                            be possible as long as the training is available to upskill employees in the
                                            required skills. </p>
                                    </div>
                                    <div class="postbox__btn">
                                        <a class="bd-btn is-btn-anim" href="blog-details.html">
                                            <span class="bd-btn-inner">
                                                <span class="bd-btn-normal">Know more</span>
                                                <span class="bd-btn-hover">Know more</span>
                                                <i class="contentHidden"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-xxl4 col-lg-4">
                        <div class="sidebar__wrapper">
                            <div class="sidebar__widget">
                                <h5 class=" sidebar__widget-title">Search Here</h5>
                                <div class="sidebar__widget-content">
                                    <div class="sidebar__search">
                                        <form action="#">
                                            <div class="sidebar__search-input">
                                                <input type="text" placeholder="Enter your keywords...">
                                                <button type="submit">
                                                    <i class="fa-sharp fa-light fa-magnifying-glass"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar__widget is-padding-none">
                                <div class="sidebar__widget-content">
                                    <div class="sidebar__author">
                                        <div class="sidebar__author-thumb">
                                            <img src="assets/imgs/user/user-07.png" alt="image not found">
                                        </div>
                                        <div class="sidebar__author-content">
                                            <h6 class=" sidebar__author-title">Colene Landin</h6>
                                            <p>Lorem ipsum dolor ametare elit consectetur adipiscing Aenean
                                                pellentesque.</p>
                                            <div class="sidebar__author-social">
                                                <div class="theme__social">
                                                    <a href="#"><i class="fa-brands fa-facebook-f"></i>
                                                    </a>
                                                    <a href="#"><i class="icon-twiter"></i>
                                                    </a>
                                                    <a href="#"><i class="fa-brands fa-linkedin"></i>
                                                    </a>
                                                    <a href="#"><i class="fa-brands fa-behance"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar__widget">
                                <h5 class=" sidebar__widget-title">Categories</h5>
                                <div class="sidebar__widget-content">
                                    <ul>
                                        <li><a href="blog.html">Web Design<span>26</span></a></li>
                                        <li><a href="blog.html">Devlopment <span>30</span></a></li>
                                        <li><a href="blog.html">Branding <span>71</span></a></li>
                                        <li><a href="blog.html">Motion Design <span>56</span></a></li>
                                        <li><a href="blog.html">UI/UX Deisgn <span>60</span></a></li>
                                        <li><a href="blog.html">Graphic Design <span>99</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar__widget">
                                <h5 class="sidebar__widget-title">Pages</h5>
                                <div class="sidebar__widget-content">
                                    <ul>
                                        <li><a href="blog.html">Web Design <span><i
                                                        class="fa-regular fa-angle-right"></i></span></a></li>
                                        <li><a href="blog.html">Devlopment <span><i
                                                        class="fa-regular fa-angle-right"></i></span></a></li>
                                        <li><a href="blog.html">Branding <span><i
                                                        class="fa-regular fa-angle-right"></i></span></a></li>
                                        <li><a href="blog.html">Motion Design<span><i
                                                        class="fa-regular fa-angle-right"></i></span></a></li>
                                        <li><a href="blog.html">UI/UX Deisgn <span><i
                                                        class="fa-regular fa-angle-right"></i></span></a></li>
                                        <li><a href="blog.html">Graphic Design <span><i
                                                        class="fa-regular fa-angle-right"></i></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar__widget">
                                <h5 class=" sidebar__widget-title">Recent Post</h5>
                                <div class="sidebar__widget-content">
                                    <div class="sidebar__post">
                                        <div class="rc__post">
                                            <div class="rc__post-thumb">
                                                <a href="blog-details.html"><img
                                                        src="assets/imgs/blog/post/sidebar/sidebar-post-blog-01.png"
                                                        alt="image not found"></a>
                                            </div>
                                            <div class="rc__post-content">
                                                <h6 class="rc__post-title">
                                                    <a href="blog-details.html">Prepare for the Future of and idea</a>
                                                </h6>
                                                <div class="rc__meta">
                                                    <span>
                                                        <i class="fa-sharp fa-light fa-clock"></i>
                                                        June 22, 2020
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rc__post">
                                            <div class="rc__post-thumb">
                                                <a href="blog-details.html"><img
                                                        src="assets/imgs/blog/post/sidebar/sidebar-post-blog-02.png"
                                                        alt="image not found"></a>
                                            </div>
                                            <div class="rc__post-content">
                                                <h6 class="rc__post-title">
                                                    <a href="blog-details.html">Developing privacy user centric apps</a>
                                                </h6>
                                                <div class="rc__meta">
                                                    <span>
                                                        <i class="fa-sharp fa-light fa-clock"></i>
                                                        March 15, 2023
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rc__post">
                                            <div class="rc__post-thumb">
                                                <a href="blog-details.html"><img
                                                        src="assets/imgs/blog/post/sidebar/sidebar-post-blog-03.png"
                                                        alt="image not found"></a>
                                            </div>
                                            <div class="rc__post-content">
                                                <h6 class="rc__post-title">
                                                    <a href="blog-details.html">Starting and Growing Design</a>
                                                </h6>
                                                <div class="rc__meta">
                                                    <span>
                                                        <i class="fa-sharp fa-light fa-clock"></i>
                                                        July 22, 2021
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar__widget">
                                <h5 class=" sidebar__widget-title">Tags</h5>
                                <div class="sidebar__widget-content">
                                    <div class="sidebar__widget-tag">
                                        <div class="tagcloud">
                                            <a href="#">Techology</a>
                                            <a href="#">Food</a>
                                            <a href="#">Personality</a>
                                            <a href="#">Agency</a>
                                            <a href="#">Life Style</a>
                                            <a href="#">Travel</a>
                                            <a href="#">Nature</a>
                                            <a href="#">Development</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-6">
                        <div class="pagination__wrapper">
                            <div class="bd-basic__pagination style-2">
                                <nav>
                                    <ul>
                                        <li>
                                            <span><a href="#">Next</a></span>
                                        </li>
                                        <li>
                                            <a href="#">1</a>
                                        </li>
                                        <li>
                                            <span class="current">2</span>
                                        </li>
                                        <li>
                                            <a href="#">3</a>
                                        </li>
                                        <li>
                                            <span><a href="#">Prev</a></span>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- postbox area end -->

@endsection
