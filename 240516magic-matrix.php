<?php
/*kata-magic-matrix
Kata 37 per l'especialitat fullstackPHP 16-5-24

Donada una matriu 3x3, per exemple:

            [2,7,6
             9,5,1
             4,3,8]
Verificar si la matriu és màgica o no.
g
Input

[2,7,6 9,5,1 4,3,8]

[3,7,6 9,5,1 4,3,8]

Output

És una matriu màgica!
No és una matriu màgica!*/

function sumLinea($array) {
    $sumMagic = array_sum($array[0]);
    for ($i = 0; $i < 3; $i++) {
        if (array_sum($array[$i]) == $sumMagic) {
            return true;
        }
    }
}

function sumColumna($array) {
    $sumMagic = array_sum($array[0]);
    for ($i = 0; $i < 3; $i++) {
        $sumColumna = 0;
        for ($j = 0; $j < 3; $j++) {
            $sumColumna += $array[$j][$i];
        }
        if ($sumColumna == $sumMagic) {
            return true;
        }
    }
}

function sumDiagonal($array) {
    $sumDiagonal1 = $array[0][0] + $array[1][1] + $array[2][2];
    $sumDiagonal2 = $array[2][0] + $array[1][1] + $array[0][2];

    return ($sumDiagonal1 == $sumDiagonal2);
}

function matrixMagica($array) {
    return sumLinea($array) && sumColumna($array) && sumDiagonal($array);
}

$array = [[3,7,6], [9,5,1], [4,3,8]];
// $array2 = [[3,7,6], [9,5,1], [4,3,8]];

if (matrixMagica($array)) {
    echo "És una matriu màgica!";
} else {
    echo "No és una matriu màgica!";
}
?>
