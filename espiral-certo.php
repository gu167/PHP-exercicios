<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
<pre>
<?php
// o indice $i nas matrizes representa as linhas
// o indice $j nas matrizes representa as colunas
print_r(date("d:m:y H:m:s") . "<br>" . "<br>");

$n = 49;
$width = sqrt($n);
$mat = [];
for ($i = 0; $i < $width; $i++) {
    for ($j = 0; $j < $width; $j++) {
        $mat[$i][] = 0;

    }
}
foreach ($mat as $i => $row) {          // isso é a matriz
    foreach ($mat as $j => $column) {   //no formato certo
        echo $column[$j] . " ";
    }
    echo "<br>";

}
print_r($mat);


?>
</pre>
</body>
</html>