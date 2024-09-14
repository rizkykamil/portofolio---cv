<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MilFolio - Personal Portfolio Kamil">
    <title>@yield('title') - Personal Portfolio Kamil</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{asset("assets/img/favicon.svg")}}" type="image/png">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset("assets/img/favicon.svg")}}">

    @include('landing-page.partials.head-css')
</head>

<body>
    <div id="page-content">
        @include('landing-page.partials.topbar')

        @yield('content')

        @include('landing-page.partials.footer')

        @include('landing-page.partials.common-scripts')

        @include('landing-page.partials.background-animation')
    </div>
</body>

</html>


{{--@include('landing-page.partials.sideprofile') --}}