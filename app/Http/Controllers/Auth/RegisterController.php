<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $data)
    {
        $user = new User;
        $user->nome = $data->nome;
        $user->sobrenome = $data->sobrenome;
        $user->rg = $data->rg;
        $user->cpf = $data->cpf;
        $user->sexo = $data->sexo;
        $user->email = $data->email;
        $user->password = Hash::make($data->password);
        $user->endereco = $data->endereco;
        $user->numero = $data->numero;
        $user->complemento = $data->complemento;
        $user->bairro = $data->bairro;
        $user->cidade = $data->cidade;
        $user->uf = $data->uf;
        $user->telefone_1 = $data->telefone_1;
        $user->telefone_2 = $data->telefone_2;
        $user->save();
        return redirect('/perfil');
    }
}
