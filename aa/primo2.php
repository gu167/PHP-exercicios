<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
<?php
$n = isset($_GET["n"]) ? $_GET["n"] : 1;
$isPrimo = true;


for ($i = 1; $i < $n; $i++) {
    if ($i != 1 && $n % $i == 0) {
        $isPrimo = false;
    }
}

if ($i == 1) {
    $isPrimo = false;
}

if ($isPrimo) {
    echo "E primo";
} else {
    echo "Nao e primo";
}
?>
</body>
</html>