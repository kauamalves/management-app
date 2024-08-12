<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Super Gestão - @yield('pageTitle')</title>
        <meta charset="utf-8">
        <link rel='stylesheet' href='{{ asset('css/basic_style.css') }}'>
    </head>
    <body>
        @include('site.layouts.components.header') {{-- Show the component 'header' before the main content --}}
        @yield('content')  {{-- All the sections who is named with 'content' are going to be shown rh--}}
    </body>
</html>