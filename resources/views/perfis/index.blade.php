@extends('layouts.principal')

@section('titulo', 'Projeto AO')

@section('css')
<style type="text/css" rel="stylesheet">
  h2 {
    font-weight: bold;
  }

  .corpo-publicacao {
    padding: 1rem;
  }

  .corpo-imagem-perfil {
    border-radius: 50%;
    background-color: #fff;
    padding: 1rem;
  }

  .imagem-perfil {
    border-radius: 50%;
    height: 9rem;
    width: 9rem;
  }
</style>
@endsection

@section('conteudo')
<div class="col-6 offset-3 col-md-2 offset-md-5 corpo-imagem-perfil text-center">
  @if ($perfil->imagem != null)
    <img class="imagem-perfil" src="{{ asset('public/uploads/' . $perfil->imagem . '') }}"/>
  @else
    <img class="imagem-perfil" src="{{ asset('public/imagens/foto_perfil_padrao.jpeg') }}"/>
  @endif
</div>

<div class="col-md-6 offset-md-3 text-center">
  <div class="corpo-publicacao">
    <h2>{{ $perfil->name }}</h2>
  </div>
</div>

<listar-publicacoes
  :publicacoes='{{ $publicacoes }}'
  :usuario='{{ Auth::user()->id }}'
/>
@endsection

@section('js')
@endsection
