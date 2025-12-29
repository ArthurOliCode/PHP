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
    $x = 10;
    $y = 15;

    $resultado = soma(4, 5, 3, 0, 2, 1, $x, $y);

    function soma()
    {
      $p = func_get_args();
      $tot = func_num_args();

      $soma = 0;

      for ($i = 0; $i < $tot; $i++) {
        $soma += $p[$i];
      }
      return $soma;
    }

    echo "<p><b>O resultado da soma de todos os digítos é $resultado</b></p>";
    ?>
  </div>
</body>

</html>