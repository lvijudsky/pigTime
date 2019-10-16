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
        
        $s->nome = 'Passear com cachorro Grande';
        $s->descricao = 'Tenho um labrador de 50kg ele ama correr e morder o dono';
        $s->CEP = '01307-000';
        $s->endereco = 'Rua Frei Caneca';
        $s->numero = '444';
        $s->bairro = 'Consoloção';
        $s->UF = 'SP';
        $s->complemento = 'Ap 64';
        $s->horaInicial = '2019-10-09 11:20:00';
        $s->horaFinal = '2019-10-09 12:20:00';
        $s->id_dono = '2';
        $s->status = 'Active';
        $s->avaliacao = 'teste';

        $s->save();

        $s = new Servico();
        
        $s->nome = 'Passear com cachorro Grande';
        $s->descricao = 'Tenho um labrador de 50kg ele ama correr e morder o dono';
        $s->CEP = '01307-000';
        $s->endereco = 'Rua Frei Caneca';
        $s->numero = '444';
        $s->bairro = 'Consoloção';
        $s->UF = 'SP';
        $s->complemento = 'Ap 64';
        $s->horaInicial = '2019-10-09 11:20:00';
        $s->horaFinal = '2019-10-09 12:20:00';
        $s->id_dono = '1';
        $s->status = 'Active';
        $s->avaliacao = 'teste';

        $s->save();
    }
}
