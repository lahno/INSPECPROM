<!DOCTYPE html>
<html class="wide smoothscroll wow-animation desktop landscape rd-navbar-fullwidth-linked" lang="{{app()->getLocale()}}"><head>
    <!-- Site Title-->
    <title>{{$title or env('APP_NAME').' - Развивая настоящее, создаём будущее'}}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="{{asset('html/images/favicon.ico')}}" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900">
    <link rel="stylesheet" href="{{asset('html/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('html/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css?v=1.2')}}">
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;">
        <a href="http://windows.microsoft.com/en-US/internet-explorer/">
            <img src="html/images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.">
        </a>
    </div>
    <script src="html/js/html5shiv.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Page-->
<div class="page">
    <section class="section one-screen-page bg-image-3">
        <div class="one-screen-page-inner">
            <!-- Page Header-->
            <header class="page-head">
                <div class="rd-navbar-brand brand">
                    <a class="brand-logo" href="{{route('home')}}">
                        <img src="{{asset('html/images/brand.png')}}" width="146" height="24" alt="">
                    </a>
                </div>
            </header>
            <!-- Page Content-->
            <section>
                <div class="shell">
                    <div class="range range-condensed range-xs-center">
                        <div class="cell-sm-10 cell-lg-6">
                            <h2 class="page-subtitle">Page Not Found</h2>
                            <p class="text-extra-large page-title">404</p>
                            <p class="heading-5 page-description">The page requested couldn't be found - this could be due to a spelling error in the URL or a removed page.</p><a class="button button-white-outline" href="{{route('home')}}">Back to home page</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Page Footer-->
            <footer class="page-foot text-center">
                <p class="copyright small">{{env('APP_NAME')}}</p>
            </footer>
        </div>
    </section>
</div>
<a href="#" id="ui-to-top" class="ui-to-top fa fa-angle-up"></a>
</body>
</html>