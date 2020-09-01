@extends('layouts.principal')

@section('titulo', 'Projeto AO')

@section('css')
@endsection

@section('conteudo')
<listar-comentarios
  :publicacao="{{ $publicacao }}"
  :comentarios="{{ $comentarios }}"
  :usuario="{{ Auth::user()->id }}"
/>
@endsection

@section('js')
@endsection
