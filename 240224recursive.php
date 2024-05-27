<?php
// kata-recursive-call
// Kata 29 per l'especialitat fullstackPHP 29-2-24

// Kata 29, un 29 de febrer...trigarem a tornar a tenir un altre 29 de febrer...o sigui que per avui tenim un problema MOLT especial :)

// Deixe-ho que us presenti el concepte de programació recursiva.

// Avui us repto a resoldre un senzill problema d'aquesta manera.

// Fes una funció recursiva que compti(mostri) desde n a 0.

// Bonus track:

// Fes també una funció recursiva que calculi i retorni el factorial d'un nombre donat.
// Per últim, mostra la serie de Fibonacci d'un nombre donat.
// Input

// 5
// 3
// Output

// 5,4,3,2,1,0
// 3,2,1,0
// Aquesta vegada, també, la idea de la kata ens ve donada per un repte d'en MoureDev!!

function recursiveFuction(int $num) :void {
    if($num == 0) {
        echo $num;
    } else {
        echo $num . ",";
        echo recursiveFuction($num - 1);
    }
}

function recursiveFuctionFac(int $num) {
    if($num == 0 || $num == 1) {
        return 1;
    } else {
        return $num * recursiveFuctionFac($num - 1);
    }
}

function recursiveFuctionFib(int $num) {
    
}

$num = readline("dime un numero");

echo recursiveFuction($num);
?>