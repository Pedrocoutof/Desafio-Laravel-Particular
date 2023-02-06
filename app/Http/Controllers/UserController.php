<?php

namespace App\Http\Controllers;

use App\Models\EnderecoUser;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funcionarios = User::where('is_admin', '0')->get();

        return view('funcionario.index', ['arrayObj' => $funcionarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($funcionarioID)
    {
        $funcionario = User::with('endereco')->findOrFail($funcionarioID);
        return view('funcionario.show', ['obj' => $funcionario]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($funcionarioID)
    {
        $funcionario = User::with('endereco')->findOrFail($funcionarioID);
        return view('funcionario.edit', ['obj' => $funcionario]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $funcionarioID)
    {
        $funcionario = User::findOrFail($funcionarioID);
        $funcionario->update($request->all());

        $endereco = EnderecoUser::findOrFail($funcionario->endereco);
        $endereco->update($request->all());

        return redirect()->route('funcionarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($funcionarioID)
    {
        User::destroy($funcionarioID);
        return redirect()->route('funcionarios');
    }
}
