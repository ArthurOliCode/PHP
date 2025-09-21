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
            $anoNas = $_GET["ano"];
            $idade = 2025 - $anoNas;
            $voto = ($idade >= 18  && $idade < 65)? "obrigatório": "não obrigatório";

            echo "<h3>Operadores Lógicos</h3> </br></br>";
            echo "Uma pessoa que nasceu no ano de $anoNas, em 2025 tem $idade anos! </br></br>";
            echo "Logo ela é $voto a votar</br></br>";
        ?>
    </div>
</body>
</html>