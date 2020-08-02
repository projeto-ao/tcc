<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publicacoes as ModelPublicacoes;

class linhaDoTempo extends Controller
{
    public function index()
    {
        $publicacoes = ModelPublicacoes::all()->toJson();

        return view('linha-do-tempo.index', [
            'publicacoes' => $publicacoes,
        ]);
    }
}
