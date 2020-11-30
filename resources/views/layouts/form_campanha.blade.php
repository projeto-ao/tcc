<form class="modal-form" method="POST" enctype="multipart/form-data" action="{{ route('nova-campanha') }}">
  @csrf

  <div class="col-12 col-md-12 form-group">
    <div class="md-form mb-4 success-textarea active-success-textarea">
      <div class="row">
        <input type="text" name="titulo-campanha" class="col" placeholder="Titulo ..." required>
        <input type="text" name="subtitulo-campanha" class="col" placeholder="Subtitulo ...">
      </div>

      <textarea id="texto-campanha" name="texto-campanha" class="md-textarea form-control" rows="10" placeholder="Descreva esse brilhante projeto ..." maxlength="1000" required></textarea>
    </div>

    <span id="nome-imagem-campanha"></span>

    <div class="col-12 col-md-8 offset-md-2">
      <div class="row">
        <input type="file" accept=".jpg,.jpeg,.png" id="imagem-campanha" name="imagem-campanha" style="display:none">
        <label id="label-adicionar-foto-campanha" for="imagem-campanha" class="col btn btn-elegant botao-anexar">
          <span class="ocultar-em-mobile">Adicionar foto </span>
          <i class="fas fa-paperclip"></i>
        </label>

        <button type="submit" class="col btn btn-elegant botao-enviar">
          <span class="ocultar-em-mobile">Publicar </span>
          <i class="fas fa-paper-plane"></i>
        </button>
      </div>
    </div>

    <a href="{{ route('ajuda') }}" class="col-1 offset-11">
      <i class="fas fa-question-circle"></i>
    </a>
  </div>
</form>
