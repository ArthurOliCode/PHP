<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <div>
      <form action="exercicio_02_pt2.php" method="get">
        <?php
          $c = 1;
          while ($c <= 5){
            echo "$c ° Valor: <input type='number' name='V$c' max='100' min='0' value='0' /><br/>";
            $c++;
          }
        ?>
        
        <input type="submit" name="Enviar" class="botao" /><br/>
      </form>
      

    </div>
</body>
</html>