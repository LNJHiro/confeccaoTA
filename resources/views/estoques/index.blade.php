<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Estoque</h1>

<a href="{{ route('estoques.create') }}">Novo Produto</a>

<table border="1">

<tr>
<th>ID</th>
<th>Produto</th>
<th>Código</th>
<th>Quantidade</th>
<th>Preço</th>
<th>Tamanho</th>
<th>Cor</th>
<th>Ações</th>
</tr>

@foreach($estoques as $estoque)

<tr>

<td>{{ $estoque->id }}</td>
<td>{{ $estoque->produto }}</td>
<td>{{ $estoque->codigo }}</td>
<td>{{ $estoque->quantidade }}</td>
<td>{{ $estoque->preco }}</td>
<td>{{ $estoque->tamanho }}</td>
<td>{{ $estoque->cor }}</td>

<td>

<a href="{{ route('estoques.edit', $estoque->id) }}">Editar</a>

<form action="{{ route('estoques.destroy',$estoque->id) }}" method="POST">

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