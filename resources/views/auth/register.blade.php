@extends('layouts.principal')

@section('css')
@endsection

@section('conteudo')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cadastro</div>

                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col col-md-6 offset-md-3 md-form">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Nome">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col col-md-6 offset-md-3 md-form">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col col-md-6 offset-md-3 md-form">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Senha">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col col-md-6 offset-md-3 md-form">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirme sua senha">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col col-md6 offset-md-3">
                                Imagem escolhida:
                                <span id="nome-imagem-perfil">N/A</span>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col col-md-6 offset-md-3">
                                <input type="file" accept=".jpg,.jpeg,.png" id="imagem-perfil" name="imagem-perfil" style="display:none">

                                <label id="label-adicionar-foto-perfil" for="imagem-perfil" class="col btn btn-elegant botao-anexar">
                                    Adicionar foto
                                    <i class="fas fa-paperclip"></i>
                                </label>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col col-md-6 offset-md-3">
                                <button type="submit" class="col btn btn-elegant botao-auth">
                                    Cadastre-se
                                </button>
                            </div>
                        </div>

                        <div class="col col-md-10 offset-md-1">
                            <exibir-campanhas/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
document.getElementById("imagem-perfil").onchange = function() {
    let span = document.getElementById("nome-imagem-perfil"),
        label = document.getElementById("label-adicionar-foto-perfil");

    try {
        span.innerHTML = '<i class="fas fa-paperclip"></i> ' + this.files[0].name;
        label.innerHTML = 'Alterar foto <i class="fas fa-paperclip"></i>'
    } catch(erro) {
        alert(mensagemDeErro);
    }
};
</script>
@endsection
