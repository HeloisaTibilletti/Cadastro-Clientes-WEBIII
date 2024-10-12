<?php
require 'Banco.php';
require 'Cliente.php';

$database = new Banco();
$db = $database->getConexao();
$cliente = new Cliente($db);
$cliente->setId($_GET['id']);
$message = ''; 

if ($cliente->delete()) {
    $message = '<div class="alert success">Cliente deletado com sucesso!</div>';
    header("Refresh:3;url=listarCliente.php");
} else {
    $message = '<div class="alert error">Erro ao deletar o cliente.</div>';
}
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status da Exclusão</title>
    <link rel="stylesheet" href="./styles/styles.css"> 
</head>

<body>
    <header>
        <h1>PADARIA DA HELO</h1>
    </header>

    <div class="container">
        <h3>STATUS DA EXCLUSÃO</h3>
        <?php
        echo $message;
        ?>
    </div>
</body>

</html>
