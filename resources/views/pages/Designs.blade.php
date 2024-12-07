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
                data-background="assets/imgs/breadcrumb/breadcrumb-bg-03.png"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-7 col-xl-7 col-lg-8">
                        <div class="breadcrumb__content-wrapper p-relative z-index-1 text-center">
                            <div class="breadcrumb__title-wrapperr">
                                <h1 class="breadcrumb__title mb-25">My Designs</h1>
                            </div>
                            <div class="breadcrumb__menu">
                                <nav>
                                    <ul>
                                        <li><span><a href="index.html">Home</a></span></li>
                                        <li><span><a href="blog.html">Designs</a></span></li>
                                        <li><span>My Stuff</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area  end -->

        <!-- portfolio area start -->
        <div class="bd__portfolio-area section-space">
            <div class="container-fluid">
                <div class="row g-5 section__title-space justify-content-center">
                    <div class="col-xl-8 col-lg-8">
                        <div class="bd__menu-tab justify-content-center">
                            <ul class="bd__menu style-two nav" id="myTab" role="tablist">
                                <li class="bd__btn-item" role="presentation">
                                    <button class="active" id="view-tab" data-bs-toggle="tab" data-bs-target="#view"
                                        type="button" role="tab" aria-controls="view" aria-selected="true">View
                                        All</button>
                                </li>
                                <li class="bd__btn-item" role="presentation">
                                    <button id="brand-tab" data-bs-toggle="tab" data-bs-target="#brand" type="button"
                                        role="tab" aria-controls="brand" aria-selected="false">Brand</button>
                                </li>
                                <li class="bd__btn-item" role="presentation">
                                    <button id="project-tab" data-bs-toggle="tab" data-bs-target="#project"
                                        type="button" role="tab" aria-controls="project"
                                        aria-selected="false">Design</button>
                                </li>
                                <li class="bd__btn-item" role="presentation">
                                    <button id="digital-tab" data-bs-toggle="tab" data-bs-target="#digital"
                                        type="button" role="tab" aria-controls="digital" aria-selected="false">Digital
                                        Art</button>
                                </li>
                                <li class="bd__btn-item" role="presentation">
                                    <button id="creative-tab" data-bs-toggle="tab" data-bs-target="#creative"
                                        type="button" role="tab" aria-controls="creative"
                                        aria-selected="false">Creative</button>
                                </li>
                                <li class="bd__btn-item" role="presentation">
                                    <button id="mockup-tab" data-bs-toggle="tab" data-bs-target="#mockup" type="button"
                                        role="tab" aria-controls="mockup" aria-selected="false">Mockup</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-12">
                        <div class="tab-content wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s"
                            id="myTabContent">
                            <div class="tab-pane fade show active" id="view" role="tabpanel" aria-labelledby="view-tab">
                                <div class="row  g-5">
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven is-bg-none">
                                            <div class="portfolio__item-thumb fix bd-img-reveal bd-img-reveal-item"
                                                data-fx="24" data-meta-tag="Design" data-title="Mockup Design">
                                                <img src="assets/imgs/portfolio/portfolio-14.png" alt="image not found">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven is-bg-none">
                                            <div class="portfolio__item-thumb fix bd-img-reveal bd-img-reveal-item"
                                                data-fx="24" data-meta-tag="Logo" data-title="Branding">
                                                <img src="assets/imgs/portfolio/portfolio-15.png" alt="image not found">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven is-bg-none">
                                            <div class="portfolio__item-thumb fix bd-img-reveal bd-img-reveal-item"
                                                data-fx="24" data-meta-tag="Creative" data-title="Creative Idea">
                                                <img src="assets/imgs/portfolio/portfolio-16.png" alt="image not found">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven is-bg-none">
                                            <div class="portfolio__item-thumb fix bd-img-reveal bd-img-reveal-item"
                                                data-fx="24" data-meta-tag="Design" data-title="Laptop Mockup">
                                                <img src="assets/imgs/portfolio/portfolio-17.png" alt="image not found">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven is-bg-none">
                                            <div class="portfolio__item-thumb fix bd-img-reveal bd-img-reveal-item"
                                                data-fx="24" data-meta-tag="Creative" data-title="Digital Art">
                                                <img src="assets/imgs/portfolio/portfolio-18.png" alt="image not found">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven is-bg-none">
                                            <div class="portfolio__item-thumb fix bd-img-reveal bd-img-reveal-item"
                                                data-fx="24" data-meta-tag="Creative" data-title="Branding">
                                                <img src="assets/imgs/portfolio/portfolio-19.png" alt="image not found">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven is-bg-none">
                                            <div class="portfolio__item-thumb fix bd-img-reveal bd-img-reveal-item"
                                                data-fx="24" data-meta-tag="Creative" data-title="Creative Idea">
                                                <img src="assets/imgs/portfolio/portfolio-20.png" alt="image not found">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven is-bg-none">
                                            <div class="portfolio__item-thumb fix bd-img-reveal bd-img-reveal-item"
                                                data-fx="24" data-meta-tag="Creative" data-title="Digital Art">
                                                <img src="assets/imgs/portfolio/portfolio-21.png" alt="image not found">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven is-bg-none">
                                            <div class="portfolio__item-thumb fix bd-img-reveal bd-img-reveal-item"
                                                data-fx="24" data-meta-tag="Creative" data-title="Project">
                                                <img src="assets/imgs/portfolio/portfolio-22.png" alt="image not found">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="brand" role="tabpanel" aria-labelledby="brand-tab">
                                <div class="row  g-5">
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven is-bg-none">
                                            <div class="portfolio__item-thumb fix bd-img-reveal bd-img-reveal-item"
                                                data-fx="24" data-meta-tag="Logo" data-title="Branding">
                                                <img src="assets/imgs/portfolio/portfolio-19.png" alt="image not found">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven is-bg-none">
                                            <div class="portfolio__item-thumb fix bd-img-reveal bd-img-reveal-item"
                                                data-fx="24" data-meta-tag="Creative" data-title="Creative Idea">
                                                <img src="assets/imgs/portfolio/portfolio-15.png" alt="image not found">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="project" role="tabpanel" aria-labelledby="project-tab">
                                <div class="row  g-5">
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven is-bg-none">
                                            <div class="portfolio__item-thumb fix bd-img-reveal bd-img-reveal-item"
                                                data-fx="24" data-meta-tag="Creative" data-title="Creative-idea">
                                                <img src="assets/imgs/portfolio/portfolio-16.png" alt="image not found">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven is-bg-none">
                                            <div class="portfolio__item-thumb fix bd-img-reveal bd-img-reveal-item"
                                                data-fx="24" data-meta-tag="Creative" data-title="Digital Art">
                                                <img src="assets/imgs/portfolio/portfolio-21.png" alt="image not found">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven is-bg-none">
                                            <div class="portfolio__item-thumb fix bd-img-reveal bd-img-reveal-item"
                                                data-fx="24" data-meta-tag="Creative" data-title="Project">
                                                <img src="assets/imgs/portfolio/portfolio-22.png" alt="image not found">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="digital" role="tabpanel" aria-labelledby="digital-tab">
                                <div class="row  g-5">
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven is-bg-none">
                                            <div class="portfolio__item-thumb fix bd-img-reveal bd-img-reveal-item"
                                                data-fx="24" data-meta-tag="Creative" data-title="Digital Art">
                                                <img src="assets/imgs/portfolio/portfolio-18.png" alt="image not found">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven is-bg-none">
                                            <div class="portfolio__item-thumb fix bd-img-reveal bd-img-reveal-item"
                                                data-fx="24" data-meta-tag="Creative" data-title="Creative Idea">
                                                <img src="assets/imgs/portfolio/portfolio-16.png" alt="image not found">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven is-bg-none">
                                            <div class="portfolio__item-thumb fix bd-img-reveal bd-img-reveal-item"
                                                data-fx="24" data-meta-tag="Creative" data-title="Digital Art">
                                                <img src="assets/imgs/portfolio/portfolio-21.png" alt="image not found">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven is-bg-none">
                                            <div class="portfolio__item-thumb fix bd-img-reveal bd-img-reveal-item"
                                                data-fx="24" data-meta-tag="Creative" data-title="Project Idea">
                                                <img src="assets/imgs/portfolio/portfolio-22.png" alt="image not found">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="creative" role="tabpanel" aria-labelledby="creative-tab">
                                <div class="row  g-5">
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven is-bg-none">
                                            <div class="portfolio__item-thumb fix bd-img-reveal bd-img-reveal-item"
                                                data-fx="24" data-meta-tag="Creative" data-title="Creative Idea">
                                                <img src="assets/imgs/portfolio/portfolio-16.png" alt="image not found">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven is-bg-none">
                                            <div class="portfolio__item-thumb fix bd-img-reveal bd-img-reveal-item"
                                                data-fx="24" data-meta-tag="Creative" data-title="Digital Art">
                                                <img src="assets/imgs/portfolio/portfolio-21.png" alt="image not found">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven is-bg-none">
                                            <div class="portfolio__item-thumb fix bd-img-reveal bd-img-reveal-item"
                                                data-fx="24" data-meta-tag="Creative" data-title="Project">
                                                <img src="assets/imgs/portfolio/portfolio-22.png" alt="image not found">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="mockup" role="tabpanel" aria-labelledby="mockup-tab">
                                <div class="row  g-5">
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven is-bg-none">
                                            <div class="portfolio__item-thumb fix bd-img-reveal bd-img-reveal-item"
                                                data-fx="24" data-meta-tag="Design" data-title="Mockup Design">
                                                <img src="assets/imgs/portfolio/portfolio-14.png" alt="image not found">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven is-bg-none">
                                            <div class="portfolio__item-thumb fix bd-img-reveal bd-img-reveal-item"
                                                data-fx="24" data-meta-tag="Design" data-title="Laptop Mockup">
                                                <img src="assets/imgs/portfolio/portfolio-17.png" alt="image not found">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="portfolio__more text-center mt-50">
                            <a class="bd-btn is-btn-anim" href="portfolio.html">
                                <span class="bd-btn-inner">
                                    <span class="bd-btn-normal">View all project</span>
                                    <span class="bd-btn-hover">View all project</span>
                                    <i class="contentHidden"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- portfolio area end -->

@endsection

