<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publicacoes as ModelPublicacoes;
use App\User as ModelUsuario;

class Perfis extends Controller
{
    public function index(request $request, $idUsuario)
    {
        $perfil = ModelUsuario::where('id', $idUsuario)
            ->first();

        $publicacoes = ModelPublicacoes::where(
            function ($query) use ($idUsuario) {
                $query->where('id_criador', $idUsuario)
                    ->where('id_compartilhador', null);
            })
            ->orWhere('id_compartilhador', $idUsuario)
            ->get()
            ->toJson();

        return view('perfis.index', [
            'perfil' => $perfil,
            'publicacoes' => $publicacoes,
        ]);
    }

    public function sair()
    {
        return redirect(route('pagina-inicial'))->with(\Auth::logout());
    }
}
