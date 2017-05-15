@extends('base')

@section('titulo', 'Sua Faculdade - Listar Disciplina')

@section('conteudo')
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <center align="middle">
      <table width='100%' class="table table-bordered">
        <thead>
          <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Código da Disciplina</th>
            <th>Semestre</th>
            <th>Carga Horária</th>
            <th colspan="2">Opções</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{$nome}}</td>
            <td>{{$descricao}}</td>
            <td>{{$codigo}}</td>
            <td>{{$semestre}}</td>
            <td>{{$carga_horaria}}</td>
            <td><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></td>
            <td><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></td>
          </tr>
          <tr>
            <td>{{$nome1}}</td>
            <td>{{$descricao1}}</td>
            <td>{{$codigo1}}</td>
            <td>{{$semestre1}}</td>
            <td>{{$carga_horaria1}}</td>
            <td><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></td>
            <td><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></td>
          </tr>
        </tbody>
      </table>
    </center>
  </div>
</div>

</div>


@endsection
