<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
<?php
$n = 7;
echo "Escreva um número 'n' para calcular seu fatorial<br>";

factorial($n);

function factorial($n)
{
    $factorial = 1;

    for ($i = $n; $i >= 1; $i--) {
        $factorial *= $i;
    }

    echo "O fatorial do número é: $factorial";
}
?>
</body>
</html>