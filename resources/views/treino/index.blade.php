<x-app-layout>
    @push('scripts')
    @endpush

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Treinos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <input  class="form-control rounded" type="text" id="inputSearch" onkeyup="searchTable()" placeholder="Pesquisar por nome..">

                    <div class="table-responsive my-3">
                        <table id="tabela" class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th>Aluno</th>
                                <th>Instrutor</th>
                                <th>Data</th>
                                <th>Opções</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($arrayObj as $obj)
                                <tr>
                                    <td>{{$obj->id}}</td>
                                    <td>{{$obj['_aluno']->nome}}</td>
                                    <td>{{$obj['_funcionario']->name}}</td>
                                    <td>{{$obj->inicio}}</td>

                                    <td>
                                        <a href="/treino/visualizar/{{$obj['id']}}" class="btn btn-primary">visualizar</a>
                                        <a href="/treino/editar/{{$obj['id']}}" class="btn btn-warning">Editar</a>
                                        <a href="/treino/excluir/{{$obj['id']}}" class="btn btn-danger">Excluir</a>
                                    </td>

                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
