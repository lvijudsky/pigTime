<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    /**
     * Acessar o id dos donos do serviço
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    protected $dates = [
        'horaInicial',
        'horaFinal'
    ];
}
