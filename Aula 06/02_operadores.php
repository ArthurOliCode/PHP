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
            /*
                Este exercício tem a função de demonstrar
                os usos de incremento e decremento em PHP
            */
            $anoAtual = $_GET["aa"]; // Via url

            // Primeiro comentário em PHP
            echo "<h3>Conceitos de Pós e Pré-Incremento</h3></br></br>"; # Título
            echo "O ano inserido foi $anoAtual e o ano anterior foi " . --$anoAtual; # Conceito de Pré-Decremento
            
        ?>
    </div>
</body>
</html>