<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
</head>
<body>
<h1>Novo Pedido</h1>

<a href="{{ route('pedidos.index') }}">Voltar</a>

<form action="{{ route('pedidos.store') }}" method="POST">

@csrf

<input type="text" name="numero" placeholder="Número do pedido">

<input type="text" name="cliente" placeholder="Cliente">

<input type="text" name="produto" placeholder="Produto">

<input type="number" name="quantidade" placeholder="Quantidade">

<input type="date" name="data_pedido">

<select name="status">

<option value="aberto">Aberto</option>
<option value="em_producao">Em produção</option>
<option value="entregue">Entregue</option>
<option value="cancelado">Cancelado</option>

</select>

<button type="submit">Salvar</button>

</form>
</body>
</html>