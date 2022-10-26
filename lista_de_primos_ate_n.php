<!DOCTYPE html>
<html lang="br">

<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
<pre>
<?php
function primos($numero): array
{
    $primosList = [2, 3, 5, 7];

    for ($i = 2; $i <= $numero; $i++) {
        if ($i % 2 === 0
            || $i % 3 === 0
            || $i % 5 === 0
            || $i % 7 === 0) {
            continue;
        }

        $primosList[] = $i;
    }

    return $primosList;
}

print_r(primos(90));
?>
    </pre>

</body>
</html>