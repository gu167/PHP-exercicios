<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
<?php
function soma($a, $b)
{
    $s = $a + $b;
    echo "<p>A soma vale $s</p>";
}

soma(3, 4);
soma(8, 2);
$x = 9;
$y = 15;
soma($x, $y);
?>
</body>
</html>