<!DOCTYPE html>
<html lang="pt-BR">
<head>
        <?php
            $txt = isset($_GET["texto"])?$_GET["texto"]:"[texto não informado]";
            $tamanho = isset($_GET["tam"])?$_GET["tam"]:"10pt";
            $cor = isset($_GET["cor"])?$_GET["cor"]:"#000";
        ?>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
    <style>
        span.texto {
            font-size: <?php echo $tamanho;?>;
            color: <?php echo $cor;?>;
        };
    </style>
</head>
<body>
    <div>
        <?php 
            echo "</br></br></br><h2>Testando Integração com HTML5</h2>";
            echo "<h4>O valores passados foram: </br>
            <ul>
                <li>Texto: $txt</li>
                <li>Tamanho: $tamanho</li>
                <li>Cor: $cor</li>
            </ul></h4>";
            echo "</br><h5> Texto: </h5>";
            echo "<span class='texto'>$txt</span>";
        ?>
    </div>
</body>
</html>