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
    <!-- Get in Touch-->
    <section class="section section-sm">
        <div class="shell shell-fluid">
            <div class="range range-60 range-xl-condensed">
                <div class="cell-md-7 cell-lg-6 cell-xl-preffix-1">
                    <div class="decorative decorative-lg">
                        @if(LaravelLocalization::getCurrentLocale() == 'ru')
                            <h3 class="decorative-title">{{$page->name}}</h3>
                        @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                            <h3 class="decorative-title">{{$page->name_en}}</h3>
                        @else
                            <h3 class="decorative-title">{{$page->name_ua}}</h3>
                        @endif
                        <p class="text-block-1">{{$page->short_desc}}</p>
                        <!-- RD Mailform-->
                        <form class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="forms" method="post" action="">
                            <div class="range range-xs-center range-15">
                                <div class="cell-sm-6">
                                    <div class="form-wrap form-wrap-validation">
                                        <label class="form-label form-label-outside" for="forms-name">First name</label>
                                        <input class="form-input" id="forms-name" type="text" name="name" data-constraints="@Required">
                                    </div>
                                </div>
                                <div class="cell-sm-6">
                                    <div class="form-wrap form-wrap-validation">
                                        <label class="form-label form-label-outside" for="forms-last-name">Last name</label>
                                        <input class="form-input" id="forms-last-name" type="text" name="last-name" data-constraints="@Required">
                                    </div>
                                </div>
                                <div class="cell-sm-6">
                                    <div class="form-wrap form-wrap-validation">
                                        <label class="form-label form-label-outside" for="forms-email">E-mail</label>
                                        <input class="form-input" id="forms-email" type="email" name="email" data-constraints="@Email @Required">
                                    </div>
                                </div>
                                <div class="cell-sm-6">
                                    <div class="form-wrap form-wrap-validation">
                                        <label class="form-label form-label-outside" for="forms-phone">Phone</label>
                                        <input class="form-input" id="forms-phone" type="text" name="phone" data-constraints="@Numeric @Required">
                                    </div>
                                </div>
                                <div class="cell-sm-12">
                                    <div class="form-wrap form-wrap-validation">
                                        <label class="form-label form-label-outside" for="forms-message">Message</label>
                                        <textarea class="form-input" id="forms-message" name="message" data-constraints="@Required"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-button">
                                <button class="button button-secondary" type="submit">Отправить</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="cell-md-4 cell-lg-5 cell-xl-3 cell-lg-preffix-1">
                    <div class="contact-box decorative decorative-md">
                        <h5 class="decorative-title">{{Config::get('contacts.office_1')}}</h5>
                        <ul class="list-lg">
                            <li>
                                <div class="unit unit-horizontal unit-spacing-xxs">
                                    <div class="unit__left"><span class="icon icon-xs icon-primary mdi mdi-map-marker"></span></div>
                                    <div class="unit__body">
                                        <a class="link-default" href="#map_contact">{{Config::get('contacts.address')}}</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="unit unit-horizontal unit-spacing-xxs unit-middle">
                                    <div class="unit__left"><span class="icon icon-xs icon-primary mdi mdi-email-outline"></span></div>
                                    <div class="unit__body">
                                        <a class="link-default" href="mailto:{{Config::get('contacts.email')}}">{{Config::get('contacts.email')}}</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="unit unit-horizontal unit-spacing-xxs unit-middle">
                                    <div class="unit__left"><span class="icon icon-xs icon-primary mdi mdi-phone"></span></div>
                                    <div class="unit__body">
                                        <a class="link-default" href="callto:{{Config::get('contacts.phone')}}">{{Config::get('contacts.phone')}}</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="unit unit-horizontal unit-spacing-xxs unit-middle">
                                    <div class="unit__left"><span class="icon icon-xs icon-primary mdi mdi-phone"></span></div>
                                    <div class="unit__body">
                                        <a class="link-default" href="callto:{{Config::get('contacts.phone_2')}}">{{Config::get('contacts.phone_2')}}</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- RD Google Map-->
    <section class="section" id="map_contact">
        <div class="rd-google-map rd-google-map__model" data-styles="" data-zoom="6" data-y="51.4943145" data-x="31.3061158">
            <ul class="map_locations">
                <li data-y="51.4943145" data-x="31.3061158">
                    <p>{{Config::get('contacts.address')}}</p>
                </li>
                {{--<li data-y="50.458814" data-x="30.5471116">
                    <p>9870 St Vincent Place, Glasgow, DC 45 Fr 45.</p>
                </li>--}}
            </ul>
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