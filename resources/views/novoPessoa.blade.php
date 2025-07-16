@extends('layout')
@section('content')
<div>
    <form action="{{route('gravarNovoPessoa')}}" method='POST'>
        @csrf
        <div>
            <label for='nomePessoa'>Digite o nome</label>
            <input name='nomePessoa' type="text">
        </div>

        <div>
            <label for='notaPessoa'>Digite a nota (0 a 5)</label>
            <input name='notaPessoa' type="number" min='0' max='5'>
        </div>
        
        <button type='submit'>Adicionar</button>

    </form>
</div>
@endsection