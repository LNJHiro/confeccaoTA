<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Editar Fornecedor</h1>

<a href="{{ route('fornecedores.index') }}">Voltar</a>

<form action="{{ route('fornecedores.update', ['fornecedore' => $fornecedor->id]) }}" method="POST">

@csrf
@method('PUT')

<input type="text" name="nome" value="{{ $fornecedor->nome }}">

<input type="text" name="cnpj" value="{{ $fornecedor->cnpj }}">

<input type="text" name="telefone" value="{{ $fornecedor->telefone }}">

<input type="email" name="email" value="{{ $fornecedor->email }}">

<input type="text" name="endereco" value="{{ $fornecedor->endereco }}">

<button type="submit">Atualizar</button>

</form>
</body>
</html>