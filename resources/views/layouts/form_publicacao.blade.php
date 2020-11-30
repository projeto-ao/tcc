<form class="modal-form" method="POST" enctype="multipart/form-data" action="{{ route('nova-publicacao') }}">
  @csrf

  <div class="col-12 col-md-12 form-group">
    <div class="md-form mb-4 success-textarea active-success-textarea">
      <textarea id="texto" name="texto" class="md-textarea form-control" rows="4" placeholder="Escreva algo incrível ..." maxlength="200" required></textarea>
    </div>

    <span id="nome-imagem"></span>

    <div class="col-12 col-md-8 offset-md-2">
      <div class="row">
        <input type="file" accept=".jpg,.jpeg,.png" id="imagem" name="imagem" style="display:none">
        <label id="label-adicionar-foto" for="imagem" class="col btn btn-elegant botao-anexar">
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
