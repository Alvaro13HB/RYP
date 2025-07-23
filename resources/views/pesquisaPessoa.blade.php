@extends('layout')
@section('content')
<div class="flex justify-center items-center min-h-screen-minus-navbar-footer">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Pesquisar Pessoa</h2>
        <form action="{{route('procurarPessoa')}}" method="GET" class="space-y-4">
            @csrf
            <div>
                <label for="nomePessoa" class="block text-gray-700 text-sm font-bold mb-2">Nome da Pessoa:</label>
                <input type="text" id="nomePessoa" name="nomePessoa" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                placeholder="Digite o nome de quem você procura">
            </div>
            <div class="flex justify-between items-center mt-6">
                <button type="submit" class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full" >Pesquisar</button>
                <button onclick='window.location.href="{{route('indexPessoas')}}";' type="button" class="bg-gray-400 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline flex-grow ml-2">
                    Cancelar
                </button>
            </div>
        </form>
    </div>
</div>
@endsection