<!DOCTYPE html>
<html lang="br">

<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
<?php


function primos($numero): array
{
    $primosList = array();
    for ($i = 2; $i <= $numero; $i++) {
        if ($i % 2 == 0
            && $i % 3 == 0
            && $i % 5 == 0
            && $i % 7 == 0
            || $i == 2
            || $i == 3
            || $i == 5
            || $i == 7) {
            $primosList[] = $i;
        }
    }
    return $primosList;
}

var_dump(primos(11));
?>
</body>
</html>