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
    $words = str_word_count($nome, 1);
    $countWords = count($words);
    $initial = array();

    for ($i = 0; $i < $countWords; $i++) {
        if ($countWords == 0) {
            return "Nome Inválido";
        }
        if ($countWords == 1) {

            return strtoupper($nome);
        } else {

            $initial[] = substr($words[$i - 1], 0, 1);
        }
    }

    $initialGlue = implode(".", $initial);

    return strtoupper($words[$countWords - 1]) . $initialGlue;
}

print_r(signature("Gustavo Mendonca Tavares"));


?>
</pre>
</body>
</html>