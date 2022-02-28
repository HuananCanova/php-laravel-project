<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Básico</title>
</head>
<body>
    <div class="container">
        <h2>Editar Funcionário</h2>
        <form action="/editar-funcionario/ {{ $funcionario->id }}" method="POST">
            @csrf
            <label for="nome">Nome do Funcionário:</label>
            <input type="text" name="nome" value="{{ $funcionario->nome }}">
            <br><br>
            <label for="salario">Salário do Funcionário:</label>
            <input type="text" name="salario" value="{{ $funcionario->salario }}">
            <br>
            <button>Editar!</button>
        </form>
    </div>

</body>
</html>