<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/exercicio3.css" class="css">
    <title>Resultado Relatório de Clientes</title>
</head>
<body>

    <h1>Resultado Relatório de Clientes:</h1>

    <?php
    // Criando os arrays de pessoas
    $pessoa1 = array("codigo" => 1, "nome" => "Alberto Silva");
    $pessoa2 = array("codigo" => 2, "nome" => "Bianca Duarte");
    $pessoa3 = array("codigo" => 3, "nome" => "João Gomes");
    $pessoa4 = array("codigo" => 4, "nome" => "Fernando Pessoa");
    $pessoa5 = array("codigo" => 5, "nome" => "Ana Clara");

    // Adicionando as pessoas na lista
    $lista['pessoa'][] = $pessoa1;
    $lista['pessoa'][] = $pessoa2;
    $lista['pessoa'][] = $pessoa3;
    $lista['pessoa'][] = $pessoa4;
    $lista['pessoa'][] = $pessoa5;

    // Exibindo a tabela
    foreach($lista as $listapessoas){
    ?>

    <table>
        <tr>
            <th>Código</th>
            <th>Nome</th>
        </tr>
        <?php 
        // Iterando sobre cada pessoa na lista
        foreach($listapessoas as $valuepessoa){ ?>
            <tr>
                <?php 
                // Exibindo o código e o nome em colunas
                foreach($valuepessoa as $value){ 
                    echo "<td>$value</td>";
                } 
                ?>
            </tr>
        <?php } ?>
    </table>

    <?php 
    } 
    ?>

</body>
</html>
