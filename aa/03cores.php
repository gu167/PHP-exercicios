<!DOCTYPE html>
<html>
<head>
    <?php
        $txt= isset($_GET["t"])?$_GET["t"]:"Texto Generico";
        $tam=isset($_GET["itam"])?$_GET["itam"]:"12pt";
        $cor=isset($_GET["cor"])?$_GET["cor"]:"#000000";


    ?>

<meta charset="UTF-8"/>
<title></title>
    <style>
        span.texto{
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>

<body>
<?php
    echo "<span class='texto'>$txt</span>";

?>
</body>
</html>