<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class suppliersController extends Controller
{
    public function index(){
        $suppliers = [
           0 => [
            'nome' => 'Fornecedor 1', 
            'status' => 'N', 
            'CNPJ' => '000.000.000/000-00'],

            1 => [
                'nome' => 'Fornecedor 2', 
                'status' => 'S', 
                ]
        ];
        return view('app.suppliers.index', compact('suppliers'));
    }
}
