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
    <h1>Utilizando vetores com chaves associativas em PHP</h1>

    <pre>
    <?php
    $vetor = array(
      "nome" => "Arthur",
      "cpf" => "12343252356",
      "rg"  => "1231245234",
      "endereço" => "xxxxxxxxxxxxxxxxxxxxx"
    );

    $vetor["fuma"] = false;

    print("<br />");
    foreach ($vetor as $campo => $valor) {
      print("O campo do vetor é $campo e seu valor é $valor");
      print("<br />");
    }
    ?>
    </pre>
  </div>
</body>

</html>