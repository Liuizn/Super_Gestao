<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\SiteContato;
use App\MotivoContato;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {

        return view('site.contato', ['motivo_contatos' => MotivoContato::all()]);
    }

    public function salvar(Request $request)
    {

        $request->validate(
            [
                'nome' => 'required|unique:site_contatos',
                'telefone' => 'required',
                'email' => 'email',
                'motivo_contatos_id' => 'required',
                'mensagem' => 'required'
            ],
            [
                'nome.required' => 'Campo nome obrigatório.',
                'nome.unique' => 'Nome já existente..',

                'required' => 'O campo :attribute precisa ser preenchido.'
            ]
        );

        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}







