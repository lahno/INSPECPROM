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
                        <h1 class="decorative-title">Продукция компании</h1>
                    </div>
                    <ol class="breadcrumbs-custom">
                        <li><a href="{{route('home')}}">Главная</a></li>
                        <li>Продукция</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- Production-->
    <section class="section section-sm bg-white">
        <div class="shell shell-fluid">
            <div class="range range-40 range-md-90 range-justify range-xl-condensed">
                @foreach($categories->chunk(3) as $chunk)
                @foreach($chunk as $i => $category)
                    {{--@if(!$category->parent_id)--}}
                    {{--<div class="cell-sm-6 cell-md-4 cell-lg-6 cell-xl-3 {{($i == 0 || ($i+1) % 3 == $i || (($i+1) % 3 == 1 && $i !== 0))?'cell-xl-preffix-1':''}} {{(($i+1) % 3)?'':'cell-xl-postfix-1'}}">--}}
                    <div class="cell-sm-6 cell-md-4 cell-lg-6 cell-xl-3 {{($loop->first)?'cell-xl-preffix-1':''}} {{($loop->last)?'cell-xl-postfix-1':''}}">
                        <div class="product unit unit-spacing-lg unit-lg-horizontal">
                            <div class="unit__left product-media">
                                <a href="{{route('getCategory', ['id'=>$category->id])}}">
                                    <img src="{{asset($category->image)}}" alt="" width="206" height="174"/>
                                </a>
                            </div>
                            <div class="unit__body product-body">
                                <h5 class="product-title"><a href="{{route('getCategory', ['id'=>$category->id])}}">{{$category->name}}</a></h5>
                                <p class="product-description">{{$category->desc}}</p>
                            </div>
                        </div>
                    </div>
                    {{--@endif--}}
                @endforeach
                @endforeach
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