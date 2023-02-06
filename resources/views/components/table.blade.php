<x-app-layout>
    @push('scripts')
    @endpush

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de alunos') }}
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
                                @foreach($titlesTable as $title)
                                    <th scope="col">{{$title}}</th>
                                @endforeach
                                <th>Opções</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($arrayObj as $obj)
                            <tr>
                                @foreach($nameAttributes as $nameAttribute)
                                    <td>{{$obj[$nameAttribute]}}</td>
                                @endforeach

                                <td>
                                    @foreach($opcoes as $opcao)
                                        <a href="{{$opcao['href'].$obj[$primaryKey]}}" class="btn btn-{{$opcao['color']}}">{{$opcao['name']}}</a>
                                    @endforeach
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
