<?php
$nome = $_GET['nome'];
$idade = $_GET['idade'];

echo "<h1>Olá, $nome. Você tem $idade anos.</h1>";

echo "Atualização V2";

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
  <form method="">
    <input type="text" name="nome" placeholder="Informe seu nome...">
    <input type="number" name="idade" placeholder="Informe sua idade...">
    <button type="submit">Enviar</button>
  </form>

</body>
</html>