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
            $preco = $_GET["p"];
            echo "<h3>Aumento</h3>";
            echo "O preço do produto é: R$ " . number_format($preco, 2);
            $preco += $preco * 10/100;
            echo "</br>O preço com %10 de aumento é: R$ " . number_format($preco, 2);
            echo "</br></br><h3>Desconto</h3>";
            $preco -= $preco * 25/100;
            echo "O preço com %25 de desconto é: R$ " . number_format($preco, 2);
        ?>
    </div>
</body>
</html>