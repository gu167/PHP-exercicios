<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
<?php
$n=123456789;
$cons=1;
    for($c=0;$n>=$cons;$c++){

        $cons=$cons*10;
    }
    echo "O número de digitos de $n é:  $c";

?>
</body>
</html>