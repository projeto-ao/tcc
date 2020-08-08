<?php

namespace App\Http\Controllers;

use App\User as ModelUsuarios;
use App\Publicacoes as ModelPublicacoes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;


class Publicacoes extends Controller
{
    private $mensagemDeErro = "Pedimos desculpas, mas ocorreu algo de errado com nosso servidor, por favor descreva esse erro por email para ghp2201@gmail.com ou abra uma issue em nosso Github, agradeçemos pela compreensão. Atenciosamente Equipe AO.";

    public function nova(Request $request)
    {
        $usuario = \Auth::user();

        $publicacao = new ModelPublicacoes();

        try {
            DB::beginTransaction();

            $publicacao->id_criador = $usuario->id;
            $publicacao->nome_criador = $usuario->name;
            $publicacao->conteudo = $request->input('conteudo');

            $publicacao->save();

            DB::commit();
        } catch(\Exception $e) {
            Log::error($e);

            return $this->mensagemDeErro;
        }

        return redirect('linha-do-tempo');
    }

    public function curtir($idPublicacao)
    {
        $usuario = \Auth::user();

        $publicacao = ModelPublicacoes::where('id', $idPublicacao)->first();

        try {
            DB::beginTransaction();

            $publicacao->curtidas += 1;
            $publicacao->save();

            DB::commit();
        } catch(\Exception $e) {
            Log::error($e);
        }
    }
}
