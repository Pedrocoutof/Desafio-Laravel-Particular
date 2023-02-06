<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edição de aluno') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{route('aluno.update', $obj->id)}}" method="POST">
                        @csrf
                        <div class="form-group">

                            <div class="py-2">
                                <label for="disabledTextInput">Nome</label>
                                <input name="nome" type="text" class="form-control rounded" value="{{$obj['nome']}}">
                            </div>

                            <div class="py-2">
                                <label for="disabledTextInput">E-mail</label>
                                <input name="email" type="email" class="form-control rounded" value="{{$obj['email']}}">
                            </div>

                            <div class="py-2">
                                <label for="disabledTextInput">Telefone</label>
                                <input name="telefone" type="text" class="form-control rounded" value="{{$obj['telefone']}}">
                            </div>

                            <div class="py-2">
                                <label for="disabledTextInput">Data de nascimento</label>
                                <input name="data_nascimento" type="date" class="form-control rounded" value="{{$obj['data_nascimento']}}">
                            </div>

                            <div class="py-2">
                                <label for="disabledTextInput">Data de cadastro</label>
                                <input disabled type="date" class="form-control rounded" value="{{$obj['data_cadastro']}}">
                            </div>

                            <div class="py-2">
                                <label for="disabledTextInput">Data de pagamento</label>
                                <input name="data_pagamento" type="date" class="form-control rounded" value="{{$obj['data_pagamento']}}">
                            </div>

                            <div class="py-2">
                                <label for="disabledTextInput">Data de validade</label>
                                <input name="data_vencimento" type="date" class="form-control rounded" value="{{$obj['data_vencimento']}}">
                            </div>

                            <hr class="my-3">


                            <div class="py-2">
                                <label for="disabledTextInput">Cidade</label>
                                <input name="cidade" type="text" class="form-control rounded" value="{{$obj['enderecoAluno']->cidade}}">
                            </div>
                            <div class="py-2">
                                <label for="disabledTextInput">Bairro</label>
                                <input name="bairro" type="text" class="form-control rounded" value="{{$obj['enderecoAluno']->bairro}}">
                            </div>
                            <div class="py-2">
                                <label for="disabledTextInput">Rua</label>
                                <input name="rua" type="text" class="form-control rounded" value="{{$obj['enderecoAluno']->rua}}">
                            </div>
                            <div class="py-2">
                                <label for="disabledTextInput">Número</label>
                                <input name="numero" type="number" class="form-control rounded" value="{{$obj['enderecoAluno']->numero}}">
                            </div>

                        </div>
                        <button class="btn btn-primary my-3" type="submit">Confirmar alterações</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
