
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
        <section class="breadcrumb__area p-relative style-two is-breadcrumb-space">
            <div class="breadcrumb__thumb-bg include-bg bg__thumb-position"
                data-background="assets/imgs/breadcrumb/breadcrumb-bg-01.png"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8 col-md-10">
                        <div class="breadcrumb__content-wrapper p-relative z-index-1">
                            <div class="breadcrumb__title-wrapper text-center">
                                <h1 class="breadcrumb__title mb-25">Know More About Me</h1>
                            </div>
                            <div class="breadcrumb__menu text-center">
                                <nav>
                                    <ul>
                                        <li><span><a href="index.html">Home</a></span></li>
                                        <li><span>About me</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area  end -->

             <!-- team area start -->
        <section class="bd-team-details__area section-space">
            <div class="container">
                <div class="team__details-wrapper">
                    <div class="row g-5 align-items-center">
                        <div class="col-xl-4 col-lg-4 col-md-5">
                            <div class="team__details-thumb bg-solid">
                                <img src="assets/imgs/aboutMe.jpeg" alt="image not found">
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-7">
                            <div class="team__details-content">
                                <div class="team__details-author">
                                    <h3 class="team__details-title">Hiba El Farissi</h3>
                                    <span class="team__details-designation">Full Stack Developper</span>
                                </div>
                                <p>Meet Hiba, a dynamic full-stack developer known for her passion for crafting exceptional digital experiences.
                                    With expertise in both frontend and backend development, she brings a unique blend of creativity to every project she undertakes.
                                    When not coding,
                                    Hiba enjoys exploring new technologies.
                                </p>
                                <!-- social -->
                                <div class="theme__social">
                                    <a href="https://web.facebook.com/liya.hiba.5/"><i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="https://www.instagram.com/lea_heba/"><i class="icon-instagram"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/in/hiba-el-farissi-8161b5279/"><i class="fa-brands fa-linkedin"></i>
                                    </a>
                                    <a href="https://github.com/HibaElFarissi"><i class="fa-brands fa-github"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team area end -->

     <!-- feature list area -->
     <section class="bd-feature__list section-space">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-5">
                    <div class="section__title-wrapper section__title-space">
                        <div class="section__title-wrapper">
                            <span class="section__subtitle bg-field">OUR VISION</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="feature__list-wrapper">
                        <div class="feature__single-item">
                            <ul>
                                <li>HTML5</li>
                                <li>CSS3</li>
                            </ul>
                        </div>
                        <div class="feature__single-item">
                            <ul>
                                <li>Wordpress</li>
                                <li>WooCommerce</li>

                            </ul>
                        </div>
                        <div class="feature__single-item">
                            <ul>
                                <li>Visual Studio Code</li>
                                <li>Canva PRO</li>

                            </ul>
                        </div>
                        <div class="feature__single-item">
                            <ul>
                                <li>Laravel PHP</li>
                                <li>MySQL</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature list area -->


        <!-- service area start -->
        <section class="bd-service__area section-space">
            <div class="container">
                <div class="row g-5">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="service__wrapper service__item style-seven bg-solid text-center is-padding-reduce is-transition wow fadeIn"
                            data-wow-delay=".3s">
                            <span class="service__icon-wrap">
                                <i class="icon-ux-design"></i>
                            </span>
                            <div class="service__content">
                                <h5 class="service__title"><a href="service-details.html">UX/UI Design</a></h5>
                                <p>Design everything we make</p>
                                <div class="service__more">
                                    <a class="bd-text-btn style-two" href="service-details.html">Read More <span
                                            class="icon__box">
                                            <i class="fa-regular fa-arrow-right-long icon__first"></i>
                                            <i class="fa-regular fa-arrow-right-long icon__second"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="service__wrapper service__item style-seven bg-solid text-center is-padding-reduce is-transition wow fadeIn"
                            data-wow-delay=".5s">
                            <span class="service__icon-wrap">
                                <i class="icon-design"></i>
                            </span>
                            <div class="service__content">
                                <h5 class="service__title"><a href="service-details.html">Web Design</a></h5>
                                <p>Learn clean and useful code</p>
                                <div class="service__more">
                                    <a class="bd-text-btn style-two" href="service-details.html">Read More <span
                                            class="icon__box">
                                            <i class="fa-regular fa-arrow-right-long icon__first"></i>
                                            <i class="fa-regular fa-arrow-right-long icon__second"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="service__wrapper service__item style-seven bg-solid text-center is-padding-reduce is-transition wow fadeIn"
                            data-wow-delay=".7s">
                            <span class="service__icon-wrap">
                                <i class="icon-project"></i>
                            </span>
                            <div class="service__content">
                                <h5 class="service__title"><a href="service-details.html">Project</a></h5>
                                <p>Useful project biggest asset</p>
                                <div class="service__more">

                                    <a class="bd-text-btn style-two" href="service-details.html">Read More <span
                                            class="icon__box">
                                            <i class="fa-regular fa-arrow-right-long icon__first"></i>
                                            <i class="fa-regular fa-arrow-right-long icon__second"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="service__wrapper service__item style-seven bg-solid text-center is-padding-reduce is-transition wow fadeIn"
                            data-wow-delay=".9s">
                            <span class="service__icon-wrap">
                                <i class="icon-animation"></i>
                            </span>
                            <div class="service__content">
                                <h5 class="service__title"><a href="service-details.html">Animation</a></h5>
                                <p>Animation is about creating</p>
                                <div class="service__more">

                                    <a class="bd-text-btn style-two" href="service-details.html">Read More <span
                                            class="icon__box">
                                            <i class="fa-regular fa-arrow-right-long icon__first"></i>
                                            <i class="fa-regular fa-arrow-right-long icon__second"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service area start -->





        <!-- testimonial area start -->
        <section class="bd-testimonial__area section-space p-relative style-seven">
            <div class="bg__thumb-position include-bg is-overlay"
                data-background="assets/imgs/bg/testimonial-bg-01.png">
            </div>
            <div class="container">
                <div class="row g-5 justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="section__title-wrapper section__title-space text-center">
                            <span class="section__subtitle bg-field">TESTIMONIALS </span>
                            <h2 class="section__title">What Our Clients Say</h2>
                            <p class="contentHidden">contentHidden</p>
                        </div>
                    </div>
                </div>
                <div class=" row">
                    <div class="testimonial__slider wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                        <div class="swiper testimonial__active-two">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial__wrapper style-seven">
                                        <div class="testimonial__top-item">
                                            <span class="testimonial__rating">
                                                <a href="#">
                                                    <i class="icon-star"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="icon-star"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="icon-star"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="icon-star"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="icon-star"></i>
                                                </a>
                                            </span>
                                            <div class="testimonial__shape">
                                                <img class="testimonial__shape-quote"
                                                    src="assets/imgs/shape/testimonial-quote-07.png"
                                                    alt="image not found">
                                            </div>
                                        </div>
                                        <div class="testimonial__item">
                                            <div class="testimonial__content">
                                                <div class="testimonial__text">
                                                    <p>I've had the pleasure of working with them for the past year, and
                                                        I can
                                                        confidently say
                                                        they have
                                                        exceeded all of our expectations From the moment </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial__thumb-wrap">
                                            <div class="testimonial__thumb">
                                                <img src="assets/imgs/user/user-08.png" alt="image not found">
                                            </div>
                                            <div class="testimonial__avatar-info">
                                                <h6 class="testimonial__avatar-title">Alex</h6>
                                                <span class="testimonial__avatar-designation">Manager
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__wrapper style-seven">
                                        <div class="testimonial__top-item">
                                            <span class="testimonial__rating">
                                                <a href="#">
                                                    <i class="icon-star"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="icon-star"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="icon-star"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="icon-star"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="icon-star"></i>
                                                </a>
                                            </span>
                                            <div class="testimonial__shape">
                                                <img class="testimonial__shape-quote"
                                                    src="assets/imgs/shape/testimonial-quote-07.png"
                                                    alt="image not found">
                                            </div>
                                        </div>
                                        <div class="testimonial__item">
                                            <div class="testimonial__content">
                                                <div class="testimonial__text">
                                                    <p>I've had the pleasure of working with them for the past year, and
                                                        I can
                                                        confidently say
                                                        they have
                                                        exceeded all of our expectations From the moment </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial__thumb-wrap">
                                            <div class="testimonial__thumb">
                                                <img src="assets/imgs/user/user-09.png" alt="image not found">
                                            </div>
                                            <div class="testimonial__avatar-info">
                                                <h6 class="testimonial__avatar-title"> Louis</h6>
                                                <span class="testimonial__avatar-designation">Web Designer
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__wrapper style-seven">
                                        <div class="testimonial__top-item">
                                            <span class="testimonial__rating">
                                                <a href="#">
                                                    <i class="icon-star"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="icon-star"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="icon-star"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="icon-star"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="icon-star"></i>
                                                </a>
                                            </span>
                                            <div class="testimonial__shape">
                                                <img class="testimonial__shape-quote"
                                                    src="assets/imgs/shape/testimonial-quote-07.png"
                                                    alt="image not found">
                                            </div>
                                        </div>
                                        <div class="testimonial__item">
                                            <div class="testimonial__content">
                                                <div class="testimonial__text">
                                                    <p>I've had the pleasure of working with them for the past year, and
                                                        I can
                                                        confidently say
                                                        they have
                                                        exceeded all of our expectations From the moment </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial__thumb-wrap">
                                            <div class="testimonial__thumb">
                                                <img src="assets/imgs/user/user-10.png" alt="image not found">
                                            </div>
                                            <div class="testimonial__avatar-info">
                                                <h6 class="testimonial__avatar-title">Alex</h6>
                                                <span class="testimonial__avatar-designation">Manager
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="testimonial__navigation d-none d-sm-block">
                            <button class="testimonial__button-prev circle-btn slider__nav-btn"><i
                                    class="fa-regular fa-arrow-left-long"></i></button>
                            <button class="testimonial__button-next circle-btn ml-5 slider__nav-btn"><i
                                    class="fa-regular fa-arrow-right-long"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial area end -->

        <!-- brand area start -->
        <div class="brand__area section-space theme-bg-secondary">
            <div class="brand__wrapper style-two wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                <div class="container">
                    <div class="swiper brand__active">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="brand__item text-center">
                                    <div class="brand__thumb">
                                        <img src="assets/imgs/brand/02/brand-01.png" alt="image not found">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__item text-center">
                                    <div class="brand__thumb">
                                        <img src="assets/imgs/brand/02/brand-02.png" alt="image not found">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__item text-center">
                                    <div class="brand__thumb">
                                        <img src="assets/imgs/brand/02/brand-03.png" alt="image not found">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__item text-center">
                                    <div class="brand__thumb">
                                        <img src="assets/imgs/brand/02/brand-04.png" alt="image not found">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__item text-center">
                                    <div class="brand__thumb">
                                        <img src="assets/imgs/brand/02/brand-05.png" alt="image not found">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__item text-center">
                                    <div class="brand__thumb">
                                        <img src="assets/imgs/brand/02/brand-06.png" alt="image not found">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand area end -->
@endsection
