@extends('layouts.principal')

@section('titulo', 'AO - Comentários')

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
