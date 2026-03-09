<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = Fornecedor::all();
        return view('fornecedores.index', compact('fornecedores'));
    }

    public function create()
    {
        return view('fornecedores.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'telefone' => 'required',
            'endereco' => 'required',
            'cnpj' => 'required|unique:fornecedores' // CNPJ é obrigatório e deve ser único na tabela fornecedores
        ]);

        Fornecedor::create($request->all());

        return redirect()->route('fornecedores.index');
    }

    public function show(Fornecedor $fornecedor)
    {
        return view('fornecedores.show', compact('fornecedor'));
    }

    public function edit(Fornecedor $fornecedor)
    {
        //
    }

    public function update(Request $request, Fornecedor $fornecedor)
    {
        //
    }

    public function destroy(Fornecedor $fornecedor)
    {
        //
    }
}