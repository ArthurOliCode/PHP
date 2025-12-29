<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="_css/estilo.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso de PHP</title>
</head>

<body>
  <div>
    <h1>Teste de formatação de Strings</h1>

    <p>Utilização de formatação de strings pelo metódo wordwrap</p>
    <?php

    $txt = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. In efficitur rutrum quam non tempus. Duis tempor et tortor eget mollis. Morbi bibendum, quam quis interdum vestibulum, arcu sapien cursus mi, quis sodales metus quam vitae justo. Proin semper neque eget turpis laoreet blandit. Cras venenatis, eros laoreet ultrices varius, ipsum leo porta justo, eget vehicula eros felis eu nisi. Vivamus ornare nec nulla in ullamcorper. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse non ipsum consequat, porttitor ex non, semper tellus. Praesent vel dapibus mi. Cras tempus consequat sagittis. Phasellus ornare vehicula libero a tincidunt. Nam vestibulum nulla posuere iaculis rhoncus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus suscipit aliquam aliquet. Curabitur sit amet feugiat neque. Etiam vel congue nulla, eu aliquet nibh.";

    $res = wordwrap($txt, 40, "<br />\n", false);

    print("<p>O resultado da string foi $res</p>");
    ?>
  </div>
</body>

</html>