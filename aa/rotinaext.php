<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
<?php
include "funcaoext.php"; /*Ou pode ser o comando: "require" a diferença
                           entre eles é que include se não conseguir acessar
                           o arquivo externo, os outros códigos/comandos continuam funcionado
                           ja no "include" se o arquivo não for identificado, os
                           outros códigos/comandos que não dependem da função continuam sendo
                           processados.
                           Outros variações destes dois comandos são
                           "include_once"
                           "require_once"
                            O "include" e o "require" podem ser utilizados várias vezes, mas é
                            necessário fazer a chamada varias vezes dependendo do local do
                            escopo do código, para evitar duplicação e carregar multiplas vezes
                            são utilizados os comandos"include_once" e "require_once" que checam
                            se o arquivo de função ja estiver carregado, se sim, ele não carrega
                            novamente,se não, ele carrega pela primeira vez.*/

    echo "<h1>Testando novas funcoes</h1>";
    ola();
    mostraValor(4);
    echo "<h2>Finalizando Programa...</h2> ";

?>
</body>
</html>