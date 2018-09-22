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
                            <h5 class="decorative-title"><a href="{{route('getCategory',['id'=>$category->id])}}">{{$category->name}}</a></h5>
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
    <!-- Blog Templates-->
    <section class="section section-sm">
        <div class="shell shell-fluid">
            <div class="range range-60 range-xl-condensed range-justify">
                <div class="cell-sm-6 cell-xl-4 cell-xl-preffix-1">
                    <div class="range range-30 range-md-60 range-xl-condensed">
                        <div class="cell-sm-12 cell-lg-9">
                            <div class="decorative decorative-lg">
                                <h3 class="decorative-title">Blog Templates</h3>
                                <p>Create any kind of blog variations &amp; styles using our well-done Blog templates</p>
                            </div>
                        </div>
                        <div class="cell-sm-12">
                            <div class="image-wrapper-3">
                                <img src="{{asset('html/images/templates-1-470x327.jpg')}}" alt="" width="470" height="327">
                                <img src="{{asset('html/images/templates-2-470x327.jpg')}}" alt="" width="470" height="327">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cell-sm-6 cell-xl-5 cell-xl-postfix-1">
                    <div class="range range-30 range-md-60 range-xl-condensed">
                        <div class="cell-sm-12 cell-lg-9">
                            <div class="decorative decorative-lg">
                                <h3 class="decorative-title">Portfolio Templates</h3>
                                <p>Showcase the projects of your company using our pre-designed Portfolio templates.</p>
                            </div>
                        </div>
                        <div class="cell-sm-12">
                            <div class="image-wrapper-3">
                                <img src="{{asset('html/images/templates-3-470x327.jpg')}}" alt="" width="470" height="327">
                                <img src="{{asset('html/images/templates-4-470x327.jpg')}}" alt="" width="470" height="327">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- RD Parallax-->
    <section class="section rd-parallax" style="position: relative; overflow: hidden; z-index: 0; height: 314px;">
        <div class="rd-parallax-inner" style="position: fixed; top: 0px; width: 1144px; transform: translate3d(0px, 2604.5px, 0px);">
            <div class="rd-parallax-layer" data-speed="0.2" data-type="media" data-url="{{asset('html/images/parallax-1-1920x1000.jpg')}}" style="position: fixed; background-image: url({{asset('html/images/parallax-1-1920x1000.jpg')}}); height: 429.8px; transform: translate3d(0px, -521.9px, 0px);"></div>
            <div class="rd-parallax-layer-holder" style="position: relative; height: 316px;">
                <div class="rd-parallax-layer context-dark" data-speed="0" data-type="html" style="position: fixed; width: 1144px; transform: translate3d(0px, -1px, 0px);">
                    <div class="shell shell-fluid text-center">
                        <div class="range">
                            <div class="cell-sm-12 cell-xl-10 cell-xl-preffix-1">
                                <div class="range range-condensed decorative-container">
                                    <div class="cell-sm-6 cell-md-3 decorative-cell">
                                        <div class="counter-wrap">
                                            <div class="heading-1"><span class="counter" data-step="100000">40</span></div>
                                            <div class="decorative-divider"></div>
                                            <h5 class="counter-description">HTML Pages</h5>
                                        </div>
                                    </div>
                                    <div class="cell-sm-6 cell-md-3 decorative-cell">
                                        <div class="counter-wrap">
                                            <div class="heading-1"><span class="counter" data-step="100000">3</span></div>
                                            <div class="decorative-divider"></div>
                                            <h5 class="counter-description">Header &amp; Footer Layouts</h5>
                                        </div>
                                    </div>
                                    <div class="cell-sm-6 cell-md-3 decorative-cell">
                                        <div class="counter-wrap">
                                            <div class="heading-1"><span class="counter" data-step="100000">4</span></div>
                                            <div class="decorative-divider"></div>
                                            <h5 class="counter-description">Blog Layouts</h5>
                                        </div>
                                    </div>
                                    <div class="cell-sm-6 cell-md-3 decorative-cell">
                                        <div class="counter-wrap">
                                            <div class="heading-1"><span class="counter" data-step="100000">40</span></div>
                                            <div class="decorative-divider"></div>
                                            <h5 class="counter-description">PSD Files</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div></div>
        </div>
    </section>
    <!-- Support-->
    <section class="section section-sm bg-gray">
        <div class="shell shell-fluid text-center">
            <div class="range range-40 range-xl-condensed range-center">
                <div class="cell-sm-12 cell-xl-8">
                    {{--<div class="icon icon-xxl icon-primary mdi mdi-headset"></div>--}}
                    <h3>{{$about->name}}</h3>
                    {!! $about->text !!}
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