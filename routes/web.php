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

Route::get('/', function () {
    return view('index');
});

Route::get('/cadastrar', function(){
    return view('admin.cadastrar');
});

Route::get('/perfil', function(){
    return view('admin.perfil');
});

Route::get('/inbox', function(){
    return view('admin.inbox');
});

Auth::routes();

Route::get('/login', function() {
    return view('admin.login');
});

Route::get('/home', 'HomeController@index')->name('home');
