<?php

namespace App\Http\Controllers;

use App\Models\Estoque;
use Illuminate\Http\Request;

class EstoqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $estoques = Estoque::all();
    return view('estoques.index', compact('estoques'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('estoques.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'produto' => 'required|string|max:255',
            'codigo' => 'required|unique:estoques',
            'quantidade' => 'required|integer',
            'preco' => 'required|numeric',
            'tamanho' => 'required',
            'cor' => 'required'
        ]);

        Estoque::create($request->all());

        return redirect()->route('estoques.index')
            ->with('success', 'Produto adicionado ao estoque!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Estoque $estoque)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Estoque $estoque)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Estoque $estoque)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estoque $estoque)
    {
        //
    }
}
