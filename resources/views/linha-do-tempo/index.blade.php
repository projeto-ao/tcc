@extends('layouts.principal')

@section('titulo', 'AO - Linha do Tempo')

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
