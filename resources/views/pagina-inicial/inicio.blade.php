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

    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                <h3>Welcome to Glint</h3>

                <h1>
                    We are a creative group <br>
                    of people who design <br>
                    influential brands and <br>
                    digital experiences.
                </h1>

                <div class="home-content__buttons">
                    <a href="#contact" class="smoothscroll btn btn--stroke">
                        Start a Project
                    </a>
                    <a href="#about" class="smoothscroll btn btn--stroke">
                        More About Us
                    </a>
                </div>

            </div>

            <div class="home-content__scroll">
                <a href="#about" class="scroll-link smoothscroll">
                    <span>Scroll Down</span>
                </a>
            </div>

            <div class="home-content__line"></div>

        </div>
    </section>

    <div class="row section-header has-bottom-sep" data-aos="fade-up">
        <div class="col-full">
            <h3 class="subhead subhead--dark">Hello There</h3>
            <h1 class="display-1 display-1--light">We Are Glint</h1>
        </div>
    </div>

    <div>
        <div>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.
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