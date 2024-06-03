<?php

/*kata-textfile-search
Kata 39 per l'especialitat fullstackPHP 30-5-24

Donat el text del fitxer "loveIsAwful.txt" fes un programa que interpreti el fitxer i ens mostri:

Paraules que comencen per vocal
Paraules que contenen las lletra "t"
Pista

fread*/

$texto = "loveIsAwful.txt";
$textoOpen = fopen($texto, 'r');
$textoRead = fread($textoOpen, filesize("loveIsAwful.txt"));
$textoExplode = explode(" ", $textoRead);

//print_r($textoExplode);


$vocales = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
$palabrasVocales = [];
$palabrasT = [];

foreach($textoExplode as $palabra) {
    $palabra = trim($palabra, ".,!?");

    if(in_array($palabra[0], $vocales)) {
        $palabrasVocales[] = $palabra;
    }
}

foreach($textoExplode as $palabra) {
    $palabra = trim($palabra, ".,!?");

    if (strpos($palabra, 't') ) {
        $palabrasT[] = $palabra;
    }

    if (strpos($palabra, 'T') ) {
        $palabrasT[] = $palabra;
    }
}

fclose($textoOpen);

//print_r($palabrasVocales);
//print_r($palabrasT);

echo "La palabras con la letra T en el texto son: " . implode(", ", $palabrasT) . "." . PHP_EOL;
echo "La palabras con vocales el texto son: " . implode(", ", $palabrasVocales) . ".";

?>