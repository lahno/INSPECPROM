@extends('layouts.app')

@section('header')
    {!! $header !!}
@endsection

@section('content')
    <section class="section">
        <!-- Swiper-->
        <div class="swiper-container swiper-slider swiper-slider-1 swiper-container-horizontal" data-loop="false" data-autoplay="5000" data-simulate-touch="false">
            <div class="swiper-wrapper" style="transition-duration: 600ms; transform: translate3d(-3432px, 0px, 0px);">
                <div class="swiper-slide" data-slide-bg="{{asset('html/images/slider_fon.jpg')}}" data-swiper-slide-index="0">
                    <div class="swiper-slide-caption">
                        <div class="shell shell-fluid">
                            <div class="range range-xl-condensed">
                                <div class="cell-sm-12">
                                    <div class="decorative decorative-lg text-center">
                                        <img src="{{asset('images/logo_b.png')}}">
                                        {{--<h1 class="decorative-title not-animated" data-caption-animate="fadeInUp" data-caption-delay="100">{{trans('content.magr_group')}}</h1>--}}
                                        <h1 class="caption not-animated" data-caption-animate="fadeInUp" data-caption-delay="250">{{trans('content.slogan')}}</h1>
                                        <div class="group-xl not-animated" data-caption-animate="fadeInUp" data-caption-delay="450">
                                            <a class="button button-secondary" href="{{route('about')}}">{{trans('content.about')}}</a>
                                            {{--<a class="button button-white-outline" href="about-us.html">Start a journey</a>--}}
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
    <!-- Home Layouts-->
    <section class="section section-sm bg-gray">
        <div class="shell shell-fluid">
            <div class="range range-40 range-md-70 range-xl-condensed range-justify">
                <div class="cell-sm-12 cell-xl-10 cell-xl-preffix-1 cell-xl-postfix-1">
                    <div class="decorative decorative-lg">
                        <h3 class="decorative-title">{{trans('content.production')}}</h3>
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
                <div class="cell-sm-12 cell-xl-10 cell-xl-preffix-1 cell-xl-postfix-1">
                    <div class="decorative decorative-lg" style="margin-top: 50px;">
                        <h3 class="decorative-title">{{trans('content.product_1')}}</h3>
                    </div>
                </div>
                <div class="cell-sm-12 cell-xl-10 cell-xl-preffix-1">
                    <div class="range range-condensed decorative-container decorative-container-lg text-center">
                        <iframe width="100%"
                                height="700"
                                src="https://www.youtube.com/embed/fQJLZvx7TKU"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>

                        <div class="col-xs-12 text-center">
                            @php
                                $size = getimagesize(asset('images/patent.jpg'));
                            @endphp
                            <a class="thumbnail-type-2"
                               style="display: inline-block; width: 400px; margin: 50px 3% 0 3%;"
                               data-photo-swipe-item=""
                               data-size="{{$size[0].'x'.$size[1]}}"
                               href="{{asset('images/patent.jpg')}}">
                                <img src="{{asset('images/patent.jpg')}}" alt="{{env('APP_NAME')}}" width="400" height="270"/>
                                <div class="caption">
                                    <div class="icon icon-white mdi mdi-magnify-plus"></div>
                                </div>
                            </a>

                            @php
                                $size = getimagesize(asset('images/svidoctvo.jpg'));
                            @endphp
                            <a class="thumbnail-type-2"
                               style="display: inline-block; width: 400px; margin: 50px 3% 0 3%;"
                               data-photo-swipe-item=""
                               data-size="{{$size[0].'x'.$size[1]}}"
                               href="{{asset('images/svidoctvo.jpg')}}">
                                <img src="{{asset('images/svidoctvo.jpg')}}" alt="{{env('APP_NAME')}}" width="400" height="270"/>
                                <div class="caption">
                                    <div class="icon icon-white mdi mdi-magnify-plus"></div>
                                </div>
                            </a>
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