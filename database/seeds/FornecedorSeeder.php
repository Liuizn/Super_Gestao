<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fornecedor = new Fornecedor();
     
        $fornecedor->nome = 'Tania Artesanatos';
        $fornecedor->site = 'taniaartesantos.com.br';
        $fornecedor->uf = 'MG';
        $fornecedor->email = 'tania.artesantos@gmail.com.br';

        $fornecedor->save();

        Fornecedor::create(array(
            'nome'  => 'Luiz Transportes',
            'site'  => 'luiztransportes.com',
            'uf'    => 'MG',
            'email' => 'luiz.transportes@gmail.com'
        ));
    }
} 
