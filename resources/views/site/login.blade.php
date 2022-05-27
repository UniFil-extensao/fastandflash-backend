@extends('site.layout.basic_lay')
@section('tittle','Login')
@section('content')
        <div class="conteudo-pagina">
            <div style="border-radius:50px" class="titulo-pagina">
                <h1>Login</h1>
            </div>

            <div style="height: 4%"></div>

            <div class="informacao-pagina">
                <div style="width:20em; margin-left: auto; margin-right: auto">
                <form action="{{ route('site.login') }}" method="post">
                    @csrf
                    <input name="usuario" value="{{ old('usuario')}}" type="text" placeholder="Usuário" class="borda-preta">
                    @if ($errors->has('usuario'))
                        <p class="bg-danger">{{$errors->first('usuario')}}</p>
                    @endif
                    <input name="senha" value="{{ old('senha')}}" type="password" placeholder="Senha" class="borda-preta">
                    @if ($errors->has('senha'))
                        <p class="bg-danger">{{$errors->first('senha')}}</p>
                    @endif
                    <div style="height: 2rem"></div>
                    <div style="width: 5em; margin-left:auto; margin-right:auto">
                        <button type="submit" class="btn btn-primary">
                            Login
                        </button>                            
                    </div>
                </form>
                {{ $erro }}
            </div>
            </div>  
        </div>
    </div>
@endsection