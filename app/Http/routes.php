<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Aqui fica registrado todas as todas da aplicação
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::get('/404', function(){
	return view('paginas.erro404'); //retorna a pagina que está em resources/paginas/views/about.blade.php
});


Route::get('/404', function(){
	$pessoas = ['Hugo', 'Joao', 'juca'];
	return view('paginas.dadosRota', ['pessoas'=>$pessoas] ); //retorna a pagina que está em resources/paginas/views/about.blade.php
});


Route::get('/alunos','AlunoController@index'); //vai estar em app/http/controllers
Route::get('/alunos/{id}', 'AlunoController@show');