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
    <h1>Teste de formatação de Strings</h1>

    <p>Utilização de formatação de strings pelo metódo wordCount()</p>
    <?php
    $frase = "Eu vou estudar php";
    $cont = str_word_count($frase, 0);
    print($cont);
    print("<br/><br/>");

    $cont = str_word_count($frase, 1);
    print_r($cont);
    print("<br/><br/>");

    $cont = str_word_count($frase, 2);
    print_r($cont);
    print("<br/><br/>");
    ?>
  </div>
</body>

</html>