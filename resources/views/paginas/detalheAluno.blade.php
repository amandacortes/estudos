@extends('layout')

@section('header')
<title>Alunos</title>
@stop('header')




@section('content')
				
		<form>
		  <div class="form-group">
		    <label for="id">id</label>
		    <input type="text" class="form-control" id="id" value="{{ $aluno->id }}" placeholder="Email">
		  </div>
		  <div class="form-group">
		    <label for="ra">ra</label>
		    <input type="text" class="form-control" id="ra" value="{{ $aluno->ra }}" placeholder="text">
		  </div>
		  <div class="form-group">
		    <label for="nome">nome</label>
		    <input type="text" class="form-control" id="nome" value="{{ $aluno->name }}" placeholder="text">
		  </div>
		  <div class="form-group">
		    <label for="nome">nome da mae</label>
		    <input type="text" class="form-control" id="nome" value="{{ $aluno->nomeMae }}" placeholder="text">
		  </div>
		  

		</form>
@stop('content')
