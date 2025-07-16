@extends("layout")
@section("content")
<div>
    @if(session()->get('danger'))
        <div>
            {{session()->get('danger')}}
        </div><br />
    @elseif(session()->get('success'))
        <div>
            {{session()->get('success')}}
        </div><br />
    @endif

    <div>
        <h5>Avaliação de Pessoas</h5>
        
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Nota</th>
                    <th colspan="2">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dados as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nomePessoa}}</td>
                    <td>{{$item->notaPessoa}}</td>
                    <td>
                        <a href="/pessoas/editar/{{$item->id}}">Editar</a>
                    </td>
                    <td>
                        <a href="/pessoas/apagar/{{$item->id}}" onclick="return confirm('Tem certeza?');">Excluir</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection