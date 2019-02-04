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
                        <h1 class="decorative-title">{{trans('content.our_gallery')}}</h1>
                    </div>
                    <ol class="breadcrumbs-custom">
                        <li><a href="{{route('home')}}">{{trans('content.home')}}</a></li>
                        <li>{{trans('content.gallery')}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery grid-->
    <section class="section section-md">
        <div class="shell shell-fluid">
            <div class="range range-condensed">
                <div class="cell-sm-12 cell-xl-10 cell-xl-preffix-1 cell-xl-postfix-1">
                    <div class="row row-no-gutter" data-photo-swipe-gallery="gallery">
                        <!-- Isotope Filters-->
                        <div class="col-lg-12">
                            <div class="isotope-filters isotope-filters-horizontal">
                                <button class="isotope-filters-toggle button button-sm button-primary" data-custom-toggle="#isotope-filters" data-custom-toggle-disable-on-blur="true">Filter<span class="caret"></span></button>
                                <ul class="isotope-filters-list" id="isotope-filters">
                                    <li>
                                        <a class="active" data-isotope-filter="*" data-isotope-group="gallery" href="#">{{trans('content.all')}}</a>
                                    </li>
                                    @foreach($types as $type)
                                    <li>
                                        <a data-isotope-filter="{{$type->name}}"
                                           data-isotope-group="gallery"
                                           href="#">
                                            {{$type->display_name}}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!-- Isotope Content-->
                        <div class="col-lg-12">
                            <div class="isotope" data-isotope-layout="fitRows" data-isotope-group="gallery">
                                <div class="row row-no-gutter">
                                    @foreach($gallery as $item)
                                    <div class="col-xs-12 col-sm-6 col-md-3 isotope-item"
                                         data-filter="{{($loop->first)?'*':$item->getType->name}}">
                                        <a class="thumbnail-type-2"
                                           data-photo-swipe-item="true"
                                           data-size="1200x800"
                                           href="{{asset($item->image)}}">
                                            <img src="{{asset($item->image_mid)}}" alt="" width="400" height="270"/>
                                            <div class="caption">
                                                <div class="icon icon-white mdi mdi-magnify-plus"></div>
                                                @if(LaravelLocalization::getCurrentLocale() == 'ru')
                                                    <h6 class="title">{{$item->name}}</h6>
                                                @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                                                    <h6 class="title">{{$item->name_en}}</h6>
                                                @else
                                                    <h6 class="title">{{$item->name_ua}}</h6>
                                                @endif
                                            </div>
                                        </a>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
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