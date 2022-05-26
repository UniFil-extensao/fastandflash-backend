@extends('site.layout.basic_lay')
@section('tittle','Login')
@section('content')
        <div class="conteudo-pagina">
            <div style="border-radius:50px"class="titulo-pagina">
                <h1>Login</h1>
            </div>

            <div class="informacao-pagina">
                <div style="width:30%; margin-left: auto; margin-right: auto">
                <form action="{{ route('site.login') }}" method="post">
                    @csrf
                    <input name="usuario" value="{{ old('usuario')}}" type="text" placeholder="Usuário" class="borda-preta">
                    @if ($errors->has('usuario'))
                        {{$errors->first('usuario')}}
                    @endif
                    <input name="senha" value="{{ old('senha')}}" type="password" placeholder="Senha" class="borda-preta">
                    @if ($errors->has('senha'))
                        {{$errors->first('senha')}}
                    @endif
                    <button type="submit" class="borda-preta">
                        Login
                    </button>
                </form>
                {{ $erro }}
            </div>
            </div>  
        </div>
    </div>
@endsection