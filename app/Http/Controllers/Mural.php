<?php

namespace App\Http\Controllers;

use App\Mural as ModelMural;
use App\Http\Controllers\ImagemHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class Mural extends Controller
{
    public function index()
    {
        $campanhas = ModelMural::all()->toJson();

        return view('mural.index', [
            'campanhas' => $campanhas,
        ]);
    }

    public function nova(Request $request)
    {
        $usuario = \Auth::user();

        $campanha = new ModelMural();

        $requestImagem = $request->file('imagem-campanha');

        try {
            DB::beginTransaction();

            $campanha->titulo = $request->input('titulo-campanha');
            $campanha->subtitulo = $request->input('subtitulo-campanha');
            $campanha->id_criador = $usuario->id;
            $campanha->texto = $request->input('texto-campanha');
            $campanha->imagem = $requestImagem
                ? (new ImagemHelper)->salvarImagem($requestImagem)
                : null;

            $campanha->save();

            DB::commit();
        } catch(\Exception $e) {
            Log::error($e);
        }

        return redirect()->back();
    }
}
