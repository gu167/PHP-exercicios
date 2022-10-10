<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
<?php
$n = isset($_GET["n"]) ? $_GET["n"] : 1;
echo "<h2>Tabuada do número $n é: </h2><br>";
$c = 1;

do {
    $r = $n * $c;
    echo "$n X $c = $r <br>";
    $c++;
} while ($c <= 10);

?>
<a href="tabuada.html">Voltar</a>
</body>
</html>