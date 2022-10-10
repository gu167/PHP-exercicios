<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="get" action="2aula11.php">
    <?php
    $n=1;
    while ($n<=5){
echo "Valor $n : <input type='number' name='v$n' max='100' min='0' value='0'/><br/>";
    $n++;
    }
    ?>
    <input type="submit" value="Enviar"/>

</form>
</body>
</html>
