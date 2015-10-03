<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/erro', 'ErroController@mostrarErro');
Route::any('/erro', 'ErroController@mostrarErro');

Route::any('/testamentos/insert', 'TestamentoController@insert');
Route::any('/testamentos/find/{id?}', 'TestamentoController@find');
Route::any('/testamentos/erase/{id}', 'TestamentoController@erase');
//Route::any('/testamentos/update/{id}', 'TestamentoController@update');
Route::any('testamentos/update/{id}', array('as' => 'testamento.update', 'uses' => 'TestamentoController@update'));

Route::any('/batismo/insert', 'BatismoController@insert');
Route::any('/batismo/find/{id?}', 'BatismoController@find');
Route::any('/batismo/erase/{id}', 'BatismoController@erase');
Route::any('/batismo/update/{id}', array('as' => 'batismo.update', 'uses' => 'BatismoController@update'));