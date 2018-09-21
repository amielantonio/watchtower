<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- CSRF TOKEN -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config( 'app.name', 'WatchTower' ) }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700,900" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{  asset( 'css/app.css' ) }}">

        @yield( 'head' )

    </head>
    <body>

    <div id="app">

        <header id="nav-container" class="nav-container">
            @include( 'layout.nav' )
        </header>

        <div id="app-container" class="app-container">

            <div id="sidebar-container" class="sidebar-container">
                @include( 'layout.sidebar' )
            </div>

            <div id="content-container" class="content-container">
                @yield( 'content' )
            </div>


        </div>

    </div>

    <script src="{{ asset( 'js/app.js' ) }}"></script>
    @yield( 'scripts' )

    </body>
</html>
