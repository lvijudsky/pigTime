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
            'lastName' => ['required', 'string', 'max:255'],
            'RG' => ['required', 'string', 'max:255'],
            'CPF' => ['required', 'string', 'max:255'],
            'sexo' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'adress' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
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
        $foto = './fotos/'. $_FILES['img']['name'];
       // dd($_FILES);
    	
        if($_POST){
            
            if($_FILES['img']){
                if($_FILES['img']['error'] == 0){
                    //salvando a foto de forma descente
                    $data->file('img')->store('./fotos'.$_FILES['img']['name']);
                    //move_uploaded_file($_FILES['img']['tmp_name'],'./fotos/'.$_FILES['img']['name']);
                   //     $arquivo_def = './resources/views/fotos/'.$_FILES['img']['name'];
                }
            }
        
        }
        //$foto = 'fotos/'.$_FILES['img']['name'];
        
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
        $user->url_img = $foto; 
        
        // request()->validate([
        //     'file'  => 'required|mimes:doc,docx,pdf,txt|max:2048',
        //     ]);
            
        //     if ($files = $request->file('img')) {
        //         $destinationPath = 'app/Http/Controllers/Auth/fotos/'; // upload path
        //         $profilefile = date('YmdHis') . "." . $files->getClientOriginalExtension();
        //         $files->move($destinationPath, $profilefile);
        //         $insert['file'] = "$profilefile";
        //     }
        //    // dd($files);
            
        //     $check = Document::insertGetId($insert);
        
        $user->save();
        return redirect('/login');
    }
}
