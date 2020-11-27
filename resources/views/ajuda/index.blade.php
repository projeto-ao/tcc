@extends('layouts.principal')

@section('titulo', 'AO - Linha do Tempo')

@section('css')
<style rel="stylesheet" type="text/css">
h3 {
  font-weight: bold;
}

span {
  text-align: justify;
}

.corpo {
    padding: 1rem;
}
</style>
@endsection

@section('conteudo')
<div class="col col-md-8 offset-md-2">
  <div class="corpo" id="inicio">
    <h3>Início e Publicações</h3>
    <span>
      O menu <b>Início <i class="fas fa-tree"></i></b> leva a linha do tempo do AO, essa que é composta por publicações enviadas tanto pelos usuários quanto pela equipe moderadora, com a responsailidade sobre conteúdo delas recaindo totalmente sobre seus criadores.

      As publicações são o principal meio de comunicação no AO, elas se comportam como em qualquer outra rede social e contém uma série de elementos de interação característicos, como: <b>Curtir <i class="fab fa-pagelines"></i></b>, <b>Comentar <i class="fas fa-signature"></i></b> e <b>Compartilhar <i class="fas fa-share-alt"></i></b>.
    </span>
  </div>

  <div class="corpo" id="mural">
    <h3>Mural de Campanhas</h3>
    <span>
      O menu <b>Mural <i class="fas fa-columns"></i></b> leva a uma espécie de linha do tempo composta por campanhas criadas e mantidas pela comunidade AO, com a responsailidade sobre conteúdo delas recaindo totalmente sobre seus criadores.

      As campanhas são uma espécie de publicação com foco global e que possuem caracteristicas unicas, que as tornam muito mais concisas e organizadas, como <b>Titulo</b> e <b>Subtitulo</b>, além de fornecerem suporte a textos maiores e com formatação <b><a href="https://markdown.net.br/" target="_blank">Markdown</a></b>, o que as torna poderosas ferramentas de divulgação de trabalhos, campanhas e projetos.
    </span>
  </div>

  <div class="corpo" id="novo">
    <h3>Novo</h3>
    <span>
      O menu <b>Novo <i class="fas fa-plus"></i></b> exibe os modais repsonsáveis pela criação de publicações e de campanhas, com estes sendo separados por menus superiores.
    </span>
  </div>
</div>
@endsection

@section('js')
@endsection
