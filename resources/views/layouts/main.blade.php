<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @extends('partials._head')
    </head>
    <body id="top">
        @yield('content')
        @extends('partials._footer')
    </body>
</html>
