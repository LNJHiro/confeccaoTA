<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidoController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::all();
        return view('pedidos.index', compact('pedidos'));
    }

    public function create()
    {
        return view('pedidos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'numero' => 'required|unique:pedidos',
            'cliente' => 'required',
            'produto' => 'required',
            'quantidade' => 'required|integer',
            'data_pedido' => 'required|date',
            'status' => 'required'
        ]);

        Pedido::create($request->all());

        return redirect()->route('pedidos.index')
            ->with('success', 'Pedido criado com sucesso!');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}