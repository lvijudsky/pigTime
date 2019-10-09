<?php

use Illuminate\Database\Seeder;

class servicos extends Seeder
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
        $s->endereco = 'Rua Bartolomeo Bon';
        $s->horaInical = '150308820-06';
        $s->horaFinal = 'm';
        $s->rg = 'sergiodhh@hotmail.com';
        $s->status = '';
        $s->avaliacao = 'Sao Sebastiao';

        $s->save();
    }
}
