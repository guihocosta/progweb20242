<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Relatório de Clientes</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <h1>Resultado Relatório de Clientes:</h1>

    <?php
    // Array associativo com 5 clientes
    $clientes = [
        ["codigo" => 1, "nome" => "Alberto Silva"],
        ["codigo" => 2, "nome" => "Bianca Duarte"],
        ["codigo" => 3, "nome" => "João Almeida"],
        ["codigo" => 4, "nome" => "Valéria Souza"],
        ["codigo" => 5, "nome" => "Carlos Pereira"]
    ];
    ?>

    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientes as $cliente): ?>
                <tr>
                    <td><?php echo $cliente["codigo"]; ?></td>
                    <td><?php echo $cliente["nome"]; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>
