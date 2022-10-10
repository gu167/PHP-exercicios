<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
<?php
$n = isset($_GET["n"]) ? $_GET["n"] : 1;
if ($n % 2 == 0 && $n % 3 == 0 && $n % 5 == 0 && $n % 7 == 0 || $n == 2) {
    print "O número não é primo";
} else {
    print "O número é primo";
}
?>
</body>
</html>