<?php

namespace App\Http\Controllers;

use App\User as ModelUsuarios;
use App\Publicacoes as ModelPublicacoes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;


class Publicacoes extends Controller
{
    public function novaPublicacao(Request $request)
    {
        $usuario = \Auth::user();

        $publicacao = new ModelPublicacoes();

        try {
            DB::beginTransaction();

            $publicacao->criador = $usuario->id;
            $publicacao->conteudo = $request->input('conteudo');

            $publicacao->save();

            DB::commit();
        } catch(\Exception $e) {
            Log::error($e);
        }

        return redirect('linha-do-tempo');
    }
}
