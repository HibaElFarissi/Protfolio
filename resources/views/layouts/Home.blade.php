
@extends('layouts.navbar')
{{-- @include('sweetalert::alert') --}}

@section('content')
        <!-- Banner area start -->
        <section class="banner__area banner-height d-flex align-items-center p-relative">
            <div class="banner-shape d-none d-lg-block">
                <img class="banner__shape-two" src="assets/imgs/shape/tower-shape-small.png" alt="image not found">
            </div>
            <!-- when slide active remove this class -->
            <div class="swiper banner__active overflow-visible">
                <div class="swiper-wrapper">
                    <div class="swiper-slide banner_more_item">
                        <div class="container">
                            <div class="row align-items-center gy-5">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="banner__content p-relative">
                                        <h2 class="banner__title large wow fadeInUp" data-wow-delay=".3s"
                                            data-wow-duration=".7s">Hi, <span class="banner__shape-hand"><img
                                                    src="assets/imgs/shape/hand-shape.png" alt="image not found"></span>
                                            I’m <span class="bd-text-primary">Hiba <br> El Farissi</span><br> Web Full Stack Developper
                                        </h2>
                                        <p class="wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".9s">
                                            Meet Hiba, a dynamic full-stack developer known for her passion for crafting exceptional digital experiences.
                                            With expertise in both frontend and backend development.
                                            When not coding, Hiba enjoys exploring new technologies.</p>
                                    </div>
                                    <div class="banner__btn wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1.1s">
                                        <a class="bd-btn is-btn-anim" href="{{ url('Projects') }}">
                                            <span class="bd-btn-inner">
                                                <span class="bd-btn-normal">Get my work</span>
                                                <span class="bd-btn-hover">Get my work</span>
                                                <i class="contentHidden"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="banner__thumb-wrapper wow fadeInRight" data-wow-delay=".8s"
                                        data-wow-duration="1.2s">
                                        <div class="banner__shape">
                                            <img class="banner__shape-one" src="assets/imgs/shape/tower-shape.png"
                                                alt="image not found">
                                        </div>
                                        <div class="banner__bg"></div>
                                        <div class="banner__thumb">
                                            <img src="assets/imgs/hiba.png" alt="image not found">
                                        </div>
                                        <div class="theme__social banner-social">
                                            <a href="https://web.facebook.com/liya.hiba.5/"><i class="fa-brands fa-facebook-f"></i>
                                                <div class="banner__social-tooltip">
                                                    <p>Facebook</p>
                                                </div>
                                            </a>
                                            <a href="https://github.com/HibaElFarissi"><i class="fa-brands fa-github"></i>
                                                <div class="banner__social-tooltip">
                                                    <p>Github</p>
                                                </div>
                                            </a>
                                            <a href="https://www.linkedin.com/in/hiba-el-farissi-8161b5279/"><i class="fa-brands fa-linkedin"></i>
                                                <div class="banner__social-tooltip">
                                                    <p>Linkedin</p>
                                                </div>
                                            </a>
                                            <a href="https://www.instagram.com/lea_heba/"><i class="fa-brands fa-instagram"></i>
                                                <div class="banner__social-tooltip">
                                                    <p>Instagram</p>
                                                </div>
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
        <!-- Banner area end -->


