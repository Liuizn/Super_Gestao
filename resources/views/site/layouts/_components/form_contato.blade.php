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
        
        @foreach ($motivo_contatos as $key => $motivo)
            <option value="{{$key}}" {{ old('motivo_contato') == $key ? 'selected' : ''}}>{{$motivo}}</option>
        @endforeach
    </select>
    <br>
    
    <textarea value='{{ old('mensagem')}}' name="mensagem" placeholder="Preencha aqui a sua mensagem" class={{ $classe }}></textarea>
    <br>
    <button type="submit" class={{ $classe }}>ENVIAR</button>
</form>
