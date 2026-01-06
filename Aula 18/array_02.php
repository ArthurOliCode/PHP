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
    <h1>Testando arrays e matrizes com PHP</h1>

    <p>Utilização do método range() para criação de arrays.</p>

    <pre>
      <?php
      $c = range(0, 30, 5);

      print("<br />");
      print(str_repeat("*", 30));
      print("<br />");
      print_r($c);
      print(str_repeat("*", 30));
      ?>
    <pre>
  </div>
</body>

</html>