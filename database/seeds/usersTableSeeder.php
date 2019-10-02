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
        $u->telefone-1 = '1138150932';
        $u->telefone-2 = '1138150940';
    }
}
