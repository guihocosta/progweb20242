<!DOCTYPE html>
<html>
<head>
  <title>Dados Cadastrados</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <?php

    date_default_timezone_set('America/Sao_Paulo');
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $cpf = $_POST['cpf'];

      if (empty($nome) || empty($email) || empty($cpf) || strlen($cpf) != 11) {
        echo "Todos os campos devem ser preenchidos e o CPF deve ter 11 dígitos.";
      } else {
        $data_atual = date('d/m/Y');
        echo "<h2>Dados Cadastrados!</h2>";
        echo "<p>Nome: $nome</p>";
        echo "<p>Email: $email</p>";
        echo "<p>CPF: $cpf</p>";
        echo "<p>Data de Cadastro: $data_atual</p>";
      }
    }
    ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>