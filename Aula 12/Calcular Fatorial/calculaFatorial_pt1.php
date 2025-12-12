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
    <form action="calculaFatorial_pt2.php" method="get">
      Valor: <input type="number" name="num" min="1" max="20" /> <br /><br />
      <input type="submit" value="Enviar" class="botao" />
    </form>
  </div>
</body>

</html>