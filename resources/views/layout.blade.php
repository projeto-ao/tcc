<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>

        @yield('css')
    </head>
    <body>
        <div class='container'>
            @yield('content');
        </div>
    </body>
</html>