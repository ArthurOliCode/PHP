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
    <h1>Exibição de vetores em PHP</h1>
    <pre>
    <?php
    $vetor = array(0 => 2, 1 => 9, 2 => 3);
    $tot = count($vetor);

    print("O vetor possui $tot elementos <br />");
    print_r($vetor);
    var_dump($vetor);
    ?>
    </pre>
  </div>
</body>

</html>