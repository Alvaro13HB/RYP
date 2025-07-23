@extends('layout')
@section('content')
<div class="flex justify-center items-center min-h-screen-minus-navbar-footer">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md"> 
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Editar Pessoa</h2>
        
        <form action="/pessoas/{{$dados->id}}" method="POST" class="space-y-4">
            @csrf
            
            <div>
                <label for="nomePessoa" class="block text-gray-700 text-sm font-bold mb-2">Nome:</label>
                <input type="text" name="nomePessoa" value="{{$dados->nomePessoa}}" 
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                       placeholder="Digite o nome da pessoa">
            </div>
            
            <div>
                <label for="notaPessoa" class="block text-gray-700 text-sm font-bold mb-2">Nota (0 a 5):</label>
                <input type="number" name="notaPessoa" value="{{$dados->notaPessoa}}" min="0" max="5"
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                       placeholder="Ex: 4">
            </div>
            
            <div class="flex justify-between items-center mt-6">
                <button type="submit" class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline flex-grow mr-2">
                    Salvar
                </button>
                <button type="button" onclick="window.location.href='{{route('indexPessoas')}}';" class="bg-gray-400 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline flex-grow ml-2">
                    Cancelar
                </button>
            </div>
        </form>
    </div>
</div>

<style>
    
    .min-h-screen-minus-navbar-footer {
        min-height: calc(100vh - 126px);
    }
</style>
@endsection