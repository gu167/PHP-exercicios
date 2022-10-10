<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
<?php
$v = isset($_GET["ex"]) ? $_GET["ex"] : 1;
echo "<h1>Calculando o fatorial de $v</h1>";
$c = $v;
$f=1;
do {
    $f=$f*$c;
    $c--;
} while ($c >= 1);
echo "<h2>$v ! = $f</h2>";
?>
<a href="fatorial.html">Voltar</a>
</body>
</html>