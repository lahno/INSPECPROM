@extends('layouts.app')

@section('header')
    {!! $header !!}
@endsection

@section('content')
    <!-- RD Parallax-->
    <section class="section section-bredcrumbs bg-image-breadcrumbs-1">
        <div class="shell-fluid context-dark">
            <div class="range range-condensed">
                <div class="cell-xs-10 cell-xl-preffix-1">
                    <div class="decorative decorative-lg">
                        @if(LaravelLocalization::getCurrentLocale() == 'ru')
                            <h1 class="decorative-title">{{$product->name}}</h1>
                        @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                            <h1 class="decorative-title">{{$product->name_en}}</h1>
                        @else
                            <h1 class="decorative-title">{{$product->name_ua}}</h1>
                        @endif
                    </div>
                    <ol class="breadcrumbs-custom">
                        <li><a href="{{route('home')}}">{{trans('content.home')}}</a></li>
                        <li><a href="{{route('products')}}">{{trans('content.production')}}</a></li>
                        @if(LaravelLocalization::getCurrentLocale() == 'ru')
                            <li>{{$product->name}}</li>
                        @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                            <li>{{$product->name_en}}</li>
                        @else
                            <li>{{$product->name_ua}}</li>
                        @endif
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- News Classic-->
    <section class="section section-sm bg-white">
        <div class="shell shell-fluid">
            <div class="range range-60 range-xl-condensed">
                <div class="cell-md-12 cell-lg-12 cell-xl-10 cell-xl-preffix-1 section-disabled-padding-top">
                    <!-- Blog Single-->
                    <section class="post-single-body section-lg bg-white">
                        <div class="decorative decorative-lg">
                            @if(LaravelLocalization::getCurrentLocale() == 'ru')
                                <h3 class="decorative-title post-heading">{{$product->name}}</h3>
                            @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                                <h3 class="decorative-title post-heading">{{$product->name_en}}</h3>
                            @else
                                <h3 class="decorative-title post-heading">{{$product->name_ua}}</h3>
                            @endif
                            <ul class="post-meta list-dotted">
                                <li><span class="time">{{$product->created_at->format('Y/m/d')}}</span></li>
                                {{--<li><span class="author">by Kevin Wade</span></li>--}}
                                <li>
                                    <a class="post-tag" href="{{route('getCategory', ['id'=>$product->getCat->id])}}">
                                        @if(LaravelLocalization::getCurrentLocale() == 'ru')
                                            {{$product->getCat->name}}
                                        @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                                            {{$product->getCat->name_en}}
                                        @else
                                            {{$product->getCat->name_ua}}
                                        @endif
                                    </a>
                                </li>
                                {{--<li><span class="post-comments">12 Comments</span></li>--}}
                            </ul>
                        </div>
                        @if($product->image)
                        <img src="{{asset($product->image)}}"/>
                        @endif
                        <div class="decorative decorative-lg">
                            @if(LaravelLocalization::getCurrentLocale() == 'ru')
                                {!! $product->text !!}
                            @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                                {!! $product->text_en !!}
                            @else
                                {!! $product->text_ua !!}
                            @endif
                        </div>
                    </section>
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