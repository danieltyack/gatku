<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('title')</title>
        <meta name="description" content="@yield('description')">
        <meta property="og:title" content="GATKU Polespears" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://www.gatku.com/" />
        {{-- <meta property="og:image" content="/img/fbscreenshot-coronados.png" /> --}}
        <meta property="og:description" content="Producing the highest quality polespears, heads, and accessories. Locally built in San Diego, used and loved worldwide." />
        <meta property="og:site_name" content="GATKU" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/skippr/css/jquery.skippr.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <script src="{{ asset('bower_components/angular/angular.min.js') }}"></script>
        <script src="{{ asset('js/vendor/modernizr-2.6.2.min.js') }}"></script>
        <script>

            var currentRoute = '{{ Route::currentRouteName() }}'

        </script>
    </head>
    @if(Route::currentRouteName() === 'product') 
    <body ng-app="gatku" ng-controller="ProductController">
    @else
    <body ng-app="gatku">
    @endif
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        @include('partials.nav')

        @yield('content')

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="{{ asset('js/vendor/jquery-1.10.2.min.js') }}"><\/script>')</script>
        <script src="{{ asset('js/config.js') }}"></script>
        <script src="{{ asset('bower_components/skippr/js/jquery.skippr.js') }}"></script>
        <script src="{{ asset('bower_components/fitvids/jquery.fitvids.js') }}"></script>
        <script src="{{ asset('bower_components/ng-file-upload/angular-file-upload.js') }}"></script>
        <script src="{{ asset('bower_components/nanobar/nanobar.js') }}"></script>
        <script src="{{ asset('js/factories.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="{{ asset('js/controllers.js') }}"></script>

        <script>
            // (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            // function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            // e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            // e.src='//www.google-analytics.com/analytics.js';
            // r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            // ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
