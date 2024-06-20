<?php
/*kata-right-parenthesis
Kata 40 per l'especialitat fullstackPHP 20-6-24

Donada una expressió matemàtica de l'estil:

(3 + 4) * 2

o

(5 + 3) * (3 - 1)

Fes un programa que avaluï que els parells de parèntesis estàn correctament equilibrats en una expressió matemàtica.

Input

(3 + 4) * 2
(5 + 3) * (3 - 1)
(5 + 3 * (3 - 1)
Output

Correcte
Correcte
Incorrecte*

/*coges el input, se lo pasa a un array, si hay ( buscate al ), si es lo encuentras es true, si 
no lo encutras es false.

idea dos: recoges el array por con un FOR, coges en ( y le guarda en un array, luego buscas el )
y checkeas si el array está vacía.*/



function encontrarParentesis(string $input): bool {
    $array = [];
    $countCara = strlen($input);

    for($i = 0; $i < $countCara; $i++) {
        $caracter = $input[$i];

        if($caracter == '(') {
            $array[] = $caracter;
        } elseif($caracter == ')') {
            if(empty($array)){
                return false;
            } else {
                array_pop($array);
            }
        }
    }
    return true;
}

$input = "(3 + 4) * 2";
// $input"(5 + 3) * (3 - 1)";
// $input"(5 + 3 * (3 - 1)";

if(encontrarParentesis($input)) {
    Echo "CORRECTO";
} else {
    echo "INCORRECTO";
}
