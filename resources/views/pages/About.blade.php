
@extends('layouts.navbar')

@section('content')

        <!-- breadcrumb area  start -->
        <section class="breadcrumb__area p-relative style-two is-breadcrumb-space">
            @foreach ($banners as $item)
            <div class="breadcrumb__thumb-bg include-bg bg__thumb-position"
                data-background="{{ asset('storage/' . $item->bannerAbout) }}"></div>
            @endforeach
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
                                        <li><span><a href="/">Home</a></span></li>
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
                @foreach ($infos as $item)
                <div class="team__details-wrapper">
                    <div class="row g-5 align-items-center">
                        <div class="col-xl-4 col-lg-4 col-md-5">
                            <div class="team__details-thumb bg-solid">
                                <img src="{{ asset('storage/' . $item->image2) }}" alt="image not found">
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-7">
                            <div class="team__details-content">
                                <div class="team__details-author">
                                    <h3 class="team__details-title">{{ $item->name }}</h3>
                                    <span class="team__details-designation">{{ $item->job }}</span>
                                </div>
                                <p>{{ $item->description }}</p>
                                <!-- social -->
                                <div class="theme__social">
                                    <a href="{{ $item->facebook }}"><i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="{{ $item->instagram }}"><i class="icon-instagram"></i>
                                    </a>
                                    <a href="{{ $item->linkedin}}"><i class="fa-brands fa-linkedin"></i>
                                    </a>
                                    <a href="{{ $item->github}}"><i class="fa-brands fa-github"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
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
                        @foreach ($Service_visions as $item)
                        <div class="feature__single-item">
                            <ul>
                                <li>{{ $item->name }}</li>
                            </ul>
                        </div>
                        @endforeach
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
                    @forelse ($service_details as $item)
                    <div class="col">
                        <div class="service__wrapper service__item style-seven bg-solid text-center is-padding-reduce is-transition wow fadeIn"
                        data-wow-delay=".3s">
                            <span class="service__icon-wrap">
                                {!! $item->icon !!}
                            </span>
                            <div class="service__content">
                                <h5 class="service__title"><a href="service-details.html">{{ $item->title_Global }}</a></h5>
                                <p>{{ $item->slug }}</p>
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
                    </div>
                    @empty
                    <p>No Data Found !</p>
                    @endforelse
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

                                        @forelse ( $feedbacks as $item)
                                        <div class="testimonial__item">
                                            <div class="testimonial__content">
                                                <div class="testimonial__text">
                                                    <p>{{ $item->feedback }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial__thumb-wrap">
                                            <div class="testimonial__thumb">
                                                <img src="{{ asset('storage/' . $item->image) }}" alt="image not found">
                                            </div>
                                            <div class="testimonial__avatar-info">
                                                <h6 class="testimonial__avatar-title">{{ $item->name }}</h6>
                                                <span class="testimonial__avatar-designation">{{ $item->job }}
                                                </span>
                                            </div>
                                        </div>
                                        @empty
                                          <h3>No Data Found!</h3>
                                        @endforelse
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
