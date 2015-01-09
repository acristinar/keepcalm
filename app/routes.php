<?php


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

//Route::get('/erro', 'ErroController@mostrarErro');
Route::any('/erro', 'ErroController@mostrarErro');
Route::any('/testamentos/insert', 'TestamentoController@insert');
Route::any('/testamentos/find/{id?}', 'TestamentoController@find');
Route::any('/testamentos/erase/{id}', 'TestamentoController@erase');
//Route::any('/testamentos/update/{id}', 'TestamentoController@update');
Route::any('testamentos/update/{id}', array('as' => 'testamento.update', 'uses' => 'TestamentoController@update'));