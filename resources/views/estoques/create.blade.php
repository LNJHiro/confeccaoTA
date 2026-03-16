<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Novo Produto no Estoque</h1>

<a href="{{ route('estoques.index') }}">Voltar</a>

<form action="{{ route('estoques.store') }}" method="POST">

@csrf

<input type="text" name="produto" placeholder="Produto">

<input type="text" name="codigo" placeholder="Código">

<input type="number" name="quantidade" placeholder="Quantidade">

<input type="text" name="preco" placeholder="Preço">

<input type="text" name="tamanho" placeholder="Tamanho">

<input type="text" name="cor" placeholder="Cor">

<button type="submit">Salvar</button>

</form>
    
</body>
</html>