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
                        <h1 class="decorative-title">{{$cat->name}}</h1>
                    </div>
                    <ol class="breadcrumbs-custom">
                        <li><a href="{{route('home')}}">Главная</a></li>
                        <li><a href="{{route('products')}}">Продукция</a></li>
                        <li>{{$cat->name}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- Production-->
    <section class="section section-sm bg-white">
        <div class="shell shell-fluid">
            <div class="range range-60 range-xl-condensed">
                <div class="cell-sm-12 cell-xl-11 cell-xl-preffix-1">
                    <div class="decorative decorative-lg">
                        <h3 class="decorative-title">{{(count($item))?$cat->name:'Не найдено продукции в данной категории'}}</h3>
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
                                <h5 class="title"><a href="{{route('product', ['id'=>$product->id])}}">{{$product->name}}</a></h5>
                                <a class="button button-secondary" href="{{route('product', ['id'=>$product->id])}}">Подробнее</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="cell-sm-4 cell-lg-3 cell-xl-2 cell-xl-preffix-1">
                    <div class="decorative decorative-md">
                        <h5 class="decorative-title">Категории</h5>
                        <ul class="list-marked list-marked-1">
                            @foreach($categories as $category)
                                @if(count($category->getProducts))
                                <li>
                                    <a href="{{route('getCategory', ['id'=>$category->id])}}">{{$category->name}}</a>
                                </li>
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