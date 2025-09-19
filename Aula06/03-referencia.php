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
            $a = 3;
            $b = $a;
            $b += 5;

            $c = 3;
            $d = &$c;
            $d += 5;

            echo "<h3>Sem referência atribuída</h3></br>";
            echo "Variável a: $a. E variável b: $b </br></br>";
            echo "<h3>Com referência atribuída</h3></br>";
            echo "Variável c: $c. E variável d: $d </br></br>";
            
        ?>
    </div>
</body>
</html>