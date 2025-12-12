<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../_css/estilo.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso de PHP</title>
  <style>
    .botao {
      border-radius: 5px;
      padding: 8px 15px;
      color: aliceblue;
      cursor: pointer;
      background-color: #273747;
      box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }
  </style>
</head>

<body>
  <div>
    <h1>Calculando o Fatorial....</h1>

    <br />
    <p>O resultado do número informado foi...</p><br /><br />
    <?php
    $num = isset($_GET["num"]) ? $_GET["num"] : 1;

    $v = $num;
    $cont = $num - 1;

    echo "O fatorial de $num é...";

    do {
      if ($cont > 1) {
        if ($cont == ($num - 1)) {
          echo "$v X";
        }
        echo "$cont X ";
      } else {
        echo "$cont ;";
      }

      $v *= $cont;
      $cont--;
    } while ($cont >= 1);

    echo "<h4>O resultado foi $v ! </h4>";
    ?>
  </div>
</body>

</html>