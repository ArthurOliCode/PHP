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
    <h1>Conceito de arrays dentro de arrays para formar matrizes em PHP</h1>

    <pre>
    <?php
    $vetor = array(
      array(0, 1, 2),
      array(2, 3, 4),
      array(3, 1, 4)
    );

    $vetor[1][1] = 5;

    print_r($vetor);
    ?>
    </pre>
  </div>
</body>

</html>