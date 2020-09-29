<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Publicacoes extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_criador',
        'nome_criador',
        'texto',
        'imagem',
        'curtidas',
        'compartilhamentos',
        'id_publicacao_original',
        'id_compartilhador',
        'nome_compartilhador',
        'comentarios',
    ];

}
