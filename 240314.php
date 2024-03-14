<?php
/*cuenta-regresiva-del-tren-kata
Kata 31 para la especialidad fullstackPHP 14-3-24

Viatgem en un tren en marxa, en flames i, posiblement, ple de zombies. Hem de frenar-lo com sigui. Per això, necessitem activar el fre d'emergència. Por a fer-ho tenim això:

fre_1

Una tecla de 9 dígitos.
10 dígitos al entrar.
El objeto para activar el libre es que, la suma de los 10 dígitos que se introducen junto con el nombre reflejado 
en la foto(67).
Cada policía que introduce un nombre, ens mostrar la suma parcial.
Pero, això no és tot! ¡Tenim un segundo código para desbloquear!

fre_2

Funciona igual pero...

Varia el nombre objeto a obtener.
¡No es mostrar la suma parcial!
Bonus Track: ¡Posa un cuenta entera de 30" para conseguir els objectius! (¡MUY DIFÍCIL!)*/

function sumaBreak($count1 = 67, $count2 = 81, $travas = 0) {
    while ($travas !=2) {
        $numUser = 0;
        for($i = 10; $i > 0; $i--) {
            //dime el numero;
            $count1 =- $numUser;
            echo $count1;
        } if($count1 == 0) {
            $travas++;
            $numUser = 0;
            for($i = 10; $i > 0; $i--) {
                //dime el numero;
                $count2 =- $numUser;
            } if($count2 == 0) {
                $travas++;
            }
        } else {
            echo "El trem no se para";
        }
        echo "Se ha detenido el tren.";
    }
}