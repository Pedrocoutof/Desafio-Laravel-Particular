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
                    <form action="{{route('aluno.update', $obj->$primary_key)}}" method="POST">
                        @csrf
                        <div class="form-group">
                            @foreach($arrayObj as $item)
                                <div class="py-2">
                                    <label for="disabledTextInput">{{$item['label']}}</label>
                                    <input name="{{$item['nameAttribute']}}" type="text" id="disabledTextInput" class="form-control rounded" value="{{$obj[$item['nameAttribute']]}}">
                                </div>
                            @endforeach


                            @foreach($arrayRelations as $item)
                                <div class="py-2">
                                    <label for="disabledTextInput">{{$item['label']}}</label>
                                    <input name="{{$item['nameAttribute']}}" type="text" id="disabledTextInput" class="form-control rounded" value="{{$obj['alunosEndereco']}}">
                                </div>
                            @endforeach
                        </div>

                        <button class="btn btn-primary" type="submit">Confirmar alterações</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
