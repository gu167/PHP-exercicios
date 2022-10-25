<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
<?php
$n = 10;
echo "Escreva um número 'n' para calcular seu fatorial<br>";

fatorial($n);

function fatorial($n)
{
    $i = $n;
    $ac = 1;
    do {
        $ac *= $i;
        $i--;
    } while ($i >= 1);
    echo "O fatorial do número é: $ac";
}

?>
</body>
</html>