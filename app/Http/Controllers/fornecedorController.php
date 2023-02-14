<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPUnit\Framework\returnValue;

class fornecedorController extends Controller
{
    public function index()
    {
        $fornecedor =
            [
                0 => [
                    'nome' => 'Fornecedor 1',
                    'status' => 'N',
                    'cnpj' => '00.000.000/000-00',
                    'ddd' => '11', //São paulo (SP)
                    'telefone' => '0000-0000'
                ],
                1 => [
                    'nome' => 'Fornecedor 2',
                    'status' => 'A',
                    'cnpj' => null,
                    'ddd' => '85', //Fortaleza (CE)
                    'telefone' => '0000-0000'
                ],
                2 => [
                    'nome' => 'Fornecedor 2',
                    'status' => 'A',
                    'cnpj' => null,
                    'ddd' => '32', //Juiz de Fora (MG)
                    'telefone' => '0000-0000'
                ]


                 //condição ? se for true : se for false
            ];
        return view('app.fornecedor.index', compact('fornecedor'));
    }
}
