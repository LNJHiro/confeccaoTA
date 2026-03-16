<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Novo Cliente</h1>

<a href="{{ route('clientes.index') }}">Voltar</a>

<form action="{{ route('clientes.store') }}" method="POST">

@csrf

<input type="text" name="nome" placeholder="Nome">

<input type="text" name="cpf" placeholder="CPF">

<input type="email" name="email" placeholder="Email">

<input type="text" name="telefone" placeholder="Telefone">

<input type="text" name="endereco" placeholder="Endereço">

<button type="submit">
Salvar
</button>

</form>
</body>
</html>