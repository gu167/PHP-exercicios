<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
<pre>
<?php

function fib($n): int
{
    $f = array(0, 1,);
    for ($i = 2; $i <= $n; $i++) {
        $f[$i] = $f[$i - 1] + $f[$i - 2];
    }

    return $f[$n];
}

fib(10);

echo("O número Fibonacci da posição escolhida é: " . fib(10));
?>
</pre>
</body>
</html>