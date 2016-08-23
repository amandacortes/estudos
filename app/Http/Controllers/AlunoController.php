<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Aluno;

// use Illuminate\Http\Request;
use Request;

class AlunoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//retorna todos os campos e todos os registros
		$alunos = Aluno::all();

		//se eu der um echo de alunos ele vai me retornar em json

		return view('paginas.aluno', ['alunos'=>$alunos] ); //retorna a pagina que está em resources/paginas/views/about.blade.php
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$aluno = new Aluno();
		return view('paginas.detalheAluno',['aluno'=>$aluno]);


	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Request::all();

		$aluno = new Aluno();

		$aluno->ra = $input['ra'];
		$aluno->name = $input['nome'];
		$aluno->nomeMae = $input['nomeMae'];
		$aluno->save();


		return redirect('alunos');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$aluno = Aluno::find($id);
		return view('paginas.detalheAluno',['aluno'=>$aluno]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
