<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Editar Produto</h1>

<form action="{{ route('produtos.update',$produto->id) }}" method="POST">

@csrf
@method('PUT')

<input type="text" name="nome" value="{{ $produto->nome }}">

<input type="number" name="quantidade" value="{{ $produto->quantidade }}">

<input type="text" name="preco" value="{{ $produto->preco }}">

<button type="submit">
Atualizar
</button>

</form>
    
</body>
</html>