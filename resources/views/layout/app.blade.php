<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- CSRF TOKEN -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>WatchTower</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700,900" rel="stylesheet">

        <!-- Styles -->

    </head>
    <body>

    <div id="app">

        @include( 'layout.nav' )

        @yield( 'content' )

    </div>

    <script src="{{ asset( 'js/app.js' ) }}"></script>
    @yield( 'scripts' )

    </body>
</html>
