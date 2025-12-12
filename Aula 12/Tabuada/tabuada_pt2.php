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
    }
  </style>
</head>

<body>
  <div>
    <?php
    $contador = 0;
    $resultado = 0;

    $num = isset($_GET["numeros"]) ? $_GET["numeros"] : 1;

    echo "<h1>Tabuada</h1>";
    echo "<br/><p>A tabuada processada foi à respeito do número $num selecionada anteriormente...</p><br/>";
    echo "<br/><br/><p><b>-------------------------------------</b></p><br/>";

    while ($contador <= 10) {
      echo "<p style='margin: 0%; margin-left:10%;'>| $num X $contador = $resultado |</p><br/>";

      $contador++;
      $resultado = $num * $contador;
    }

    echo "<p>-------------------------------------</p><br/><br/>"
    ?>

    <a href="tabuada_pt1.php" class="botao">Voltar</a>
  </div>
</body>

</html>