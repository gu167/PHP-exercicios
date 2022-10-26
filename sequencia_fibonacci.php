<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
<pre>
<?php

function fib($position): int
{
    $fibonacciSequence = array(0, 1);

    for ($i = 2; $i <= $position; $i++) {
        $fibonacciSequence[$i] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
    }

    return $fibonacciSequence[$position];
}

echo("O número Fibonacci da posição escolhida é: " . fib(10));
?>
</pre>
</body>
</html>