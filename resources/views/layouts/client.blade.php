<!doctype html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>{{ env('APP_NAME') }}</title>
        <link rel="stylesheet" href="{{ asset('/assets/client/css/app.css') }}">
    </head>
    <body>
        @yield('content')
        <script src="{{ asset('/assets/client/js/app.js') }}"></script>
    </body>
</html>
