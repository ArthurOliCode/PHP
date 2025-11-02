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
        $nascimento = isset($_GET["nascimento"]) ? $_GET["nascimento"] : 2000;
        $idade = date("Y") - $nascimento;
        $dirigir = false;
        $votar = "";

        echo "<br /> <br /> <br /> O ano de nascimento informado foi: $nascimento";
        echo "<br /> A idade resultante é: $idade";

        if($idade >= 65){
                $dirigir = true;
                $votar = "opicional";
        }else if($idade <= 65 && $idade >= 18){
            $votar = "obrigatório";
            $dirigir = true;
        }else if($idade < 18 && $idade >= 16){
            $votar = "opicional";     
        }else{
            $votar = "negado"; 
        }

        echo "<br /> O indivíduo em questão tem o voto $votar!";

        if($dirigir){
            echo "<br /> Permitido dirijir!";
        }else{
            echo "<br /> Proibido dirijir!";
        }

        ?>
    </div>
</body>
</html>