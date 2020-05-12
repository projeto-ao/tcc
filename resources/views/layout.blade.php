<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>

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

            @yield('content');
        </div>

        @yield('js')
    </body>
</html>