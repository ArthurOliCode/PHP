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

    <p>Utilização de formatação de strings pelo metódo print_r() para vetores</p>

    <?php
    $x[] = 1;
    $x[] = 2;
    $x[] = 3;

    print_r($x);
    print("<br /><br />");

    $x2 = array(1, 2, 3, 4, 5, 6);

    print_r($x2);
    print("<br /><br />");
    var_dump($x2);
    print("<br /><br />");
    var_export($x2);
    ?>
  </div>
</body>

</html>