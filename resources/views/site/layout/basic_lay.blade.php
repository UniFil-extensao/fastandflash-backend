<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>App Gestão - @yield('tittle') </title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        @include('site.layout._includes.top')
        @yield('content')
    </body>
</html>