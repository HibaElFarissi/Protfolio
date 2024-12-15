@extends('layouts.navbar')

@section('content')
<section class="breadcrumb__area p-relative style-one is-breadcrumb-space">
    {{-- <div class="breadcrumb__thumb-bg include-bg bg__thumb-position"
    @foreach ( $Settings as $item )
    data-background="{{ asset('storage/' . $item->banner_Portfolio) }}"></div>
    @endforeach --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-7 col-xl-7 col-lg-8">
                <div class="breadcrumb__content-wrapper p-relative z-index-1 text-center">
                    <div class="breadcrumb__title-wrapperr">
                        <h1 class="breadcrumb__title mb-25">Design</h1>
                    </div>
                    <div class="breadcrumb__menu">
                        <nav>
                            <ul>
                                <li><span><a href="/">Home</a></span></li>
                                <li><span><a href="#">Design</a></span></li>

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
                            <a href="{{ route('Design_all') }}">View
                                All</a>
                         </li>

                        @foreach ($Categories as $item )

                        <li class="bd__btn-item" role="presentation">
                           <a href="{{ route('filter_Design', $item ) }}">{{$item->name}}</a>
                        </li>
                       @endforeach

                    </ul>
                </div>
            </div>
        </div>
<div class="row">
   <div class="portfolio__wrapper">
                <div class="row grid g-5 wow fadeInUp" data-wow-delay=".5s">

                    @forelse ($Designs as $item )
                    <div class="col-xl-4 col-lg-4 col-md-6 grid-item">
                        <div class=" portfolio__item">
                            <div class="portfolio__thumb">
                                <a href="#">
                                <img src="{{ asset('storage/'.$item->photo) }}"
                                        alt="img not found"></a>
                            </div>
                            <div class="portfolio__content">
                                <div class="portfolio__info">
                                    <div class="portfolio__tag">
                                        <a href="#">{{$item->Client}}</a>
                                    </div>
                                    <h5 class="portfolio__title"><a href="{#">{{$item->name}}</a>
                                    </h5>
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

<div class="row">
    <div class="col-12">

        <div class="row">
            <div class="col-xxl-6">
                <div class="pagination__wrapper">
                    <div class="bd-basic__pagination style-2">
                        <nav>
                            <ul>
                                <li>
                                    <span><a href="{{ $Designs->nextPageUrl() }}">Next</a></span>
                                </li>
                               @foreach ($Designs->getUrlRange(1, $Designs->lastPage()) as $page => $url)
                        <li class="page-item{{ $Designs->currentPage() === $page ? ' current' : '' }}">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endforeach

                                <li>
                                    <span><a href="{{ $Designs->previousPageUrl() }}">Prev</a></span>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
    </div>

@endsection
