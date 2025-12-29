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
    <h1>Função Soma</h1>

    <p>Somaremos dois valores pré-determinados pelo código php e exibiremos o valor.</p>
    <?php
    $a = 2;
    $b = 4;

    $resultado = soma($a, $b);

    function soma($a, $b)
    {
      $soma = $a + $b;

      return $soma;
    }

    echo "<p>A soma de $a mais $b vale $resultado</p>";
    ?>
  </div>
</body>

</html>