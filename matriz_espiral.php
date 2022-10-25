<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
<pre>
<?php
$n = 1225;
$width = sqrt($n);
$mat = [];
$x = floor($width / 2);
$y = floor($width / 2);
$volta = 0;
$direita = 1;
$esquerda = 1;
$cima = 1;
$baixo = 1;
for ($i = 0; $i < $width; $i++) {
    for ($j = 0; $j < $width; $j++) {
        $mat[$i][] = "??";
    }
}


$start = $mat[$y][$x];
$direction = 'start';
$v = 2;
for ($i = 1; $i <= $n; $i++) {
    switch ($direction) {
        case 'right':
            $movimentoDireita = $i;
            for ($movD = 1; $movD <= $direita; $movD++) {
                if ($movD !== 1) {
                    $movimentoDireita++;
                }

                $mat[$y][$x + 1] = $movimentoDireita;

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

                $mat[$y - 1][$x] = $movimentoCima;

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

                $mat[$y][$x - 1] = $movimentoEsquerda;

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

                $mat[$y + 1][$x] = $movimentoBaixo;

                if ($y < $width - 1) {
                    $y++;
                }
            }
            $direction = 'right';
            $baixo++;
            $i = $movimentoBaixo;
            break;

        default:
            $mat[$y][$x] = $i;
            $direction = 'right';

    }


}
print_r(printMatrix($mat, $width));

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

///* direita = x + 1
// * esquerda = x - 1
// * baixo = y + 1
// * cima = y - 1
// */
// só muda de camada na direita
//       /*
//                 if ($start==1){
//                     $camada=$camada+2;
//
//                     $mat[$y][$x] = $camada*($dir);
//                     if ($dir){
//                         $mat[$y][$x]=2*($cima);
//                     }
//                     if ($cima){
//                         $mat[$y][$x]=2*($esqu);
//                     }
//                     if ($esqu){
//                         $mat[$y][$x]=2*($baixo);
//                     }
//                     if ($baixo) {
//                         $mat[$y][$x] = 2*($start += 1);
//                     }
//                  }*/
//
////direita 0,+1
//// cima -1,0
//////esquerda 0,-1
////baixo +1,0
////direita cima esquerda esquerda baixo baixo direita

// numero de vezes que as direções são realizadas é exponencial impar

//distancia entre o ponto em comum x ou y aumenta por camada seguindo os numeros impares


//muda
?>

</pre>
</body>
</html>