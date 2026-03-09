<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque</title>
</head>
<body>
    <h1>Novo Produto no Estoque</h1>

<a href="{{ route('estoques.index') }}">Voltar</a>

<form action="{{ route('estoques.store') }}" method="POST">
    @csrf

    <div>
        <label>Produto</label>
        <input type="text" name="produto" required>
    </div>

    <div>
        <label>Código</label>
        <input type="text" name="codigo" required>
    </div>

    <div>
        <label>Quantidade</label>
        <input type="number" name="quantidade" required>
    </div>

    <div>
        <label>Preço</label>
        <input type="number" step="0.01" name="preco" required>
    </div>

    <div>
        <label>Tamanho</label>
        <input type="text" name="tamanho">
    </div>

    <div>
        <label>Cor</label>
        <input type="text" name="cor">
    </div>

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