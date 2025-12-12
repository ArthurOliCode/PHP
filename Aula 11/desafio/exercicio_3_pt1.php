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
    <h1>Contador especial</h1>
    <br />
    <p>Este contador tem um início personalizado assim como <br /> o seu fim e o incremento para a contagem</p><br />

    <form action="exercicio_3_pt2.php" method="get">
      Passo: <input type="number" name="inicio" max="100" min="0" /><br /><br />
      Fim: <input type="number" name="fim" max="100" min="0" /><br /><br />
      Incremento: <input type="number" name="increment" max="100" , min="1"> <br /><br />
      <input type="submit" name="enviar" class="botao">
    </form>

  </div>
</body>

</html>