<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('index');
});

Route::get('/cadastrar', function(){
    return view('cadastrar');
});

Route::get('/login', function() {
    return view('login');
});

Route::get('/perfil', function(){
    return view('admin.perfil');
});

Route::get('/inbox', function(){
    return view('admin.inbox');
});

Route::get('/servicos', function(){
    return view('admin.servicos');
});

// Definindo as rotas para o CRUD de produtos
Route::get		('/servicos',			'servicosController@index'	)->middleware('auth'); // <--- LISTAR OS SERVICOS CADASTRADOS
Route::get		('/servicos/create',	'servicosController@create'	); // <--- MOSTRAR UM FORMULÁRIO PARA CRIAR UM NOVO SERVICO
Route::get		('/servicos/{id}/edit',	'servicosController@edit'	); // <--- MOSTRAR UM FORMULÁRIO PARA ALTERAR UM NOVO SERVICO
Route::get		('/servicos/{id}',		'servicosController@show'	); // <--- MOSTRAR UM ÚNICO SERVICO COM SEUS DETALHES E OPÇÕES - VERMAIS
Route::post		('/servicos',			'servicosController@store'	); // <--- CRIAR UM SERVICO (REDIRECIONAR PARA A LISTA...)
Route::put		('/servicos/{id}',		'servicosController@update'	); // <--- ALTERAR UM SERVICO (REDIRECIONA PARA A LISTA...)
Route::delete	('/servicos/{id}',		'servicosController@destroy'); // <--- REMOVE UM SERVICO (REDIRECIONA PARA A LISTA...)
Route::get      ('/user/servicos', 'servicosController@userindex'); // <-- MOSTRA OS SERVICOS ASSOCIADOS AO USUARIO

Route::post('/regUser','Auth\RegisterController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

