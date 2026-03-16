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
            'numero' => 'required',
            'cliente' => 'required',
            'produto' => 'required',
            'quantidade' => 'required|integer',
            'data_pedido' => 'required|date',
            'status' => 'required'
        ]);

        Pedido::create($request->all());

        return redirect()->route('pedidos.index')
        ->with('success','Pedido criado!');
    }

    public function edit(Pedido $pedido)
    {
        return view('pedidos.edit', compact('pedido'));
    }

    public function update(Request $request, Pedido $pedido)
    {
        $request->validate([
            'numero' => 'required',
            'cliente' => 'required',
            'produto' => 'required',
            'quantidade' => 'required|integer',
            'data_pedido' => 'required|date',
            'status' => 'required'
        ]);

        $pedido->update($request->all());

        return redirect()->route('pedidos.index')
        ->with('success','Pedido atualizado!');
    }

    public function destroy(Pedido $pedido)
    {
        $pedido->delete();

        return redirect()->route('pedidos.index')
        ->with('success','Pedido excluído!');
    }

}