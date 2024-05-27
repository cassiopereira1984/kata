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

function sumLinea($array) {
    $sumMagic = array_sum($array[0]);

    for($i = 0; $i < 3 ; $i++) {
        $sumLinea = array_sum($array[$i]);
    }
    
    if($sumLinea == $sumMagic) {
        return true;
    } else {
        return false;
    }
}

function sumColumna($array) {
    $sumMagic = array_sum($array[0]);

    for($i = 0; $i < 3; $i++) {
        for($j = 0; $j < 3; $j++) {
            $sumColumna = array_sum($array[$i][$j]);
        }
    }
        
        if ($sumColumna == $sumMagic) {
            return true;
        } else {
            return false;
        }
}

function sumDiagonal($array) {
    $sumDiagonal1 = $array[0][0] + $array[1][1] + $array[2][2];
    $sumDiagonal2 = $array[2][0] + $array[1][1] + $array[0][2];

    if($sumDiagonal1 == $sumDiagonal2) {
        return true;
    } else {
        return false;
    }
}

function matrixMagica($array) {
    if(sumDiagonal($array) && sumColumna($array) && sumLinea($array)) {
        return true;
    } else {
        return false;
    }
}

$array1 = [[2,7,6], [9,5,1], [4,3,8]];

$array2 = [[3,7,6], [9,5,1], [4,3,8]];

if(matrixMagica($array)) {
    echo "Es Magico!";
} else {
    echo "NO es Magico!";
}

?>