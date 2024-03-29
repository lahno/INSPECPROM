<!-- Page preloader-->
<div class="page-loader">
    <div>
        <div class="page-loader-body">
            <div class="cssload-loader">
                <div class="cssload-inner cssload-one"></div>
                <div class="cssload-inner cssload-two"></div>
                <div class="cssload-inner cssload-three"></div>
            </div>
        </div>
    </div>
</div>
<header class="section page-header">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap" style="height: 44px;">
        <nav class="rd-navbar rd-navbar-transparent rd-navbar-original"
             data-sm-stick-up-offset="1px"
             data-md-stick-up-offset="92px"
             data-lg-stick-up-offset="54px"
             data-layout="rd-navbar-fixed"
             data-sm-layout="rd-navbar-fixed"
             data-md-layout="rd-navbar-fullwidth"
             data-md-device-layout="rd-navbar-fixed"
             data-lg-device-layout="rd-navbar-static"
             data-lg-layout="rd-navbar-static"
             data-sm-stick-up="true"
             data-md-stick-up="true"
             data-lg-stick-up="true">
            <!-- RD Navbar Top Panel-->
            <button class="collapse-toggle toggle-original" data-rd-navbar-toggle=".rd-navbar-top-panel"><span class="toggle-icon"></span></button>
            <div class="rd-navbar-outer outer-1 rd-navbar-top-panel toggle-original-elements">
                <div class="rd-navbar-inner">
                    <div class="rd-navbar-cell">
                        <ul class="navbar-inline-list">
                            <li class="rd-navbar-info">
                                <div class="icon icon-xs mdi mdi-map-marker"></div>
                                <a class="link" href="{{route('contact')}}#map_contact">{{trans('content.address')}}</a>
                            </li>
                            <li class="rd-navbar-info">
                                <div class="icon icon-xs mdi mdi-email-outline"></div>
                                <a class="link" href="mailto:{{Config::get('contacts.email')}}">{{Config::get('contacts.email')}}</a>
                            </li>
                            <li class="rd-navbar-info">
                                <div class="icon icon-xs mdi mdi-phone"></div>
                                <a class="link" href="callto:{{Config::get('contacts.phone')}}">{{Config::get('contacts.phone')}}</a>
                            </li>
                            @auth
                                @role('admin')
                                    <li class="rd-navbar-info">
                                        <div class="icon icon-xs mdi fa fa-sign-in"></div>
                                        <a class="link" href="{{url('admin')}}">Admin panel</a>
                                    </li>
                                @endrole
                                <li class="rd-navbar-info">
                                    <div class="icon icon-xs mdi fa fa-sign-out"></div>
                                    <a class="link" href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                                </li>
                            @else
                                <li class="rd-navbar-info">
                                    <div class="icon icon-xs mdi fa fa-sign-in"></div><a class="link" href="{{url('login')}}">Login/Register</a>
                                </li>
                            @endauth
                        </ul>
                        <form id="logout-form" action="{{route('logout')}}"
                              method="POST"style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                    <div class="rd-navbar-cell">
                        <div class="rd-navbar-social">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <a  class="link {{(LaravelLocalization::getCurrentLocale() == $localeCode)?'active':''}}"
                                    rel="alternate"
                                    hreflang="{{ $localeCode }}"
                                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ mb_strtoupper($localeCode) }}
                                </a>
                            @endforeach
                            {{--<a class="link fa fa-facebook" href="#"></a>
                            <a class="link fa fa-twitter" href="#"></a>
                            <a class="link fa fa-pinterest" href="#"></a>
                            <a class="link fa fa-vimeo" href="#"></a>
                            <a class="link fa fa-google" href="#"></a>
                            <a class="link fa fa-rss" href="#"></a>--}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="rd-navbar-outer outer-transparent">
                <div class="rd-navbar-inner">
                    <!-- RD Navbar Panel-->
                    <div class="rd-navbar-cell rd-navbar-panel" style="flex-basis: auto;">
                        <!-- RD Navbar Toggle-->
                        <button class="rd-navbar-toggle toggle-original" data-rd-navbar-toggle=".rd-navbar-nav">
                            <span class="toggle-icon"></span>
                        </button>
                        <!-- RD Navbar Brand-->
                        <a class="rd-navbar-brand" href="{{route('home')}}">
                            <img src="{{asset('html/images/brand.png')}}" width="180" height="50" alt="">
                        </a>
                    </div>
                    <!-- RD Navbar Nav-->
                    <div class="rd-navbar-cell rd-navbar-nav-wrap">
                        <!-- RD Navbar Nav-->
                        <ul class="rd-navbar-nav toggle-original-elements">
                            <li class="{{(Route::currentRouteNamed('home')) ? 'active' : ''}}">
                                <a href="{{route('home')}}">{{trans('content.home')}}</a>
                            </li>
                            <li class="{{(Route::currentRouteNamed('products')) ? 'active' : ''}} rd-navbar--has-dropdown rd-navbar-submenu">
                                <a href="{{route('products')}}">{{trans('content.production')}}</a>
                                <ul class="rd-navbar-dropdown">
                                    @foreach($menu_prod as $item)
                                        @if(count($item->getProducts) && !$item->parent_id)
                                            @if(count($item->getParents))
                                                <li>
                                                    @if(LaravelLocalization::getCurrentLocale() == 'ru')
                                                        <a href="{{route('getCategory', ['id'=>$item->id])}}">{{$item->name}}</a>
                                                    @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                                                        <a href="{{route('getCategory', ['id'=>$item->id])}}">{{$item->name_en}}</a>
                                                    @else
                                                        <a href="{{route('getCategory', ['id'=>$item->id])}}">{{$item->name_ua}}</a>
                                                    @endif
                                                    <ul class="rd-navbar-dropdown">
                                                        @foreach($item->getParents as $category)
                                                            <li>
                                                                @if(LaravelLocalization::getCurrentLocale() == 'ru')
                                                                    <a href="{{route('getCategory', ['id'=>$category->id])}}">{{$category->name}}</a>
                                                                @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                                                                    <a href="{{route('getCategory', ['id'=>$category->id])}}">{{$category->name_en}}</a>
                                                                @else
                                                                    <a href="{{route('getCategory', ['id'=>$category->id])}}">{{$category->name_ua}}</a>
                                                                @endif
                                                                <ul class="rd-navbar-dropdown">
                                                                    @foreach($category->getProducts as $product)
                                                                        @if($product->view == 'yes')
                                                                            @if(LaravelLocalization::getCurrentLocale() == 'ru')
                                                                                <li>
                                                                                    <a href="{{route('product', ['id'=>($product->slug)?$product->slug:$product->id])}}">{{$product->name}}</a>
                                                                                </li>
                                                                            @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                                                                                <li>
                                                                                    <a href="{{route('product', ['id'=>($product->slug)?$product->slug:$product->id])}}">{{$product->name_en}}</a>
                                                                                </li>
                                                                            @else
                                                                                <li>
                                                                                    <a href="{{route('product', ['id'=>($product->slug)?$product->slug:$product->id])}}">{{$product->name_ua}}</a>
                                                                                </li>
                                                                            @endif
                                                                        @endif
                                                                    @endforeach
                                                                </ul>
                                                            </li>
                                                        @endforeach
                                                        @foreach($item->getProducts as $product)
                                                            @if($product->view == 'yes')
                                                                @if(LaravelLocalization::getCurrentLocale() == 'ru')
                                                                    <li>
                                                                        <a href="{{route('product', ['id'=>($product->slug)?$product->slug:$product->id])}}">{{$product->name}}</a>
                                                                    </li>
                                                                @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                                                                    <li>
                                                                        <a href="{{route('product', ['id'=>($product->slug)?$product->slug:$product->id])}}">{{$product->name_en}}</a>
                                                                    </li>
                                                                @else
                                                                    <li>
                                                                        <a href="{{route('product', ['id'=>($product->slug)?$product->slug:$product->id])}}">{{$product->name_ua}}</a>
                                                                    </li>
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            @else
                                                <li>
                                                    @if(LaravelLocalization::getCurrentLocale() == 'ru')
                                                        <a href="{{route('getCategory', ['id'=>$item->id])}}">{{$item->name}}</a>
                                                    @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                                                        <a href="{{route('getCategory', ['id'=>$item->id])}}">{{$item->name_en}}</a>
                                                    @else
                                                        <a href="{{route('getCategory', ['id'=>$item->id])}}">{{$item->name_ua}}</a>
                                                    @endif
                                                    <ul class="rd-navbar-dropdown">
                                                        @foreach($item->getProducts as $product)
                                                            @if($product->view == 'yes')
                                                                @if(LaravelLocalization::getCurrentLocale() == 'ru')
                                                                    <li>
                                                                        <a href="{{route('product', ['id'=>($product->slug)?$product->slug:$product->id])}}">{{$product->name}}</a>
                                                                    </li>
                                                                @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                                                                    <li>
                                                                        <a href="{{route('product', ['id'=>($product->slug)?$product->slug:$product->id])}}">{{$product->name_en}}</a>
                                                                    </li>
                                                                @else
                                                                    <li>
                                                                        <a href="{{route('product', ['id'=>($product->slug)?$product->slug:$product->id])}}">{{$product->name_ua}}</a>
                                                                    </li>
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            @endif
                                        @endif
                                    @endforeach
                                </ul>
                            </li>
                            <li class="{{(Route::currentRouteNamed('gallery')) ? 'active' : ''}}">
                                <a href="{{route('gallery')}}">{{trans('content.gallery')}}</a>
                            </li>
                            {{--<li class="{{(Route::currentRouteNamed('posts')) ? 'active' : ''}}">
                                <a href="{{route('posts')}}">{{trans('content.news')}}</a>
                            </li>--}}
                            <li class="{{(Route::currentRouteNamed('about')) ? 'active' : ''}}">
                                <a href="{{route('about')}}">{{trans('content.about')}}</a>
                            </li>
                            <li class="{{(Route::currentRouteNamed('contact')) ? 'active' : ''}}">
                                <a href="{{route('contact')}}">{{trans('content.contacts')}}</a>
                            </li>
                        </ul>
                    </div>
                    <!-- RD Navbar Panel Right-->
                    <div class="rd-navbar-cell rd-navbar-panel-right">
                        <!-- Search toggle-->
                        <button class="search-toggle toggle-original" data-rd-navbar-toggle=".rd-navbar-search"><span class="toggle-icon"></span></button>
                        <!-- Search-->
                        <div class="rd-navbar-search toggle-original-elements">
                            <form class="rd-search" action="search-results.html" data-search-live="rd-search-results-live" method="GET">
                                <div class="form-wrap">
                                    <label class="form-label form-label rd-input-label" for="rd-navbar-search-form-input">Type and hit enter...</label>
                                    <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
                                    <button class="button-submit fa fa-search" type="submit"></button>
                                    <div class="rd-search-results-live" id="rd-search-results-live"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>