<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../_css/estilo.css" />
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
      margin: 2%;
    }
  </style>
</head>

<body>
  <div>
    <h1>Minha contagem...</h1>

    <?php
    $inicio = $_GET["inicio"];
    $fim = $_GET["fim"];
    $incremento = $_GET["increment"];

    $valor = $inicio;

    if ($inicio < $fim) {
      if ($incremento > $fim) {
        $incremento = $fim;
      }
      echo "| ";
      while ($valor <= $fim) {
        if ($valor < $fim) {
          echo "$valor --> ";
        } else {
          echo "$valor |";
        }

        $valor += $incremento;
      }
    } else {
      while ($valor >= $fim) {
        if ($incremento > $inicio) {
          $incremento = $inicio;
        }
        if ($valor > $fim) {
          echo "$valor --> ";
        } else {
          echo "$valor |";
        }

        $valor -= $incremento;
      }
    }
    ?>

    <br /><br /><a href="exercicio_3_pt1.php" class="botao">Voltar</a>
  </div>
</body>

</html>