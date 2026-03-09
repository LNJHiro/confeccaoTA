<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all(); // busca todos os clientes
        return view('clientes.index', compact('clientes'));
    }
    
    public function create()
    {
        return view('clientes.create'); // mostra o formulário de criação de cliente
    }

    //Recebe os dados do formulário e salva no banco
    public function store(Request $request)
    {
        //1º Validação simples para evitar dados vazios ou duplicados
        $request->validate([
            'nome' => 'required|string|max:255', // nome é obrigatório e deve ser único na tabela clientes
            'cpf' => 'required|string|unique:clientes', // cpf é obrigatório e deve ser único na tabela clientes
            'email' => 'required|email|unique:clientes', // email é obrigatório, deve ser um email válido e único
            'telefone' => 'required|string', // telefone é obrigatório e deve ser único
            'endereco' => 'required|string', // endereço é obrigatório
        ]);

        //2º Salva o novo cliente
        Cliente::create($request->all());

        //3º Redireciona de volta para a lista de clientes com uma mensagem de sucesso
        return redirect()->route('clientes.index')->with('success', 'Cliente criado com sucesso!');
    }
}   
