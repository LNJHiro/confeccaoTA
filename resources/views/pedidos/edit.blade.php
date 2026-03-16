<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Editar Pedido</h1>

<a href="{{ route('pedidos.index') }}">Voltar</a>

<form action="{{ route('pedidos.update', $pedido->id) }}" method="POST">

@csrf
@method('PUT')

<input type="text" name="numero" value="{{ $pedido->numero }}">

<input type="text" name="cliente" value="{{ $pedido->cliente }}">

<input type="text" name="produto" value="{{ $pedido->produto }}">

<input type="number" name="quantidade" value="{{ $pedido->quantidade }}">

<input type="date" name="data_pedido" value="{{ $pedido->data_pedido }}">

<select name="status">

<option value="aberto" {{ $pedido->status == 'aberto' ? 'selected' : '' }}>
Aberto
</option>

<option value="em_producao" {{ $pedido->status == 'em_producao' ? 'selected' : '' }}>
Em produção
</option>

<option value="entregue" {{ $pedido->status == 'entregue' ? 'selected' : '' }}>
Entregue
</option>

<option value="cancelado" {{ $pedido->status == 'cancelado' ? 'selected' : '' }}>
Cancelado
</option>

</select>

<button type="submit">Atualizar</button>

</form>
    
</body>
</html>