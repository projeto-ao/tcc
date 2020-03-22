@extends('layout')

@section('title', 'Projeto AO')

@section('css')
    <link rel="stylesheet" href="{{ asset('vendor/public/css/pagina-inicial/base.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/public/css/pagina-inicial/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/public/css/pagina-inicial/main.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/public/FontAwesome/css/fontawesome.min.css') }}">
@endsection

@section('content')
<body id="top">

    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="index.html">
                <img src="" alt="">
            </a>
        </div>

        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

            <div class="header-nav__content">
                <h3>Navigation</h3>

                <ul class="header-nav__list">
                    <li class="current"><a class="smoothscroll"  href="#home" title="home">Home</a></li>
                    <li><a class="smoothscroll"  href="#about" title="about">About</a></li>
                    <li><a class="smoothscroll"  href="#services" title="services">Services</a></li>
                    <li><a class="smoothscroll"  href="#works" title="works">Works</a></li>
                    <li><a class="smoothscroll"  href="#clients" title="clients">Clients</a></li>
                    <li><a class="smoothscroll"  href="#contact" title="contact">Contact</a></li>
                </ul>

                <p>Perspiciatis hic praesentium nesciunt. Et neque a dolorum <a href='#0'>voluptatem</a> porro iusto sequi veritatis libero enim. Iusto id suscipit veritatis neque reprehenderit.</p>
            </div>

        </nav>

        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-text">Menu</span>
            <span class="header-menu-icon"></span>
        </a>

    </header>

<section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="{{ asset('vendor/public/imagens/pagina-inicial/arvore1.jpg')}}" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                <h3>PROJETO AO</h3>

                <h1>
                    Bem vindo a uma <br>
                    rede social diferente <br>
                    de todas <br>
                    {{-- AO é voltada em prol do <br>
                    meio ambiente. --}}
                </h1>

                <div class="home-content__buttons">
                    <a class="smoothscroll btn btn--stroke">
                        Cadastre-se
                    </a>
                    <a class="smoothscroll btn btn--stroke">
                        Login
                    </a>
                </div>

            </div>

            <div class="home-content__scroll">
                <a href="#about" class="scroll-link smoothscroll">
                    <span>O que é AO</span>
                </a>
            </div>

            <div class="home-content__line"></div>

        </div>
    </section>

    <div class="row section-header has-bottom-sep" data-aos="fade-up">
        <div class="col-full">
            <h1 class="display-1 display-1--light">Quem somos nós?</h1>
        </div>
    </div>

    <div class="row about-desc" data-aos="fade-up">
        <div class="col-full">
            <p>
                AO significa mundos na língua Maori, o que representa muito bem a ideia dessa rede social. Ela é voltada em prol do meio ambiente, onde você se conectará com outras pessoas com a mesma ideia de preservação ambiental, conectando eu e você a um novo mundo.
            </p>
        </div>
    </div>
    @endsection

    @section('js')
        <script src="{{ asset('vendor/public/js/jquery-3.4.1.min.js') }}"></script>
        <script src="{{ asset('vendor/public/js/pagina-inicial/plugins.js') }}"></script>
        <script src="{{ asset('vendor/public/js/pagina-inicial/main.js') }}"></script>
    @endsection

</body>

</html>