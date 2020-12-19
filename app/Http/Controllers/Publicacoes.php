<?php

namespace App\Http\Controllers;

use App\User as ModelUsuarios;
use App\Publicacoes as ModelPublicacoes;
use App\Events\AtualizaLinhaDoTempo;
use App\Http\Controllers\ImagemHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;


class Publicacoes extends Controller
{
    public function nova(Request $request)
    {
        $usuario = \Auth::user();

        $publicacao = new ModelPublicacoes();

        $requestImagem = $request->file('imagem');

        try {
            DB::beginTransaction();

            $publicacao->id_criador = $usuario->id;
            $publicacao->texto = $request->input('texto');
            $publicacao->imagem = $requestImagem
                ? (new ImagemHelper)->salvarImagem($requestImagem)
                : null;

            $publicacao->save();

            DB::commit();
        } catch(\Exception $e) {
            Log::error($e);
        }

        event(new AtualizaLinhaDoTempo($publicacao));

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

    public function apagar($idPublicacao)
    {
        $publicacao = ModelPublicacoes::where('id', $idPublicacao)->first();

        try {
            DB::beginTransaction();

            if ($publicacao->compartilhamentos > 0) {
                $publicacoesFilhas = ModelPublicacoes::
                    where('id_publicacao_original', $idPublicacao)
                    ->get();

                foreach($publicacoesFilhas as $publicacaoFilha) {
                    $publicacaoFilha->delete();
                }
            }

            $publicacao->delete();

            DB::commit();
        } catch(\Exception $e) {
            Log::error($e);
        }
    }

    public function compartilhar($idPublicacao)
    {
        $usuario = \Auth::user();

        $publicacaoOriginal = ModelPublicacoes::where('id', $idPublicacao)
            ->first();
        $novaPublicacao = new ModelPublicacoes();

        try {
            DB::beginTransaction();

            $publicacaoOriginal->compartilhamentos += 1;

            $novaPublicacao->id_criador = $publicacaoOriginal->id_criador;
            $novaPublicacao->texto = $publicacaoOriginal->texto;
            $novaPublicacao->id_publicacao_original = $publicacaoOriginal->id;
            $novaPublicacao->id_compartilhador = $usuario->id;

            if ($publicacaoOriginal->imagem !== null) {
                $novaPublicacao->imagem = $publicacaoOriginal->imagem;
            }

            $publicacaoOriginal->save();
            $novaPublicacao->save();

            DB::commit();
        } catch(\Exception $e) {
            Log::error($e);
        }

        event(new AtualizaLinhaDoTempo($novaPublicacao));
    }

    public function obterPublicacoes()
    {
        $usuario = \Auth::user();

        $seguindo = explode(',', $usuario->seguindo);

        return ModelPublicacoes::whereIn('id_criador', $seguindo)
            ->orWhereIn('id_compartilhador', $seguindo)
            ->orWhere('id_criador', $usuario->id)
            ->orWhere('id_compartilhador', $usuario->id)
            ->get()
            ->toJson();
    }

    public function obterCriadorECompartilhador(Request $request)
    {
        $idCriador = $request->input('id_criador');
        $idCompartilhador = $request->input('id_compartilhador');

        $criador = ModelUsuarios::where('id', $idCriador)->first();
        $compartilhador = ModelUsuarios::where('id', $idCompartilhador)->first();

        return response()->json([
            'criador' => $criador,
            'compartilhador' => $compartilhador
        ]);
    }
}
