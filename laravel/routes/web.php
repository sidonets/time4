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
Route::get('/', 'Controller@login');
Route::get('/perfis', 'Controller@perfis');

Route::group(['prefix' => 'ppc'], function(){
  Route::get('listar', function(){});
  Route::get('criar', function(){});
  Route::get('editar/{id}', function($id) {});
  Route::get('salvar', function(){
  return redirect('ppc/listar');
});

Route::group(['prefix' => 'disciplina'], function(){
  route::get('/', 'DisciplinaController@criar');
  route::get('criar', 'DisciplinaController@criar');
  route::get('/listar', array('uses'=>'DisciplinaController@listar'));
  route::get('salvar', 'DisciplinaController@salvar');
  route::get('editar', 'DisciplinaController@editar');
  route::get('excluir', 'DisciplinaController@excluir');
});
