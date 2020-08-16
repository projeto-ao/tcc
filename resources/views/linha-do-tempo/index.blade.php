@extends('layouts.principal')

@section('titulo', 'Projeto AO')

@section('css')
@endsection

@section('conteudo')
<listar-publicacoes
  :publicacoes='{{ $publicacoes }}'
  :usuario='{{ Auth::user()->id }}'
/>
@endsection

@section('js')
@endsection
