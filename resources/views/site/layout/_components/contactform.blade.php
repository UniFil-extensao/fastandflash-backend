<form action={{route('site.contato')}} method = "POST">
    @csrf
    <input name = "nome" type="text" placeholder="Nome" class={{ $border }}>
    <br>
    <input name = "telefone" type="text" placeholder="Telefone" class={{ $border }}>
    <br>
    <input name = "email" type="text" placeholder="E-mail" class={{ $border }}>
    <br>
    <select class={{ $border }}>
        <option value="0">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    <textarea class={{ $border }}>Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class={{ $border }}>ENVIAR</button>
</form>