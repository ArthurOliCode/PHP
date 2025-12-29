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

    <p>Utilização de formatação de strings pelo metódo chr()</p>
    <?php
    $letra = chr(67);
    $num = ord("C");
    print("A letra com chr $num é $letra");
    ?>
  </div>
</body>

</html>