<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0 => [
                'nome' => 'Carlinhos', 
                'status' => 'Ativo', 
                'cnpj' => '71.665.968/0001-85'
            ],
            1 => [
                'nome' => 'Josesinho', 
                'status' => 'Inativo', 
                'cnpj' => ''
            ]
        ];
        
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}