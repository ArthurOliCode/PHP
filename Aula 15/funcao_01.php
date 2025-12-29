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

    <p>Utilizando os conceitos de passagem por referência a uma função com retorno de parâmetro</p>

    <?php
    $x = 2;
    $y = 5;

    $resultado = soma($x, $y);

    function soma(&$a, $b)
    {
      $a += $b;
      return $a;
    }

    echo "<p>O valor de x antes da soma com y era 2, após a soma é igual a $x </p>";
    ?>

  </div>
</body>

</html>