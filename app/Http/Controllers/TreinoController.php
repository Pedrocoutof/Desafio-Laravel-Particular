<?php

namespace App\Http\Controllers;

use App\Models\Alunos;
use App\Models\Treino;
use App\Http\Requests\StoreTreinoRequest;
use App\Http\Requests\UpdateTreinoRequest;

class TreinoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $treino = Treino::with(['_aluno', '_funcionario'])->get();
        return view('treino.index', ['arrayObj' => $treino]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alunos = Alunos::all();
        return view('treino.create',['alunos' => $alunos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTreinoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTreinoRequest $request)
    {
        $treino = Treino::create([
            'id_funcionario' => $request->funcionario[0],
            'id_aluno' =>  $request->aluno[0],
            'inicio' =>  $request->inicio,
            'fim' => $request->fim,
            'valor' => $request->valor,
        ]);

        return redirect()->route('treinos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Treino  $treino
     * @return \Illuminate\Http\Response
     */
    public function show(Treino $treino)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Treino  $treino
     * @return \Illuminate\Http\Response
     */
    public function edit(Treino $treino)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTreinoRequest  $request
     * @param  \App\Models\Treino  $treino
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTreinoRequest $request, Treino $treino)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Treino  $treino
     * @return \Illuminate\Http\Response
     */
    public function destroy(Treino $treino)
    {
        //
    }
}
