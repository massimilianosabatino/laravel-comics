<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yeld('page.title')</title>
    @vite('resources/js/app.js')
</head>
<body>
    @include('partials.header')
    <header>

    </header>
    <main>
        @yeld('page.main')
    </main>
    <h1>Template Blade and Vite</h1>
    @include('partials.footer')
    <footer>

    </footer>
</body>
</html>
