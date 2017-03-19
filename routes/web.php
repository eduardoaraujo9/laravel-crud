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
    return view('welcome');
});
Route::get('teste', function () {
    return view('teste')->with('teste','essa é uma mensagem de teste');
});

Route::get('verifica/xis', function () {
    return view('teste')->with('teste','essa é uma mensagem de teste verificada! X');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('clientes', 'ClientesController@index');
Route::get('clientes/novo', 'ClientesController@novo');
Route::post('clientes/salvar', 'ClientesController@salvar');
Route::get('clientes/{cliente}/editar', 'ClientesController@editar');
Route::patch('clientes/{cliente}', 'ClientesController@atualizar');
Route::delete('clientes/{cliente}', 'ClientesController@excluir');

