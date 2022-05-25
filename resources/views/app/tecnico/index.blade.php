@extends('app.layouts.basic_lay')
@section('tittle', 'Fornecedor')
@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <p>Tecnicos<p>
        </div>

        <div class="infomacao-pagina2">
            <div style="width: 90%; margin-left: auto; margin-right: auto">
                </div>        
                <table style="width: 100%; border-collapse:collapse">
                    <thead>
                        <tr style="background-color: rgb(110, 110, 110)">
                            <th>Nome</th>
                            <th>Email</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody style="background-color: #ccc">
                        @foreach($tecnicos as $tecnico)
                        <tr>
                            <td>{{ $tecnico->name }}</td>
                            <td>{{ $tecnico->email }}</td>
                            <td><a>Excluir</a></td>
                            <td><a href="{{ route('app.tecnico.editar', $tecnico->id) }}">Editar</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="menu">
                    <ul>
                    <button>
                        <li><a href="{{ route('app.tecnico.adicionar') }}">Novo</a></li>
                    </button>
                </ul>
            </div>
        </div>
    </div>
@endsection