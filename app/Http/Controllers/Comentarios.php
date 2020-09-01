<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publicacoes as ModelPublicacoes;
use App\Comentarios as ModelComentarios;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class Comentarios extends Controller
{
    public function index($idPublicacao)
    {
        $usuario = \Auth::user();

        $publicacao = ModelPublicacoes::where('id', $idPublicacao)
            ->first()
            ->toJson();

        $comentarios = ModelComentarios::where('id_publicacao', $idPublicacao)
            ->get()
            ->toJson();

        return view('linha-do-tempo.comentarios', [
            'publicacao' => $publicacao,
            'comentarios' => $comentarios
        ]);
    }

    public function novo(Request $request, $idPublicacao)
    {
        $usuario = \Auth::user();

        $comentario = new ModelComentarios;
        $publicacao = ModelPublicacoes::where('id', $idPublicacao)->first();

        try {
            DB::beginTransaction();

            $comentario->id_criador = $usuario->id;
            $comentario->id_publicacao = $publicacao->id;
            $comentario->nome_criador = $usuario->name;
            $comentario->texto = $request->input('comentario');

            $comentario->save();

            DB::commit();
        } catch (\Exception $e) {
            Log::error($e);
        }

        return $this->index($idPublicacao);
    }
}
