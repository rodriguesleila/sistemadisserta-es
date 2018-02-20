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

Route::get('lista','DissertacoesController@lista');
Route::get('/detalhar','DissertacoesController@detalhar');
Route::get('/editar/{id}','DissertacoesController@editar');
Route::post('/atualiza','DissertacoesController@atualiza');
Route::get('/deletar/{id}','DissertacoesController@deletar');
Route::post('/cadastro', 'DissertacoesController@cadastro');
Route::get('/listapublico', 'DissertacoesController@publico');
Route::get('/formulario', 'DissertacoesController@formulario');
Route::get('pesquisar','DissertacoesController@pesquisar');
Route::post('pesquisar','DissertacoesController@pesquisar');
Route::get('pesquisarlista','DissertacoesController@pesquisarlista');
Route::post('pesquisarlista','DissertacoesController@pesquisarlista');
   Route::auth();
Route::get('/', 'HomeController@index');
