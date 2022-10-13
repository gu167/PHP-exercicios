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

0  1  2  3  4  5  6

37 36 35 34 33 32 31   0
38 17 16 15 14 13 30   1
39 18 05 04 in 12 29   2  3
40 19 06 01 02 11 28   3
41 20 07 08 09 in 27   4     10
42 21 22 23 24 25 in   5          26
43 44 45 46 47 48 49   6


1camada=8 elementos
2camada=16 elementos
3camada=24 elementos

cada camada aumenta 8 elementos

numero de linhas = numero de colunas= quadrado
numero de linhas =!= numero de colunas= retangulo


numero total do indice tem que ser impar
O que significa que o valor absoluto do indice tem que ser par
o numero de voltas é o valor absoluto/2


numero de VOLTAS É A PARTE MAIS IMPORTANTE*Dica
ele quer uma espiral >QUADRADA<

numero de linhas> É <igual ao numero de colunas


diagonal =numeros primos
esquinas = numero f-6*numero da esquina
numero de elementos= numero de linhas * numero de colunas
*/

function espiralSeq($n): int
{
    $sequence = array();
    $init=1;
        for ($i = 1; $i <= $n; $i++) {
    $sequence[]=$i;
    }


    return 0;
}




?>

</pre>
</body>
</html>