{{-- @if ($errors->any()) --}}
    {{-- @foreach ($errors->all() as $erro) --}}
        {{-- {{ $erro }} <br> --}}
    {{-- @endforeach     --}}
{{-- @endif --}}
<form action={{route('site.contato')}} method = "POST">
    @csrf
    <input name = "nome" value="{{ old('nome') }}" type="text" placeholder="Nome" class={{ $border }}>
    @if ($errors->has('nome'))
        {{ $errors->first('nome') }}
    @endif
    <br>
    <input name = "telefone" value="{{ old('telefone') }}" type="text" placeholder="Telefone" class={{ $border }}>
    @if ($errors->has('telefone'))
        {{ $errors->first('telefone') }}
    @endif
    <br>
    <input name = "email" value="{{ old('email') }}" type="text" placeholder="E-mail" class={{ $border }}>
    @if ($errors->has('email'))
        {{ $errors->first('email') }}
    @endif
    <br>
    <select name= "motivo_contatos_id" class={{ $border }}>
        <option value="">Qual o motivo do contato?</option>
        @foreach ($motivo_contatos as $key=>$motivo_contato)
            <option value="{{ $motivo_contato->id }}">{{ $motivo_contato->motivo_contato }}</option>
        @endforeach
    </select>
    @if ($errors->has('motivo_contatos_id'))
        {{ $errors->first('motivo_contatos_id') }}
    @endif
    <br>
    <textarea name = "mensagem" class={{ $border }}>@if( old('mensagem') != ''){{ old('mensagem') }}@else Preencha aqui a sua mensagem
        @endif
    </textarea>
    @if ($errors->has('mensagem'))
        {{ $errors->first('mensagem') }}
    @endif
    <br>
    <button type="submit" class={{ $border }}>ENVIAR</button>
</form>