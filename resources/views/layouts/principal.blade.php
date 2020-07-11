<html>
    <head>
        <meta charset="utf-8">
        <title>
            @yield('titulo')
        </title>

        <link rel="stylesheet" href="{{ asset("public/css/app.css") }}">
        <link rel="stylesheet" href="{{ asset("public/FontAwesome/css/all.min.css") }}">
        <link rel="stylesheet" href="{{ asset("public/MDB-Free_4.19.1/css/mdb.min.css") }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <link rel="stylesheet" href="{{ asset('public/css/importador.css') }}">

        @yield('css')
    </head>

    <body background="public/imagens/pagina-inicial/arvores.jpg">
        <div id="app">
        <div class="container col-sm-12 col-md-12 col-xs-12">

            @if(Auth::check())
            <div class="col-md-2 offset-10 sticky-top">
                <button class="btn menu-principal" data-toggle="dropdown">
                    <span>Menu <i class="fas fa-align-center"></i></span>
                </button>

                <div class="dropdown-menu dropdown-menu-right menu-principal-dropdown">
                    <button class="dropdown-item" id="nova-publicacao" data-toggle="modal" data-target="#modal-nova-publicacao">
                        <span>Novo <i class="fas fa-plus"></i></span>
                    </button>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="https://github.com/projeto-ao/projeto-ao" target="_blank">
                        <span>Sobre <i class="fab fa-github"></i></span>
                    </a>
                </div>
            </div>
            @endif

            <div id="modal-nova-publicacao" class="col-md-10 col-sm-10 col-xs-10 offset-1 modal modal-div">
                <form class="modal-form" method="POST" action="{{ route('nova-publicacao') }}">
                    @csrf

                    <div class="col-md-12 form-group">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                        <div class="md-form mb-4 success-textarea active-success-textarea">
                            <textarea id="texto" name="conteudo" class="md-textarea form-control" rows="4" placeholder="Escreva algo incrível ..." maxlength="255" required></textarea>
                        </div>

                        <div class="row col-md-8 offset-2">
                            <button type="button" class="col-sm btn btn-elegant botao-anexar">
                                <span>Adicionar foto <i class="fas fa-paperclip"></i></span>
                            </button>
                            <button type="submit" class="col-sm btn btn-elegant botao-enviar">
                                <span>Enviar <i class="fas fa-paper-plane"></i></span>
                            </button>
                        </div>
                    </div>

                </form>
            </div>

            @yield('conteudo')
        </div>
        </div>
    </body>

    <script src="{{ asset("public/js/app.js") }}"></script>
    <script src="{{ asset("public/MDB-Free_4.19.1/js/mdb.min.js") }}"></script>

    @yield('js')
</html>