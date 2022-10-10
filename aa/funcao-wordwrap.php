<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
<?php
$t="Aqui temos um texto gigante criado pelo PHP para demonstrar o funcionamento da função wordwrap";
$r=wordwrap($t,5,"<br>\n", true); /*wordwrap define as condições
                                                           de quebra de linha no codigo, o
                                                           número de caractéres até a quebra
                                                           se a quebra de linha será exibido
                                                           visualmente ou somente no código
                                                           fonte, e se as palavras que possuem
                                                           mais caracteres delimitados até a
                                                           quebra de linha vão ser cortadas
                                                           no 5º caracter ou se será exibido
                                                           a palavra por inteiro abrindo uma
                                                           exceção no comando */
echo $r;

?>
</body>
</html>