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
    <?php
    echo "<h1> Testes com for em PHP </h1>";
    for ($c = 1; $c <= 10; $c++) {
      echo "<br />O valor é: $c <br />";
    }

    echo "<h4> Agora refazendo a contagem, entretanto, seu inverso: </h4>";

    for ($c = 10; $c >= 1; $c--) {
      echo "<br />O valor é: $c <br />";
    }

    echo "<h4>Refazendo novamente a contagem, porém, agora de cinco em cinco. </h4>";

    for ($c = 0; $c <= 100; $c += 5) {
      echo "<br />O valor é: $c <br />";
    }

    echo "<h4>Refazendo novamente a contagem, mas contando regressivamente de 20 à 0. </h4>";

    for ($i = 20; $i >= 0; $i -= 2) {
      echo "<br />O valor é: $i <br />";
    }
    ?>
  </div>
</body>

</html>