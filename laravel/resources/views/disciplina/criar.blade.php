@extends('base')

@section('titulo', 'Sua Faculdade - Criar Disciplina')

@section('conteudo')

<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <form>
      <div class="form-group">
        <strong>Nome da Disciplina:</strong>
        <input type="text" class="form-control" id="nome" placeholder="">

        <strong>Descrição:</strong>
        <input type="text" class="form-control" id="descricao" placeholder="">

        <strong>Código:</strong>
        <input type="text" class="form-control" id="codigo" placeholder="">

        <strong>Semestre:</strong>
        <input type="text" class="form-control" id="semestre" placeholder="">

        <strong>Carga Horária:</strong>
        <input type="text" class="form-control" id="carga_horaria" placeholder="">
      </div>
      <br>
      <center>
        <button type="submit" class="btn btn-success btn-lg ">Salvar
          <span class="glyphicon glyphicon-ok" aria-hidden="true">
        </button>
          <button type="submit" class="btn btn-danger btn-lg">Cancelar
            <span class="glyphicon glyphicon-remove" aria-hidden="true">
          </button>
      </center>
    </form>
  </div>
</div>

@endsection
