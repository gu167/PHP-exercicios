<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
<pre>
<?php

function signature($nome): string
{
    $nome = strtoupper(trim($nome));

    if($nome === '') {
        return "Nome Inválido";
    }

    $words = explode(' ', $nome);
    $countWords = count($words);

    if ($countWords === 1) {
        return strtoupper($nome);
    }

    $lastName = $words[$countWords - 1] . ', ';
    unset($words[$countWords - 1]);

    $signature = $lastName;

    foreach ($words as $name) {
        $signature .= $name[0] . '.';
    }

    return $signature;
}

print_r(signature("Pedro Arthur Sasso de Mendonca"));


?>
</pre>
</body>
</html>