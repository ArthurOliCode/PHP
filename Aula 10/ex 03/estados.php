<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css"/>
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
        <?php
        $regiao = isset($_GET["estados"]) ? $_GET["estados"] : "Norte";

        switch ($regiao){
          case "Norte":
            echo "N";
            break;
          case "Nordeste":
            echo "NE";
            break;
          case "Centro-Oeste":
            echo "CO";
            break;
          case "Sudeste":
            echo "SE";
            break;
          case "Sul":
            echo "S";
            break;
        }

        echo "<br /><br /><p>De acordo com o estado selecionado, você está na <span class='foco'>região $regiao</span>!</p>";
        ?>
        <a href="index.html" class="botao">Voltar</a>
    </div>
</body>
</html>