{{ $slot }}
<form action={{ route('site.contato') }} method="POST">
    @csrf
    <input type="text" value='{{ old('nome')}}' name="nome" placeholder="Nome" class={{ $classe }}>
    <br>
    <input type="text" value='{{ old('telefone')}}' name="telefone" placeholder="Telefone" class={{ $classe }}>
    <br>
    <input type="text" value='{{ old('email')}}' name="email" placeholder="E-mail" class={{ $classe }}>
    <br>
    <select class={{ $classe }} name="motivo_contato">
        <option value="">Qual o motivo do contato?</option>
        <option value="1" {{ old('motivo_contato') == 1 ? 'selected' : ''}}>Dúvida</option>
        <option value="2" {{ old('motivo_contato') == 2 ? 'selected' : ''}}>Elogio</option>
        <option value="3" {{ old('motivo_contato') == 3 ? 'selected' : ''}}>Reclamação</option>
    </select>
    <br>
    
    <textarea value='{{ old('mensagem')}}' name="mensagem" placeholder="Preencha aqui a sua mensagem" class={{ $classe }}></textarea>
    <br>
    <button type="submit" class={{ $classe }}>ENVIAR</button>
</form>
