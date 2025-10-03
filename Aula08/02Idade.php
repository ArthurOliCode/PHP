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
            $nome = isset($_GET["nome"])? $_GET["nome"] : "[não informado]";
            $ano = isset($_GET["ano"])? $_GET["ano"] : 0;
            $sexo = isset($_GET["sexo"])? $_GET["sexo"] : "[sexo não informado]";
            $idade = date("Y") - $ano;

            echo "<h2>Testando Integração com HTML5</h2>";
            echo "<h4>O valores passados foram: </br>
            <ul>
                <li>Nome: $nome</li>
                <li>Idade: $idade</li>
                <li>Sexo: $sexo</li>
            </ul></h4>";
            echo "</br><p>$nome tem $idade anos, já que nasceu em $ano, se identifica como $sexo</p></br>"; 
        ?>
        </br><a href="02Exercicio.html">Voltar</a>
    </div>
</body>
</html>