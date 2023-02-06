<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edição de Treino') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{route('treino.update', ['treinoID' => $obj->id])}}" method="POST">
                        @csrf
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group col-md-12 mb-4">
                                        <label> Nome do Aluno </label>
                                        <input disabled class="form-control rounded" value="{{$obj['_aluno']->nome}}">
                                    </div>
                                    <div class="form-group col-md-12 mb-4">
                                        <label> Telefone do aluno </label>
                                        <input disabled class="form-control rounded" value="{{$obj['_aluno']->telefone}}">
                                    </div>

                                    <hr class="my-3">

                                    <div class="form-group col-md-12 mb-4 ">
                                        <label> Nome do Instrutor </label>
                                        <input disabled class="form-control rounded" value="{{$obj['_funcionario']->name}}">
                                    </div>
                                    <div class="form-group col-md-12 mb-4">
                                        <label> Telefone do Instrutor </label>
                                        <input disabled class="form-control rounded" value="{{$obj['_funcionario']->telefone}}">
                                    </div>

                                    <hr class="my-3">

                                    <div class="form-group col-md-12 mb-4 ">
                                        <label> Inicio </label>
                                        <input name="inicio" class="form-control rounded" value="{{$obj->inicio}}">
                                    </div>
                                    <div class="form-group col-md-12 mb-4">
                                        <label> Fim </label>
                                        <input name="fim" class="form-control rounded" value="{{$obj->fim}}">
                                    </div>
                                    <div class="form-group col-md-12 mb-4">
                                        <label> Valor </label>
                                        <input name="valor" class="form-control rounded" value="{{$obj->valor}}">
                                    </div>

                                </div>
                            </div>
                        <button type="submit" class="btn btn-primary">Confirmar edição</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
