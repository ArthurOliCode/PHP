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
    <h1>Bem vindo ao verificador de Primos</h1>

    <p>Iremos verificar se o número indentificado por nós se enquadra como um número primo ou não, <br />
      os critérios que são levados em consideração, consiste se o número possue mais de dois múltiplos a ele,<br />
      sendo esses o número 1 além do próprio digíto.</p>
    <?php
    $multiD = [];

    $n = isset($_GET["num"]) ? $_GET["num"] : 1;
    $multiQ = 0;
    $tamanhoV = 0;

    for ($i = 1; $i <= $n; $i++) {
      if ($n % $i == 0) {
        $multiQ++;
        $multiD[] += $i;
      }
    }


    echo "<h4>Os resultados foram: </h4>";
    echo "<p>Os múltiplos encontrados foram: ";

    foreach ($multiD as $i => $valor) {
      echo "$valor ";
    }

    echo "<p><br />A quantidade de múltilos encontrados foram: $multiQ </p></br>";

    if ($multiQ <= 2) {
      echo "<h4>O número $n é primo!</h4>";
    } else {
      echo "<h4>O número $n não é primo!</h4>";
    }
    ?>
    <a href="javascript:history.go(-1)" class="botao">Voltar</a>
  </div>
</body>

</html>