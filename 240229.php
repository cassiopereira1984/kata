Kata 29 per l'especialitat fullstackPHP 29-2-24

Kata 29, un 29 de febrer...trigarem a tornar a tenir un altre 29 de febrer...o sigui que per avui tenim un problema MOLT especial :)

Deixe-ho que us presenti el concepte de programació recursiva.

Avui us repto a resoldre un senzill problema d'aquesta manera.

Fes una funció recursiva que compti(mostri) desde n a 0.

Bonus track:

Fes també una funció recursiva que calculi i retorni el factorial d'un nombre donat.
Per últim, mostra la serie de Fibonacci d'un nombre donat.
Input

5
3
Output

5,4,3,2,1,0
3,2,1,0
Aquesta vegada, també, la idea de la kata ens ve donada per un repte d'en MoureDev!! El#6 de 2024.
<?php

function compti($n) {
    if($n == 0) {
        echo 0;
    } else {
        echo $n . ",";
        compti($n - 1);
    }
}
function factorial($n) {
    if($n <= 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}
function fibonacci($n) {
    if($n == 0) {
        return 0;
    } elseif($n == 1) {
        return 1;
    } else {
        return fibonacci($n - 1) . fibonacci($n - 2);
    }

}

$n1 = 5;
$n2 = 10;

echo compti($n1) . "\n";
echo factorial($n2) . "\n";