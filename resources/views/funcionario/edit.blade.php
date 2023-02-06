<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edição de Funcionário') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{route('funcionario.update', ['funcionarioID' => $obj->id])}}">
                        @csrf
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group col-md-12 mb-4">
                                        <label> Nome </label>
                                        <input name="name" class="form-control rounded" value="{{$obj->name}}">
                                    </div>
                                    <div class="form-group col-md-12 mb-4">
                                        <label> E-mail </label>
                                        <input name="email"  class="form-control rounded" value="{{$obj->email}}">
                                    </div>
                                    <div class="form-group col-md-12 mb-4">
                                        <label> Telefone </label>
                                        <input name="telefone"  class="form-control rounded" value="{{$obj->telefone}}">
                                    </div>

                                    <hr>


                                    <div class="form-group col-md-12 mb-4 my-4">
                                        <label> Cidade </label>
                                        <input name="cidade"  class="form-control rounded" value="{{$obj->getRelation('endereco')->cidade}}">
                                    </div>
                                    <div class="form-group col-md-12 mb-4 my-4">
                                        <label> Bairro </label>
                                        <input  name="bairro" class="form-control rounded" value="{{$obj->getRelation('endereco')->bairro}}">
                                    </div>
                                    <div class="form-group col-md-12 mb-4 my-4">
                                        <label> Rua </label>
                                        <input name="rua" class="form-control rounded" value="{{$obj->getRelation('endereco')->rua}}">
                                    </div>
                                    <div class="form-group col-md-12 mb-4 my-4">
                                        <label> Número </label>
                                        <input name="numero" class="form-control rounded" value="{{$obj->getRelation('endereco')->numero}}">
                                    </div>
                                </div>
                            </div>
                        <button class="btn btn-primary" type="submit"> Confirmar </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
