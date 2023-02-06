<?php

namespace App\Http\Controllers;

use App\Models\Alunos;
use App\Http\Requests\StoreAlunosRequest;
use App\Http\Requests\UpdateAlunosRequest;
use App\Models\EnderecosAluno;
use http\Env\Request;

class AlunosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('aluno.index', ['arrayObj' => Alunos::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aluno.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAlunosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Alunos $request)
    {
        $newAluno = new Alunos($request->input());
        $newAluno->endereco = $newAluno->enderecoAluno()->create($request->input())->id;
        $newAluno->save();

        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alunos  $alunos
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($alunoID)
    {
        $aluno = Alunos::with('enderecoAluno')->findOrFail($alunoID);

        return view('aluno.show',['obj' => $aluno]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alunos  $alunos
     * @return \Illuminate\Http\Response
     */
    public function edit($aluno)
    {
        $aluno = Alunos::with('enderecoAluno')->findOrFail($aluno);

        return view('aluno.edit',[ 'obj' => $aluno ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAlunosRequest  $request
     * @param  \App\Models\Alunos  $alunos
     * @return \Illuminate\Http\Response
     */
    public function update(\Illuminate\Http\Request $request, $alunoID)
    {
        $aluno = Alunos::findOrFail($alunoID);
        $aluno->update($request->all());

        $endereco = EnderecosAluno::findOrFail($aluno->endereco);
        $endereco->update($request->all());

        return redirect('/aluno');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alunos  $alunos
     * @return \Illuminate\Http\Response
     */
    public function destroy($aluno)
    {
        Alunos::destroy($aluno);
        return redirect('/aluno');
    }
}
