@extends('layouts.navbar')

@section('content')

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
                                {{-- <div class="service__widget-tab underline-full">
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
                                </div> --}}
                            </div>
                            <div class="service__widget-item mb-30">
                                <div class="service__contact underline-full">
                                    <h5>Get in Touch </h5>
                                    <form id="contact-form" action="{{ route('contact.store') }}" method="POST">
                                        @csrf
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
                                    @foreach ($infos as $item)
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
                                                        <h6><a target="_blank" href="{{ route('About') }}">{{ $item->name }}</a></h6>
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
                                                        <h6><a href="tel:+21615256198">{{ $item->phoneNumber }}</a></h6>
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
                                                        <h6><a href="mailto:elfarissihiba780@gmail.com">{{ $item->email }}</a></h6>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 order-first order-lg-last">
                        <div class="service__details-wrapper">
                            <h2 class="service__details-title mb-25">{{$service_detail->title}}
                            </h2>
                            <p>{{$service_detail->longText}}</p>
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
            </div>
        </section>
        <!-- Service area end -->

      
@endsection
