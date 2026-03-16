<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        return view('produtos.index', compact('produtos'));
    }

    public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'nullable',
            'quantidade' => 'required|integer',
            'preco' => 'required|numeric'
        ]);

        Produto::create($request->all());

        return redirect()->route('produtos.index')
        ->with('success','Produto criado com sucesso');
    }

    public function edit(Produto $produto)
    {
        return view('produtos.edit', compact('produto'));
    }

    public function update(Request $request, Produto $produto)
    {
        $request->validate([
            'nome' => 'required',
            'quantidade' => 'required|integer',
            'preco' => 'required|numeric'
        ]);

        $produto->update($request->all());

        return redirect()->route('produtos.index')
        ->with('success','Produto atualizado');
    }

    public function destroy(Produto $produto)
    {
        $produto->delete();

        return redirect()->route('produtos.index')
        ->with('success','Produto excluído');
    }
}