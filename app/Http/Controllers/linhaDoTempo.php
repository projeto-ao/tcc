<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publicacoes as ModelPublicacoes;

class linhaDoTempo extends Controller
{
    public function index()
    {
        $usuario = \Auth::user();

        $seguindo = explode(',', $usuario->seguindo);

        $publicacoes = ModelPublicacoes::whereIn('id_criador', $seguindo)
            ->orWhereIn('id_compartilhador', $seguindo)
            ->orWhere('id_criador', $usuario->id)
            ->orWhere('id_compartilhador', $usuario->id)
            ->get()
            ->toJson();

        return view('linha-do-tempo.index', [
            'publicacoes' => $publicacoes,
        ]);
    }
}
