<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel-intro</title>
    </head>
    <body>
        @yield('main')
        @vite('resources/js/app.js')
    </body>
</html>