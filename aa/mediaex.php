<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
<?php
$nota1=isset($_GET["nota1"]) && is_numeric($_GET["nota1"])?$_GET["nota1"]:"invalida";
$nota2=isset($_GET["nota2"]) && is_numeric($_GET["nota2"])?$_GET["nota2"]:"invalida";
echo "A Nota 1 é: <span style='color: #7e050c'>$nota1</span> <br/>"."A Nota 2 é: <span style='color: #7e050c'>$nota2</span> <br/>";
$m=($nota1+$nota2)/2;
echo "A média das notas inseridas é: ".number_format($m,1);
if($m<6 && $m>0){
    echo "<br/>  O aluno está reprovado";

}
elseif($m>=6 && $m<=20) { "O aluno está aprovado";
}
else{
    echo "<br/>O valores das notas inseridas excedem a nota máxima/minima "."impossivel obter a situação de aprovação";
}
?>
</body>
</html>
