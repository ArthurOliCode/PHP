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

    <p>Utilização do método strPos() para encontrar ocorrências de substring em strings</p>
    <?php
    $frase = "Lorem Ipsum";
    $frase_f = stripos($frase, "ipsum");

    printf("Resultado: %d", $frase_f);
    ?>
  </div>
</body>

</html>