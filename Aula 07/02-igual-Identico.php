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
            echo "<h3>Operadores Relacionais</h3></br>";
            echo "<h5>Testadno os operadores relacionais igual e idêntico</h5></br>";

            $a = 3;
            $b = "3";
            $resul = ($a == $b) ? "iguais" : "diferentes"; // Testando com o sinal de igualdade entre variáveis
            
            echo "Os valores passados são $a, $b e eles são $resul </br></br>";

            $resul = ($a === $b) ? "iguais" : "diferentes"; // Testando com o operador de idêntico

            echo "Os valores passados são $a, $b e eles são $resul </br>";
        ?>
    </div>
</body>
</html>