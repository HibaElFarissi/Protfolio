@extends('layouts.navbarDetail')

@section('content')

    <link href="{{ asset('FrontEnd/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('FrontEnd/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('FrontEnd/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('FrontEnd/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('FrontEnd/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('FrontEnd/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('FrontEnd/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('FrontEnd/css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('FrontEnd/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('FrontEnd/css/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('FrontEnd/css/swiper.min.css') }}" rel="stylesheet">
    <link href="{{ asset('FrontEnd/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('FrontEnd/css/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ asset('FrontEnd/css/jquery.fancybox.css') }}" rel="stylesheet">
    <link href="{{ asset('FrontEnd/css/odometer-theme-default.css') }}" rel="stylesheet">
    <link href="{{ asset('FrontEnd/sass/style.css') }}" rel="stylesheet">
    {{--  --}}
    <!-- start wpo-page-title -->

    {{-- @foreach ( $Settings as $item ) --}}
    <section class="wpo-page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>Project Detail </h2>
                        <ol class="wpo-breadcumb-wrap">
                            <li><a href="/">Home</a></li>
                            <li>Project</li>
                        </ol>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    {{-- @endforeach --}}
    <!-- end page-title -->

    <!-- wpo-project-single-area start -->
    <div class="wpo-project-single-area section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-12">
                    <div class="wpo-project-single-wrap">
                        <div class="wpo-project-single-item">
                            <div class="row align-items-center">
                                <div class="col-lg-7">
                                    <div class="wpo-project-single-title">
                                        <h3> {{ $project->name }} </h3>
                                    </div>
                                    <p>{!! $project->description !!}</p>
                                </div>
                                <div class="col-lg-5">
                                    <div class="wpo-project-single-content-des-right">
                                        <ul>
                                            {{-- <li>Location :<span>7 Lake Street,London</span></li> --}}
                                            <li>Client :<span>{{ $project->Client }}</span></li>
                                            <li>Categorie :<span>{{ $project->Categorie->name }}</span></li>
                                            <li>View website :<span><a href="{{ $project->Link_website }}">Live
                                                        Preview</a></span></li>
                                            <li>Start Date :<span>{{ $project->Start_Date }}</span></li>
                                            <li>Date final :<span>{{ $project->End_Date }}</span></li>
                                            <li>members :<span>

                                                <div class="col-lg-8">
                                                    <div class="client__meta d-flex align-items-center gap-3">
                                                        @foreach ($project->members as $member)
                                                        <div class="client-thumb">
                                                            <a href="{{ route('Members.show',$member) }}"><img src="{{ asset('storage/' . $member->photo) }}" alt="image"></a>

                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>



                                                </span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="wpo-project-single-main-img owl-carousel mt-2">
                                @foreach (json_decode($project->images) as $image)
                                    <img src="{{ asset('images/' . $image) }}" alt="Project Image">
                                @endforeach
                            </div> --}}
                            <div class="wpo-project-single-main-img owl-carousel mt-2">
                                @if ($project->images && is_array(json_decode($project->images, true)))
                                    @foreach (json_decode($project->images, true) as $image)
                                        <img src="{{ asset('images/' . $image) }}" alt="Project Image">
                                    @endforeach
                                @else
                                    <p>image Not Found</p>
                                @endif
                            </div>


                        </div>
                        <div class="wpo-project-single-title">
                            <h3>Tags</h3>
                        </div>
                        <div class="row">
                            @foreach ($project->tags as $tag)
                                <div class="col-xl-auto col-lg-6 col-md-6 mt-30">
                                    <div class="subtitle">
                                        <span class="section__subtitle bg-solid-field">{{ $tag->name }}</span>
                                    </div>
                                </div>
                            @endforeach

                        </div>


                        <div class="wpo-project-single-item">
                            <div class="wpo-project-single-title">
                                <h3>Related Projects</h3>
                            </div>
                            <div class="wpo-project-area-s2">
                                <div class="wpo-project-wrap">
                                    <div class="row">
                                        @forelse ($projects as $item )
                                        <div class="col col-lg-4 col-md-6 col-12">
                                            <div class="wpo-project-item">
                                                <div class="wpo-project-img">
                                                    <img src="{{ asset('storage/' . $item->photo) }}"alt="">
                                                </div>
                                                <div class="wpo-project-text">
                                                    <h2><a href="{{ route('Protfolios.show',$item) }}">{{$item->name}} </a></h2>
                                                    <span>{{$item->Categorie->name }}</span>
                                                </div>
                                            </div>
                                        </div>

                                        @empty
                                            <h4>No related projects found!</h4>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- wpo-service-single-area end -->

    <!-- wpo-partners-area-start -->

    <!-- partners-area-end -->
    <script src="{{ asset('FrontEnd/js/jquery.min.js') }}"></script>
    <script src="{{ asset('FrontEnd/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Plugins for this template -->
    <script src="{{ asset('FrontEnd/js/modernizr.custom.js') }}"></script>
    <script src="{{ asset('FrontEnd/js/jquery.dlmenu.js') }}"></script>
    <script src="{{ asset('FrontEnd/js/jquery-plugin-collection.js') }}"></script>
    <!-- Custom script for this template -->
    <script src="{{ asset('FrontEnd/js/script.js') }}"></script>
@endsection
