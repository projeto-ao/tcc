<html>
    <head>
        <meta charset="utf-8">
        <title>
            @yield('title')
        </title>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">
        <!-- Estilo herdado do Orbis -->
        <link type="text/css" rel="stylesheet" href="{{ asset('public/css/estilos.css') }}">
        <!--
            Estilos novos,
            Sobreescrevem alguns dos estilos do bootstrap e dos estilos herdados
        -->
        <link type="text/css" rel="stylesheet" href="{{ asset('public/css/novosEstilos.css') }}">

        <style type="text/css" rel="stylesheet">
            .fonte-botoes-corpo {
                text-align: center;
            }

            .botao-interacao {
                border-radius: 1rem;
                font-size: 0.9rem;
                font-weight: bold;
            }

            .botoes-interacao {
                left: 5.2rem;
            }

        </style>
        @yield('css')
    </head>

    <body background="public/imagens/pagina-inicial/arvores.jpg">
        <div id="app">
        <div class="container">
            <div class="sticky-top sticky-menu" id="menu">
                <button class="btn texto-menu" id="menu_dropdown" data-toggle="dropdown">
                    Menu <i class="fas fa-align-center"></i>
                </button>

                <div class="dropdown-menu dropdown-menu-right">
                    <button class="dropdown-item texto-menu" id="nova-publicacao" data-toggle="modal" data-target="#modal-nova-publicacao">Novo <i class="fas fa-plus"></i></button>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item texto-menu" href="https://github.com/ghp2201/projeto-ao" target="_blank">Sobre <i class="fab fa-github"></i></a>
                </div>
            </div>

            <div id="modal-nova-publicacao" class="modal">
                <form class="postagem col-md-11 col-sm-12 col-xs-12">
                    @csrf

                    <div class="form-group texto-postagem col-md-12">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                        <div class="md-form mb-4 success-textarea active-success-textarea">
                            <textarea class="md-textarea form-control" rows="4" placeholder="Escreva algo incrível ..." maxlength="500"></textarea>
                        </div>
                        <p></p>
                        <div class="row">
                            <button type="button" class="btn btn-elegant col-sm botao-postagem">Adicionar foto <i class="fas fa-paperclip"></i></button>
                            <button type="button" class="btn btn-success col-sm botao-postagem botao-enviar">Enviar <i class="fas fa-paper-plane"></i></button>
                        </div>
                    </div>

                </form>
            </div>

            @yield('content')
        </div>
        </div>
    </body>

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>
    <!-- Vue.js -->
    <script src="{{ asset("public/js/app.js") }}"></script>

    @yield('js')
</html>