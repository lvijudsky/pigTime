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

    protected $dateFormat = 'Y-m-d H:i:s';

    protected $dates = [
        'horaInicial',
        'horaFinal'
    ];

    protected $attributes = [
        'rg' => '00.000.000-0',
        'status' => 'Active',
    ];

}
