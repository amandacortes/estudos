@extends('layout')

@section('header')
<title>Alunos</title>
@stop('header')




@section('content')
				
<!-- 		<form>
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
		</form> -->


	{!! Form::open(['url'=>'alunos']) !!}		

		<div class="form-group">
			{!! Form::label('id', 'Id:') !!}
			{!! Form::text('id', null, ['class'=>'form-control']) !!}
		</div>	
		
		<div class="form-group">
			{!! Form::label('ra', 'Ra:') !!}
			{!! Form::text('ra', null, ['class'=>'form-control']) !!}
		</div>	
		
		<div class="form-group">
			{!! Form::label('nome', 'Nome:') !!}
			{!! Form::text('nome', null, ['class'=>'form-control']) !!}
		</div>	
		

		<div class="form-group">
			{!! Form::label('nomeMae', 'Nome da mãe:') !!}
			{!! Form::text('nomeMae', null, ['class'=>'form-control', 'placeholder'=>'Nome da mae']) !!}
		</div>	

		<div class="form-group">
			{!! Form::submit('Adicionar', ['class'=>'btn btn-primary form-control']) !!}
		</div>	
				

	
	{!! Form::close() !!}			



@stop('content')
