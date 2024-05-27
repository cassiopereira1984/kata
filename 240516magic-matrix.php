<?php
/*kata-magic-matrix
Kata 37 per l'especialitat fullstackPHP 16-5-24

Donada una matriu 3x3, per exemple:

            [2,7,6
             9,5,1
             4,3,8]
Verificar si la matriu és màgica o no.

Input

[2,7,6 9,5,1 4,3,8]

[3,7,6 9,5,1 4,3,8]

Output

És una matriu màgica!
No és una matriu màgica!*/


function(array $array) {
    foreach($array1 as $i => $n) {
        $suma1 = 0;
        foreach($n as $valor) {
            $suma1 =+ $valor;
        }
    }
    foreach($array1 as $i => $n) {
        $suma2 = 0;
        foreach($n as $valor) {
            $suma2 =+ $valor;
        }
    }
    if($suma1 === $suma2) {
        foreach($array1 as $i => $n) {
            $suma3 = 0;
            foreach($n as $valor) {
                $suma3 =+ $valor;
            }
        }
        if($suma1 === $suma3) {

        }

    }
};



$array1 = [[2,7,6], [9,5,1], [4,3,8]];

$array2 = [[3,7,6], [9,5,1], [4,3,8]];

if($name) {
    echo "Es Magico!";
} else {
    echo "NO es Magico!";
}

?>