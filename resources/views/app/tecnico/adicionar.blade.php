@extends('app.layouts.basic_lay')
@section('tittle', 'tecnico')
@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <p>Tecnico - Adicionar<p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('app.tecnico') }}">Ver Todos</a></li>
            </ul>
        </div>

        <div class="infomacao-pagina2">
            <div style="width: 30%; margin-left: auto; margin-right: auto">
                {{ $resposta ?? ' ' }}
            <form method="post" action="{{ route('app.tecnico.adicionar') }}">
                <input type="hidden" name="id" value="{{ $tecnico->id ?? '' }}">
                @csrf
                <input type="text" name="name" value="{{ $tecnico->name ?? old('name') }}" placeholder="Nome" class="borda-preta">
                @if ($errors->has('name'))
                {{ $errors->first('name') }}
                @endif
                <input type="text" name="email" value="{{ $tecnico->email ?? old('email') }}" placeholder="Email" class="borda-preta">
                @if ($errors->has('email'))
                {{ $errors->first('email') }}
                @endif
                <input type="password" name="password" value="{{ $tecnico->password ?? old('password') }}" placeholder="Senha" class="borda-preta">
                @if ($errors->has('password'))
                {{ $errors->first('password') }}
                @endif
                <select name="tip_acess">
                    <option value="0" selected>Usuário Padrão</option>
                    <option value="1">Admin</option>
                </select>
                <button type="submit" class="borda-preta">Cadastrar</button>
            </form>
            </div>
        </div>
    </div>
@endsection