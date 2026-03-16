<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar Estoque</h1>

<a href="{{ route('estoques.index') }}">Voltar</a>

<form action="{{ route('estoques.update',$estoque->id) }}" method="POST">

@csrf
@method('PUT')

<input type="text" name="produto" value="{{ $estoque->produto }}">

<input type="text" name="codigo" value="{{ $estoque->codigo }}">

<input type="number" name="quantidade" value="{{ $estoque->quantidade }}">

<input type="text" name="preco" value="{{ $estoque->preco }}">

<input type="text" name="tamanho" value="{{ $estoque->tamanho }}">

<input type="text" name="cor" value="{{ $estoque->cor }}">

<button type="submit">Atualizar</button>

</form>
    
</body>
</html>