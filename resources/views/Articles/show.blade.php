@extends('layouts.navbar')

@section('content')
<br>
<br>
<br>



        <!-- postbox area start -->
        <section class="postbox__area section-space">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-8 col-lg-10 col-md-10">
                        <div class="section__title-wrapper section__title-space">
                            <h2 class="section__title">{{ $article->Title_Global }}</h2>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-xxl-12">
                        <div class="postbox__wrapper style-two">
                            <div class="row g-5">
                                <div class="col-lg-8">
                                    <div class="postbox__top">
                                        <div class="postbox__thumb">
                                            <img src="{{ asset('storage/' . $article->image1) }}" alt="image not found">
                                        </div>
                                    </div>
                                    <div class="postbox__main-wrapper">
                                        <div class="postbox__meta-wrapper">
                                            <div class="postbox__meta-item">
                                                <div class="postbox__meta-author">
                                                    <div class="postbox__meta-author-thumb">
                                                        @foreach ($infos as $item)
                                                        <a href="#">
                                                            {{-- <img src="{{ asset('storage/' . $item->image1) }}" alt="image not found"> --}}
                                                            {{-- <a href="{{ route('Articles.show', $article) }}"><img src="{{ asset('storage/' . $item->image1) }}" alt="image not found"></a> --}}
                                                        </a>
                                                    </div>
                                                    <div class="postbox__meta-content">
                                                        <span class="postbox__meta-type">{{ $item->name }}</span>
                                                        <p class="postbox__meta-name">{{ $item->job }}</p>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="postbox__meta-item">
                                                <div class="postbox__meta-content">
                                                    <span class="postbox__meta-type">Published</span>
                                                    <p class="postbox__meta-name">{{ $article->updated_at }}</p>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="postbox__details-content-wrapper">
                                            <h5 class="postbox__details-title"> {{ $article->Title_Global }}</h5>
                                            <p class="mb-20">{!! $article->text1 !!} </p>
                                            <div class="postbox__thumb-wrapper">
                                                <div class="postbox__thumb">
                                                    <a href="{{ route('Articles.show', $article) }}"><img src="{{ asset('storage/' . $article->image2) }}" alt="image not found"></a>
                                                </div>
                                                <div class="postbox__thumb">
                                                    <a href="{{ route('Articles.show', $article) }}"><img src="{{ asset('storage/' . $article->image3) }}" alt="image not found"></a>
                                                </div>
                                            </div>
                                            <p>{!! $article->text2 !!}</p>
                                        </div>
                                        {{-- <div class="postbox__more-navigation grid-reduce theme-bg-secondary">
                                            <div class="postbox__more-left">
                                                <div class="postbox__more-icon">
                                                    <a class="circle-btn" href="blog-details.html">
                                                        <i class="fa-regular fa-arrow-left-long"></i>
                                                    </a>
                                                </div>
                                                <div class="postbox__more-content">
                                                    <p>Previous Article</p>
                                                    <h6>
                                                        <a href="blog-details.html">Creative Agency Idea</a>
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="postbox__more-right">
                                                <div class="postbox__more-content">
                                                    <p>Next Article</p>
                                                    <h6>
                                                        <a href="blog-details.html">Digital Agency Work</a>
                                                    </h6>
                                                </div>
                                                <div class="postbox__more-icon">
                                                    <a class="circle-btn" href="blog-details.html">
                                                        <i class="fa-regular fa-arrow-right-long"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div> --}}


                                        <div class="postbox__related">
                                            <h4 class="postbox__related-title mb-35">You May Also Like</h4>
                                            <div class="row g-5">
                                                @foreach ( $articles as $item )
                                                <div class="col-xl-6 col-lg-12 col-md-6 wow fadeInUp"
                                                    data-wow-delay=".3s">
                                                    <div class="blog__wrap blog__item style-five">
                                                        <div class="blog__thumb is-hover">
                                                            <a href="{{ route('Articles.show', $item) }}"><img src="{{ asset('storage/' . $item->image1) }}" alt="image not found"></a>
                                                        </div>
                                                        <div class="blog__content bg-solid">
                                                            <div class="blog__meta">
                                                                <span>
                                                                    <i class="fa-light fa-calendar"></i>
                                                                    {{ $item->updated_at }}
                                                                </span>
                                                            </div>
                                                            <h5 class="blog__title"><a href="">{{ $item->Title_Global }}</a></h5>

                                                            <div class="blog__btn">
                                                                <a class="bd-btn bordered-light is-btn-anim"
                                                                    href="{{ route('Articles.show', $item) }}">
                                                                    <span class="bd-btn-inner">
                                                                        <span class="bd-btn-normal">Read More</span>
                                                                        <span class="bd-btn-hover">Read More</span>
                                                                        <i class="contentHidden"></i>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4">
                                    <div class="sidebar__wrapper">
                                        <div class="sidebar__widget is-padding-none">
                                            <div class="sidebar__widget-content">
                                                @foreach ($infos as $item)
                                                <div class="sidebar__author">
                                                    <div class="sidebar__author-thumb">
                                                        <img src="{{ asset('storage/' . $item->image1) }}" alt="image not found">
                                                    </div>
                                                    <div class="sidebar__author-content">
                                                        <h6 class=" sidebar__author-title">{{ $item->name }}</h6>
                                                        <p>{{ $item->description  }}</p>
                                                        <div class="sidebar__author-social">
                                                            <div class="theme__social">
                                                                <a href="{{ $item->facebook }}"><i class="fa-brands fa-facebook-f"></i>
                                                                </a>
                                                                <a href="{{ $item->instagram }}"><i class="icon-instagram"></i>
                                                                </a>
                                                                <a href="{{ $item->linkedin }}"><i class="fa-brands fa-linkedin"></i>
                                                                </a>
                                                                <a href="{{ $item->github }}"><i class="fa-brands fa-github"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>

                                        <div class="sidebar__widget">
                                            <h5 class=" sidebar__widget-title">Categories</h5>
                                            <div class="sidebar__widget-content">
                                                <ul>
                                                    @foreach ($Categories as $item)
                                                    <li><a href="{{ route('ArticleCategory.show', $item) }}">{{ $item->name}}<span>{{ $item->article_count}}</span></a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="sidebar__widget">
                                            <h5 class=" sidebar__widget-title">Recent Post</h5>
                                            <div class="sidebar__widget-content">
                                                <div class="sidebar__post">
                                                    @foreach ($Post as $item)
                                                    <div class="rc__post">
                                                            <div class="rc__post-thumb">
                                                                <a href="#"><img src="{{ asset('storage/' . $item->image1) }}" alt="image not found"></a>
                                                            </div>

                                                        <div class="rc__post-content">
                                                            <h6 class="rc__post-title">
                                                                <a href="">{{ $item->Title_Global }}</a>
                                                            </h6>
                                                            <div class="rc__meta">
                                                                <span>
                                                                    <i class="fa-sharp fa-light fa-clock"></i>
                                                                   {{ $item->updated_at}}
                                                                </span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    @endforeach
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
        <!-- postbox area end -->
@endsection
