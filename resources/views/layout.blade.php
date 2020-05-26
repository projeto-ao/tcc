<html>
    <head>
        <meta charset="utf-8">
        <title>
            @yield('title')
        </title>

        <link rel="stylesheet" href="{{ asset('public/css/pagina-inicial/base.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/pagina-inicial/vendor.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/pagina-inicial/main.css') }}">
        <link rel="stylesheet" href="{{ asset('public/FontAwesome/css/fontawesome.min.css') }}">

        @yield('css')
    </head>
    <body>
        <div class="container">
            <header class="s-header">
                <div class="header-logo">
                    <a class="site-logo" href="index.html">
                        <img src="" alt="">
                    </a>
                </div>

                <nav class="header-nav">
                    <a href="#0" class="header-nav__close" title="close"><span>Fechar</span></a>

                    <div class="header-nav__content">
                        <h3>Navegação</h3>

                        <ul class="header-nav__list">
                            {{-- <li class="current"><a href="{{ route('linha-do-tempo') }}" title="home">Início</a></li> --}}
                            {{-- <li><a href="{{ route('pagina-inicial') }}" title="about">Sobre nós</a></li> --}}
                        </ul>
                    </div>
               </nav>

                <a class="header-menu-toggle" href="#0">
                    <span class="header-menu-text">Menu</span>
                    <span class="header-menu-icon"></span>
                </a>
            </header>
        </div>

        @yield('content');
    </body>

    <script src="{{ asset('/public/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('/public/js/pagina-inicial/plugins.js') }}"></script>
    <script src="{{ asset('/public/js/pagina-inicial/main.js') }}"></script>

    @yield('js')
</html>