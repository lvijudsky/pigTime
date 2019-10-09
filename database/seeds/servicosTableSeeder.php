<?php

use Illuminate\Database\Seeder;
use App\Servico;

class servicosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $s = new Servico();
        
        $s->nome = 'Passear com cachorro';
        $s->descricao = 'Tenho um labrador de 50kg ele ama correr e morder o dono';
        $s->endereco = 'Rua Bartolomeo Bon, 269';
        $s->horaInicial = '2019-10-09 11:20:00';
        $s->horaFinal = '2019-10-09 12:20:00';
        $s->rg = '23.236.643-3';
        $s->status = 'Active';
        $s->avaliacao = null;

        $s->save();
    }
}
