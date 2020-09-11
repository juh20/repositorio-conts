<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        @yield('styles')
    </head>
    <body>
        <div>
            @yield('content')
        </div>
        <script>
            @yield('scripts')
        </script>
    </body>
</html>