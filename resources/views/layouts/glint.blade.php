<html>
  <head>
    <meta charset="utf-8">
    <title>
      @yield('titulo')
    </title>

    <link rel="stylesheet" href="{{ asset('public/css/pagina-inicial/base.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/pagina-inicial/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/pagina-inicial/main.css') }}">
    <link rel="stylesheet" href="{{ asset('public/FontAwesome/css/fontawesome.min.css') }}">

    @yield('css')
  </head>

  <body>
    @yield('conteudo')
  </body>

  <script src="{{ asset('/public/js/jquery-3.4.1.min.js') }}"></script>
  <script src="{{ asset('/public/js/pagina-inicial/plugins.js') }}"></script>
  <script src="{{ asset('/public/js/pagina-inicial/main.js') }}"></script>

  @yield('js')
</html>