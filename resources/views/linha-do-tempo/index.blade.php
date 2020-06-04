@extends('layout')

@section('title', 'Projeto AO')

@section('css')
<link type="text/css" rel="stylesheet" href="{{ asset('public/css/estilos.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="col-md-12 col-xs-10">

        <div>
    </div>

    <script type="text/template" id="template_postagem">
        <div class = "postagem">
            <div class = "nome-usuario">
            </div>

            <div class = "fonte-corpo">
            </div>

            <div>
                <a class = "fonte-botoes-corpo">
                    <i class="fab fa-pagelines"></i> Gostei
                </a>
                <a class = "fonte-botoes-corpo">
                    <i class="fas fa-bezier-curve"></i> Compartilhar
                </a>
            </div>
        </div>
    </script>
@endsection

@section('js')
@endsection
