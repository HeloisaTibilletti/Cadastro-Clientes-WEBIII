<?php
require 'Banco.php';
require 'Cliente.php';

$banco = new Banco();
$conexao = $banco->getConexao();
$cliente = new Cliente($conexao);

$cliente->setId($_GET['id']);
$stmt = $cliente->consultar();
$clienteSelecionado = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Cliente</title>
    <link rel="stylesheet" href="./styles/styles-editar.css">
</head>

<body>
    <header>
        <h1>
            <a href="listarCliente.php" style="color: white; text-decoration: none;">PADARIA DA HELO</a>
        </h1>
    </header>

    <div class="container">
        <h3>ATUALIZAR CLIENTE</h3>
        <form method="POST" action="atualizarCliente.php">
            <input type="hidden" name="id" value="<?php echo $clienteSelecionado['id']; ?>">
            <p>Nome: <input type="text" name="nome" value="<?php echo $clienteSelecionado['nome']; ?>"></p>
            <p>Telefone: <input type="text" name="telefone" value="<?php echo $clienteSelecionado['telefone']; ?>"></p>
            <p>Email: <input type="text" name="email" value="<?php echo $clienteSelecionado['email']; ?>"></p>
            <p>CPF: <input type="text" name="cpf" value="<?php echo $clienteSelecionado['cpf']; ?>"></p>
            <p><button type="submit">ATUALIZAR</button></p>
        </form>
    </div>

</body>

</html>