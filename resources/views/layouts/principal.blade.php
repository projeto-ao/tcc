<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
      @yield('titulo')
    </title>

    <link rel="stylesheet" href="{{ asset("public/css/app.css") }}">
    <link rel="stylesheet" href="{{ asset("public/FontAwesome/css/all.min.css") }}">
    <link rel="stylesheet" href="{{ asset("public/MDB-Free_4.19.1/css/mdb.min.css") }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="{{ asset('public/css/importador.css') }}">

    @yield('css')
    <style>
      @media (max-width: 479px) {
        body {
          background-size: contain;
        }
      }
    </style>
  </head>

  <body background="{{ asset('public/imagens/pagina-inicial/arvores.jpg') }}">
    <div id="app" class="container">

      @if(Auth::check())
        <div class="col-12 col-md-4 offset-md-8 sticky-top">
          <menu-principal
            :usuario='{{ Auth::user()->id }}'

            @if (Auth::user()->imagem)
              :imagem-usuario="'{{ Auth::user()->imagem }}'"
            @endif
          />
        </div>
      @endif

      <div id="modal-nova-publicacao" class="col-md-10 offset-md-1 modal modal-div">
        <ul class="col-md-10 offset-md-1 nav nav-pills nav-fill" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#form-publicacao" role="tab">
              Nova Publicação
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#form-campanha" role="tab">
              Nova Campanha
            </a>
          </li>
        </ul>

        <div class="tab-content col-md-10 offset-md-1">
          <div class="tab-pane fade show active" id="form-publicacao" role="tabpanel">
            @include('layouts.form_publicacao')
          </div>

          <div class="tab-pane fade" id="form-campanha" role="tabpanel">
            @include('layouts.form_campanha')
          </div>
        </div>
      </div>

      @yield('conteudo')
    </div>
  </body>

  <script src="{{ asset("public/js/app.js") }}"></script>
  <script src="{{ asset("public/MDB-Free_4.19.1/js/mdb.min.js") }}"></script>

  @yield('js')

  <script type="text/javascript">
    var mensagemDeErro = 'Pedimos desculpas, mas ocorreu algo de errado, por favor descreva esse erro por email para "ghp2201@gmail.com" ou abra uma issue em nosso Github, agradeçemos pela compreensão. \r\n ~ Equipe AO.';

    document.getElementById("imagem").onchange = function() {
      let span = document.getElementById("nome-imagem"),
        label = document.getElementById("label-adicionar-foto");

      try {
        span.innerHTML = '<i class="fas fa-paperclip"></i> ' + this.files[0].name;
        label.innerHTML = 'Alterar foto <i class="fas fa-paperclip"></i>'
      } catch(erro) {
        alert(mensagemDeErro);
      }
    };

    document.getElementById("imagem-campanha").onchange = function() {
      let span = document.getElementById("nome-imagem-campanha"),
        label = document.getElementById("label-adicionar-foto-campanha");

      try {
        span.innerHTML = '<i class="fas fa-paperclip"></i> ' + this.files[0].name;
        label.innerHTML = 'Alterar foto <i class="fas fa-paperclip"></i>'
      } catch(erro) {
        alert(mensagemDeErro);
      }
    };
  </script>
</html>
