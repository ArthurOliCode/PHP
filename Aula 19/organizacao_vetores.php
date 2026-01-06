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
    <h1>Realizando organização de vetores em PHP</h1>

    <pre>
    <?php
    $vetor = array("X", "A", "Y", "Z", "V");
    $vetor2 = array(2 => 3, 1 => 2, 4 => 8, 5 => 9, 8 => 1);

    print_r($vetor);
    sort($vetor);
    print_r($vetor);
    rsort($vetor);
    print_r($vetor);

    asort($vetor);
    print_r($vetor);

    print("<br /> Ordenação por chaves <br />");
    print_r($vetor2);
    ksort($vetor2);
    print_r($vetor2);
    ?>
    </pre>
  </div>
</body>

</html>