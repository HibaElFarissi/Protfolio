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
                                <h1 class="breadcrumb__title mb-25">My Blog</h1>
                            </div>
                            <div class="breadcrumb__menu">
                                <nav>
                                    <ul>
                                        <li><span><a href="">Home</a></span></li>
                                        <li><span><a href="">My Blog</a></span></li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area  end -->

        <!-- blog area start -->
        <div class="bd-blog__area section-space">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10">
                        <div class="section__title-wrapper text-center section__title-space">
                            <span class="section__subtitle bg-field">MY BLOG</span>
                            <h2 class="section__title">Read My Latest Article</h2>
                            <p class="contentHidden">contentHidden</p>
                        </div>
                    </div>
                </div>
                <div class="row g-5 wow fadeInUp" data-wow-delay=".3s">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="blog__wrap blog__item style-five">
                            <div class="blog__thumb is-hover">
                                <a href="">
                                    <img src="assets/imgs/blog/blog-12.png" alt="image not found">
                                </a>
                                <div class="blog__tag">
                                    <a href="#">Development</a>
                                </div>
                            </div>
                            <div class="blog__content bg-solid">
                                <div class="blog__meta">
                                    <span>
                                        <i class="fa-light fa-calendar"></i>
                                        Nov 12, 2023
                                    </span>
                                    <span>
                                        <i class="fa-light fa-comment"></i>
                                        10 Comments
                                    </span>
                                </div>
                                <h5 class="blog__title"><a href="#">The Role of actions in User
                                        Engagement</a></h5>
                                <div class="blog__btn">
                                    <a class="bd-btn bordered-light is-btn-anim" href="#">
                                        <span class="bd-btn-inner">
                                            <span class="bd-btn-normal">Read More</span>
                                            <span class="bd-btn-hover">Read More</span>
                                            <i class="contentHidden"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="blog__wrap blog__item style-five">
                            <div class="blog__thumb is-hover">
                                <a href="#">
                                    <img src="assets/imgs/blog/blog-13.png" alt="image not found">
                                </a>
                                <div class="blog__tag">
                                    <a href="#">Project</a>
                                </div>
                            </div>
                            <div class="blog__content bg-solid">
                                <div class="blog__meta">
                                    <span>
                                        <i class="fa-light fa-calendar"></i>
                                        Mar 20, 2023
                                    </span>
                                    <span>
                                        <i class="fa-light fa-comment"></i>
                                        20 Comments
                                    </span>
                                </div>
                                <h5 class="blog__title"><a href="#">Talent Acquisition and Global Work
                                        Force</a></h5>
                                <div class="blog__btn">
                                    <a class="bd-btn bordered-light is-btn-anim" href="#">
                                        <span class="bd-btn-inner">
                                            <span class="bd-btn-normal">Read More</span>
                                            <span class="bd-btn-hover">Read More</span>
                                            <i class="contentHidden"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="blog__wrap blog__item style-five">
                            <div class="blog__thumb is-hover">
                                <a href="#">
                                    <img src="assets/imgs/blog/blog-14.png" alt="image not found">
                                </a>
                                <div class="blog__tag">
                                    <a href="#">Agency</a>
                                </div>
                            </div>
                            <div class="blog__content bg-solid">
                                <div class="blog__meta">
                                    <span>
                                        <i class="fa-light fa-calendar"></i>
                                        May 10, 2023
                                    </span>
                                    <span>
                                        <i class="fa-light fa-comment"></i>
                                        05 Comments
                                    </span>
                                </div>
                                <h5 class="blog__title"><a href="blog-details.html">Work and Company Culture Program</a>
                                </h5>
                                <div class="blog__btn">
                                    <a class="bd-btn bordered-light is-btn-anim" href="blog-details.html">
                                        <span class="bd-btn-inner">
                                            <span class="bd-btn-normal">Read More</span>
                                            <span class="bd-btn-hover">Read More</span>
                                            <i class="contentHidden"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="blog__wrap blog__item style-five">
                            <div class="blog__thumb is-hover">
                                <a href="#">
                                    <img src="assets/imgs/blog/blog-23.png" alt="image not found">
                                </a>
                                <div class="blog__tag">
                                    <a href="#">Agency</a>
                                </div>
                            </div>
                            <div class="blog__content bg-solid">
                                <div class="blog__meta">
                                    <span>
                                        <i class="fa-light fa-calendar"></i>
                                        May 10, 2023
                                    </span>
                                    <span>
                                        <i class="fa-light fa-comment"></i>
                                        05 Comments
                                    </span>
                                </div>
                                <h5 class="blog__title"><a href="#">Clearly outline the purpose of your
                                        goal</a></h5>
                                <div class="blog__btn">
                                    <a class="bd-btn bordered-light is-btn-anim" href="#">
                                        <span class="bd-btn-inner">
                                            <span class="bd-btn-normal">Read More</span>
                                            <span class="bd-btn-hover">Read More</span>
                                            <i class="contentHidden"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="blog__wrap blog__item style-five">
                            <div class="blog__thumb is-hover">
                                <a href="#">
                                    <img src="assets/imgs/blog/blog-24.png" alt="image not found">
                                </a>
                                <div class="blog__tag">
                                    <a href="#">Agency</a>
                                </div>
                            </div>
                            <div class="blog__content bg-solid">
                                <div class="blog__meta">
                                    <span>
                                        <i class="fa-light fa-calendar"></i>
                                        May 10, 2023
                                    </span>
                                    <span>
                                        <i class="fa-light fa-comment"></i>
                                        05 Comments
                                    </span>
                                </div>
                                <h5 class="blog__title"><a href="#">Select a memorable and relevant
                                        domain</a></h5>
                                <div class="blog__btn">
                                    <a class="bd-btn bordered-light is-btn-anim" href="#">
                                        <span class="bd-btn-inner">
                                            <span class="bd-btn-normal">Read More</span>
                                            <span class="bd-btn-hover">Read More</span>
                                            <i class="contentHidden"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="blog__wrap blog__item style-five">
                            <div class="blog__thumb is-hover">
                                <a href="#">
                                    <img src="assets/imgs/blog/blog-25.png" alt="image not found">
                                </a>
                                <div class="blog__tag">
                                    <a href="#">Agency</a>
                                </div>
                            </div>
                            <div class="blog__content bg-solid">
                                <div class="blog__meta">
                                    <span>
                                        <i class="fa-light fa-calendar"></i>
                                        May 10, 2023
                                    </span>
                                    <span>
                                        <i class="fa-light fa-comment"></i>
                                        05 Comments
                                    </span>
                                </div>
                                <h5 class="blog__title"><a href="#">Choose a website building platform
                                        works</a></h5>
                                <div class="blog__btn">
                                    <a class="bd-btn bordered-light is-btn-anim" href="#">
                                        <span class="bd-btn-inner">
                                            <span class="bd-btn-normal">Read More</span>
                                            <span class="bd-btn-hover">Read More</span>
                                            <i class="contentHidden"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="blog__wrap blog__item style-five">
                            <div class="blog__thumb is-hover">
                                <a href="#">
                                    <img src="assets/imgs/blog/blog-26.png" alt="image not found">
                                </a>
                                <div class="blog__tag">
                                    <a href="#">Agency</a>
                                </div>
                            </div>
                            <div class="blog__content bg-solid">
                                <div class="blog__meta">
                                    <span>
                                        <i class="fa-light fa-calendar"></i>
                                        May 10, 2023
                                    </span>
                                    <span>
                                        <i class="fa-light fa-comment"></i>
                                        05 Comments
                                    </span>
                                </div>
                                <h5 class="blog__title"><a href="#">Personalize the template by
                                        customizing colors</a></h5>
                                <div class="blog__btn">
                                    <a class="bd-btn bordered-light is-btn-anim" href="#">
                                        <span class="bd-btn-inner">
                                            <span class="bd-btn-normal">Read More</span>
                                            <span class="bd-btn-hover">Read More</span>
                                            <i class="contentHidden"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="blog__wrap blog__item style-five">
                            <div class="blog__thumb is-hover">
                                <a href="#">
                                    <img src="assets/imgs/blog/blog-27.png" alt="image not found">
                                </a>
                                <div class="blog__tag">
                                    <a href="#">Agency</a>
                                </div>
                            </div>
                            <div class="blog__content bg-solid">
                                <div class="blog__meta">
                                    <span>
                                        <i class="fa-light fa-calendar"></i>
                                        May 10, 2023
                                    </span>
                                    <span>
                                        <i class="fa-light fa-comment"></i>
                                        05 Comments
                                    </span>
                                </div>
                                <h5 class="blog__title"><a href="blog">Work and Company Culture Program</a>
                                </h5>
                                <div class="blog__btn">
                                    <a class="bd-btn bordered-light is-btn-anim" href="#">
                                        <span class="bd-btn-inner">
                                            <span class="bd-btn-normal">Read More</span>
                                            <span class="bd-btn-hover">Read More</span>
                                            <i class="contentHidden"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="blog__wrap blog__item style-five">
                            <div class="blog__thumb is-hover">
                                <a href="#">
                                    <img src="assets/imgs/blog/blog-28.png" alt="image not found">
                                </a>
                                <div class="blog__tag">
                                    <a href="#">Agency</a>
                                </div>
                            </div>
                            <div class="blog__content bg-solid">
                                <div class="blog__meta">
                                    <span>
                                        <i class="fa-light fa-calendar"></i>
                                        May 10, 2023
                                    </span>
                                    <span>
                                        <i class="fa-light fa-comment"></i>
                                        05 Comments
                                    </span>
                                </div>
                                <h5 class="blog__title"><a href="">include a brief info about yourself
                                        and others</a></h5>
                                <div class="blog__btn">
                                    <a class="bd-btn bordered-light is-btn-anim" href="#">
                                        <span class="bd-btn-inner">
                                            <span class="bd-btn-normal">Read More</span>
                                            <span class="bd-btn-hover">Read More</span>
                                            <i class="contentHidden"></i>
                                        </span>
                                    </a>
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
        </div>
        <!-- blog area end -->

    </main>
    <!-- Body main wrapper end -->

@endsection
