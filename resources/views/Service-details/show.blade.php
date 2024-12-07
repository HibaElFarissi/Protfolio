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
                    <div class="col-xxl-7 col-xl-7 col-lg-8">
                        <div class="breadcrumb__content-wrapper p-relative z-index-1 text-center">
                            <div class="breadcrumb__title-wrapperr">
                                <h1 class="breadcrumb__title mb-25">Services Details</h1>
                            </div>
                            <div class="breadcrumb__menu">
                                <nav>
                                    <ul>
                                        <li><span><a href="/">Home</a></span></li>
                                        <li><span><a href="{{ route('Our-services') }}">Service</a></span></li>
                                        <li><span>Service Details</span></li>
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
        <section class="bd__service-area section-space">
            <div class="container">
                <div class="row g-5">
                    <div class="col-xl-4 col-lg-5">
                        <div class="service__widget">
                            <div class="service__widget-item mb-30">
                                <div class="service__widget-tab underline-full">
                                    <h5>Categories </h5>
                                    <ul>
                                        <li>
                                            <a href="service-details.html" class="active">
                                                <span>
                                                    <i class="icon-application"></i>
                                                </span>
                                                Mobile App
                                                <i class="icon-arrow-small"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="service-details.html">
                                                <span>
                                                    <i class="icon-rocket"></i>
                                                </span>
                                                Speed Optimized
                                                <i class="icon-arrow-small"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="service-details.html">
                                                <span>
                                                    <i class="icon-design"></i>
                                                </span>
                                                Web Development
                                                <i class="icon-arrow-small"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="service-details.html">
                                                <span>
                                                    <i class="icon-analysis"></i>
                                                </span>
                                                Google Analytics
                                                <i class="icon-arrow-small"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="service-details.html">
                                                <span>
                                                    <i class="icon-strategy"></i>
                                                </span>
                                                strategy
                                                <i class="icon-arrow-small"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="service__widget-item mb-30">
                                <div class="service__contact underline-full">
                                    <h5>Get in Touch </h5>
                                    <form id="contact-form" action="https://wellconcept.co/html/portlu-pre/assets/mail.php" method="POST">
                                        <div class="from__input-box">
                                            <div class="contentHidden">
                                                <label for="name">first Name<span>*</span></label>
                                            </div>
                                            <div class="form__input style-two">
                                                <input name="name" id="name" type="text" placeholder="First Name">
                                                <div class="contentHidden"><span><i
                                                            class="fa-solid fa-house"></i></span></div>
                                            </div>
                                        </div>
                                        <div class="from__input-box">
                                            <div class="contentHidden">
                                                <label for="email">first Name<span>*</span></label>
                                            </div>
                                            <div class="form__input style-two">
                                                <input name="email" id="email" type="email" placeholder="Email">
                                                <div class="contentHidden"><span><i
                                                            class="fa-solid fa-house"></i></span></div>
                                            </div>
                                        </div>

                                        <div class="from__input-box">
                                            <div class="contentHidden">
                                                <label for="name">name<span>*</span></label>
                                            </div>
                                            <div class="form__input style-two">
                                                <textarea name="message" placeholder="Your Message"></textarea>
                                                <div class="contentHidden"><span><i
                                                            class="fa-solid fa-envelope"></i></span></div>
                                            </div>
                                        </div>
                                        <div class="contact__btn">
                                            <button class="bd-btn w-100" type="submit">Submit now</button>
                                        </div>
                                    </form>
                                    <!-- <p class="ajax-response"></p> -->
                                </div>
                            </div>
                            <div class="service__widget-item mb-30">
                                <div class="service__contact-info-item underline-full">
                                    <h5>Contact Info</h5>
                                    <div class="contact__info-item">
                                        <ul>
                                            <li>
                                                <div class="contact__info">
                                                    <div class="contact__info-icon">
                                                        <span>
                                                            <i class="icon-location"></i>
                                                        </span>
                                                    </div>
                                                    <div class="contact__info-content">
                                                        <h6><a target="_blank" href="https://www.google.com/maps">672
                                                                Tallahassee Florida</a></h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="contact__info">
                                                    <div class="contact__info-icon">
                                                        <span>
                                                            <i class="icon-phone"></i>
                                                        </span>
                                                    </div>
                                                    <div class="contact__info-content">
                                                        <h6><a href="tel:+13322078097">+13322078097</a></h6>
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
                                                        <h6><a href="mailto:me@portlu.com">me@portlu.com</a></h6>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 order-first order-lg-last">
                        <div class="service__details-wrapper">
                            <h2 class="service__details-title mb-25">{{$service_detail->title}}
                            </h2>
                            <p>{{$service_detail->text}}</p>
                            <div class="service__details-thumb">
                                <img src="{{ asset('storage/' . $service_detail->image) }}" alt="image not found">
                            </div>
                            <div class="service__details-text">
                                {!! $service_detail->description !!}
                            </div>

                        </div>
                        <div class="service__details-sec text-center mt-50">
                            <h2 class="service__details-title mb-25">Our Featured Service</h2>
                        </div>
                        <div class="service__details-item">
                            @foreach ($Service_details as $item)
                            <div class="service__wrapper service__item style-seven bg-solid">
                                <span class="service__icon-wrap">
                                   {!! $item->icon !!}
                                </span>
                                <div class="service__content">
                                    <h5 class="service__title"><a href="{{ route('Service-details.show', $item) }}">{{$item->title_Global}}</a></h5>
                                    <p>{{$item->slug}}</p>
                                    <div class="service__more">
                                        <a class="bd-text-btn style-two" href="{{ route('Service-details.show', $item) }}">Read More <span
                                                class="icon__box">
                                                <i class="fa-regular fa-arrow-right-long icon__first"></i>
                                                <i class="fa-regular fa-arrow-right-long icon__second"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    {{-- <div class="col-xl-8 col-lg-7 order-first order-lg-last">
                        <div class="service__details-wrapper">
                            <h2 class="service__details-title mb-25">Best Design Agency <br> The Service We Provide.
                            </h2>
                            <p>We embrace holistic development and support for employees with the aim of being a
                                first-choice
                                employer within our sectors. Through a unique combination of engineering, construction
                                and
                                design disciplines and expertise.</p>
                            <div class="service__details-thumb">
                                <img src="assets/imgs/service/services-details-01.png" alt="image not found">
                            </div>
                            <div class="service__details-text">
                                <h5 class=" mb-15">We Unlock Potential</h5>
                                <p>Elizabeth some dodgy chavs are you taking the piss faff about pardon amongst car boot
                                    a load of old tosh is cracking goal blow off telling brown. </p>
                                <p>Brolly show off show off pick your nose and blow off well A bit of how’s your father
                                    tomfoolery blimey, me old mucker starkers Queen’s English dropped a clanger bite
                                    your arm spiffing good time burke Why chancer. Hotpot bum bag cracking goal young
                                    delinquent naff bugger cup of chars bender loo it’s all gone to pot the nancy
                                    cheeky. </p>
                                <p>At public school cras bog some dodgy chav Richard Why argy bargy vagabon William
                                    bender matie boy, off his nut chancer Jeffrey up the kyver say mufty you mug ummm
                                    telling pear shaped Oxford owt to do with me do one so said are you taking his. </p>
                            </div>
                            <div class="service__details-progress">
                                <h5 class=" mb-15">Services Process</h5>
                                <p>Elizabeth some dodgy chavs are you taking the piss faff about pardon amongst car boot
                                    a load of old tosh is cracking goal blow off telling brown. </p>
                                <div class="service__details-progress-list">
                                    <div class="info__list">
                                        <ul>
                                            <li>
                                                <i class="fa-regular fa-check"></i>
                                                Reinvent Your Business to Better
                                            </li>
                                            <li>
                                                <i class="fa-regular fa-check"></i>
                                                Pioneering the Internet's First
                                            </li>
                                            <li>
                                                <i class="fa-regular fa-check"></i>
                                                Pioneering the Design World's First
                                            </li>
                                            <li>
                                                <i class="fa-regular fa-check"></i>
                                                Pioneering the Design World's First
                                            </li>
                                            <li>
                                                <i class="fa-regular fa-check"></i>
                                                Pioneering the Design World's First
                                            </li>
                                            <li>
                                                <i class="fa-regular fa-check"></i>
                                                Pioneering the Design World's First
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service__details-sec text-center mt-50">
                            <h2 class="service__details-title mb-25">Our Featured Service</h2>
                        </div>
                        <div class="service__details-item">
                            <div class="service__wrapper service__item style-seven bg-solid ">
                                <span class="service__icon-wrap">
                                    <i class="icon-design"></i>
                                </span>
                                <div class="service__content">
                                    <h5 class="service__title"><a href="service-details.html">Web Design</a></h5>
                                    <p>Learn how to create websites that adapt to different screen sizes and devices,
                                        ensuring a seamless.</p>
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
                            <div class="service__wrapper service__item style-seven bg-solid">
                                <span class="service__icon-wrap">
                                    <i class="icon-ux-design"></i>
                                </span>
                                <div class="service__content">
                                    <h5 class="service__title"><a href="service-details.html">UX/UI Design</a></h5>
                                    <p>Start with a brief introduction about your a yourself. Mention your name, your
                                        current role or status.</p>
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
                            <div class="service__wrapper service__item style-seven bg-solid">
                                <span class="service__icon-wrap">
                                    <i class="icon-project"></i>
                                </span>
                                <div class="service__content">
                                    <h5 class="service__title"><a href="service-details.html">Project Design</a></h5>
                                    <p>Showcase your design process, from initial concept to final execution.Include
                                        stages research.</p>
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
                            <div class="service__wrapper service__item style-seven bg-solid">
                                <span class="service__icon-wrap">
                                    <i class="icon-grow"></i>
                                </span>
                                <div class="service__content">
                                    <h5 class="service__title"><a href="service-details.html">Development</a></h5>
                                    <p>Showcase your design process, from initial concept to final execution.Include
                                        stages research.</p>
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
                    </div> --}}
                </div>
            </div>
        </section>
        <!-- Service area end -->

        <!-- testimonial area start -->
        <section class="bd-testimonial__area section-space theme-bg-secondary p-relative">
            <div class="testimonial__shape">
                <img class="testimonial__shape-three" src="assets/imgs/shape/four-line-shape-1.png"
                    alt="image not found">
                <img class="testimonial__shape-four" src="assets/imgs/shape/four-line-shape-2.png"
                    alt="image not found">
            </div>
            <div class="container">
                <div class="row g-5">
                    <div class="col-xl-5 col-lg-6 col-md-8">
                        <div class="section__title-wrapper section__title-space">
                            <span class="section__subtitle bg-field">TESTIMONIALS </span>
                            <h2 class="section__title">Client Experiences and Testimonials</h2>
                            <p class="contentHidden">contentHidden</p>
                        </div>
                    </div>
                </div>
                <div class=" row">
                    <div class="testimonial__slider wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                        <div class="swiper testimonial__active-two">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial__wrapper style-five">
                                        <div class="testimonial__top-item">
                                            <div class="testimonial__thumb-wrap">
                                                <div class="testimonial__thumb">
                                                    <img src="assets/imgs/user/user-08.png" alt="image not found">
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
                                            <div class="testimonial__shape">
                                                <img class="testimonial__shape-quote"
                                                    src="assets/imgs/shape/testimonial-quote-small.png"
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
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__wrapper style-five">
                                        <div class="testimonial__top-item">
                                            <div class="testimonial__thumb-wrap">
                                                <div class="testimonial__thumb">
                                                    <img src="assets/imgs/user/user-09.png" alt="image not found">
                                                </div>
                                                <div class="testimonial__avatar-info">
                                                    <h5 class="testimonial__avatar-title">Henry Louis</h5>
                                                    <span class="testimonial__avatar-designation">Founder /
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
                                            <div class="testimonial__shape">
                                                <img class="testimonial__shape-quote"
                                                    src="assets/imgs/shape/testimonial-quote-small.png"
                                                    alt="image not found">
                                            </div>
                                        </div>
                                        <div class="testimonial__item">
                                            <div class="testimonial__content">
                                                <div class="testimonial__text">
                                                    <p>I've had the pleasure of working with them for the past year, and
                                                        I can
                                                        confidently say
                                                        they have exceeded all of our expectations From the moment </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__wrapper style-five">
                                        <div class="testimonial__top-item">
                                            <div class="testimonial__thumb-wrap">
                                                <div class="testimonial__thumb">
                                                    <img src="assets/imgs/user/user-10.png" alt="image not found">
                                                </div>
                                                <div class="testimonial__avatar-info">
                                                    <h5 class="testimonial__avatar-title">Louis</h5>
                                                    <span class="testimonial__avatar-designation">Designer /
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
                                            <div class="testimonial__shape">
                                                <img class="testimonial__shape-quote"
                                                    src="assets/imgs/shape/testimonial-quote-small.png"
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
@endsection
