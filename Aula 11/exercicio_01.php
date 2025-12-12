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
        <?php
          $c = 1;


          echo("</br>Vou contar de <b>1 até 10...</b> </br></br>");

          while($c <= 10){
            if($c < 10){
              echo("$c --> ");
            }else{
              echo("$c");
            } 
            
            $c++;
          }

          echo("</br></br>Agora vou contar de <b>10 até 1...</b> </br></br>");

          while($c >= 1){
            if($c > 1){
              echo("$c --> ");
            }else{
              echo("$c");
            } 
            
            $c--;
          }
        ?>
    </div>
</body>
</html>