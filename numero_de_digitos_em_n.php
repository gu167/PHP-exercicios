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
        $cons = $cons * 10;
    }

    // echo "Ou, no PHP, podemos transformar o numero inteiro em uma string e usar o comando strlen:";
    //$numberDigits = (string)$n;
    //  return (strlen($numberDigits));

    return "O número de digitos de $n é:  $c<br>";
}

echo digitCounter(15);

?>
</body>
</html>