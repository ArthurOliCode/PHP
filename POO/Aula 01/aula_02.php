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
      <?php
      require_once 'Caneta.php';

      $c1 = new Caneta;
      $c1->cor = 'Azul';
      $c1->ponta = 0.5;
      $c1->modelo = 'Bic';

      // print("<p>O estado atual da caneta é:" . var_dump($c1) . "</p>");
      $c1->tampar();
      $c1->rabiscar();
      $c1->destampar();
      $c1->rabiscar();
      $c1->tampar();

      $c2 = new Caneta;
      $c2->cor = 'Preta';
      $c2->carga = 50;
      $c2->ponta = 0.7;

      $c2->tampar();

      printf("<br /><p>Status Caneta 1 - %s</p>", print_r($c1));
      printf("<br /><p>Status Caneta 2 - %s</p>", print_r($c2));
      ?>
    </div>
    <footer>
      <div>@CursoEmVideo</div>
    </footer>
</body>

</html>