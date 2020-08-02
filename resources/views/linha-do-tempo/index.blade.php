@extends('layouts.principal')

@section('titulo', 'Projeto AO')

@section('css')
@endsection

@section('conteudo')
<lista-publicacoes :publicacoes='{{ $publicacoes }}'/>
@endsection

@section('js')
@endsection
