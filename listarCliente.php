<?php
require 'Banco.php';
require 'Cliente.php';

$Banco = new Banco();
$db = $Banco->getConexao();
$cliente = new Cliente($db);
$stmt = $cliente->read($db);
$clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="./styles/styles-listar.css">
</head>

<body>
    <header>
        <div class="header">
            <h1>PADARIA DA HELO</h1>
        </div>
    </header>

    <div class="container">
        <h2>Lista de Clientes</h2>

        <table class="clientes-table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>CPF</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $cliente) { ?>
                    <tr>
                        <td><?php echo $cliente['nome']; ?></td>
                        <td><?php echo $cliente['telefone']; ?></td>
                        <td><?php echo $cliente['email']; ?></td>
                        <td><?php echo $cliente['cpf']; ?></td>
                        <td>
                            <a href="form_atualizaCliente.php?id=<?php echo $cliente['id']; ?>">Editar</a> |
                            <a class="" href="deletaCliente.php?id=<?php echo $cliente['id']; ?>">Excluir</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <div class="actions">
            <a href="form_cadastroCliente.php" class="button">Cadastrar Novo Cliente</a>
        </div>
    </div>

</body>

</html>
