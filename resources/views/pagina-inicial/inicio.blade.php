@extends('layout')

@section('title', 'Projeto AO')

@section('css')
    <link rel="stylesheet" href="{{ asset('public/css/pagina-inicial/base.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/pagina-inicial/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/pagina-inicial/main.css') }}">
    <link rel="stylesheet" href="{{ asset('public/FontAwesome/css/fontawesome.min.css') }}">
@endsection

@section('content')
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="{{ asset('public/imagens/pagina-inicial/arvores.jpg')}}" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                <h3>PROJETO AO</h3>

                <h1>
                    Bem vindo a uma <br>
                    rede social diferente <br>
                    de todas <br>
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
    <script src="{{ asset('/public/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('/public/js/pagina-inicial/plugins.js') }}"></script>
    <script src="{{ asset('/public/js/pagina-inicial/main.js') }}"></script>
@endsection
