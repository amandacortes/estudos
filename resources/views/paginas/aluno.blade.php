@extends('layout')

@section('header')
<title>Alunos</title>
@stop('header')




@section('content')
				
		<button type="">Adicionar aluno</button>
		<table class="table table-striped table-bordered table-hover ">
			<thead>
				<tr>
					<td><b>ra</b></td>
					<td><b>nome</b></td>
					<td><b>nome da mae</b>
				</tr>
			</thead>
			<tbody>

				<?php foreach ($alunos as $aluno): ?>
					<tr>
						<td><a href=" {{ action('AlunoController@show', [$aluno->id] )}} ">{{ $aluno->ra }}</a></td>
						<td>{{ $aluno->name }}</td>
						<td>{{ $aluno->nomeMae }}</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
@stop('content')
