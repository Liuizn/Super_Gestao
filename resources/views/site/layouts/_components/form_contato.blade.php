{{ $slot }}
<form action={{ route('site.contato') }} method="POST">
    @csrf
    <input type="text" name="nome" placeholder="Nome" class={{ $classe }}>
    <br>
    <input type="text" name="telefone" placeholder="Telefone" class={{ $classe }}>
    <br>
    <input type="text" name="e_mail" placeholder="E-mail" class={{ $classe }}>
    <br>
    <select class={{ $classe }} name="motivo_contato">
        <option value="">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    
    <textarea name="mensagem" placeholder="Preencha aqui a sua mensagem" class={{ $classe }}></textarea>
    <br>
    <button type="submit" class={{ $classe }}>ENVIAR</button>
</form>
