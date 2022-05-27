@extends('app.layouts.basic_lay')
@section('tittle', 'Fornecedor')
@section('content')
    <div class="conteudo-pagina">
        <div style="border-radius:50px;" class="titulo-pagina">
            <p>Tecnicos<p>
        </div>

        <div style="height: 5%">

        </div>
        <div style="margin-left: 15%; margin-right:15%" class="infomacao-pagina2">
            <div style="width: 90%; margin-left: auto; margin-right: auto">
                <table class="table table-hover">
                    <thead>
                        <tr style="background-color: rgb(124, 170, 255)">
                            <th scope="col">Id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tecnicos as $tecnico)
                        <tr>
                            <th scope="row">{{ $tecnico->id }}</th>
                            <td>{{ $tecnico->name }}</td>
                            <td>{{ $tecnico->email }}</td>
                            <td>
                                <a style="color: black" href="{{ route('app.tecnico.editar', $tecnico->id) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                    </svg>
                                </a>
                            </td>
                            <td>
                                <a style="color: red" href="{{ route('app.tecnico.excluir', $tecnico->id) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="menu">
                    <ul>
                    <button class="btn btn-primary">
                        <li><a style="color: white" href="{{ route('app.tecnico.adicionar') }}">Novo</a></li>
                    </button>
                </ul>
            </div>
        </div>
    </div>
@endsection