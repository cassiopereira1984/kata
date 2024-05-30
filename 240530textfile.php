<?php

/*kata-textfile-search
Kata 39 per l'especialitat fullstackPHP 30-5-24

Donat el text del fitxer "loveIsAwful.txt" fes un programa que interpreti el fitxer i ens mostri:

Paraules que comencen per vocal
Paraules que contenen las lletra "t"
Pista

fread*/

$texto = "loveIsAwful.txt";
$textoAbierto = fread($texto, 'r');

// $file = "calculs_" . $n . ".txt";
// $fileEdit = fopen($file, "w+");
// $info = "Num: " . $n . " Cuadrado: " . $cuadrado . " Factorial: " . $factorial . ".";
// fwrite($fileEdit, $info);
// fclose($fileEdit);



$texto[] = $textoAbierto;
$vocales = ['a', 'e', 'i', 'o', 'u'];
$palabrasVocales = [];
$palabrasT = [];

foreach($texto as $palabra) {
    if(in_array($palabra[0], $vocales)) {
        $palabrasVocales[] = $palabra;
    }
}

foreach($texto as $palabra) {
    if (strpos($palabra, 't')) {
        $palabrasT[] = $palabra;
    }
}

print_r($palabrasVocales);
print_r($palabrasT);

?>