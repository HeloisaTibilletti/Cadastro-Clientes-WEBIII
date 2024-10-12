<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="./styles/styles.css">
</head>

<body>
    <header>
       <h1 class="header">
            <a href="listarCliente.php" style="color: white; text-decoration: none;">PADARIA DA HELO</a>
        </h1>
    </header>

    <div class="container">
        <h3>CADASTRO DE CLIENTE</h3>
        <form method="POST" action="cadastroCliente.php">
            <p>Nome: <input type="text" name="nome" required></p>
            <p>Telefone: <input type="text" name="telefone" required></p>
            <p>Email: <input type="text" name="email" required></p>
            <p>CPF: <input type="text" name="cpf" required></p>
            <p><button type="submit">CADASTRAR</button></p>
        </form>
    </div>
</body>

</html>