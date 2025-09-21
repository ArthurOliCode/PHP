<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Operadores em PHP</title>
</head>
<body>
<div>
    <h1>Operadores lógicos em PHP</h1>
    <?php
        // A entrada de dados é feita via URL
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $s = $n1 + $n2;
        $sub = $n1 - $n2;
        $mult = $n1 * $n2;
        $div = $n1 / $n2;
        $mod = $n1 % $n2;
        $media = ($n1 + $n2) / 2;
        echo "<p>A soma entre $n1 e $n2 é $s</p>";
        echo "<p>A subtração entre $n1 e $n2 é $sub</p>";
        echo "<p>A multiplicação entre $n1 e $n2 é $mult</p>";
        echo "<p>A divisão entre $n1 e $n2 é $div</p>";
        echo "<p>O módulo entre $n1 e $n2 é $mod</p>";
        echo "<p>A média entre $n1 e $n2 é $media</p>";
    ?>
</div>
</body>
</html>