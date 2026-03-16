<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Fornecedores</h1>

<a href="{{ route('fornecedores.create') }}">Novo Fornecedor</a>

@if(session('success'))
<p style="color:green">
{{ session('success') }}
</p>
@endif

<table border="1">

<tr>
<th>ID</th>
<th>Nome</th>
<th>CNPJ</th>
<th>Telefone</th>
<th>Email</th>
<th>Endereço</th>
<th>Ações</th>
</tr>

@foreach($fornecedores as $fornecedor)

<tr>

<td>{{ $fornecedor->id }}</td>
<td>{{ $fornecedor->nome }}</td>
<td>{{ $fornecedor->cnpj }}</td>
<td>{{ $fornecedor->telefone }}</td>
<td>{{ $fornecedor->email }}</td>
<td>{{ $fornecedor->endereco }}</td>

<td>

<a href="{{ route('fornecedores.edit', ['fornecedore' => $fornecedor->id]) }}">
Editar
</a>

<form action="{{ route('fornecedores.destroy', ['fornecedore' => $fornecedor->id]) }}" method="POST">

@csrf
@method('DELETE')

<button type="submit">Excluir</button>

</form>

</td>

</tr>

@endforeach

</table>
    
</body>
</html>