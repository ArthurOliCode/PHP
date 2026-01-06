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

    <p>Utilização do método str_replace() para substituir partes em string</p>
    <?php
    $frase = "O meu hobbie é estudar Matemática";
    $novo = str_replace("Matemática", "PHP", $frase);


    printf("O resultado da frase '%s' é '%s'", $frase, $novo);
    ?>
  </div>
</body>

</html>