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
                            <h1 class="decorative-title">{{$cat->name}}</h1>
                        @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                            <h1 class="decorative-title">{{$cat->name_en}}</h1>
                        @else
                            <h1 class="decorative-title">{{$cat->name_ua}}</h1>
                        @endif
                    </div>
                    <ol class="breadcrumbs-custom">
                        <li><a href="{{route('home')}}">{{trans('content.home')}}</a></li>
                        <li><a href="{{route('products')}}">{{trans('content.production')}}</a></li>
                        @if(LaravelLocalization::getCurrentLocale() == 'ru')
                            <li>{{$cat->name}}</li>
                        @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                            <li>{{$cat->name_en}}</li>
                        @else
                            <li>{{$cat->name_ua}}</li>
                        @endif
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- Production-->
    <section class="section section-sm bg-white">
        <div class="shell shell-fluid">
            <div class="range range-60 range-xl-condensed">
                @if(count($item))
                <div class="cell-sm-12 cell-xl-11 cell-xl-preffix-1">
                    <div class="decorative decorative-lg">
                        @if(LaravelLocalization::getCurrentLocale() == 'ru')
                            <h3 class="decorative-title">{{$cat->name}}</h3>
                        @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                            <h3 class="decorative-title">{{$cat->name_en}}</h3>
                        @else
                            <h3 class="decorative-title">{{$cat->name_ua}}</h3>
                        @endif
                    </div>
                </div>
                <div class="cell-sm-8 cell-lg-9 cell-xl-7 cell-xl-preffix-1">
                    <div class="range range-30 range-justify">
                        @foreach($item as $product)
                        <div class="cell-sm-6 cell-lg-4">
                            <div class="price-box">
                                <a href="{{route('product', ['id'=>$product->id])}}">
                                    <img src="{{asset($product->image)}}" alt="" width="300" height="260"/>
                                </a>
                                <h5 class="title">
                                    <a href="{{route('product', ['id'=>$product->id])}}">
                                        @if(LaravelLocalization::getCurrentLocale() == 'ru')
                                            {{$product->name}}
                                        @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                                            {{$product->name_en}}
                                        @else
                                            {{$product->name_ua}}
                                        @endif
                                    </a>
                                </h5>
                                <a class="button button-secondary" href="{{route('product', ['id'=>$product->id])}}">{{trans('content.learn_more')}}</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @else
                    <div class="cell-sm-12 cell-xl-11 cell-xl-preffix-1">
                        <div class="decorative decorative-lg">
                            <h3 class="decorative-title">{{trans('content.not_found')}}</h3>
                        </div>
                    </div>
                    <div class="cell-sm-8 cell-lg-9 cell-xl-7 cell-xl-preffix-1">

                    </div>
                @endif
                <div class="cell-sm-4 cell-lg-3 cell-xl-2 cell-xl-preffix-1">
                    <div class="decorative decorative-md">
                        <h5 class="decorative-title">{{trans('content.category')}}</h5>
                        <ul class="list-marked list-marked-1">
                            @foreach($categories as $category)
                                @if(count($category->getProducts))
                                    @if(LaravelLocalization::getCurrentLocale() == 'ru')
                                        <li>
                                            <a href="{{route('getCategory', ['id'=>$category->id])}}">{{$category->name}}</a>
                                        </li>
                                    @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                                        <li>
                                            <a href="{{route('getCategory', ['id'=>$category->id])}}">{{$category->name_en}}</a>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{route('getCategory', ['id'=>$category->id])}}">{{$category->name_ua}}</a>
                                        </li>
                                    @endif
                                @endif
                            @endforeach
                        </ul>
                    </div>
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