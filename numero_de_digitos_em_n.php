<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
<?php
$n = 123456789;
$cons = 1;

for ($c = 0; $n >= $cons; $c++) {
    $cons = $cons * 10;
}

echo "O número de digitos de $n é:  $c<br>";

echo "Ou, no PHP, podemos transformar o numero inteiro em uma string e usar o comando strlen:";
$numberDigits = (string)$n;

print_r(strlen($numberDigits));

?>
</body>
</html>