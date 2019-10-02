<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $u = new User();
        
        $u->nome = 'Sergio';
        $u->sobrenome = 'Moura';
        $u->rg = '17843047-8';
        $u->cpf = '150308820-06';
        $u->sexo = 'm';
        $u->email = 'sergiodhh@hotmail.com';
        $u->password = Hash::make('12345678');
        $u->endereco = 'Rua Sao Francisco';
        $u->numero = '862';
        $u->complemento = '';
        $u->bairro = 'Sao Sebastiao';
        $u->cidade = 'Picos';
        $u->uf = 'PI';
        $u->telefone_1 = '1138150932';
        $u->telefone_2 = '1138150940';

        $u->save();

        $u = new User();
        
        $u->nome = 'Livia Betina';
        $u->sobrenome = 'da Rocha';
        $u->rg = '23.236.643-3';
        $u->cpf = '111.224.071-30';
        $u->sexo = 'f';
        $u->email = 'livia2000@ig.com.br';
        $u->password = Hash::make('12345678');
        $u->endereco = 'Rua T';
        $u->numero = '675';
        $u->complemento = '';
        $u->bairro = 'Novo Oriente';
        $u->cidade = 'Maracanaú';
        $u->uf = 'CE';
        $u->telefone_1 = '1126109283';
        $u->telefone_2 = '85984228992';

        $u->save();
    }
}
