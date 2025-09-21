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
            $nota1 = $_GET["nota1"];
            $nota2 = $_GET["nota2"];
            $nota3 = $_GET["nota3"];
            $nota4 = $_GET["nota4"];
            $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
            // $resul = $media < 7 ? "recuperação": "aprovado";

            echo "<h3>Operadores Relacionais</h3> </br></br>";
            echo "A situação do aluno com as notas $nota1, $nota2, $nota3 e $nota4, levando em consideração sua média $media é ".(($media < 7) ? "recuperação" : "aprovado");

            ?>
    </div>
</body>
</html>