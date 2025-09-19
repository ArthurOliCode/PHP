<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Fuçoes Artimeticas</title>
</head>
<body>
<div>
    <h1>Funções Aritméticas em PHP</h1>
    <?php
    $n1 = $_GET["x"];
    $n2 = $_GET["y"];
    echo "<p>Valores recebidos $n1 e $n2</p>";
    echo "<p>Valor absoluto de $n1 é ".abs($n1)."</p>";
    echo "<p>Valor absoluto de $n2 é ".abs($n2)."</p>";
    echo "<p>O valor $n1<sup>$n2</sup> é ".pow($n1, $n2)."</p>";
    echo "<p>A raiz quadrada de $n1 é ".sqrt($n1)."</p>";
    echo "<p>O valor arredondado de $n2 é ".round($n2)."</p>"; // ceil ou floor
    echo "<p>A parte inteira de $n2 é ".intval($n2)."</p>";
    echo "<p>O formato em moeda de $n2 é R$".number_format($n2, 2, ",", ".")."</p>";
    ?>
</div>
</body>
</html>
