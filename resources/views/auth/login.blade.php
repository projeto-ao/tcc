@extends('layouts.principal')

@section('titulo', 'Login')

@section('css')
@endsection

@section('conteudo')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Entrar</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Senha">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col col-md-6 offset-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">Manter-me conectado</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col col-md-6 offset-md-3">
                                <button type="submit" class="col btn btn-elegant botao-auth">
                                    Entrar
                                </button>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col col-md-6 offset-md-3">
                                @if (Route::has('password.request'))
                                    <a class="col btn btn-link" href="{{ route('password.request') }}">
                                        Esqueceu-se da sua senha?
                                    </a>
                                @endif
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
