@extends('layout')

@section('header')
<title>Laragvel</title>
@stop('header')

@section('content')
		<div class="container">
			<div class="content">
				<?php foreach ($pessoas as $pessoa): ?>
					<div class="title">{{ $pessoa }}</div>
				<?php endforeach ?>
			</div>
		</div>

@stop('content')
