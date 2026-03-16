<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Novo Produto</h1>

    <a href="{{ route('produtos.index') }}">Voltar</a>

    <form action="{{ route('produtos.store') }}" method="POST">
        @csrf

        <input type="text" name="nome" placeholder="Nome do produto">

        <input type="text" name="descricao" placeholder="Descrição">

        <input type="number" name="quantidade" placeholder="Quantidade">

        <input type="text" name="preco" placeholder="Preço">

        <button type="submit">Salvar</button>

    </form>
    
</body>
</html>