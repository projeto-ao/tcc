@extends('layouts.principal')

@section('titulo', 'Projeto AO')

@section('css')
@endsection

@section('conteudo')
  @isset($publicacoes)
    <lista-publicacoes
      :publicacoes='{{ $publicacoes }}'
      :usuario='{{ Auth::user()->id }}'
    />
  @endisset
@endsection

@section('js')
@endsection
