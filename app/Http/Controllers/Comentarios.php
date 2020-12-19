<?php

namespace App\Http\Controllers;

use App\Publicacoes as ModelPublicacoes;
use App\Comentarios as ModelComentarios;
use App\Events\AtualizaListaDeComentarios;
use Illuminate\Http\Request;
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

        return view('comentarios.index', [
            'publicacao' => $publicacao,
            'comentarios' => $comentarios
        ]);
    }

    public function novo(Request $request)
    {
        $usuario = \Auth::user();

        $comentario = new ModelComentarios;
        $publicacao = ModelPublicacoes::where('id', $request->input('idPublicacao'))->first();

        try {
            DB::beginTransaction();

            $comentario->id_criador = $usuario->id;
            $comentario->id_publicacao = $publicacao->id;
            $comentario->nome_criador = $usuario->name;
            $comentario->texto = $request->input('comentario');
            $publicacao->comentarios += 1;

            $comentario->save();
            $publicacao->save();

            DB::commit();
        } catch (\Exception $e) {
            Log::error($e);
        }

        event(new AtualizaListaDeComentarios($comentario));
    }
}
