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
spiralMatrix($n);

function spiralMatrix($n): void
{
    $width = sqrt($n);
    $matrix = [];

    $x = floor($width / 2);
    $y = floor($width / 2);

    $right = 1;
    $left = 1;
    $up = 1;
    $down = 1;

    for ($i = 0; $i < $width; $i++) {
        for ($j = 0; $j < $width; $j++) {
            $matrix[$i][] = "??";
        }
    }

    $direction = 'start';

    for ($i = 1; $i <= $n; $i++) {
        switch ($direction) {
            case 'right':
                $rightIterator = $i;

                for ($rightMove = 1; $rightMove <= $right; $rightMove++) {
                    if ($rightMove !== 1) {
                        $rightIterator++;
                    }

                    $matrix[$y][$x + 1] = $rightIterator;

                    if ($x < $width - 1) {
                        $x++;
                    }
                }
                
                $i = $rightIterator;
                $right += 2;
                $direction = 'up';

                break;
            case 'up':
                $upIterator = $i;

                for ($upMove = 1; $upMove <= $up; $upMove++) {
                    if ($upMove !== 1) {
                        $upIterator++;
                    }

                    $matrix[$y - 1][$x] = $upIterator;

                    if ($y > 0) {
                        $y--;
                    }
                }

                $direction = 'left';
                $up += 2;
                $i = $upIterator;

                break;
            case 'left':
                $leftIterator = $i;
                
                for ($leftMove = 1; $leftMove <= $left * 2; $leftMove++) {
                    if ($leftMove !== 1) {
                        $leftIterator++;
                    }

                    $matrix[$y][$x - 1] = $leftIterator;

                    if ($x > 0) {
                        $x--;
                    }
                }

                $direction = 'down';
                $left++;
                $i = $leftIterator;

                break;
            case 'down':
                $downIterator = $i;

                for ($downMove = 1; $downMove <= $down * 2; $downMove++) {
                    if ($downMove !== 1) {
                        $downIterator++;
                    }

                    $matrix[$y + 1][$x] = $downIterator;

                    if ($y < $width - 1) {
                        $y++;
                    }
                }

                $direction = 'right';
                $down++;
                $i = $downIterator;

                break;
            default:
                $matrix[$y][$x] = $i;
                $direction = 'right';
        }
    }

    echo printMatrix($matrix, $width);
}

function printMatrix($matrix, $width): string
{
    $stringMatrix = "";
    $length = strlen((string)$width ** 2);

    for ($i = 0; $i < $width; $i++) {
        for ($j = 0; $j < $width; $j++) {
            $stringMatrix .= str_pad($matrix[$i][$j], $length, 0, STR_PAD_LEFT) . ' ';
        }

        $stringMatrix .= '<br>';
    }

    return $stringMatrix;
}

?>

</pre>
</body>
</html>