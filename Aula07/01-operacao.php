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
        $n1 = $_GET["num1"];
        $n2 = $_GET["num2"];
        $tipo = $_GET["op"];
        $resultado = ($tipo == "s") ? $n1+$n2 : $n1*$n2;
        echo "<h3>Resultados</h3></br></br>";
        echo "Os valores passados são: $n1, $n2, $tipo </br>"; 
        echo "O resultado é $resultado, e a operação é $tipo </br></br>";
        ?>
    </div>
</body>
</html>