<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estoque;

class EstoqueController extends Controller
{

    public function index()
    {
        $estoques = Estoque::all();
        return view('estoques.index', compact('estoques'));
    }

    public function create()
    {
        return view('estoques.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'produto' => 'required',
            'codigo' => 'required',
            'quantidade' => 'required|integer',
            'preco' => 'required|numeric',
            'tamanho' => 'required',
            'cor' => 'required'
        ]);

        Estoque::create($request->all());

        return redirect()->route('estoques.index');
    }

    public function edit(Estoque $estoque)
    {
        return view('estoques.edit', compact('estoque'));
    }

    public function update(Request $request, Estoque $estoque)
    {
        $request->validate([
            'produto' => 'required',
            'codigo' => 'required',
            'quantidade' => 'required|integer',
            'preco' => 'required|numeric',
            'tamanho' => 'required',
            'cor' => 'required'
        ]);

        $estoque->update($request->all());

        return redirect()->route('estoques.index');
    }

    public function destroy(Estoque $estoque)
    {
        $estoque->delete();

        return redirect()->route('estoques.index');
    }
}