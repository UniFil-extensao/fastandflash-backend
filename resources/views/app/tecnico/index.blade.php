@extends('app.layouts.basic_lay')
@section('tittle', 'Fornecedor')
@section('content')
    <div class="conteudo-pagina">
        <div style="border-radius:50px" class="titulo-pagina">
            <p>Tecnicos<p>
        </div>

        <div style="height: 5%">

        </div>
        <div style="margin-left: 15%; margin-right:15%" class="infomacao-pagina2">
            <div style="width: 90%; margin-left: auto; margin-right: auto">
                </div>        
                <table class="table">
                    <thead>
                        <tr style="background-color: #006BA6">
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tecnicos as $tecnico)
                        <tr>
                            <td>{{ $tecnico->id }}</td>
                            <td>{{ $tecnico->name }}</td>
                            <td>{{ $tecnico->email }}</td>
                            <td><a>Excluir</a></td>
                            <td>
                                <a href="{{ route('app.tecnico.editar', $tecnico->id) }}">Editar</a>
                            </td>
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