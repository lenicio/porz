<?php

/*

Desenvolva um código que receba a idade e o sexo de uma pessoa, e informe se ela é obrigada a se 
alistar no exército. 

Regras de obrigatoriedade:
- Homens com idade menor que 18 anos - Não obrigatório
- Homens com idade entre 18 e 45 anos - Obrigatório
- Mulheres - Não obrigatório
*/

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
    <input type="date" name="data">

    <select name="genero">
      <option value="m">Masculino</option>
      <option value="f">Feminino</option>
    </select>
    
    <button type="submit">Enviar</button>
  </form>

</body>
</html>