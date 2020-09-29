<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagemHelper extends Controller
{
    public function salvarImagem($imagem)
    {
        $nomeImagem = date('YmdHis')."-".$imagem->getClientOriginalName();
        $imagem->move('public/uploads/', $nomeImagem);

        return $nomeImagem;
    }
}
