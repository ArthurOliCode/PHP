<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../_css/estilo.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso de PHP</title>
</head>

<body>
  <div>
    <h1>Contador Automático</h1>

    <br /><br />
    <p>Neste contador, está sendo utilizado a repetição com validação ao final da estrutura!</p><br />

    <p>------------------------</p> <br />

    <p>Contagem em ordem crescente...</p> <br />
    <?php
    //Contagem crescente
    $contador = 1;

    do {
      if ($contador < 10) {
        echo "$contador --> ";
      } else {
        echo "$contador . <br /><br />";
      }
      $contador++;
    } while ($contador <= 10);

    echo "<p>------------------------</p> <br />";
    echo "<p>Contagem em ordem decrescente...</p> <br />";

    $contador = 10;
    do {
      if ($contador > 0) {
        echo "$contador --> ";
      } else {
        echo "$contador . <br /><br />";
      }

      $contador--;
    } while ($contador >= 0);
    ?>
  </div>
</body>

</html>