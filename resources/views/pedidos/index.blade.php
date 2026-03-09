<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
</head>
<body>
    <h1>Lista de Pedidos</h1>

<a href="{{ route('pedidos.create') }}">Novo Pedido</a>

@if(session('success'))
<p style="color:green;">
    {{ session('success') }}
</p>
@endif

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>ID</th>
            <th>Número</th>
            <th>Cliente</th>
            <th>Produto</th>
            <th>Quantidade</th>
            <th>Data</th>
            <th>Status</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($pedidos as $pedido)
        <tr>
            <td>{{ $pedido->id }}</td>
            <td>{{ $pedido->numero }}</td>
            <td>{{ $pedido->cliente }}</td>
            <td>{{ $pedido->produto }}</td>
            <td>{{ $pedido->quantidade }}</td>
            <td>{{ $pedido->data_pedido }}</td>
            <td>{{ $pedido->status }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
    
</body>
</html>