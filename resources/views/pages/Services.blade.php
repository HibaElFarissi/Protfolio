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
                data-background="assets/imgs/breadcrumb/breadcrumb-bg-02.png"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-7 col-xl-8 col-lg-8">
                        <div class="breadcrumb__content-wrapper p-relative z-index-1 text-center">
                            <div class="breadcrumb__title-wrapperr">
                                <h1 class="breadcrumb__title mb-25">The Service We Provide is Only For Your Needs</h1>
                            </div>
                            <div class="breadcrumb__menu">
                                <nav>
                                    <ul>
                                        <li><span><a href="index.html">Home</a></span></li>
                                        <li><span><a href="services.html">Service</a></span></li>
                                        <li><span>Service Agency</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area  end -->

        <!-- Service area start -->
        <section class="bd-service__area section-space theme-bg-secondary">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm-10">
                        <div class="section__title-wrapper text-center section__title-space">
                            <span class="section__subtitle bg-field">MY SERVICE</span>
                            <h2 class="section__title mb-20">Professional Services</h2>
                            <p class="section__paragraph is-br-none">Begin with a brief introduction or summary that
                                <br> highlights who you are and what</p>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6  wow fadeInUp" data-wow-delay=".3s"
                        data-wow-duration="1s">
                        <div class="service__wrapper service__item style-eight text-center">
                            <div class="contentHidden"></div>
                            <div class="contentHidden"></div>
                            <span class="service__icon-wrap is-icon-border">
                                <i class="icon-creative"></i>
                            </span>
                            <div class="service__content">
                                <h5 class="service__title underline"><a href="service-details.html">Creative</a></h5>
                                <p>In fields like design and product development, creating prototypes or conducting and
                                    works.</p>
                                <div class="contentHidden">
                                    <a class="contentHidden" href="service-details.html">contentHidden <span><i
                                                class="contentHidden"></i></span></a>
                                    <a class="contentHidden" href="service-details.html"> <span class="contentHidden"><i
                                                class="assets/imgs/icons/arrow.png"> </i></span></a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6  wow fadeInUp" data-wow-delay=".5s"
                        data-wow-duration="1s">
                        <div class="service__wrapper service__item style-eight text-center">
                            <div class="contentHidden"></div>
                            <div class="contentHidden"></div>
                            <span class="service__icon-wrap is-icon-border">
                                <i class="icon-ux-design"></i>
                            </span>
                            <div class="service__content">
                                <h5 class="service__title underline"><a href="service-details.html">UX/UI Design</a>
                                </h5>
                                <p>Mapping the steps a user takes within the product optimize their journey, and
                                    analysis and design.</p>
                                <div class="contentHidden">
                                    <a class="contentHidden" href="service-details.html">contentHidden <span><i
                                                class="contentHidden"></i></span></a>
                                    <a class="contentHidden" href="service-details.html"> <span class="contentHidden"><i
                                                class="assets/imgs/icons/arrow.png"> </i></span></a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6  wow fadeInUp" data-wow-delay=".7s"
                        data-wow-duration="1s">
                        <div class="service__wrapper service__item style-eight text-center">
                            <div class="contentHidden"></div>
                            <div class="contentHidden"></div>
                            <span class="service__icon-wrap is-icon-border">
                                <i class="icon-design"></i>
                            </span>
                            <div class="service__content">
                                <h5 class="service__title underline"><a href="service-details.html">Web Design</a></h5>
                                <p>Visual design in web design refers to the aesthetics of website, including layout,
                                    colour schemes.</p>
                                <div class="contentHidden">
                                    <a class="contentHidden" href="service-details.html">contentHidden <span><i
                                                class="contentHidden"></i></span></a>
                                    <a class="contentHidden" href="service-details.html"> <span class="contentHidden"><i
                                                class="assets/imgs/icons/arrow.png"> </i></span></a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6  wow fadeInUp" data-wow-delay=".9s"
                        data-wow-duration="1s">
                        <div class="service__wrapper service__item style-eight text-center">
                            <div class="contentHidden"></div>
                            <div class="contentHidden"></div>
                            <span class="service__icon-wrap is-icon-border">
                                <i class="icon-project"></i>
                            </span>
                            <div class="service__content">
                                <h5 class="service__title underline"><a href="service-details.html">Business</a></h5>
                                <p>Once the assessment is complete, consultants identify the specific challenges and
                                    grow business.</p>
                                <div class="contentHidden">
                                    <a class="contentHidden" href="service-details.html">contentHidden <span><i
                                                class="contentHidden"></i></span></a>
                                    <a class="contentHidden" href="service-details.html"> <span class="contentHidden"><i
                                                class="assets/imgs/icons/arrow.png"> </i></span></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- Service area end -->



        <!-- testimonial area start -->
        <section class="bd-testimonial__area section-space theme-bg-secondary p-relative">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-6 col-md-8">
                        <div class="section__title-wrapper text-center section__title-space">
                            <span class="section__subtitle bg-field">OUR TESTIMONIAL</span>
                            <h2 class="section__title mb-20">What Our Clients Have to Say</h2>
                            <p class="contentHidden">contentHidden</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial__slider style-two">
                    <div class="row align-items-center g-5 justify-content-center wow fadeInUp" data-wow-delay=".3s">
                        <div class="col-xl-8 col-lg-8">
                            <div class="swiper testimonial__active">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonial__wrapper style-six">
                                            <div class="testimonial__item">
                                                <div class="bg-shape"></div>
                                                <div class="testimonial__shape">
                                                    <img class="testimonial__shape-one"
                                                        src="assets/imgs/shape/testimonial-quote-05.png"
                                                        alt="image not found">
                                                    <img class="testimonial__shape-two"
                                                        src="assets/imgs/shape/testimonial-quote-06.png"
                                                        alt="image not found">
                                                </div>
                                                <div class="testimonial__content">
                                                    <div class="testimonial__text">
                                                        <p>I've had the pleasure of working with them for the past year,
                                                            and I can confidently say
                                                            they have
                                                            exceeded all our expectations. From the moment we engaged
                                                            with their team, we knew.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="testimonial__avatar-item">
                                                <div class="testimonial__avatar-thumb">
                                                    <img src="assets/imgs/user/user-01.png" alt="img not found">
                                                </div>
                                                <div class="testimonial__avatar-info">
                                                    <h5 class="testimonial__avatar-title">Chamain Louis</h5>
                                                    <span class="testimonial__avatar-designation">Web Designer /
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
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial__wrapper style-six">
                                            <div class="testimonial__item">
                                                <div class="bg-shape"></div>
                                                <div class="testimonial__shape">
                                                    <img class="testimonial__shape-one"
                                                        src="assets/imgs/shape/testimonial-quote-05.png"
                                                        alt="image not found">
                                                    <img class="testimonial__shape-two"
                                                        src="assets/imgs/shape/testimonial-quote-06.png"
                                                        alt="image not found">
                                                </div>
                                                <div class="testimonial__content">
                                                    <div class="testimonial__text">
                                                        <p>I've had the pleasure of working with them for the past year,
                                                            and I can confidently say
                                                            they have
                                                            exceeded all our expectations. From the moment we engaged
                                                            with their team, we knew.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="testimonial__avatar-item">
                                                <div class="testimonial__avatar-thumb">
                                                    <img src="assets/imgs/user/user-02.png" alt="img not found">
                                                </div>
                                                <div class="testimonial__avatar-info">
                                                    <h5 class="testimonial__avatar-title">Chamain Louis</h5>
                                                    <span class="testimonial__avatar-designation">Web Designer /
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
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial__wrapper style-six">
                                            <div class="testimonial__item">
                                                <div class="bg-shape"></div>
                                                <div class="testimonial__shape">
                                                    <img class="testimonial__shape-one"
                                                        src="assets/imgs/shape/testimonial-quote-05.png"
                                                        alt="image not found">
                                                    <img class="testimonial__shape-two"
                                                        src="assets/imgs/shape/testimonial-quote-06.png"
                                                        alt="image not found">
                                                </div>
                                                <div class="testimonial__content">
                                                    <div class="testimonial__text">
                                                        <p>I've had the pleasure of working with them for the past year,
                                                            and I can confidently say
                                                            they have
                                                            exceeded all our expectations. From the moment we engaged
                                                            with their team, we knew.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="testimonial__avatar-item">
                                                <div class="testimonial__avatar-thumb">
                                                    <img src="assets/imgs/user/user-03.png" alt="img not found">
                                                </div>
                                                <div class="testimonial__avatar-info">
                                                    <h5 class="testimonial__avatar-title">Chamain Louis</h5>
                                                    <span class="testimonial__avatar-designation">Web Designer /
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
                                                    </span>
                                                </div>
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
        <div class="brand__area section-space">
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


        <!-- cta area start -->
        <div class="cta__area is-cta-margin fix">
            <div class="container">
                <div class="cta__wrapper cta__item is-sec-space">
                    <div class="cta__bg"></div>
                    <div class="cta__shape-wrap d-none d-md-block">
                        <div class="cta__shape-one scene">
                            <img class="layer" data-depth="5" src="assets/imgs/shape/circle-shape-02.png" alt="image">
                        </div>
                        <div class="cta__shape-two scene">
                            <img class="layer" data-depth="6" src="assets/imgs/shape/circle-shape-03.png" alt="image">
                        </div>
                        <div class="cta__shape-three scene">
                            <img class="layer" data-depth="7" src="assets/imgs/shape/circle-shape-03.png" alt="image">
                        </div>
                        <div class="cta__shape-four scene">
                            <img class="layer" data-depth="8" src="assets/imgs/shape/circle-shape-02.png" alt="image">
                        </div>
                        <div class="cta__shape-five scene">
                            <img class="layer" data-depth="9" src="assets/imgs/shape/circle-shape-03.png" alt="image">
                        </div>
                    </div>
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-6 col-lg-7 col-md-10">
                            <div class="cta__content-wrap">
                                <div class="cta__content">
                                    <div class="section__title-wrapper text-center ">
                                        <div class="section__title-wrapper text-center">
                                            <span class="section__subtitle bg-field">SUBSCRIBE</span>
                                            <h2 class="section__title mb-20">Stay Informed with the Latest News</h2>
                                            <p class="contentHidden">contentHidden</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta__form">
                                    <form action="#">
                                        <div class="cta__input">
                                            <input type="text" placeholder="Enter email">
                                            <a href="contact.html" class="bd-btn is-bg-gradient">Submit Now</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cta area end -->
@endsection
