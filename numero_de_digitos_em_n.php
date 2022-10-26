<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
<?php
function digitCounter($n): string
{
    $cons = 1;

    for ($c = 0; $n >= $cons; $c++) {
        $cons *= 10;
    }

    // echo "Ou, no PHP, podemos transformar o numero inteiro em uma string e usar o comando strlen:";
    //  return (strlen((string)$n));

    return "O número de digitos de $n é: $c<br>";
}

echo digitCounter(1000);

?>
</body>
</html>