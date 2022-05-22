@extends('app.layouts.basic_lay')
@section('tittle', 'Fornecedor')
@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <p>Fornecedor - Listar<p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('app.fornecedor.adicionar') }}">Novo</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="infomacao-pagina2">
            <div style="width: 30%; margin-left: auto; margin-right: auto">
                Listar
            </div>
        </div>
    </div>
@endsection