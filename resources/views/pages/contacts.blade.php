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
                        <li><a href="{{route('home')}}">{{trans('content.home')}}</a></li>
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
                        <form id="feedback_form" class="rd-mailform text-left" method="post" action="{{route('send_feedback')}}">
                            {{ csrf_field() }}
                            <div class="range range-xs-center range-15">
                                <div class="cell-sm-4">
                                    <div class="form-wrap form-wrap-validation">
                                        <label class="form-label form-label-outside" for="forms-name">Name</label>
                                        <input class="form-input" id="forms-name" type="text" name="name" data-constraints="@Required">
                                    </div>
                                </div>
                                <div class="cell-sm-4">
                                    <div class="form-wrap form-wrap-validation">
                                        <label class="form-label form-label-outside" for="forms-email">E-mail</label>
                                        <input class="form-input" id="forms-email" type="email" name="email" data-constraints="@Email @Required">
                                    </div>
                                </div>
                                <div class="cell-sm-4">
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
                                @if(config('services.recaptcha.key'))
                                    <div class="cell-sm-12">
                                        <div class="form-wrap form-wrap-validation">
                                                <div class="g-recaptcha"
                                                     data-sitekey="{{config('services.recaptcha.key')}}">
                                                </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="form-button">
                                <button class="button button-secondary" type="submit">{{trans('content.btn_form_1')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="cell-md-4 cell-lg-5 cell-xl-3 cell-lg-preffix-1">
                    <div class="contact-box decorative decorative-md">
                        <h5 class="decorative-title">{{trans('content.city')}}</h5>
                        <ul class="list-lg">
                            <li>
                                <div class="unit unit-horizontal unit-spacing-xxs">
                                    <div class="unit__left"><span class="icon icon-xs icon-primary mdi mdi-map-marker"></span></div>
                                    <div class="unit__body">
                                        <a class="link-default" href="#map_contact">{{trans('content.address')}}</a>
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
<!--                            <li>
                                <div class="unit unit-horizontal unit-spacing-xxs unit-middle">
                                    <div class="unit__left"><span class="icon icon-xs icon-primary mdi mdi-phone"></span></div>
                                    <div class="unit__body">
                                        <a class="link-default" href="callto:{{Config::get('contacts.phone_2')}}">{{Config::get('contacts.phone_2')}}</a>
                                    </div>
                                </div>
                            </li>-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- RD Google Map-->
    {{--<section class="section" id="map_contact">
        <div class="rd-google-map rd-google-map__model" data-styles="" data-zoom="6" data-y="51.4943145" data-x="31.3061158">
            <ul class="map_locations">
                <li data-y="51.4943145" data-x="31.3061158">
                    <p>{{trans('content.address')}}</p>
                </li>
                --}}{{--<li data-y="50.458814" data-x="30.5471116">
                    <p>9870 St Vincent Place, Glasgow, DC 45 Fr 45.</p>
                </li>--}}{{--
            </ul>
        </div>
    </section>--}}
    <section class="section">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.144856757576!2d31.34279041577008!3d51.510558379635675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46d5484be1a38487%3A0xa44b4632b15f03a4!2z0YPQu9C40YbQsCDQqNC10LLRh9C10L3QutC-LCAxNDQsINCn0LXRgNC90LjQs9C-0LIsINCn0LXRgNC90LjQs9C-0LLRgdC60LDRjyDQvtCx0LvQsNGB0YLRjCwgMTQwMDA!5e0!3m2!1sru!2sua!4v1631173810693!5m2!1sru!2sua" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
{{--        <img src="{{asset('images/map.png')}}" alt="">--}}
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