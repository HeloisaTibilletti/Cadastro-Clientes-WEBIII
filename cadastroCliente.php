<?php
require 'Banco.php';
require 'Cliente.php';

$banco = new Banco();
$conexao = $banco->getConexao();

$cliente = new Cliente($conexao);
$cliente->setNome($_POST['nome']);
$cliente->setCPF($_POST['cpf']);
$cliente->setTelefone($_POST['telefone']);
$cliente->setEmail($_POST['email']);

$message = ''; 

if ($cliente->create()) {
    $message = '<div class="alert success">Cliente cadastrado com sucesso!</div>';
    header("Refresh:2;url=listarCliente.php");
} else {
    $message = '<div class="alert error">Erro ao cadastrar o cliente</div>';
}
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status do Cadastro</title>
    <link rel="stylesheet" href="./styles/styles.css"> 
</head>

<body>
    <header>
        <h1>PADARIA DA HELO</h1>
    </header>

    <div class="container">
        <h3>STATUS DO CADASTRO</h3>
        <?php
        echo $message;
        ?>
    </div>
</body>

</html>
