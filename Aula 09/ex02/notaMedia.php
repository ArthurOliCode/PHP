<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <div>
        <?php
        $nota1 = isset($_GET["nota1"]) ? $_GET["nota1"] : 1;
        $nota2 = isset($_GET["nota2"]) ? $_GET["nota2"] : 1;
        $media = ($nota1 + $nota2) / 2;

        $situacao = "";

        if($media < 5.0){
            $situacao = "reprovado";
        }else if($media >= 5.0 && $media < 7.0){
            $situacao = "recuperação";
        }else if($media >= 7.0){
            $situacao = "aprovado";
        }

        echo "<br /><br />As notas informadas foram $nota1 e $nota2. A média do indivíduo é $media!";
        echo "<br /><br /> Já sua situação devido as notas é $situacao";
         ?>
    </div>
</body>
</html>