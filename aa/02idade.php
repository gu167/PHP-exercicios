<!DOCTYPE html>
<html>
<head></head>
<meta charset="UTF-8"/>
<title></title>
</head>
<body>
<?php
$nome=isset($_GET["nome"])?$_GET["nome"]:"[Não informado nome]";
$ano=isset($_GET["ano"])?$_GET["ano"]:0;
$sexo=isset($_GET["sexo"])?$_GET["ano"]:"[Não informado sexo]";
$idade=date("Y")-$ano;
echo "$nome é $sexo e tem $idade anos"


?>
<a href="form.html">Voltar</a>
</body>
</html>