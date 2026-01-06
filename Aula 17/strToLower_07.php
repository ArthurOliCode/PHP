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
    <h1>Testando formatação de strings em PHP</h1>

    <p>Utilização do método strToLower() para formatação de strings em caixa baixa, e strToUpper() para caixa alta.</p>
    <?php

    $nome = "Arthur O.";
    $nome_formatadoL = strtolower($nome);
    $nome_formatadoU = strtoupper($nome);


    printf("Bem vindo %s", $nome_formatadoL);
    print("<br /><br /><br />");
    printf("Bem vindo %s", $nome_formatadoU);
    ?>
  </div>
</body>

</html>