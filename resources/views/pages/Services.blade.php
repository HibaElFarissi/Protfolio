@extends('layouts.navbar')

@section('content')

        <!-- breadcrumb area  start -->
        <section class="breadcrumb__area p-relative style-two is-breadcrumb-space">
            @foreach ($banners as $item)
            <div class="breadcrumb__thumb-bg include-bg bg__thumb-position"
                data-background="{{ asset('storage/' . $item->bannerService) }}"></div>
            @endforeach
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
                                        <li><span><a href="/">Home</a></span></li>
                                        <li><span><a href="{{ url('Service') }}">Service</a></span></li>
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
                    @foreach ($Service_details as $item)
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6  wow fadeInUp" data-wow-delay=".3s"
                        data-wow-duration="1s">
                        <div class="service__wrapper service__item style-eight text-center">
                            <div class="contentHidden"></div>
                            <div class="contentHidden"></div>
                            <span class="service__icon-wrap is-icon-border">
                               {!! $item->icon !!}
                            </span>
                            <div class="service__content">
                                <h5 class="service__title underline"><a href="{{ route('Service-details.show', $item) }}">{{ $item->title_Global }}</a></h5>
                                <p>{{ $item->slug }}</p>
                                <div class="contentHidden">
                                    <a class="contentHidden" href="#">contentHidden <span><i
                                                class="contentHidden"></i></span></a>
                                    <a class="contentHidden" href="#"> <span class="contentHidden"><i
                                                class="assets/imgs/icons/arrow.png"> </i></span></a>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Service area end -->
@endsection
