<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicosController extends Controller
{
    public function index() {

        // Carregar os serviços do banco de dados
        $servicos = Servico::all();
        // Carregar os serviços em linha do tempo infitina ?

        // Retornar a view com os serviços
        return view(
            'admin.servicos',compact('servicos')
            // função compact passa a variavel $servicos para a view
        )
    }

    public function show($id) {
        // Carrega o serviço do banco de dados
        // Comando FIND(encontrar)igual o SQL
        $servico = Servico::find($id);
    }
}
