<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->


    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
{{--    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">--}}

    <link href='{{asset("css/font-awesome.css" )}}'rel="stylesheet" type="text/css">


    @yield("styles")
</head>
<body>
    <div id="app">
        @include("partials.header")
        <main >
            @yield('content')
        </main>

    </div>

</body>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<!-- jQuery -->
<script src='{{asset("js/jquery.js")}}'></script>

<!-- Bootstrap Core JavaScript -->
<script src='{{asset("js/bootstrap.js")}}'></script>
<script src="{{ asset('js/scripts.js') }}" defer></script>
@yield("scripts")
</html>
