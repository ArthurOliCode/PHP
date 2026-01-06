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

    <p>Utilização do método ucfirst() e ucWords() para upper case de strings, tornando a primeira letra maíscula</p>
    <?php
    $nome = "arthur o.";
    $nome_f = ucfirst($nome);
    $nome_fW = ucwords($nome);
    $nome_fR = strrev($nome);

    printf("Resultado: %s", $nome_f);
    print("<br /><br /><br />");
    printf("Resultado: %s", $nome_fW);
    print("<br /><br /><br />");
    printf("Resultado: %s", $nome_fR);
    ?>
  </div>
</body>

</html>