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
      require_once 'Caneta_02.php';

      $c1 = new Caneta02;

      $c1->modelo = "Bic Ponta fina";
      $c1->cor = "Preta";
      // $c1->carga = 80; erro
      // $c1->ponta = 0.5; erro

      $c1->destampar();
      $c1->rabiscar();
      $c1->tampar();

      var_dump($c1);
      ?>
      </pre>
    </div>
  </section>
  <footer>
    <div>@CursoEmVideo</div>
  </footer>
</body>

</html>