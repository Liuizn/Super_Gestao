<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(string $p1, string $p2)
    {
        // return view('site.teste', array("x" => $p1, "y" => $p2)); // associativo
        // return view('site.teste', compact('p1', 'p2')); // associativo
        return view('site.teste', compact('p1', 'p2'))->with('p1', $p1)->with('p2', $p2); // with()
    }
}
