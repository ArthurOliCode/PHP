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

    <p>Utilização do método substr para recortar uma substring de uma string nos índices indicados</p>
    <?php
    $frase = "Curso em Vídeo";
    $frase_f = substr($frase, 0, 5);

    printf("O resultado da substring de '%s' nos índices 0 e 5 é '%s'", $frase, $frase_f);
    ?>
  </div>
</body>

</html>