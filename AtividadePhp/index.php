<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credenciais</title>
</head>
<body>
    <h1>Cadastro do Funcionário</h1>
    <form action="cadastro.php" method="post">
        <p>Id do Funcionário: <input type="number" name="id"></p>
        <p>Nome do Funcionário: <input type="text" name="nome"></p>
        <p>Cargo do Funcionário: <input type="text" name="cargo"></p>
        <p>Salário: <input type="number" name="sal"></p>
        <p>Dependentes: <input type="number" name="depen"></p>
        <button type="submit">Cadastrar Funcionário</button>
    </form>
</body>
</html>