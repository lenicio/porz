<?php

// Essa função tem o objetivo de verificar se o array $_GET está vazio
if(!empty($_GET['nome']) && !empty($_GET['idade'])) {
  $nome = $_GET['nome'];
  $idade = $_GET['idade'];
  echo "<h1>Olá, $nome. Você tem $idade anos.</h1>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <!-- GET / POST -->
  <form method="get">
    <input type="text" name="nome" placeholder="Informe seu nome..." required>
    <input type="number" name="idade" placeholder="Informe sua idade..." required>
    <button type="submit">Enviar</button>
  </form>

</body>
</html>