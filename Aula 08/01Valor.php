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
            // Associando o valor por GET via url para a variável $valor
            $valor = $_GET["valor"];
            $raiz = sqrt($valor);

            echo "<h2>Testando Integração com HTML5</h2>";
            echo "<h4>O valor passado foi $valor!</h4>";
            echo "<p>Sua respectiva raiz é: " .number_format($raiz, 2) . "</p></br>";
        ?>
        <a href="01Exercicio.html">Voltar</a>
    </div>
</body>
</html>