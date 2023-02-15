<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    
    public function index()
    {
        $fornecedor = array(
            array(
                'nome' => 'Luiz Gabriel'
            )
        );

        return view('app.fornecedor.index', compact('fornecedor'));
    }
}
