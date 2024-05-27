<?php
/*Kata 32 por la especialidad fullstackPHP 21-3-24

La explicación será breve.

Haz un programa que, dado un número, nos diga si es o no un número de Armstrong.

Ejemplos:

Input

153
204
Output

¡Es un número de Armstrong!
¡No es un número de Armstrong!*/

function numArmstrong(int $num) : bool  {
    //cast a string de la variable num.
    $numStr = (string)$num;
    //funcion strlen para contar la cantidad de caracteres del string.
    $numLong = strlen($numStr);
    //iniciase la variable suma.
    $suma = 0;

    //bucle for para pasar por todo el indice del string numStr.
    for($i = 0; $i < $numLong; $i++) {
        //potencial de nunStr en el indice x. y suma a la variable.
        $suma += $numStr[$i] ** $numLong;
    }
    
    //compara los valores de suma y num.
    if($suma == $num) {
        return true;
    } else {
        return false;
    }
}

//solicitas el numero al user, debería er un string siempre????
$num = readline("Dime un numero:");

// Verificar si el número es un número de Armstrong y mostrar el resultado
if(numArmstrong($num)) {
        echo "¡Es un número de Armstrong!\n";
    } else {
        echo "¡No es un número de Armstrong!\n";
}


// function esNumeroArmstrong($numero) {
//     $numero_str = (string)$numero;
//     $longitud = strlen($numero_str);
//     $suma = 0;

//     for ($i = 0; $i < $longitud; $i++) {
//         $suma += pow($numero_str[$i], $longitud);
//     }

//     if ($suma == $numero) {
//         return true;
//     } else {
//         return false;
//     }
// }

// // Solicitar al usuario que ingrese un número
// echo "Por favor, ingresa un número: ";
// $numero = trim(fgets(STDIN)); // Leer el número desde la entrada estándar

// // Verificar si el número es un número de Armstrong y mostrar el resultado
// if (esNumeroArmstrong($numero)) {
//     echo "¡Es un número de Armstrong!\n";
// } else {
//     echo "¡No es un número de Armstrong!\n";
// }

?>