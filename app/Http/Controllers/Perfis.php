<?php

namespace App\Http\Controllers;

use App\Publicacoes as ModelPublicacoes;
use App\User as ModelUsuario;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Perfis extends Controller
{
    public function index(request $request, $id)
    {
        $usuario = \Auth::user();

        $seguindo = explode(',', $usuario->seguindo);

        $perfil = ModelUsuario::where('id', $id)
            ->first();

        $publicacoes = ModelPublicacoes::where(
            function ($query) use ($id) {
                $query->where('id_criador', $id)
                    ->where('id_compartilhador', null);
            })
            ->orWhere('id_compartilhador', $id)
            ->get()
            ->toJson();

        return view('perfis.index', [
            'perfil' => $perfil,
            'publicacoes' => $publicacoes,
            'usuario' => $usuario,
            'seguindo' => $seguindo,
        ]);
    }

    public function seguir($id)
    {
        $usuario = \Auth::user();

        $seguir = is_null($usuario->seguindo)
            ? "{$id}"
            : "{$usuario->seguindo},{$id}";

        try {
            DB::beginTransaction();

            $usuario ->seguindo = $seguir;

            $usuario->save();

            DB::commit();
        } catch(\Exception $e) {
            Log::error($e);
        }

        return redirect()->back();
    }

    public function sair()
    {
        return redirect(route('pagina-inicial'))->with(\Auth::logout());
    }
}
