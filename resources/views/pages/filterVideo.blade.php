@extends('layouts.navbar')

@section('content')
    <section class="breadcrumb__area p-relative style-one is-breadcrumb-space">
        {{-- <div class="breadcrumb__thumb-bg include-bg bg__thumb-position"
            @foreach ($Settings as $item)
    data-background="{{ asset('storage/' . $item->banner_Portfolio) }}"></div> @endforeach --}}
            <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-7 col-xl-7 col-lg-8">
                    <div class="breadcrumb__content-wrapper p-relative z-index-1 text-center">
                        <div class="breadcrumb__title-wrapperr">
                            <h1 class="breadcrumb__title mb-25">Videos</h1>
                        </div>
                        <div class="breadcrumb__menu">
                            <nav>
                                <ul>
                                    <li><span><a href="/">Home</a></span></li>
                                    <li><span><a href="#">Video</a></span></li>

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
                                <a href="{{ route('Video_all') }}">View
                                    All</a>
                             </li>

                            @foreach ($Categories as $item)
                                <li class="bd__btn-item" role="presentation">
                                    <a href="{{ route('filter_Video', $item) }}">{{ $item->name }}</a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-12">
                    <div class="tab-content wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s" id="myTabContent">
                        <div class="tab-pane fade show active" id="view" role="tabpanel" aria-labelledby="view-tab">
                            <div class="row  g-5">
                                @forelse ($Videos as $item)
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven">
                                            <div class="portfolio__item-thumb">

                                                <iframe width="100%" height="500"
                                                    src="{{$item->url_video}}?autoplay=1&loop=1&playlist={{$item->code_video}}&playsinline=1&mute=1"
                                                    title="3D Animation from Spline to Figma⚡️" frameborder="0"
                                                    style="border-radius: 25px;"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                                </iframe>

                                            </div>
                                            <div class="portfolio__item-content">
                                                <div class="portfolio__item-info">
                                                    <div class="portfolio__tag">
                                                       {{$item->Client}}
                                                    </div>
                                                    <h5 class="portfolio__item-title underline">
                                                     {{$item->name}}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <h4>No Designs Found!</h4>
                                @endforelse

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">

                    <div class="row">
                        <div class="col-xxl-6">
                            <div class="pagination__wrapper">
                                <div class="bd-basic__pagination style-2">
                                    <nav>
                                        <ul>
                                            <li>
                                                <span><a href="{{ $Videos->nextPageUrl() }}">Next</a></span>
                                            </li>
                                           @foreach ($Videos->getUrlRange(1, $Videos->lastPage()) as $page => $url)
                                    <li class="page-item{{ $Videos->currentPage() === $page ? ' current' : '' }}">
                                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                    </li>
                                @endforeach

                                            <li>
                                                <span><a href="{{ $Videos->previousPageUrl() }}">Prev</a></span>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                </div>
        @endsection
