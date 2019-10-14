<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servico;
use App\User;

class ServicosController extends Controller
{
    // MOSTRAR TODOS OS SERVICOS - '/servicos'
    public function index() {

        // Carregar os serviços do banco de dados
        $servicos = Servico::all();
        // var_dump($servicos->user());
        // exit;
        foreach ($servicos as $servico) {
            $user = User::find($servico->id_dono);
            $servico->dono = $user->nome;
            $servico->donoSobrenome = $user->sobrenome;
        }
        // Carregar os serviços em linha do tempo infitina ?

        // Retornar a view com os serviços
        return view(
            'admin.servicos',
            compact('servicos','user')
            // função compact passa a variavel $servicos para a view
        );
    }

    // MOSTRAR SERVIÇO INDIVIDUAL - '/servicos/{id}'
    public function show($id) {
        // Carrega o serviço do banco de dados
        // Comando FIND(encontrar)igual o SQL
        $servico = Servico::find($id);
        $user = User::find($servico->id_dono);

        // Retornar a view do serviço selecionado
        return view(
            'admin.servicos.show',
            compact('servico','user')
        );
    }

    // CARREGAR FORMULÁRIO EDIÇÃO SERVIÇOS
    public function edit($id){
        // Carrega o serviço do banco de dados
        // comando FIND(encontrar) igual o SQL
        $servico = Servico::find($id);

        // Retornar a view do serviço a ser editado
        return view(
            'admin.servicos.edit',
            compact('servico')
        );
    }

    // ALTERAR UM SERVIÇO - MANDAR DADOS PARA A DB
    public function update($id){

        // Validar o request
        // request -> pega o valor do campo do formulario
        request()->validate(
            [
                // $campo => $regra
                'nome' => 'required',
                'descricao' => 'required',
                'endereco' => 'required',
                'horaInicial' => 'required',
                'horaFinal' => 'required',
                'rg' => 'required',
            ]
            );
        
        // Carregando o produto da base de dados
        $servico = Servico::find($id);

        // Alterar os valores do produto
        $servico->nome = request('nome');
        $servico->descricao = request('descricao');
        $servico->endereco = request('endereco');
        $servico->horaInicial = request('horaInicial');
        $servico->horaFinal = request('horaFinal');
        $servico->rg = request('rg');

        // Salvar as alterações no banco de dados
        $servico->save();

        // Redirecionar para a lista de produtos
        return redirect('/servicos');
    }   

    // DELETAR UM SERVICO
    public function destroy($id){
        // Carregando o servico do banco de dados
        // $servico = Servico::find($id);

        // Remover elemento do Banco de Dado
        // $servico->delete();

        // Deletando o produto
        Servico::where('id',$id)->delete();

        // Redirecionar para a lista de produtos
        return back();
    }

    // MOSTRAR FORMULÁRIO CRIAÇÃO DE SERVICO
    public function create(){

        // Retornando a view
        return view(
            'admin.servicos.create'
        );
    }

    // CADASTRAR UM SERVICO - MANDAR PARA O DB
    public function store(){
        // Validar request
        // request -> pega o valor do campo do formulario
        // request()->validate(
        //     [
        //         // $campo => $regraDeValidacao
        //         'nome' => 'required',
        //         'descricao' => 'required',
        //         'endereco' => 'required',
        //         'horaInicial' => 'required',
        //         'horaFinal' => 'required',
        //     ]
        // );

        // Novo Servicos
        // var_dump(request('id_dono'));
        // exit;
        $s = new Servico;

        // Atribuindo valores ao Servico
        $s->nome = request('nome');
        $s->descricao = request('descricao');
        $s->endereco = request('endereco'). ' '. request('numero'). ' ' . request('complemento');
        $s->horaInicial = request('data').' '.request('horaInicial').':00';
        $s->horaFinal = request('data').' '.request('horaFinal').':00';
        $s->id_dono = request('id_dono');
        // Salvar o produto
        $s->save();

        return redirect(
            '/servicos'
        );

    }
}
