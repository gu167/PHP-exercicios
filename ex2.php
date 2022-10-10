<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
<?php
$n=10;
primos($n);
function primos($n)
{
    for ($i = 2; $i >= $n; $i++)
        if ($i % 2 == 0 && $i % 3 == 0 && $i % 5 == 0 && $i % 7 == 0 || $i == 2 || $i == 3 || $i == 5 || $i == 7) {
            echo "<br>$i<br>";
        }
}
?>
</body>
</html>