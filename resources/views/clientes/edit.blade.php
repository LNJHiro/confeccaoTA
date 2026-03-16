<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar Cliente</h1>

<a href="{{ route('clientes.index') }}">Voltar</a>

<form action="{{ route('clientes.update',$cliente->id) }}" method="POST">

@csrf
@method('PUT')

<input type="text" name="nome" value="{{ $cliente->nome }}">

<input type="text" name="cpf" value="{{ $cliente->cpf }}">

<input type="email" name="email" value="{{ $cliente->email }}">

<input type="text" name="telefone" value="{{ $cliente->telefone }}">

<input type="text" name="endereco" value="{{ $cliente->endereco }}">

<button type="submit">
Atualizar
</button>

</form>
    
</body>
</html>