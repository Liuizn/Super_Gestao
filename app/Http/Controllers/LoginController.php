<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function index(Request $request)
    {
        $erro = '';

        if($request->get('erro'))
        {
            $erro = "Usuário e ou senha inexistentes.";
        }

        return view('site.login', ['titulo' => 'login', 'erro' => $erro]);
    }

    public function autenticar(Request $request)
    {
        //validações dos campos
        $regras = array(
            'usuario' => 'email',
            'senha' => 'required'
        );

        $mensagens = array(
            'usuario.email' => 'Preencha o campo E-mail!',
            'senha.required' => 'Preencha o campo senha!'
        );

        $request->validate($regras, $mensagens);

        $user = new User();

        $email = $request->get('usuario');
        $password = $request->get('senha');

        $consultaUsuario = $user->where('email', $email)->where('password', $password)->get()->first();

        if (isset($consultaUsuario->name))
        {
            echo 's';
        }
        else
        {
            return redirect()->route('site.login', ['erro' => 1]);
        }

    }
}
