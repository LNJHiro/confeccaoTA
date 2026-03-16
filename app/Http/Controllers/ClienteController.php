<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{

    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string|unique:clientes',
            'email' => 'required|email|unique:clientes',
            'telefone' => 'required|string',
            'endereco' => 'required|string'
        ]);

        Cliente::create($request->all());

        return redirect()->route('clientes.index')
        ->with('success','Cliente criado com sucesso!');
    }

    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'nome' => 'required',
            'cpf' => 'required',
            'email' => 'required|email',
            'telefone' => 'required',
            'endereco' => 'required'
        ]);

        $cliente->update($request->all());

        return redirect()->route('clientes.index')
        ->with('success','Cliente atualizado!');
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();

        return redirect()->route('clientes.index')
        ->with('success','Cliente excluído!');
    }

}