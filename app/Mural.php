<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mural extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'titulo',
        'subtitulo',
        'id_criador',
        'texto',
        'imagem',
    ];
}
