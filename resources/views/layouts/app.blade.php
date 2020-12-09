<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Personal Blog - @yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="csrf-param" content="_token" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body>
        <div class="container mt-4">
            <a href="/">Home</a>
            <a href="{{ route('articles.index') }}">Articles</a>
            <a href="{{ route('articles.create') }}">New article</a>
            <a href="/about">About</a>
        </div>
        <div class="container mt-4">
            <h1>@yield('header')</h1>
            <div>
                @include('flash-message')

                @yield('content')
            </div>
        </div>
    </body>
</html>