<br><br><br>
       <!-- about style 01 start -->
       <section class="bd-about__area section-space-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="section__title-wrapper section__title-space text-center">
                        <div class="elements-section__wrapper elements-line">
                            <div class="separator__line line-left"></div>
                            <div class="elements-title__wrapper">
                                <h4 class="section__title elements__title">About Me</h4>
                            </div>
                            <div class="separator__line line-right"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5 align-items-lg-center">
                <div class="col-lg-6 col-md-6">
                    <div class="about__thumb-wrapper wow fadeInLeft tilt" data-wow-delay=".3s">
                        <div class="about__thumb">
                            {{-- <img src="assets/imgs/about/about-01.png" alt="image not found"> --}}
                            <img src="assets/imgs/aboutMe.jpeg" alt="image about me">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about__content wow fadeInRight" data-wow-delay=".3s">
                        <div class="section__title-wrapper mb-25">
                            <div class="section__title-wrapper">
                                <span class="section__subtitle">ABOUT ME</span>
                                <h2 class="section__title">Hiba El Farissi</h2>
                                <p class="contentHidden">contentHiddenText</p>
                            </div>
                        </div>
                        <p class="about__text">Our journey began with a simple belief that every idea, no matter how
                            small, has the power to make a significant impact.passion meets progress and company to
                            grow </p>
                        <p class="about__text-two">In a world saturated with noise, we stand out by embracing a
                            commitment to authenticity and originality. </p>
                        <div class="about__counter-wrapper">
                            <div class="about__counter-info">
                                <div class="about__counter-count">
                                    <h3><span class="counter">20</span>th</h3>
                                </div>
                                <p>Years of Experience</p>
                            </div>
                            <div class="about__counter-info">
                                <div class="about__counter-count">
                                    <h3><span class="counter">150</span>+</h3>
                                </div>
                                <p>Project Completed</p>
                            </div>
                        </div>
                        <div class="about__btn">
                            <a class="bd-btn is-btn-anim" href="{{ asset('About') }}">
                                <span class="bd-btn-inner">
                                    <span class="bd-btn-normal">Know more</span>
                                    <span class="bd-btn-hover">Know more</span>
                                    <i class="contentHidden"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about style 01 end -->


        <!-- service style 02 start -->
        <section class="bd-service__area section-space-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="section__title-wrapper section__title-space text-center">
                            <div class="elements-section__wrapper elements-line">
                                <div class="separator__line line-left"></div>
                                <div class="elements-title__wrapper">
                                    <h4 class="section__title elements__title">My Services </h4>
                                </div>
                                <div class="separator__line line-right"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5 wow fadeInUp" data-wow-delay=".3s">
                    <div class="col-12">
                        <div class="swiper service__active">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="service__wrapper service__item style-two text-center">
                                        <div class="contentHidden"></div>
                                        <div class="contentHidden"></div>
                                        <span class="service__icon-wrap bg-primary-opacity">
                                            <i class="icon-ux-design"></i>
                                        </span>
                                        <div class="service__content">
                                            <h5 class="service__title"><a href="service-details.html">UX/UI Design</a>
                                            </h5>
                                            <p>Start with a brief introduction about your a yourself. Mention your name,
                                                your current role or status .</p>
                                            <div class="contentHidden">
                                                <a class="contentHidden" href="service-details.html">contentHidden
                                                    <span><i class="contentHidden"></i></span></a>
                                                <a class="contentHidden" href="service-details.html"> <span
                                                        class="contentHidden"><i class="assets/imgs/icons/arrow.png">
                                                        </i></span></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="swiper-slide">
                                    <div class="service__wrapper service__item style-two text-center">
                                        <div class="contentHidden"></div>
                                        <div class="contentHidden"></div>
                                        <span class="service__icon-wrap bg-primary-opacity">
                                            <i class="icon-design"></i>
                                        </span>
                                        <div class="service__content">
                                            <h5 class="service__title"><a href="service-details.html">Web Design</a>
                                            </h5>
                                            <p>Develop detailed case studies for a few key projects to provide deeper
                                                insights into your design process.</p>
                                            <div class="contentHidden">
                                                <a class="contentHidden" href="service-details.html">contentHidden
                                                    <span><i class="contentHidden"></i></span></a>
                                                <a class="contentHidden" href="service-details.html"> <span
                                                        class="contentHidden"><i class="assets/imgs/icons/arrow.png">
                                                        </i></span></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="swiper-slide">
                                    <div class="service__wrapper service__item style-two text-center">
                                        <div class="contentHidden"></div>
                                        <div class="contentHidden"></div>
                                        <span class="service__icon-wrap bg-primary-opacity">
                                            <i class="icon-game"></i>
                                        </span>
                                        <div class="service__content">
                                            <h5 class="service__title"><a href="service-details.html">Game
                                                    Development</a></h5>
                                            <p>Share design documents, storyboards, or game design document that
                                                illustrate your planning and concept.</p>
                                            <div class="contentHidden">
                                                <a class="contentHidden" href="service-details.html">contentHidden
                                                    <span><i class="contentHidden"></i></span></a>
                                                <a class="contentHidden" href="service-details.html"> <span
                                                        class="contentHidden"><i class="assets/imgs/icons/arrow.png">
                                                </i></span></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- If we need pagination -->
                            <div class="pagination__wrapper">
                                <div class="bd-swiper-dot text-center"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service style 02 end -->

        <!-- Section divider -->
        <div class="section__divider">
            <hr>
        </div>

         <!-- Portfolio area start -->
    <section id="homeworks" class="bd-portfolio__area section-space">
        <div class="container">
            <div class="row g-5 align-items-end section__title-space">
                <div class="col-lg-5 col-md-7">
                    <div class="section__title-wrapper">
                        <span class="section__subtitle">MY RECENT PORTFOLIO</span>
                        <h4 class="section__title">Check My Latest Works </h4>
                        <p class="contentHidden">contentHiddenText</p>
                    </div>
                </div>
                <div class="col-lg-7 col-md-5">
                    <div class="portfolio__more text-md-end">
                        <a class="bd-btn is-btn-anim" href="/">
                            <span class="bd-btn-inner">
                                <span class="bd-btn-normal">View all project</span>
                                <span class="bd-btn-hover">View all project</span>
                                <i class="contentHidden"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="portfolio__wrapper">
                <div class="row grid g-5 wow fadeInUp" data-wow-delay=".5s">

                    {{-- @forelse ($projects as $item ) --}}
                    <div class="col-xl-4 col-lg-4 col-md-6 grid-item">
                        <div class=" portfolio__item">
                            <div class="portfolio__thumb">
                                <a href="/">
                                {{-- <img src="{{ asset('storage/'.$item->photo) }}"
                                        alt="img not found"></a> --}}
                            </div>
                            <div class="portfolio__content">
                                <div class="portfolio__info">
                                    <div class="portfolio__tag">
                                        {{-- <a href="{{ route('projects.show',$item) }}">{{$item->Categorie->name}}</a> --}}
                                    </div>
                                    {{-- <h5 class="portfolio__title"><a href="{{ route('projects.show',$item) }}">{{$item->name}}</a> --}}
                                    </h5>
                                </div>
                                <div class="portfolio__btn">
                                    {{-- <a href="{{ route('projects.show',$item) }}" class="circle-btn"> --}}
                                        <span class="icon__box">
                                            <i class="fa-regular fa-arrow-right-long"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- @empty
                        <h4>No Project Found!</h4>
                    @endforelse --}}
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio area start -->
        <!-- Section divider -->
        <div class="section__divider">
            <hr>
        </div>

        <!-- qualification start -->
        <section class="bd-qulafication__area section-space">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="section__title-wrapper text-center">
                            <span class="section__subtitle">Education & SKILL</span>
                            <h2 class="section__title mb-25">My Curriculum Vitae</h2>
                            <p class="contentHidden">contentHiddenText</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-30">
                    <div class="col-lg-6 col-md-6">
                        <div class="faq__tab-wrapper bd-tab">
                            <nav>
                                <div class="nav nav-tabs faq-tab-slide justify-content-center" id="nav-tab"
                                    role=tablist>
                                    <label for="faq-tab-check" class="nav faq-separate">
                                        <span class="nav-link" id="nav-experience-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-experience" role="tab" aria-controls="nav-experience"
                                            aria-selected="true">Experience</span>
                                        <input type="checkbox" id="faq-tab-check">
                                        <i></i>
                                        <span class="nav-link active" id="nav-education-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-education" role="tab" aria-controls="nav-education"
                                            aria-selected="false">Education</span>
                                    </label>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center wow fadeInUp" data-wow-delay=".3s">
                    <div class="tab-content wow fadeInUp" id="nav-tabContent" data-wow-delay=".3s"
                        data-wow-duration="1s">
                        <div class="tab-pane fade show  active" id="nav-experience" role="tabpanel"
                            aria-labelledby="nav-experience-tab">
                            <div class="row g-5">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="faq__style">
                                        <div class="bd__faq">
                                            <div class="accordion" id="accordionExampleFour">
                                                <div class="accordion-item">
                                                    <h5 class="accordion-header" id="headingTwo">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                            aria-expanded="false" aria-controls="collapseTwo">
                                                            Portfolio of Achievements
                                                        </button>
                                                    </h5>
                                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                                        aria-labelledby="headingTwo"
                                                        data-bs-parent="#accordionExampleFour">
                                                        <div class="accordion-body">
                                                            <span class="qualification__meta">DVI University (1997 -
                                                                2001)</span>
                                                            <p>If you participated in a study abroad program or
                                                                international exchange, mention the location and
                                                                duration of your overseas experience.</p>
                                                            <h6 class="qualification__rating">4.30/5</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h5 class="accordion-header" id="headingOne">
                                                        <button class="accordion-button" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                            aria-expanded="true" aria-controls="collapseOne">
                                                            Study Abroad
                                                        </button>
                                                    </h5>
                                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                                        aria-labelledby="headingOne"
                                                        data-bs-parent="#accordionExampleFour">
                                                        <div class="accordion-body">
                                                            <span class="qualification__meta">DVI University (1997 -
                                                                2001)</span>
                                                            <p>If you participated in a study abroad program or
                                                                international exchange, mention the location and
                                                                duration of your overseas experience.</p>
                                                            <h6 class="qualification__rating">4.30/5</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h5 class="accordion-header" id="headingThree">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                            aria-expanded="false" aria-controls="collapseThree">
                                                            Honours and Awards
                                                        </button>
                                                    </h5>
                                                    <div id="collapseThree" class="accordion-collapse collapse"
                                                        aria-labelledby="headingThree"
                                                        data-bs-parent="#accordionExampleFour">
                                                        <div class="accordion-body">
                                                            <span class="qualification__meta">DVI University (1997 -
                                                                2001)</span>
                                                            <p>If you participated in a study abroad program or
                                                                international exchange, mention the location and
                                                                duration of your overseas experience.</p>
                                                            <h6 class="qualification__rating">4.30/5</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h5 class="accordion-header" id="headingFour">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                            aria-expanded="false" aria-controls="collapseFour">
                                                            Academic References
                                                        </button>
                                                    </h5>
                                                    <div id="collapseFour" class="accordion-collapse collapse"
                                                        aria-labelledby="headingFour"
                                                        data-bs-parent="#accordionExampleFour">
                                                        <div class="accordion-body">
                                                            <span class="qualification__meta">DVI University (1997 -
                                                                2001)</span>
                                                            <p>If you participated in a study abroad program or
                                                                international exchange, mention the location and
                                                                duration of your overseas experience.</p>
                                                            <h6 class="qualification__rating">4.30/5</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="faq__style">
                                        <div class="bd__faq">
                                            <div class="accordion" id="accordionExampleTwo">
                                                <div class="accordion-item">
                                                    <h5 class="accordion-header" id="headingSix">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseSix_2"
                                                            aria-expanded="false" aria-controls="collapseSix_2">
                                                            Work Experience
                                                        </button>
                                                    </h5>
                                                    <div id="collapseSix_2" class="accordion-collapse collapse"
                                                        aria-labelledby="headingSix"
                                                        data-bs-parent="#accordionExampleTwo">
                                                        <div class="accordion-body">
                                                            <span class="qualification__meta">DVI University (1997 -
                                                                2001)</span>
                                                            <p>If you participated in a study abroad program or
                                                                international exchange,
                                                                mention the location and duration of your overseas
                                                                experience.</p>
                                                            <h6 class="qualification__rating">4.30/5</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h5 class="accordion-header" id="headingFive">
                                                        <button class="accordion-button" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseFive_1"
                                                            aria-expanded="true" aria-controls="collapseFive_1">
                                                            Achievements and Results
                                                        </button>
                                                    </h5>
                                                    <div id="collapseFive_1" class="accordion-collapse collapse show"
                                                        aria-labelledby="headingFive"
                                                        data-bs-parent="#accordionExampleTwo">
                                                        <div class="accordion-body">
                                                            <span class="qualification__meta">DVI University (1997 -
                                                                2001)</span>
                                                            <p>Highlight achievements that demonstrate your impact on
                                                                the organization,
                                                                such as revenue growth, cost savings,process.</p>
                                                            <h6 class="qualification__rating">4.30/5</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h5 class="accordion-header" id="headingSeven">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseSeven_1"
                                                            aria-expanded="false" aria-controls="collapseSeven_1">
                                                            Leadership Experience
                                                        </button>
                                                    </h5>
                                                    <div id="collapseSeven_1" class="accordion-collapse collapse"
                                                        aria-labelledby="headingSeven"
                                                        data-bs-parent="#accordionExampleTwo">
                                                        <div class="accordion-body">
                                                            <span class="qualification__meta">DVI University (1997 -
                                                                2001)</span>
                                                            <p>If you participated in a study abroad program or
                                                                international exchange,
                                                                mention the location and duration of your overseas
                                                                experience.</p>
                                                            <h6 class="qualification__rating">4.30/5</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h5 class="accordion-header" id="headingEight">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseEight"
                                                            aria-expanded="false" aria-controls="collapseEight">
                                                            Projects and Initiatives
                                                        </button>
                                                    </h5>
                                                    <div id="collapseEight" class="accordion-collapse collapse"
                                                        aria-labelledby="headingEight"
                                                        data-bs-parent="#accordionExampleTwo">
                                                        <div class="accordion-body">
                                                            <span class="qualification__meta">DVI University (1997 -
                                                                2001)</span>
                                                            <p>If you participated in a study abroad program or
                                                                international exchange,
                                                                mention the location and duration of your overseas
                                                                experience.</p>
                                                            <h6 class="qualification__rating">4.30/5</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="nav-education" role="tabpanel"
                            aria-labelledby="nav-education-tab">
                            <div class="row g-5">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="faq__style">
                                        <div class="bd__faq">
                                            <div class="accordion" id="accordionExampleThree">
                                                <div class="accordion-item">
                                                    <h5 class="accordion-header" id="headingSix_1">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseSix_1"
                                                            aria-expanded="false" aria-controls="collapseSix_1">
                                                            Education Qualification
                                                        </button>
                                                    </h5>
                                                    <div id="collapseSix_1" class="accordion-collapse collapse"
                                                        aria-labelledby="headingSix_1"
                                                        data-bs-parent="#accordionExampleThree">
                                                        <div class="accordion-body">
                                                            <span class="qualification__meta">DVI University (1997 -
                                                                2001)</span>
                                                            <p>If you participated in a study abroad program or
                                                                international exchange,
                                                                mention the location and duration of your overseas
                                                                experience.</p>
                                                            <h6 class="qualification__rating">4.30/5</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h5 class="accordion-header" id="headingFive_1">
                                                        <button class="accordion-button" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                            aria-expanded="true" aria-controls="collapseFive">
                                                            Achievements and Results
                                                        </button>
                                                    </h5>
                                                    <div id="collapseFive" class="accordion-collapse collapse show"
                                                        aria-labelledby="headingFive_1"
                                                        data-bs-parent="#accordionExampleThree">
                                                        <div class="accordion-body">
                                                            <span class="qualification__meta">DVI University (1997 -
                                                                2001)</span>
                                                            <p>Highlight achievements that demonstrate your impact on
                                                                the organization,
                                                                such as revenue growth, cost savings, process./p>
                                                            <h6 class="qualification__rating">4.30/5</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h5 class="accordion-header" id="headingSeven_1">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                                            aria-expanded="false" aria-controls="collapseSeven">
                                                            Leadership Experience
                                                        </button>
                                                    </h5>
                                                    <div id="collapseSeven" class="accordion-collapse collapse"
                                                        aria-labelledby="headingSeven_1"
                                                        data-bs-parent="#accordionExampleThree">
                                                        <div class="accordion-body">
                                                            <span class="qualification__meta">DVI University (1997 -
                                                                2001)</span>
                                                            <p>If you participated in a study abroad program or
                                                                international exchange,
                                                                mention the location and duration of your overseas
                                                                experience.</p>
                                                            <h6 class="qualification__rating">4.30/5</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h5 class="accordion-header" id="headingEight_1">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseEight_1"
                                                            aria-expanded="false" aria-controls="collapseEight_1">
                                                            Projects and Initiatives
                                                        </button>
                                                    </h5>
                                                    <div id="collapseEight_1" class="accordion-collapse collapse"
                                                        aria-labelledby="headingEight_1"
                                                        data-bs-parent="#accordionExampleThree">
                                                        <div class="accordion-body">
                                                            <span class="qualification__meta">DVI University (1997 -
                                                                2001)</span>
                                                            <p>If you participated in a study abroad program or
                                                                international exchange,
                                                                mention the location and duration of your overseas
                                                                experience.</p>
                                                            <h6 class="qualification__rating">4.30/5</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="faq__style">
                                        <div class="bd__faq">
                                            <div class="accordion" id="accordionExampleOne">
                                                <div class="accordion-item">
                                                    <h5 class="accordion-header" id="headingTwo_2">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo_2"
                                                            aria-expanded="false" aria-controls="collapseTwo_2">
                                                            Portfolio of Achievements
                                                        </button>
                                                    </h5>
                                                    <div id="collapseTwo_2" class="accordion-collapse collapse"
                                                        aria-labelledby="headingTwo_2"
                                                        data-bs-parent="#accordionExampleOne" style="">
                                                        <div class="accordion-body">
                                                            <span class="qualification__meta">DVI University (1997 -
                                                                2001)</span>
                                                            <p>If you participated in a study abroad program or
                                                                international exchange, mention the location and
                                                                duration of your overseas experience.</p>
                                                            <h6 class="qualification__rating">4.30/5</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item active">
                                                    <h5 class="accordion-header" id="headingOne_1">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseOne_1"
                                                            aria-expanded="false" aria-controls="collapseOne_1">
                                                            Study Abroad
                                                        </button>
                                                    </h5>
                                                    <div id="collapseOne_1" class="accordion-collapse collapse show"
                                                        aria-labelledby="headingOne_1"
                                                        data-bs-parent="#accordionExampleOne" style="">
                                                        <div class="accordion-body">
                                                            <span class="qualification__meta">DVI University (1997 -
                                                                2001)</span>
                                                            <p>If you participated in a study abroad program or
                                                                international exchange, mention the location and
                                                                duration of your overseas experience.</p>
                                                            <h6 class="qualification__rating">4.30/5</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h5 class="accordion-header" id="headingThree_1">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseThree_1"
                                                            aria-expanded="false" aria-controls="collapseThree_1">
                                                            Honours and Awards
                                                        </button>
                                                    </h5>
                                                    <div id="collapseThree_1" class="accordion-collapse collapse"
                                                        aria-labelledby="headingThree_1"
                                                        data-bs-parent="#accordionExampleOne" style="">
                                                        <div class="accordion-body">
                                                            <span class="qualification__meta">DVI University (1997 -
                                                                2001)</span>
                                                            <p>If you participated in a study abroad program or
                                                                international exchange, mention the location and
                                                                duration of your overseas experience.</p>
                                                            <h6 class="qualification__rating">4.30/5</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h5 class="accordion-header" id="headingFour_1">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseFour_1"
                                                            aria-expanded="false" aria-controls="collapseFour_1">
                                                            Academic References
                                                        </button>
                                                    </h5>
                                                    <div id="collapseFour_1" class="accordion-collapse collapse"
                                                        aria-labelledby="headingFour_1"
                                                        data-bs-parent="#accordionExampleOne">
                                                        <div class="accordion-body">
                                                            <span class="qualification__meta">DVI University (1997 -
                                                                2001)</span>
                                                            <p>If you participated in a study abroad program or
                                                                international exchange, mention the location and
                                                                duration of your overseas experience.</p>
                                                            <h6 class="qualification__rating">4.30/5</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- qualification end -->

        <!-- counter area start -->
        <section class="bd-counter__area section-space theme-bg-secondary">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="section__title-wrapper section__title-space">
                            <span class="section__subtitle">Design experience</span>
                            <h2 class="section__title">Design Skills</h2>
                        </div>
                    </div>
                </div>
            </div>

        <!-- counter area end -->
        <div class="section__divider">
            <hr>
        </div>

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

    </section>
    <div class="section__divider">
        <hr>
    </div>

        <!-- brand area end -->


        <!-- testimonial area start -->
        <section class="bd-testimonial__area section-space theme-bg-secondary p-relative z-index-1">
            <div class="container">
                <div class="row align-items-center g-5 wow fadeInUp" data-wow-delay=".3s">
                    <div class="col-xl-5 col-lg-5">
                        <div class="testimonial__thumb-wrap">
                            <div class="testimonial__thumb">
                                <div class="testimonial__bg"></div>
                                <img src="assets/imgs/testimonial/testimonial-01.png" alt="img not found">
                                <div class="testimonial__thumb-small">
                                    <img class="img-one" src="assets/imgs/user/user-04.png" alt="img not found">
                                    <img class="img-two" src="assets/imgs/user/user-05.png" alt="img not found">
                                    <img class="img-three" src="assets/imgs/user/user-06.png" alt="img not found">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="testimonial__item">
                            <div class="section__title-wrapper mb-25">
                                <span class="section__subtitle mb-15">Client say</span>
                                <h2 class="section__title">Client Experiences and Testimonials</h2>
                            </div>
                            <div class="swiper testimonial__active p-relative">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonial__content">
                                            <div class="testimonial__rating">
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
                                            </div>
                                            <div class="testimonial__text">
                                                <p>“The improved user experience our website immediately noticeable.
                                                    Navigation are
                                                    more intuitive and the layout our visitors through our content
                                                    seamlessly.
                                                    The responsive design ensures.”</p>
                                            </div>
                                            <div class="testimonial__avatar-item">
                                                <div class="testimonial__avatar-thumb">
                                                    <img src="assets/imgs/user/user-03.png" alt="img not found">
                                                </div>
                                                <div class="testimonial__avatar-info">
                                                    <h6 class="testimonial__avatar-title">Louis</h6>
                                                    <span class="testimonial__avatar-designation">Founder </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial__content">
                                            <div class="testimonial__rating">
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
                                            </div>
                                            <div class="testimonial__text">
                                                <p>“The improved user experience our website immediately noticeable.
                                                    Navigation are
                                                    more intuitive and the layout our visitors through our content
                                                    seamlessly.
                                                    The responsive design ensures.”</p>
                                            </div>
                                            <div class="testimonial__avatar-item">
                                                <div class="testimonial__avatar-thumb">
                                                    <img src="assets/imgs/user/user-01.png" alt="img not found">
                                                </div>
                                                <div class="testimonial__avatar-info">
                                                    <h6 class="testimonial__avatar-title">Alexa</h6>
                                                    <span class="testimonial__avatar-designation">Designer</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial__content">
                                            <div class="testimonial__rating">
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
                                            </div>
                                            <div class="testimonial__text">
                                                <p>“The improved user experience our website immediately noticeable.
                                                    Navigation are
                                                    more intuitive and the layout our visitors through our content
                                                    seamlessly.
                                                    The responsive design ensures.”</p>
                                            </div>
                                            <div class="testimonial__avatar-item">
                                                <div class="testimonial__avatar-thumb">
                                                    <img src="assets/imgs/user/user-02.png" alt="img not found">
                                                </div>
                                                <div class="testimonial__avatar-info">
                                                    <h6 class="testimonial__avatar-title">Morish</h6>
                                                    <span class="testimonial__avatar-designation">Director</span>
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

                </div>
            </div>
        </section>
        <!-- testimonial area end -->



        <!-- blog area start -->
        <div id="homeblog" class="bd-blog__area section-space">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6">
                        <div class="section__title-wrapper text-center section__title-space">
                            <span class="section__subtitle">MY BLOG</span>
                            <h2 class="section__title mb-20">Read My Latest Blog</h2>
                            <p class="contentHidden">contentHiddenText</p>
                        </div>
                    </div>
                </div>
                <div class="row g-30 wow fadeInUp" data-wow-delay=".3s">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <section class="blog__wrap blog__item bg-solid">
                            <div class="blog__thumb is-hover">
                                <a href="blog-details.html">
                                    <img src="assets/imgs/blog/blog-01.png" alt="image not found">
                                </a>
                                <div class="blog__meta style-one">
                                    <h2 class="date">25 <span class="month">OCT</span></h2>
                                </div>
                            </div>
                            <div class="blog__content">
                                <h4 class="blog__title small"><a href="blog-details.html">The Impact of Micro
                                        interactions User Engagement</a></h4>
                                <p>Explore how subtle micro interactions can enhance user and satisfaction Stay up
                                    to-date with the latest trends in web develop including new technologies</p>
                                <div class="blog__btn-text">
                                    <a href="blog-details.html" class="underline-btn">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </section>

                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <section class="blog__wrap blog__item bg-solid">
                            <div class="blog__thumb is-hover">
                                <a href="blog-details.html">
                                    <img src="assets/imgs/blog/blog-02.png" alt="image not found">
                                </a>
                                <div class="blog__meta style-one">
                                    <h2 class="date">20 <span class="month">FEB</span></h2>
                                </div>
                            </div>
                            <div class="blog__content">
                                <h4 class="blog__title small"><a href="blog-details.html">Share Their Office Relocation
                                        on Digital Platforms</a></h4>
                                <p>Our decision to move from our growth and providing an even better experience for our
                                    clients and team members. This move allows us to expand our</p>
                                <div class="blog__btn-text">
                                    <a href="blog-details.html" class="underline-btn">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog area end -->



        <!-- Contact area start -->
        <div id="homecontact" class="bd-contact__area section-space p-relative style-two">
            <div class="bg__thumb-position include-bg is-overlay" data-background="assets/imgs/bg/contact-bg-03.png">
            </div>
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-5 wow fadeInLeft" data-wow-delay=".3s">
                        <div class="contact__wrapper">
                            <div class="section__title-wrapper mb-30">
                                <span class="section__subtitle bg-field">GET IN TOUCH </span>
                                <h2 class="section__title mb-20">Feel Free Contact me</h2>
                                <p class="section__paragraph">I'm generally available during regular business hours
                                    Specify your working hours, but I'll make an effort to respond to your messages as
                                    soon as possible.</p>
                            </div>
                            <div class="contact__info-item style-two">
                                <ul>
                                    <li>
                                        <div class="contact__info">
                                            <div class="contact__info-icon is-solid-border">
                                                <span>
                                                    <i class="icon-phone"></i>
                                                </span>
                                            </div>
                                            <div class="contact__info-content">
                                                <p>Phone</p>
                                                <h6><a href="tel:+13322078097">+212 615 256 198</a></h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact__info">
                                            <div class="contact__info-icon is-solid-border">
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
                    {{-- Form --}}
                    <div class="col-lg-7 wow fadeInRight" data-wow-delay=".3s">
                        <div class="row g-5 align-items-center justify-content-center">
                            @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                              @endif

                            <div class="col-lg-6 text-center">
                                <form action="{{ route('contact.store') }}" class="contact100-form validate-form" method="post">
                                    @csrf
                                <div class="from__input-box">
                                    <div class="contentHidden">
                                        <label for="text">Your Name<span>*</span></label>
                                    </div>
                                    <div class="form__input style-three">
                                        {{-- <input name="fname" id="fname" type="text" placeholder="Your Name"> --}}
                                        <input class="text-white" type="text" name="name"  type="text" class="form-control" name="name"  placeholder="Your Name" data-validate = "Name is required">
                                        <div class="contentHidden"><span><i class="fa-solid fa-house"></i></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 text-center">
                                <div class="from__input-box">
                                    <div class="contentHidden">
                                        <label for="text">Company Name<span>*</span></label>
                                    </div>
                                    <div class="form__input style-three">
                                        {{-- <input name="lname" id="lname" type="text" placeholder="Company Name"> --}}
                                        <input class="text-white" type="text" name="company"  type="text" class="form-control" name="name"  placeholder="Company Name" data-validate = "Company name is required">
                                            @error('message')
                                                <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        <div class="contentHidden"><span><i class="fa-solid fa-house"></i></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 text-center">
                                <div class="from__input-box">
                                    <div class="contentHidden">
                                        <label for="text">Email Adress<span>*</span></label>
                                    </div>
                                    <div class="form__input style-three">
                                        <input class="text-white" type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                        @error('name')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                        <div class="contentHidden"><span><i class="fa-solid fa-house"></i></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 text-center">
                                <div class="from__input-box">
                                    <div class="contentHidden">
                                        <label for="text">contentHidden<span>*</span></label>
                                    </div>
                                    <div class="form__input style-three">
                                        <input class="text-white" name="phone" id="phone" type="text" placeholder="Phone Number">
                                            @error('message')
                                                 <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        <div class="contentHidden"><span><i class="fa-solid fa-house"></i></span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 text-center">

                                <div class="from__input-box">
                                    {{-- <div class="contentHidden">
                                        <label for="name">name<span>*</span></label>
                                    </div> --}}

                                    <div class="form__input style-three">
                                        <textarea class="form-control text-white" style="font-size: 17px;" name="message" rows="5" placeholder="A Few Words"  data-validate = "Message is required"></textarea>
                                            @error('message')
                                                <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        <div class="contentHidden"><span><i class="fa-solid fa-envelope"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contact__btn">
                                <button class="bd-btn w-100" type="submit">Send Message</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact area end -->

@endsection
