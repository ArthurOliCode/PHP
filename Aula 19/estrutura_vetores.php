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
    <h1>Gerenciando estrutura de vetores em PHP</h1>

    <pre>
    <?php
    $vetor = array("X", "A", "Y", "Z", "V");

    //Tratamento de estrutura em pilha, academicamento apelidado de lifo, last in, first out
    print_r($vetor);
    $vetor[] = "P";
    print_r($vetor);

    print("<br />Utilizando push <br />");
    array_push($vetor, 5);
    print_r($vetor);

    print("<br />Utilizando pop <br />");
    array_pop($vetor);
    print_r($vetor);

    print("<br />Utilizando unshift <br />");
    array_unshift($vetor, "a");
    print_r($vetor);

    print("<br />Utilizando shift <br />");
    array_shift($vetor);
    print_r($vetor);
    ?>
    </pre>
  </div>
</body>

</html>