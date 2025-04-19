<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => null
            ],

            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S'
            ]
        ];

        /*
        condicao ? se verdade : se falso;
        condicao ? se verdade (condicao ? se verdade : se falso);
        */
        echo isset($fornecedores[1]['cnpj']) ? 'CNPJ informado' : "CNPJ nao informado";

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
