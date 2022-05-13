<form action={{route('site.contato')}} method = "POST">
    @csrf
    <input name = "nome" value="{{ old('nome') }}" type="text" placeholder="Nome" class={{ $border }}>
    <br>
    <input name = "telefone" value="{{ old('telefone') }}" type="text" placeholder="Telefone" class={{ $border }}>
    <br>
    <input name = "email" value="{{ old('email') }}" type="text" placeholder="E-mail" class={{ $border }}>
    <br>
    <select name= "motivo_contato" class={{ $border }}>
        <option value="">Qual o motivo do contato?</option>
        @foreach ($motivo_contatos as $key=>$motivo_contato)
            <option value="{{ $key }}">{{ $motivo_contato }}</option>
        @endforeach
    </select>
    <br>
    <textarea name = "mensagem" class={{ $border }}>@if( old('mensagem') != ''){{ old('mensagem') }}@else Preencha aqui a sua mensagem
        @endif
    </textarea>
    <br>
    <button type="submit" class={{ $border }}>ENVIAR</button>
</form>