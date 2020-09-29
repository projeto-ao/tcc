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
</style>
@endsection

@section('conteudo')
<div class="col-md-8 offset-md-2">
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
