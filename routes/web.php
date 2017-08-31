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
    return view('cotacao.form');
});

Route::get('/cotacao', ['uses' => 'CotacaoController@index', 'as' => 'cotacao.index']);

Route::post('/cotacao/salvar', ['uses' => 'CotacaoController@salvar', 'as' => 'cotacao.salvar']);

Route::post('/cotacao/salvarConsulta', ['uses' => 'CotacaoController@salvarConsulta', 'as' => 'cotacao.salvarConsulta']);

Route::get('/cotacao/historico', ['uses' => 'CotacaoController@historico', 'as' => 'cotacao.historico']);