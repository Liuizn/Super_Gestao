{{ $slot }}
<form action={{ route('site.contato') }} method="POST">
    @csrf
    <input type="text" value='{{ old('nome')}}' name="nome" placeholder="Nome" class={{ $classe }}>
    @if ($errors->has('nome'))
        {{$errors->first('nome')}}
    @endif
    <br>

    <input type="text" value='{{ old('telefone')}}' name="telefone" placeholder="Telefone" class={{ $classe }}>
    {{$errors->has('telefone') ? $errors->first('telefone') : ''}}
    <br>

    <input type="text" value='{{ old('email')}}' name="email" placeholder="E-mail" class={{ $classe }}>
    {{$errors->has('email') ? $errors->first('email') : ''}}
    <br>

    <select class={{ $classe }} name="motivo_contatos_id">
        <option value="">Qual o motivo do contato?</option>
        
        @foreach ($motivo_contatos as $key => $motivo)
            <option value="{{$motivo->id}}" {{ old('motivo_contatos_id') == $motivo->id ? 'selected' : ''}}>{{$motivo->motivo_contato}}</option>
        @endforeach
    </select>
    {{$errors->has('motivo_contatos_id') ? $errors->first('motivo_contatos_id') : ''}}
    <br>
    
    <textarea value='{{ old('mensagem')}}' name="mensagem" placeholder="Preencha aqui a sua mensagem" class={{ $classe }}></textarea>
    {{$errors->has('mensagem') ? $errors->first('mensagem') : ''}}    
    <br>
    
    <button type="submit" class={{ $classe }}>ENVIAR</button>
</form>

@if ($errors->any())
    <div style="position:absolute; top:0px; left:0px; width:100%; background-color:red;">
        
        @foreach ($errors->all() as $erro)
            {{$erro}}<br>
        @endforeach

    </div>
@endif
