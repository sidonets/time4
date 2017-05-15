<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
  public function criar()
  {
    return view('disciplina.criar');
  }
  public function listar()
  {
    $nome = 'Programação Web I';
    $descricao = 'Teórica';
    $codigo = 001;
    $semestre = 4;
    $carga_horaria = 60;

    $nome1 = 'Linguagem de Programação';
    $descricao1 = 'Teórica';
    $codigo1 = 025;
    $semestre1 = 4;
    $carga_horaria1 = 120;

    return view('disciplina.listar',
    array('nome'=> $nome , 'descricao'=>$descricao, 'codigo'=>$codigo, 'semestre'=>$semestre, 'carga_horaria'=>$carga_horaria,
    'nome1'=> $nome1 , 'descricao1'=>$descricao1, 'codigo1'=>$codigo1, 'semestre1'=>$semestre1, 'carga_horaria1'=>$carga_horaria1
  )
);
}
public function salvar()
{
  return view('disciplina.salvar');
}
public function editar()
{
  return view('disciplina.editar');
}
public function excluir()
{
  return view('disciplina.excluir');
}
}
