<?php
require 'Banco.php';
require 'Cliente.php';

$banco = new Banco();
$conexao = $banco->getConexao();

$cliente = new Cliente($conexao);

$cliente->setId($_POST['id']);
$cliente->setNome($_POST['nome']);
$cliente->setEmail($_POST['email']);
$cliente->setTelefone($_POST['telefone']);
$cliente->setCPF($_POST['cpf']);

$message = '';

if ($cliente->update()) {
    $message = '<div class="alert success">Cliente atualizado com sucesso!</div>';
    header("Refresh:3;url=listarCliente.php");
} else {
    $message = '<div class="alert error">Erro ao atualizar o cliente</div>';
}
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status da Atualização</title>
    <link rel="stylesheet" href="./styles/styles.css">
</head>

<body>
    <header>
        <h1>PADARIA DA HELO</h1>
    </header>

    <div class="container">
        <h3>STATUS DA ATUALIZAÇÃO</h3>
        <?php
        echo $message;
        ?>
    </div>
</body>

</html>
