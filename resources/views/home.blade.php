@extends('layouts.app')

@section('header')
    {!! $header !!}
@endsection

@section('content')
    <section class="section">
        <!-- Swiper-->
        <div class="swiper-container swiper-slider swiper-slider-1 swiper-container-horizontal" data-loop="true" data-autoplay="5000" data-simulate-touch="false">
            <div class="swiper-wrapper" style="transition-duration: 600ms; transform: translate3d(-3432px, 0px, 0px);">
                <div class="swiper-slide swiper-slide-duplicate" data-slide-bg="images/slider-1-1920x1000.jpg" style="background-image: url(&quot;images/slider-1-1920x1000.jpg&quot;); background-size: cover; width: 1144px;" data-swiper-slide-index="2">
                    <div class="swiper-slide-caption">
                        <div class="shell shell-fluid">
                            <div class="range range-xl-condensed">
                                <div class="cell-sm-11 cell-xl-6 cell-xl-preffix-1">
                                    <div class="decorative decorative-lg">
                                        <h1 class="decorative-title not-animated" data-caption-animate="fadeInUp" data-caption-delay="100"><span class="text-bold">Lots of New Features</span></h1>
                                        <h5 class="caption not-animated" data-caption-animate="fadeInUp" data-caption-delay="250">This template is packed with a wide range of amazing features that make it a perfect solution for any business, even for private entrepreneurs.</h5>
                                        <div class="group-xl not-animated" data-caption-animate="fadeInUp" data-caption-delay="450"><a class="button button-secondary" href="product-catalog.html">Buy fabricator</a><a class="button button-white-outline" href="about-us.html">Start a journey</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" data-slide-bg="{{asset('html/images/slider-3-1920x1000.jpg')}}" style="background-image: url(&quot;images/slider-3-1920x1000.jpg&quot;); background-size: cover; width: 1144px;" data-swiper-slide-index="0">
                    <div class="swiper-slide-caption">
                        <div class="shell shell-fluid">
                            <div class="range range-xl-condensed">
                                <div class="cell-sm-11 cell-xl-6 cell-xl-preffix-1">
                                    <div class="decorative decorative-lg">
                                        <h1 class="decorative-title not-animated" data-caption-animate="fadeInUp" data-caption-delay="100">Welcome to <span class="text-bold">Fabricator</span>
                                        </h1>
                                        <h5 class="caption not-animated" data-caption-animate="fadeInUp" data-caption-delay="250">Fabricator is the smartest and the most flexible Bootstrap template by TemplateMonster allowing you to create exactly what you need with our powerful Bootstrap toolkit.</h5>
                                        <div class="group-xl not-animated" data-caption-animate="fadeInUp" data-caption-delay="450"><a class="button button-secondary" href="product-catalog.html">Buy fabricator</a><a class="button button-white-outline" href="about-us.html">Start a journey</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-prev" data-slide-bg="{{asset('html/images/slider-2-1920x1000.jpg')}}" style="background-image: url(&quot;images/slider-2-1920x1000.jpg&quot;); background-size: cover; width: 1144px;" data-swiper-slide-index="1">
                    <div class="swiper-slide-caption">
                        <div class="shell shell-fluid">
                            <div class="range range-xl-condensed">
                                <div class="cell-sm-11 cell-xl-6 cell-xl-preffix-1">
                                    <div class="decorative decorative-lg">
                                        <h1 class="decorative-title fadeInUp animated" data-caption-animate="fadeInUp" data-caption-delay="100"><span class="text-bold">4 Home Page Layouts</span></h1>
                                        <h5 class="caption fadeInUp animated" data-caption-animate="fadeInUp" data-caption-delay="250">Fabricator offers you 4 differently pre-designed Home Page layouts, which can perfectly present the main ideas of your business to your customers.</h5>
                                        <div class="group-xl fadeInUp animated" data-caption-animate="fadeInUp" data-caption-delay="450"><a class="button button-secondary" href="product-catalog.html">Buy fabricator</a><a class="button button-white-outline" href="about-us.html">Start a journey</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-active" data-slide-bg="{{asset('html/images/slider-1-1920x1000.jpg')}}" style="background-image: url(&quot;images/slider-1-1920x1000.jpg&quot;); background-size: cover; width: 1144px;" data-swiper-slide-index="2">
                    <div class="swiper-slide-caption">
                        <div class="shell shell-fluid">
                            <div class="range range-xl-condensed">
                                <div class="cell-sm-11 cell-xl-6 cell-xl-preffix-1">
                                    <div class="decorative decorative-lg">
                                        <h1 class="decorative-title not-animated" data-caption-animate="fadeInUp" data-caption-delay="100"><span class="text-bold">Lots of New Features</span></h1>
                                        <h5 class="caption not-animated" data-caption-animate="fadeInUp" data-caption-delay="250">This template is packed with a wide range of amazing features that make it a perfect solution for any business, even for private entrepreneurs.</h5>
                                        <div class="group-xl not-animated" data-caption-animate="fadeInUp" data-caption-delay="450"><a class="button button-secondary" href="product-catalog.html">Buy fabricator</a><a class="button button-white-outline" href="about-us.html">Start a journey</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-duplicate swiper-slide-next" data-slide-bg="{{asset('html/images/slider-3-1920x1000.jpg')}}" style="background-image: url(&quot;images/slider-3-1920x1000.jpg&quot;); background-size: cover; width: 1144px;" data-swiper-slide-index="0">
                    <div class="swiper-slide-caption">
                        <div class="shell shell-fluid">
                            <div class="range range-xl-condensed">
                                <div class="cell-sm-11 cell-xl-6 cell-xl-preffix-1">
                                    <div class="decorative decorative-lg">
                                        <h1 class="decorative-title not-animated" data-caption-animate="fadeInUp" data-caption-delay="100">Welcome to <span class="text-bold">Fabricator</span>
                                        </h1>
                                        <h5 class="caption not-animated" data-caption-animate="fadeInUp" data-caption-delay="250">Fabricator is the smartest and the most flexible Bootstrap template by TemplateMonster allowing you to create exactly what you need with our powerful Bootstrap toolkit.</h5>
                                        <div class="group-xl not-animated" data-caption-animate="fadeInUp" data-caption-delay="450"><a class="button button-secondary" href="product-catalog.html">Buy fabricator</a><a class="button button-white-outline" href="about-us.html">Start a journey</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Layouts-->
    <section class="section section-sm bg-gray">
        <div class="shell shell-fluid">
            <div class="range range-40 range-md-70 range-xl-condensed range-justify">
                <div class="cell-sm-12 cell-xl-10 cell-xl-preffix-1 cell-xl-postfix-1">
                    <div class="decorative decorative-lg">
                        <h3 class="decorative-title">Продукция</h3>
                    </div>
                </div>
                @foreach($categories as $i => $category)
                    @if(!$category->parent_id)
                    <div class="cell-sm-6 cell-md-3 cell-xl-2 {{($i == 0 || ($i+1) % 4 == $i || (($i+1) % 4 == 1 && $i !== 0))?'cell-xl-preffix-1':''}} {{(($i+1) % 4)?'':'cell-xl-postfix-1'}}">
                        @if($category->image)
                        <a class="link" href="{{route('getCategory',['id'=>$category->id])}}">
                            <img src="{{asset($category->image)}}" alt="" width="340" height="255">
                        </a>
                        @endif
                        <div class="decorative decorative-md">
                            <h5 class="decorative-title">
                                <a href="{{route('getCategory',['id'=>$category->id])}}">
                                    @if(LaravelLocalization::getCurrentLocale() == 'ru')
                                        {{$category->name}}
                                    @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                                        {{$category->name_en}}
                                    @else
                                        {{$category->name_ua}}
                                    @endif
                                </a>
                            </h5>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <!-- Services-->
    <section class="section bg-primary context-dark">
        <div class="shell shell-fluid text-center">
            <div class="range">
                <div class="cell-sm-12 cell-xl-10 cell-xl-preffix-1">
                    <div class="range range-condensed decorative-container decorative-container-lg">
                        <div class="cell-sm-4 cell-md-4 decorative-cell">
                            <div class="icon icon-xl icon-secondary mdi mdi-vector-square"></div>
                            <h6>Advanced UI Kit for Web Developers</h6>
                        </div>
                        <div class="cell-sm-4 cell-md-4 decorative-cell">
                            <div class="icon icon-xl icon-secondary mdi mdi-bulletin-board"></div>
                            <h6>Extended Bootstrap Toolkit</h6>
                        </div>
                        <div class="cell-sm-4 cell-md-4 decorative-cell">
                            <div class="icon icon-xl icon-secondary mdi mdi-cellphone-link"></div>
                            <h6>Extremely Responsive and Retina Ready</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About-->
    <section class="section section-sm bg-gray">
        <div class="shell shell-fluid text-center">
            <div class="range range-40 range-xl-condensed range-center">
                <div class="cell-sm-12 cell-xl-8">
                    {{--<div class="icon icon-xxl icon-primary mdi mdi-headset"></div>--}}
                    @if(LaravelLocalization::getCurrentLocale() == 'ru')
                        <h3>{{$about->name}}</h3>
                        {!! $about->text !!}
                    @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                        <h3>{{$about->name_en}}</h3>
                        {!! $about->text_en !!}
                    @else
                        <h3>{{$about->name_ua}}</h3>
                        {!! $about->text_ua !!}
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    {!! $footer !!}
@endsection

@section('modal')
    {!! $modal !!}
@endsection

@section('scripts')
    {!! $scripts !!}
@endsection