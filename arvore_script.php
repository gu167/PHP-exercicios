<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
<?php
$ncam = 20;
echo cresce($ncam) . "<br> Feliz Natal e que Jesus elimine todos vocês<br>";

function cresce($ncam)
{
    $estrela = " ☻";
    $tronco = "| |";
    $raiz = "\=====/";
    $folha = "*";

    echo "<pre>";
    echo str_pad($estrela, $ncam, " ", STR_PAD_BOTH) . "<br>";

    for ($i = 1; $i <= $ncam; $i += 2) {
        $arvo = str_repeat($folha, $i);
        $arvo = str_pad($arvo, $ncam, " ", STR_PAD_BOTH);
        echo $arvo . "<br>";
    }

    if ($ncam <= 20) {
        echo str_pad($tronco, $ncam, " ", STR_PAD_BOTH) . "<br>";
        echo str_pad($tronco, $ncam, " ", STR_PAD_BOTH) . "<br>";
        echo str_pad($tronco, $ncam, " ", STR_PAD_BOTH) . "<br>";
        echo str_pad($tronco, $ncam, " ", STR_PAD_BOTH) . "<br>";
        echo str_pad($raiz, $ncam, " ", STR_PAD_BOTH) . "<br>";
    } elseif ($ncam < 50) {
        echo str_pad($tronco, $ncam, " ", STR_PAD_BOTH) . "<br>";
        echo str_pad($tronco, $ncam, " ", STR_PAD_BOTH) . "<br>";
        echo str_pad($tronco, $ncam, " ", STR_PAD_BOTH) . "<br>";
        echo str_pad($tronco, $ncam, " ", STR_PAD_BOTH) . "<br>";
        echo str_pad($tronco, $ncam, " ", STR_PAD_BOTH) . "<br>";
        echo str_pad($tronco, $ncam, " ", STR_PAD_BOTH) . "<br>";
        echo str_pad($raiz, $ncam, " ", STR_PAD_BOTH) . "<br>";
    } else {
        echo str_pad($tronco, $ncam, " ", STR_PAD_BOTH) . "<br>";
        echo str_pad($tronco, $ncam, " ", STR_PAD_BOTH) . "<br>";
        echo str_pad($raiz, $ncam, " ", STR_PAD_BOTH) . "<br>";
    }
}

?>
</body>
</html>