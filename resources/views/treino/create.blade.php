<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro de treino') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form onkeydown="return event.key != 'Enter';" action="{{route('treino.store')}}" method="POST">
                        @csrf

                        <div class="form-group">

                            <label class="form-label">Selecione um aluno</label>
                            <input class="form-control" list="datalistOptions" name="aluno" placeholder="Digite para pesquisar..." required>
                            <datalist id="datalistOptions">
                                @foreach($alunos as $aluno)
                                    <option value="{{$aluno->id}} | {{$aluno->nome}}"></option>
                                @endforeach
                            </datalist>

                            <div class="py-2">
                                <label>Instrutor</label>
                                <input readonly value="{{Auth::user()->id}} | {{Auth::user()->name}}" name="funcionario" class="form-control rounded" required>
                            </div>

                            <div class="py-2">
                                <label for="disabledTextInput">Inicio</label>
                                <input type="datetime-local" name="inicio" value="{{\Carbon\Carbon::now()}}" class="form-control rounded" required>
                            </div>

                            <div class="py-2">
                                <label for="disabledTextInput">Fim</label>
                                <input type="datetime-local" name="fim" value="{{\Carbon\Carbon::now()}}" class="form-control rounded" required>
                            </div>

                            <div class="py-2">
                                <label for="disabledTextInput">Valor</label>
                                <input type="number" value="10" step="0.01" name="valor" class="form-control rounded" required>
                            </div>

                        </div>
                        <button class="btn btn-primary" type="submit">Cadastrar Treino</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
