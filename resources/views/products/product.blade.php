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
                        <h1 class="decorative-title">{{$product->name}}</h1>
                    </div>
                    <ol class="breadcrumbs-custom">
                        <li><a href="{{route('home')}}">Главная</a></li>
                        <li><a href="{{route('products')}}">Продукция</a></li>
                        <li>{{$product->name}}</li>
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
                            <h3 class="decorative-title post-heading">{{$product->name}}</h3>
                            <ul class="post-meta list-dotted">
                                <li><span class="time">{{$product->created_at}}</span></li>
                                {{--<li><span class="author">by Kevin Wade</span></li>--}}
                                <li><a class="post-tag" href="{{route('getCategory', ['id'=>$product->getCat->id])}}">{{$product->getCat->name}}</a></li>
                                {{--<li><span class="post-comments">12 Comments</span></li>--}}
                            </ul>
                        </div>
                        <img src="{{asset($product->image)}}"/>
                        <div class="decorative decorative-lg">
                            {!! $product->text !!}
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