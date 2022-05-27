@extends('app.layouts.basic_lay')
@section('tittle', 'tecnico')
@section('content')
    <div class="conteudo-pagina">
        <div style="border-radius: 50px" class="titulo-pagina">
            <p>Tecnico<p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('app.tecnico') }}">Ver Todos</a></li>
            </ul>
        </div>

        <div class="infomacao-pagina2">
            <div style="width: 60%; margin-left: auto; margin-right: auto">
                {{ $resposta ?? ' ' }}
            <form method="post" action="{{ route('app.tecnico.adicionar') }}">
                <div class="row mb-3">
                   <input type="hidden" name="id" value="{{ $tecnicos->id ?? '' }}">
                   @csrf
                   <label style="padding: 1rem 0em 0 1em" for="nameinput" class="col-sm-2 col-form-label">Nome</label>
                   <div class="col-sm-10">
                   <input type="text" class="form-control" name="name" id="nameinput" value="{{ $tecnicos->name ?? old('name') }}" class="borda-preta">
                   @if ($errors->has('name'))
                   {{ $errors->first('name') }}
                   @endif
                   </div>
                </div>
                <div class="row mb-3">
                    <label style="padding: 1rem 0em 0 1em" for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                   <input type="email" class="form-control" id="inputEmail3" name="email" value="{{ $tecnicos->email ?? old('email') }}" class="borda-preta">
                   @if ($errors->has('email'))
                   {{ $errors->first('email') }}
                   @endif
                    </div>
                </div>
                <div class="row mb-3">
                    <label style="padding: 1rem 0em 0 1em" for="inputPassword3" class="col-sm-2 col-form-label">Senha</label>
                    <div class="col-sm-10">
                   <input type="password" class="form-control" id="inputPassword3" name="password" value="{{ $tecnicos->password ?? old('password') }}"class="borda-preta">
                   @if ($errors->has('password'))
                   {{ $errors->first('password') }}
                   @endif
                    </div>
                </div>
                <fieldset style="padding: 2rem 0em 0 1em" class="row mb-3">
                    <div style="width: 30%; margin-left: auto; margin-right:auto" class="col-sm-10">
                      <div class="form-check">
                        <input style="padding: 10px 10px 10px 10px" class="form-check-input" type="radio" name="tip_acess" id="gridRadios1" value="0" checked>
                        <label class="form-check-label" for="gridRadios1">
                            Acesso Padrão
                        </label>
                      </div>
                      <div class="form-check">
                        <input style="padding: 10px 10px 10px 10px" class="form-check-input" type="radio" name="tip_acess" id="gridRadios2" value="1">
                        <label class="form-check-label" for="gridRadios2">
                          Administrador
                        </label>
                      </div>
                    </div>
                </fieldset>
                   <button style="width: 30%" type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
            </div>
        </div>
    </div>
@endsection