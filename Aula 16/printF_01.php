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
    <h1>Teste com tratamento de strings</h1>

    <p>Utilização do método printf para formatação de strings</p>
    <?php
    $produto = "leite";
    $valor = 4.5;

    printf("O %s custa R$ %.2f", $produto, $valor);
    ?>
  </div>
</body>

</html>