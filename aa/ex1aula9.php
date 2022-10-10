<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
<?php
$a=isset($_GET["ano"])?$_GET["ano"]:1900;
$i=date("Y")-$a;
echo "Você nasceu em $a e tem $i anos.<br/>";
if ($i<16){
   $tipoVoto="é proibido votar";
}
elseif ($i>=16&& $i<18 || ($i>65)) {
        $tipoVoto = "o voto é opcional";
}
else{
        $tipoVoto = "o voto é obrigatório";
}
echo "Para essa idade $tipoVoto"
?>
</body>
</html>
