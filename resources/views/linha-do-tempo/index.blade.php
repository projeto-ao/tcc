@extends('layouts.principal')

@section('titulo', 'Projeto AO')

@section('css')
@endsection

@section('conteudo')
<lista-publicacoes
  :publicacoes='{{ $publicacoes }}'
  :usuario='{{ Auth::user()->id }}'
/>
@endsection

@section('js')
@endsection
