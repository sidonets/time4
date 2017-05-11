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
Route::group(['prefix' => 'ppc'], function(){
  Route::get('listar', function(){});
  Route::get('criar', function(){});
  Route::get('editar/{id}', function($id) {});
  Route::get('salvar', function(){
  return redirect('ppc/listar');
});

Route::get('/', function () {
    return view('welcome');
});
