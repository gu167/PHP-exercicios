<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
<?php
function teste(&$x){
    $x+=2;
    echo "O valor de x é $x<br>";
}
$a=3;
teste($a);
echo "O valor de a é $a";
?>
</body>
</html>