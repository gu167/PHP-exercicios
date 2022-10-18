<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
<pre>
<?php
/*
$n=0;
$c=1;
$n+=$c;
$f=50;
$sequencia=array([2x6,$f-13,$f-14,$f-15,$f-16,$f-17,$f-3x6],
                 [$f-11,                             $f-19],
                 [$f-10,                             $f-20],
                 [$f-9,                              $f-21],
                 [$f-8,                              $f-22]
                 [$f-7,                              $f-23]
                 [1x6,$f-5,$f-4,$f-3,$f-2,$f-1,$f])  $f4x6]

$sequencia=array([0,0},[0,1],[0,2],[0,3},[0,4],[0,5],[0,6]
                 [1,0},[1,1],[1,2],[1,3},[1,4],[1,5],[1,6]
                 [2,0},[2,1],[0,2],[2,3},[0,4],[0,5],[2,6]
                 [3,0},[3,1],[3,2],[3x3],[3,4],[3,5],[3,6] = 36 elementos
                 [4,0},[4,1],[0,2],[4,3},[0,4],[0,5],[4,6]
                 [5,0},[5,1],[5,2],[5,3},[5,4],[6,5],[5,6]
                 [6,0},[0,1],[0,2],[6,3},[0,4],[0,5],[6,6]


$sequencia=array([0,0} =2 elementos


$sequencia=array([0,0},[0,1] =2+2 elementos
                 [1,0},[1,1]

$sequencia=array([0,0],[0,1],[0,2] =2+4 elementos
                 [1,0],[1,1],[1,2]


$sequencia=array([0,0],[0,1],[0,2] =2+7 elementos
                 [1,0],[1,1],[1,2]
                 [2,0],[2,1],[2,2]

$sequencia=array([0,0],[0,1],[0,2]
                 [1,0],[1,1],[1,2] =2+10 elementos
                 [2,0],[2,1],[2,2]
                 [3,0],[3,1],[3,2]

                    0     1     2     3

               0   [0,0],[0,1],[0,2][0,3]   0

               1   [1,0],[1,1],[1,2][1,3]   1  = 2+ 12 elementos

               2   [2,0],[2,1],[2,2][2,3]   2

               3   [3,0],[3,1],[3,2][3,3]   3

                     0     1     2    3


(linha final + coluna final)*2

0    1  2  3  4  5  6

in+5 36 35 34 33  32 31    0
38 in+4 16 15 14  13 30    1
39 18 inc 04 in+l 12 29   2    3
40 19 06 bgl in+c 11 28   3
41 20 inl 08 flc  f+1 27   4     10
42 21 22 23   24  inf 26     5          26
43 44 45 46 47    48  $n    6 =

0    1  2  3  4  5  6

in+5 36 35 34 33  32 31    0
38 in+4 16 15 14  13 30    1
39 18 05 04 03 12 29    2
40 19 06 01 02 11 28    3
41 20 07 08 09 12 27   4
42 21 22 23   24  inf 26   5
43 44 45 46 47    48  $n   6


ic 36 35 34 33 32  il         0  uc== 7(=i)      uc-
                                 u+1==
                                 uL-2
                                 u-2



38 ic| 16 15 14 il 30         1    uCAM1== 5(uc-2)
39 18| ic 04 il 12 29         2    uCAM2== 3(uc-4)
40 19| 06 bil ic 11 28         3   uCAM2== 3(uc-6_
41 20  il 08 if if+1(ic) 27   4    initCAM= 1
42 il  22 23 24 if if+1(ic)   5    initCAM2= initCAM+1
il 44  45 46 47 48 n               initCAM3= initCAM+1
0  1   2  3  4  5  6




     27
                                                       26   4     10
43    inl   22  23 24  ing  26   5          26
44    44    45 46 47   48   ing  6 =


                       inc < 04  < inl
                       \/          ^
                       06    bgl > inc
                       \/          X
                      inl >  08 > inFl >  inc(inFL+1)

valr absoluto do indice/2 sempre vai ser [i1,i2]

in+7 elementos i+l pra linhas i+c pra colunas
inl=impar
inc=impar


1c$mada=8 elementos
2c$mada=16 elementos
3c$mada=24 elementos

cada c$mada aumenta 8 elementos

numero de linhas = numero de colunas= quadrado
numero de linhas =!= numero de colunas= retangulo


numero total do indice tem que ser impar
O que significa que o valor absoluto do indice tem que ser par
o numero de voltas é o valor absoluto/2


numero de VOLTAS É A PARTE$maIS IMPORTANTE*Dica
ele quer $ma espiral >QUADRADA<

numero de linhas> É <igual ao numero de colunas


diagonal =numeros primos
esquinas = numero f-6*numero da esquina
numero de elementos= numero de linhas * numero de colunas

                 [0,0]      ,[0,1],  [0,2],[0,3},[0,4],[0,5],  [0,6]
                 [1,0]      ,[1,1],  [1,2],[1,3],[1,4], [1,5],  [1,6]

                 [2,0]      ,[2,1],  [0,2],[2,3],[0,4], [0,5],  [2,6]
                 [3,0]      ,[3,1],  [3,2],[-bg],[ini], [3,5],  [3,6]
                 [5,0},      [5,1],  [5,2],[5,3},[5,4], [6,5],  [5,6]

                 [6,0},      [0,1],  [0,2],[6,3},[0,4], [0,5],  [6,6]
*/
/*// o indice $i nas matrizes representa as linhas
// o indice $j nas matrizes representa as colunas


SCRIPT CERTO

print_r(date("d:m:y H:m:s") . "<br>" . "<br>");

$n = 49;
$width = sqrt($n);
$mat = [];
for ($i = 0; $i < $width; $i++) {
    for ($j = 0; $j < $width; $j++) {
        $mat[$i][] = 0;

    }
}
    foreach ($mat as $i => $row) {          // isso é a matriz
        foreach ($mat as $j => $column) {   //no formato certo
            echo $column[$j] . " ";
        }
        echo "<br>";

}
print_r($mat);
*/
function espiralSeq($n): int
{

    $matrizL = array();

    for ($index = 0; $index > sqrt($n); $index++) {
        foreach ($matrizL as $index => $colu) {

            $matrizL[$index][] = $colu[$index];

        }
        print_r($matrizL);
    }

    $bgcol = ($index) / 2;
    $bgli = ($index) / 2;
    $vet = 1;
    $cam1 = 2;
    for ($init = 1; $init <= $n;) {
        $matrizL[$bgli][$bgcol] = $vet;
        $matrizL[$bgli][$bgcol++] = $cam1;
        if ($matrizL == $vet && $bgcol<=4 && $bgcol>=2) {
            $matrizL[$bgli][$bgcol++] = $cam1++;
        }
        if ($matrizL == $cam1 && $bgcol=4 && $bgcol>=2) {
            $matrizL[$bgli++][$bgcol] = $cam1++;
        }
    }

    return 0;

}

//                              0  1  2  3  4  5  6
//                        array(0, 0, 0, 0, 0, 0, 0),
//                        array(0, 0, 0, 0, 0, 0, 0),
//                        array(0, 0, 0, 0, 0, 0, 0),
//                        array(0, 0, 0, 0, 0, 0, 0),
//                        array(0, 0, 0, 0, 0, 0, 0),
//                        array(0, 0, 0, 0, 0, 0, 0),
//                        array(0, 0, 0, 0, 0, 0, 0));
?>

</pre>
</body>
</html>