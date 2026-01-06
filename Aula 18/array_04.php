<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="_css/estilo.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso de PHP</title>
</head>

<body>
  <div>
    <h1>Testando arrays e matrizes com PHP</h1>

    <p>Utilização de vetor com chaves personalizadas em PHP</p>

    <pre>
      <table border="2">

      <?php

      $vetor = array(
        0 =>  2,
        4 => 3,
        5 => 1,
        7 => 10,
        10 => 11
      );

      foreach ($vetor as $valor) {
        print("<td> $valor ");
      }

      ?>

      </table>

      <?php
      print_r($vetor);
      ?>

    <pre>
  </div>
</body>

</html>