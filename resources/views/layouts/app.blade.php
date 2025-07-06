<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <meta name="description" content="@yield('description')">
        <link href="{{ asset('bootstrap/bootstrap-5.3.3-dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap-icons-1.13.1/bootstrap-icons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
        <link rel="manifest" href="/images/site.webmanifest">
        <meta name="application-name" content="МЕХПОРТАЛ - открытые заказы на металлообработку по всей России.">
    </head>

    <body>
        <x-site.navbar :regionName="$region_name"/>
        <x-site.header-banner :headerTitle="$header_title"/>
        <div class="container">
            @yield('content')
            
        </div>
        <x-site.footer :regionSlug="$region_slug" />

        <script src="{{ asset('bootstrap/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js') }}"></script>
    </body>
</html>
