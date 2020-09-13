<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>

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

  <body background="{{ asset('public/imagens/pagina-inicial/arvores.jpg') }}">
    <div id="app" class="container col-sm-12 col-md-12 col-xs-12">

      @if(Auth::check())
        <div class="col-md-4 offset-md-8 sticky-top">
          <menu-principal/>
        </div>
      @endif

      <div id="modal-nova-publicacao" class="col-md-10 offset-md-1 modal modal-div">
        <form class="modal-form" method="POST" enctype="multipart/form-data" action="{{ route('nova-publicacao') }}">
          @csrf

          <div class="col-md-12 form-group">
            <div class="md-form mb-4 success-textarea active-success-textarea">
              <textarea id="texto"
                name="texto"
                class="md-textarea form-control"
                rows="4"
                placeholder="Escreva algo incrível ..."
                maxlength="255"
                required
              ></textarea>
            </div>

            <span id="nome-imagem"></span>

            <div class="row col-md-8 offset-md-2">
              <input type="file"
                accept=".jpg,.jpeg,.png"
                id="imagem"
                name="imagem"
                style="display:none"
              >
              <label id="label-adicionar-foto" for="imagem" class="col-sm btn btn-elegant botao-anexar">
                Adicionar foto
                <i class="fas fa-paperclip"></i>
              </label>
              <button type="submit" class="col-sm btn btn-elegant botao-enviar">
                <span>Publicar </span>
                <i class="fas fa-paper-plane"></i>
              </button>
            </div>
          </div>

        </form>
      </div>

      @yield('conteudo')
    </div>
  </body>

  <script src="{{ asset("public/js/app.js") }}"></script>
  <script src="{{ asset("public/MDB-Free_4.19.1/js/mdb.min.js") }}"></script>

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
  </script>

  @yield('js')
</html>