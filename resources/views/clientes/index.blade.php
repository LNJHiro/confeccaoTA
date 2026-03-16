<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>

        <h1>Clientes</h1>

    <a href="{{ route('clientes.create') }}">Novo Cliente</a>

    @if(session('success'))
    <p style="color:green;">
    {{ session('success') }}
    </p>
    @endif

    <table border="1">

    <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>CPF</th>
    <th>Email</th>
    <th>Telefone</th>
    <th>Endereço</th>
    <th>Ações</th>
    </tr>

    @foreach($clientes as $cliente)

    <tr>

        <td>{{ $cliente->id }}</td>
        <td>{{ $cliente->nome }}</td>
        <td>{{ $cliente->cpf }}</td>
        <td>{{ $cliente->email }}</td>
        <td>{{ $cliente->telefone }}</td>
        <td>{{ $cliente->endereco }}</td>

    <td>

    <a href="{{ route('clientes.edit',$cliente->id) }}">
    Editar
    </a>

    <form action="{{ route('clientes.destroy',$cliente->id) }}" method="POST">

    @csrf
    @method('DELETE')

    <button type="submit">
    Excluir
    </button>

    </form>

    </td>

    </tr>

    @endforeach

    </table>
    
</body>
</html>