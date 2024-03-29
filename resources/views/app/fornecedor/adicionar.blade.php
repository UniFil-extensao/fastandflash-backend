@extends('app.layouts.basic_lay')
@section('tittle', 'Fornecedor')
@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <p>Fornecedor - Adicionar<p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('app.fornecedor.adicionar') }}">Novo</a></li>
                <li><a href="{{ route('app.fornecedor') }}">Consulta</a></li>
            </ul>
        </div>

        <div class="infomacao-pagina2">
            <div style="width: 30%; margin-left: auto; margin-right: auto">
                {{ $resposta ?? ' ' }}
            <form method="post" action="{{ route('app.fornecedor.adicionar') }}">
                <input type="hidden" name="id" value="{{ $fornecedor->id ?? '' }}">
                @csrf
                <input type="text" name="nome" value="{{ $fornecedor->nome ?? old('nome') }}" placeholder="Nome" class="borda-preta">
                @if ($errors->has('nome'))
                {{ $errors->first('nome') }}
                @endif
                <input type="text" name="site" value="{{ $fornecedor->site ?? old('site') }}" placeholder="Site" class="borda-preta">
                @if ($errors->has('site'))
                {{ $errors->first('site') }}
                @endif
                <input type="text" name="uf" value="{{ $fornecedor->uf ?? old('uf') }}" placeholder="UF" class="borda-preta">
                @if ($errors->has('uf'))
                {{ $errors->first('uf') }}
                @endif
                <input type="text" name="email" value="{{ $fornecedor->email ?? old('email') }}" placeholder="Email" class="borda-preta">
                @if ($errors->has('email'))
                {{ $errors->first('email') }}
                @endif
                <button type="submit" class="borda-preta">Cadastrar</button>
            </form>
            </div>
        </div>
    </div>
@endsection