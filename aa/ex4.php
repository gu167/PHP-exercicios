<!DOCTYPE html>
<html>
<head></head>
<meta charset="UTF-8"/>
<title></title>
</head>
<body>
<?php
$ano = $_GET ["an"];
$idade=2022-$ano;
echo "Quem nasceu em $ano tem idade de $idade anos.";
$tipo=($idade>= 18 && $idade<65)?"OBRIGATÓRIO":"NÃO OBRIGATÓRIO";
echo "</br> E dessa forma seu voto é $tipo";
?>
</body>
</html>