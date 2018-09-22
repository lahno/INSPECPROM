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
                        <h1 class="decorative-title">Новости</h1>
                    </div>
                    <ol class="breadcrumbs-custom">
                        <li><a href="{{route('home')}}">Главная</a></li>
                        <li><a href="{{route('posts')}}">Новости</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- News Classic-->
    <section class="section section-sm bg-white">
        <div class="shell shell-fluid">
            <div class="range range-60 range-xl-condensed">
                <div class="cell-md-7 cell-lg-7 cell-xl-6 cell-xl-preffix-1">
                    <!-- Blog Classic-->
                    <section>
                        @if(count($posts))
                        <!-- Post Classic-->
                        @foreach($posts as $post)
                        <article class="post post-classic">
                            <!-- Post media-->
                            <a href="{{route('post', ['id'=>$post->id])}}">
                                <img class="img-responsive" src="{{asset($post->image)}}" alt="" width="960" height="500"/>
                            </a>
                            <!-- Post content-->
                            <section class="post-content text-left">
                                <div class="decorative decorative-lg">
                                    <h3 class="decorative-title">
                                        <a class="link-gray-dark" href="{{route('post', ['id'=>$post->id])}}">{{$post->name}}</a>
                                    </h3>
                                    <ul class="post-meta list-dotted">
                                        <li>
                                            <time datetime="{{$post->created_at}}">{{$post->created_at}}</time>
                                        </li>
                                        <li>
                                            <a class="link" href="{{route('posts')}}">Новости</a>
                                        </li>
                                    </ul>
                                    <p class="post-description">{{$post->short_desc}}</p>
                                    <a class="post-link" href="{{route('post', ['id'=>$post->id])}}">Подробнее</a>
                                </div>
                            </section>
                        </article>
                        @endforeach
                        {{--<a class="button button-secondary button-icon button-icon-left" href="#"><span class="icon fa-refresh"></span>Load more posts</a>--}}
                        @else
                            <p class="post-description">Нет записей</p>
                        @endif
                    </section>
                </div>
                <div class="cell-md-5 cell-lg-4 cell-xl-3 cell-lg-preffix-1">
                    <!-- Section Blog Modern-->
                    <aside class="text-left">
                        <div class="range range-60 range-md-90">
                            <div class="cell-sm-12 cell-md-12">
                                <div class="decorative decorative-md">
                                    <h5 class="decorative-title">Поиск</h5>
                                    <!-- Search Form-->
                                    <!-- RD Search Form-->
                                    <form class="form-search rd-search rd-mailform-inline rd-mailform-small" action="search-results.html" method="GET">
                                        <div class="form-wrap">
                                            <label class="form-label form-search-label form-label-sm" for="blog-sidebar-2-form-search-widget">Enter a keyword</label>
                                            <input class="form-input form-search-input form-control #{inputClass}" id="blog-sidebar-2-form-search-widget" type="text" name="s" autocomplete="off">
                                        </div>
                                        <button class="button button-sm button-secondary form-search-submit" type="submit">Search</button>
                                    </form>
                                </div>
                            </div>

                            @if(count($gallery))
                            <div class="cell-sm-6 cell-md-12">
                                <div class="decorative">
                                    <div class="decorative decorative-md">
                                        <h5 class="decorative-title">Наша галерея</h5>
                                        <ul class="gallery-custom" data-photo-swipe-gallery="gallery">
                                            @foreach($gallery as $item)
                                            <li>
                                                <a class="thumbnail-classic"
                                                   data-photo-swipe-item=""
                                                   data-size="1200x800"
                                                   href="{{asset($item->image)}}">
                                                    <div class="thumbnail-overlay">
                                                        <img src="{{asset($item->image_small)}}" alt="" width="140" height="140"/>
                                                    </div>
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endif

                            @if(count($categories))
                            <div class="cell-sm-6 cell-md-12">
                                <div class="decorative">
                                    <div class="decorative decorative-md">
                                        <h5 class="decorative-title">Категории новостей</h5>
                                        <ul class="list-marked list-marked-1">
                                            @foreach($categories as $category)
                                                <li><a href="{{route('getCategory', ['id'=>$category->id])}}">{{$category->name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <div class="cell-sm-6 cell-md-12">
                                <div class="decorative">
                                    <div class="decorative decorative-md">
                                        <h5 class="decorative-title">О нас</h5>
                                        <div class="sidebar-description">
                                            <p>{{str_limit($about_text->short_desc, 200)}}</p>
                                            <a class="post-link" href="{{route('about')}}">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
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