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
})->middleware('auth');

Route::get('/inbox', function(){
    return view('admin.inbox');
});

Route::get('/servicos', function(){
    return view('admin.servicos');
});


Route::post('/regUser','Auth\RegisterController@create');

Route::get('/logout','Auth\LoginController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

