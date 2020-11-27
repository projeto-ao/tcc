@extends('layouts.principal')

@section('titulo', 'AO - Mural')

@section('css')
@endsection

@section('conteudo')
<mural :campanhas="{{ $campanhas }}"/>
@endsection

@section('js')
@endsection
