<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="_css/estilo.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso de PHP</title>
  <style>
    .botao {
      border-radius: 5px;
      padding: 8px 15px;
      color: aliceblue;
      cursor: pointer;
      background-color: #273747;
      box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }
  </style>
</head>

<body>
  <div>
    <?php
    $n = isset($_GET["num"]) ? $_GET["num"] : 1;

    echo "<h1>Tabuada solicitada pelo usuário</h1>";

    echo "<h5>De acordo com a escolha do digíto $n, a tabuada respectiva a ele é: </h5>";

    for ($c = 1; $c <= 10; $c++) {
      $multi = $c * $n;

      echo "<br /><p><b>$n X $c = $multi</b></p><br />";
    }
    ?>

    <a href="javascript:history.go(-1)" class="botao">Voltar</a>
  </div>
</body>

</html>