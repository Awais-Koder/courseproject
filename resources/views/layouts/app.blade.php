<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <style>
        body {
            overflow-x: hidden;
        }
    </style>
    <base href="/">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://unpkg.com/colcade@0/colcade.js"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- start custom styling files -->
    <link rel="shortcut icon" href="assets/images/icon.png" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700"
        rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- ALL CSS FILES -->
    <link href="assets/css/materialize.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="assets/css/style-mob.css" rel="stylesheet" />
    <!-- end custom styling files -->
    <!-- Scripts -->

</head>

<body>
    <div id="app">
        <main class="py-4">
            @include('home.mobile-header')
            @include('home.website-header')
            @yield('content')
            @include('home.footer')
        </main>
    </div>
    <script src="assets/js/main.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/materialize.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>