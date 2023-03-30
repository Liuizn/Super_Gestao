@extends('site.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Login</h1>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                <form action={{ route('site.login') }} method="post">
                    @csrf
                    <input type="text" name="usuario" placeholder="Usuário" class="borda-preta" value="{{ old('usuario') }}">
                    {{ $errors->has('usuario') ? $errors->first('usuario') : '' }}
                    
                    <input type="password" name="senha" placeholder="Senha" class="borda-preta" value="{{ old('senha') }}">
                    {{ $errors->has('senha') ? $errors->first('senha') : '' }}
                    
                    <button type="submit" class="borda-preta">Acessar</button>
                </form>
                {{ isset($erro) && empty($erro) === false ? $erro : '' }}
            </div>
        </div>  
    </div>
@endsection