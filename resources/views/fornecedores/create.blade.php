<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Novo Fornecedor</title>
</head>
<body>
    <h1>Novo Fornecedor</h1>

<a href="{{ route('fornecedores.index') }}">Voltar</a>

<form action="{{ route('fornecedores.store') }}" method="POST">
    @csrf

    <div>
        <label>Nome</label>
        <input type="text" name="nome" required>
    </div>

    <div>
        <label>CNPJ</label>
        <input type="text" name="cnpj" required>
    </div>

    <div>
        <label>Telefone</label>
        <input type="text" name="telefone" required>
    </div>

    <div>
        <label>Email</label>
        <input type="email" name="email" required>
    </div>

    <div>
        <label>Endereço</label>
        <input type="text" name="endereco" required>
    </div>

    <button type="submit">Salvar</button>

</form>

{{-- Mostrar erros de validação --}}
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