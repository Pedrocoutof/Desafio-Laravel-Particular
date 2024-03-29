<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="row">
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Cadastre um novo aluno!</h5>
                                    <div class="py-2"></div>
                                    <a href="/aluno/cadastrar" class="btn btn-primary">Cadastrar</a>
                                </div>
                            </div>
                            <div class="card my-4">
                                <div class="card-body">
                                    <h5 class="card-title">Cadastre um novo treino!</h5>
                                    <div class="py-2"></div>
                                    <a href="/treino/cadastrar" class="btn btn-primary">Cadastrar</a>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-9">
                            
                            <div id='calendar'></div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
