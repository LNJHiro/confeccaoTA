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

    <input type="text" name="numero">
    <input type="text" name="cliente">
    <input type="text" name="produto">
    <input type="number" name="quantidade">
    <input type="date" name="data_pedido">

    <select name="status">
        <option value="pendente">Pendente</option>
        <option value="em_producao">Em produção</option>
        <option value="entregue">Entregue</option>
    </select>

    <button type="submit">Salvar</button>
</form>

@if ($errors->any())
<div style="color:red;">
    <ul>
        @foreach ($errors->all() as $erro)
            <li>{{ $erro }}</li>
        @endforeach
    </ul>
</div>
@endif
    
</body>
</html>