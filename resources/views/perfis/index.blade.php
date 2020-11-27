@extends('layouts.principal')

@section('titulo', 'AO - Perfil')

@section('css')
<style type="text/css" rel="stylesheet">
  h2 {
    font-weight: bold;
  }

  .corpo.nome {
    padding: 1rem;
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
  <div class="corpo nome">
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
