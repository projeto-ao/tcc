@extends('layout')

@section('title', 'Projeto AO')

@section('css')
@endsection

@section('content')
    <script type="text/template" id="template_postagem">
        <div class="col-md-12">
            <div class="postagem col-md-10">
                <div class="nome-usuario">
                </div>

                <div class="fonte-corpo">
                </div>

                <div class="row col-md-10 botoes-interacao">
                    <button class="btn btn-elegant botao-interacao col-md">
                        <i class="fab fa-pagelines"></i> Gostei
                    </button>
                    <button class="btn btn-elegant botao-interacao col-md">
                        <i class="fas fa-bezier-curve"></i> Compartilhar
                    </button>
                </div>
            </div>
        </div>
    </script>
@endsection

@section('js')
@endsection
