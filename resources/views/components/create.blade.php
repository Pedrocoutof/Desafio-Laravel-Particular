<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro de aluno') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form onkeydown="return event.key != 'Enter';" action="{{route('aluno.store')}}" method="POST">
                        @csrf
                            <div class="form-group">
                                @foreach($array as $item)
                                    <div class="py-2">
                                        <label for="disabledTextInput">{{$item['label']}}</label>
                                        <input type="{{$item['type']}}" name="{{$item['name']}}" class="form-control rounded" required>
                                    </div>
                                @endforeach

                                @foreach($hidden as $hidde)
                                    <input name="{{$hidde['name']}}" class="hidden" value="{{$hidde['value']}}" required>
                                @endforeach

                            </div>
                        <button class="btn btn-primary" type="submit">Cadastrar Aluno</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
