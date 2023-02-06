<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Visualização de Funcionário') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form>
                        @csrf
                        <fieldset disabled>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group col-md-12 mb-4">
                                        <label> Nome </label>
                                        <input class="form-control rounded" value="{{$obj->name}}">
                                    </div>
                                    <div class="form-group col-md-12 mb-4">
                                        <label> E-mail </label>
                                        <input class="form-control rounded" value="{{$obj->email}}">
                                    </div>
                                    <div class="form-group col-md-12 mb-4">
                                        <label> Telefone </label>
                                        <input class="form-control rounded" value="{{$obj->telefone}}">
                                    </div>

                                    <hr>


                                    <div class="form-group col-md-12 mb-4 my-4">
                                        <label> Cidade </label>
                                        <input class="form-control rounded" value="{{$obj->getRelation('endereco')->cidade}}">
                                    </div>
                                    <div class="form-group col-md-12 mb-4 my-4">
                                        <label> Bairro </label>
                                        <input class="form-control rounded" value="{{$obj->getRelation('endereco')->bairro}}">
                                    </div>
                                    <div class="form-group col-md-12 mb-4 my-4">
                                        <label> Rua </label>
                                        <input class="form-control rounded" value="{{$obj->getRelation('endereco')->rua}}">
                                    </div>
                                    <div class="form-group col-md-12 mb-4 my-4">
                                        <label> Número </label>
                                        <input class="form-control rounded" value="{{$obj->getRelation('endereco')->numero}}">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
