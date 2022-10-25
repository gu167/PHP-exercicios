<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
<pre>
<?php
$n = 25;
spiralmatrixrix($n);

function spiralmatrixrix($n): void
{
    echo "Insira o numero final da sequência da matrixriz que tenha raiz exata.<br/>";

    $width = sqrt($n);
    $matrix = [];
    $x = floor($width / 2);
    $y = floor($width / 2);
    $direita = 1;
    $esquerda = 1;
    $cima = 1;
    $baixo = 1;

    for ($i = 0; $i < $width; $i++) {
        for ($j = 0; $j < $width; $j++) {
            $matrix[$i][] = "??";
        }
    }

    $direction = 'start';

    for ($i = 1; $i <= $n; $i++) {
        switch ($direction) {
            case 'right':
                $movimentoDireita = $i;
                for ($movD = 1; $movD <= $direita; $movD++) {
                    if ($movD !== 1) {
                        $movimentoDireita++;
                    }
                    $matrix[$y][$x + 1] = $movimentoDireita;
                    if ($x < $width - 1) {
                        $x++;
                    }
                }
                $i = $movimentoDireita;
                $direita += 2;
                $direction = 'up';
                break;
            case 'up':
                $movimentoCima = $i;
                for ($movC = 1; $movC <= $cima; $movC++) {
                    if ($movC !== 1) {
                        $movimentoCima++;
                    }

                    $matrix[$y - 1][$x] = $movimentoCima;

                    if ($y > 0) {
                        $y--;
                    }
                }
                $direction = 'left';
                $cima += 2;
                $i = $movimentoCima;
                break;

            case 'left':
                $movimentoEsquerda = $i;
                for ($movE = 1; $movE <= $esquerda * 2; $movE++) {
                    if ($movE !== 1) {
                        $movimentoEsquerda++;
                    }

                    $matrix[$y][$x - 1] = $movimentoEsquerda;

                    if ($x > 0) {
                        $x--;
                    }
                }
                $direction = 'down';
                $esquerda++;
                $i = $movimentoEsquerda;
                break;
            case 'down':
                $movimentoBaixo = $i;
                for ($movB = 1; $movB <= $baixo * 2; $movB++) {
                    if ($movB !== 1) {
                        $movimentoBaixo++;
                    }

                    $matrix[$y + 1][$x] = $movimentoBaixo;

                    if ($y < $width - 1) {
                        $y++;
                    }
                }
                $direction = 'right';
                $baixo++;
                $i = $movimentoBaixo;
                break;

            default:
                $matrix[$y][$x] = $i;
                $direction = 'right';
        }
    }

    echo printmatrixrix($matrix, $width);
}

function printmatrixrix($matrixrix, $width): string
{
    $stringmatrixrix = "";
    $length = strlen((string)$width ** 2);
    for ($i = 0; $i < $width; $i++) {
        for ($j = 0; $j < $width; $j++) {
            $stringmatrixrix .= str_pad($matrixrix[$i][$j], $length, 0, STR_PAD_LEFT) . ' ';
        }
        $stringmatrixrix .= '<br>';
    }
    return $stringmatrixrix;
}

?>

</pre>
</body>
</html>