@extends('app.layouts.basic_lay')
@section('tittle', 'Tecnico')
@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <p>Tecnico<p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('app.tecnico.adicionar') }}">Novo</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="infomacao-pagina2">
            <div style="width: 30%; margin-left: auto; margin-right: auto">
            <form method="post" action="{{ route('app.tecnico.listar') }}">
                @csrf
                <input type="text" name="nome" placeholder="Nome" class="borda-preta">
                <input type="text" name="site" placeholder="Site" class="borda-preta">
                <input type="text" name="uf" placeholder="UF" class="borda-preta">
                <input type="text" name="email" placeholder="Email" class="borda-preta">
                <button type="submit" class="borda-preta">Pesquisar</button>
            </form>
            </div>
        </div>
    </div>
@endsection