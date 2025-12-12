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
    $contador = 1;

    while ($contador <= 5) {
      $valor = "num" . $contador;
      $caixa = 'V' . $contador;
      $$valor = isset($_GET[$caixa]) ? $_GET[$caixa] : 0;
      $contador++;
    }

    $contador = 1;
    while ($contador <= 5) {
      $valor = "num" . $contador;
      echo "<br/>Valor $contador : " . $$valor . "<br/>";
      $contador++;
    }
    ?>
  </div>
</body>

</html>