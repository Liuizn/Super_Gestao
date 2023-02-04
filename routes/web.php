<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PrincipalController@principal');

Route::get('sobre-nos','SobreNosController@sobreNos');

Route::get('contato', 'ContatoController@contato');

Route::get('contato/{nome}/{categoria}/', function(string $nome, int $categoria)
{
    echo "Meu Contato {$nome} {$categoria}";
})->where('nome', '[A-Za-z]+')->where('categoria','[0-9]+');