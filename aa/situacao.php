<!DOCTYPE html>
<html>
<head></head>
<meta charset="UTF-8"/>
<title></title>
</head>
<body>
<?php
$n1 = $_GET["n1"];
$n2 = $_GET["n2"];
$m=($n1+$n2)/2;
echo "A media entre $n1 e $n2 é $m <br/>";
echo "A situação do aluno é " . (($m>=6)?"APROVADO":"REPROVADO");
?>
</body>
</html>