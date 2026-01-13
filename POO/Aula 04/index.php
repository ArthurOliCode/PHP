<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso de PHP</title>
</head>

<body>
  <header>
    <div>
      <h1>PHP com Programação Orientada a Objeto</h1>
    </div>
  </header>
  <section>
    <div class="content">
      <pre>
      <?php

      require_once("Caneta.php");

      $c1 = new Caneta("Bic ponta fina", 0.7, "Preta", false);

      var_dump($c1);

      $c1->setModelo("Bic ponta fina");
      $c1->setPonta(0.5);

      var_dump($c1);

      print("<br /> Eu tenho uma caneta de modelo {$c1->getModelo()} com a ponta {$c1->getPonta()}");
      /*
      printf("<br />O modelo da caneta é %s<br />", $c1->getModelo());
      printf("<br />A cor da caneta é %s <br />", $c1->getPonta());
      */
      ?>
      </pre>
    </div>
  </section>
  <footer>
    <div>@CursoEmVideo</div>
  </footer>
</body>

</html>