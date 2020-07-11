<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicacoes extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'criador',
        'conteudo',
    ];

}
