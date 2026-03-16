<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

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
            'cnpj' => 'required|unique:fornecedores',
            'telefone' => 'required',
            'email' => 'required|email',
            'endereco' => 'required'
        ]);

        Fornecedor::create($request->all());

        return redirect()->route('fornecedores.index')
        ->with('success','Fornecedor cadastrado!');
    }

    public function edit(Fornecedor $fornecedore)
    {
        return view('fornecedores.edit', ['fornecedor' => $fornecedore]);
    }

    public function update(Request $request, Fornecedor $fornecedore)
    {
        $request->validate([
            'nome' => 'required',
            'cnpj' => 'required',
            'telefone' => 'required',
            'email' => 'required|email',
            'endereco' => 'required'
        ]);

        $fornecedore->update($request->all());

        return redirect()->route('fornecedores.index')
        ->with('success','Fornecedor atualizado!');
    }

    public function destroy(Fornecedor $fornecedore)
    {
        $fornecedore->delete();

        return redirect()->route('fornecedores.index')
        ->with('success','Fornecedor removido!');
    }

}