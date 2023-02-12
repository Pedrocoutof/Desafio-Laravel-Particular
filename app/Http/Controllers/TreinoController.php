<?php

namespace App\Http\Controllers;

use App\Models\Alunos;
use App\Models\Treino;
use App\Http\Requests\StoreTreinoRequest;
use App\Http\Requests\UpdateTreinoRequest;
use Illuminate\Support\Facades\Auth;

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
//        dd($treino);
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
            'id_funcionario' => explode(" ", $request->funcionario)[0],
            'id_aluno' =>  explode(" ", $request->aluno)[0],
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
    public function show($treinoID)
    {
        return view('treino.show', ['obj' => Treino::with(['_aluno', '_funcionario'])->findOrFail($treinoID)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Treino  $treino
     * @return \Illuminate\Http\Response
     */
    public function edit($treinoID)
    {
        $this->authorize('update', Treino::findOrFail($treinoID));
        return view('treino.edit', ['obj' => Treino::with(['_aluno', '_funcionario'])->findOrFail($treinoID)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTreinoRequest  $request
     * @param  \App\Models\Treino  $treino
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTreinoRequest $request, $treinoID)
    {
        $treino = Treino::findOrFail($treinoID);
        $this->authorize('update', $treino);
        $treino->update($request->all());
        return redirect()->route('treinos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Treino  $treino
     * @return \Illuminate\Http\Response
     */
    public function destroy($treinoID)
    {
        $treino = Treino::findOrFail($treinoID);
        $this->authorize('delete', $treino);
        $treino->delete();

        return redirect()->route('treinos');
    }

    public function json(){
        $treino = Treino::with(['_aluno', '_funcionario'])->get();
        dd($treino);
    }
}
