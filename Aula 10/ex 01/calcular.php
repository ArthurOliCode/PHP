<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <div>
        <?php
        $num = isset($_GET["num"]) ? $_GET["num"] : 1;
        $opr = isset($_GET["opr"]) ? $_GET["opr"] : "dobro";

        $resultado = 0;

        switch($opr){
            case "dobro":
                $resultado = $num * 2;
                break;
            case "cubo":
                $resultado = pow($num, 3);
                break;
            case "raiz":
                $resultado = sqrt($num);
                break;
        }

        echo "<br /><br />O número informado foi $num, e a operação selecionada foi $opr.";
        echo "<br /><br />O resultado da operação foi <span class='foco'>$resultado</span>!";
        ?>
        <br><br><a href="index.html" class="botao">Voltar</a>
    </div>
</body>
</html>