<?php
/*kata-too-many-counts
Kata 36 per l'especialitat fullstackPHP 9-5-24

Empra, al menys, 3 mecanismes diferents per a imprimir els nombres de l'1 al 10.

Nota: Problema basat en el repte 17 de 2024 dels reptes setmanals de Mouredev"*/ 

for($i = 1; $i <= 10; $i++) {
    echo $i . ", ";
}

echo PHP_EOL;

function whileCount(int $num = 0)
{
    while($num < 10) {
        ++$num;
        echo $num . ", ";
    }
}
echo whileCount();

echo PHP_EOL;


function countUp(int $num = 1) //recursiva
{
    if($num == 10) {
        echo "10";
    } else {
        echo $num . ", ";
        echo countUp($num +1);
    }
}
echo countUp();

echo PHP_EOL;

$arrayNum = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
foreach($arrayNum as $num) {
    echo $num . ", ";
}
?>