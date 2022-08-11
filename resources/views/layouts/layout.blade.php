<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Portfolio</title>
        @vite(['resources/scss/main.scss'])
    </head>
    <body>
    <nav id="nav-bar">
    <ul>
        <li><img id="logo" src="{{ URL::asset('imgs/logo-only.png') }}" alt="Logo Picture"></li>
        <li><a href="{{ route('portfolio.home') }}">Home</a></li>
        <li><a href="{{ route('portfolio.contact') }}">Contact</a></li>
        <li><a href="{{ route('portfolio.about') }}">About</a></li>
    </ul>
    </nav>
        @yield('content')
    </body>
</html>