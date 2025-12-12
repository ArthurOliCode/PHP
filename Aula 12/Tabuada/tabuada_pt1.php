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
    <h1>Tabuada</h1>

    <br />
    <p>Irei calcular a tabuada do número que você selecionar de <b>1 até 10</b></p><br /><br />

    <form action="tabuada_pt2.php" method="get">
      <label for="numeros">Selecione o número que deseja: </label>
      <select name="numeros">
        <?php
        $contador = 1;

        while ($contador <= 10) {
          echo "<option value='$contador'>$contador</option>";

          $contador++;
        }
        ?>
      </select>
      <br /><br /><input type="submit" value="Enviar" class="botao" /><br /><br />
    </form>
  </div>
</body>

</html>