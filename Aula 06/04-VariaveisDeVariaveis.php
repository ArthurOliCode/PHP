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
            // A entrada de dados é feita via URL
            $site = "GitHub";
            $$site = "ArthurOliCode"; // Variável feita a partir da variável $site nomeada de "GitHub"

            echo "<h3>Conceito de Variáveis de Variáveis</h3></br>";
            echo "A variável site é $site, e a sua variável é $GitHub";
        ?>
    </div>
</body>
</html>