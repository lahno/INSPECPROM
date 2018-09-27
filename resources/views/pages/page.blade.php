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
                            <h1 class="decorative-title">{{$page->name}}</h1>
                        @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                            <h1 class="decorative-title">{{$page->name_en}}</h1>
                        @else
                            <h1 class="decorative-title">{{$page->name_ua}}</h1>
                        @endif
                    </div>
                    <ol class="breadcrumbs-custom">
                        <li><a href="{{route('home')}}">Главная</a></li>
                        @if(LaravelLocalization::getCurrentLocale() == 'ru')
                            <li>{{$page->name}}</li>
                        @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                            <li>{{$page->name_en}}</li>
                        @else
                            <li>{{$page->name_ua}}</li>
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
                        {{--<div class="decorative decorative-lg">
                            <h3 class="decorative-title post-heading">{{$page->name}}</h3>
                        </div>--}}
                        @if($page->image)
                            <img src="{{asset($page->image)}}" style="margin: 0 auto; max-height: 200px; width: auto; display: block;"/>
                        @endif
                        {{--@if($page->short_desc)
                            <blockquote class="quote quote-default quote-primary">
                                <div class="quote-body">
                                    <p>
                                        <q>{{$page->short_desc}}</q>
                                    </p>
                                </div>
                            </blockquote>
                        @endif--}}
                        <div class="decorative decorative-lg">
                            @if(LaravelLocalization::getCurrentLocale() == 'ru')
                                {!! $page->text !!}
                            @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                                {!! $page->text_en !!}
                            @else
                                {!! $page->text_ua !!}
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