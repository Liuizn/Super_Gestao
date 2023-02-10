<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(string $p1, string $p2)
    {
        echo "Nome: {$p1}, SobreNome: {$p2}";
    }
}
