<?php
/*kata-write-calcs
Kata 38 per l'especialitat fullstackPHP 23-5-24

Es tracta de fer un programa que, donat un número qualsevol, escrigui en un fitxer el seu quadrat, el seu cub, i el seu factorial.

Per exemple, donat el número 3, el programa ens crearà un fitxer anomenat "calculs_3.txt" amb el següent text: "Número: 3 Quadrat: 9 Cub: 27 Factorial : 6"

Pista: Fes servir les funcions de PHP:

fopen
fwrite
fclose */

// function fac($n) {
//     if($n == 0) {
//         return 1;
//     } else {
//         return $n * fac($n - 1);
//     }
// }

function facFor($n) {
    $sum = 0;
    for ($i = $n; $i > 0; $i--) {
        $sum =+ $n * $i; 
    }
    return $sum;
}

$n = (int)readline("Dime un numero: ");

$cuadrado = $n * $n;
$cubo = $n * $n * $n;
//$factorial = fac($n);
$factorial = facFor($n);

echo $cuadrado. PHP_EOL;
echo $cubo. PHP_EOL;
echo $factorial. PHP_EOL;

$file = "calculs_" . $n . ".txt";

$fileEdit = fopen($file, "w+");
$info = "Num: " . $n . " Cuadrado: " . $cuadrado . ", Cubo: " . $cubo . ", Factorial: " . $factorial . ".";
fwrite($fileEdit, $info);
fclose($fileEdit);

//echo "Dentro del fichero hay: " . $fileEdit;
?>