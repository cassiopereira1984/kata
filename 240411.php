<?php
/*kata-numerology
Kata 33 per l'especialitat fullstackPHP 11-4-24

Ens ha abduït una secta numerològica. Per deixar-nos sortir ens han demanat que els fem un programa per ajudar-los en les seves ambicions.

Hem de fer un programa que, donat un número enter positiu ens digui el seu significat. Per això haurem de:

Reduir el número a una xifra mitjançant la suma recurrent de les seves xifres. Per exemple: Si tenim un 13, la seva reducció és 4; si tenim 172, la reducció és 1.

Retornar el seu "significat" corresponent seguint aquesta relació:

0, el tot.
1, individualitat.
2, dualitat.
3, raó.
4, estabilitat.
5, amor.
6, destrucció.
7, saviessa.
8, poder.
9, generositat.
Exemples:

Input

123
542
Output

Destrucció
Dualitat
Nota: El mentor/a no té ni idea de numerologia per tant, no us ho preneu a la valenta :) */


function reduceNumber(int $num) : int {
    //inicia la variable;
    $sum = 0;
    //mientras num sea mayor que 0 o sum sea mayor igual a 10 se ejecuta la logica.
        //vuelve a entrar en el while num=12.
            //vulve a entrar en el while num=1.
    while($num > 0 || $sum >= 10) {
        //cuando num sea igual a 0 entre en el condicional if.
            //se salta el if num != 0.
                //se salta el if num != 0.
        if ($num == 0) {
            //se define el valor de sum a num.
            $num = $sum;
            //se define el valor de sum como 0 una vez mas.
            $sum = 0;
        }
        //cogese el modulo de num divido por 10 y se suma al valor sum. 123/10=12,3. 3 se suma a sum.
            //12/10=1,2 3(valor actual de suma)+2=5.
                //1/10=0,1 5(valor actual de suma)+1=6.
        $sum += $num % 10;
        //dividese el valor de num por 10 para restarle el ultimo digito, 123/10=12.
            //12/10=1,2.
                //1/10 = 0.
        $num /= 10;
    }
    return $sum;
}

function obtenerSignificado($reduceNumber) : string {
    switch ($reduceNumber) {
        case 0:
            return "El Todo";
        case 1:
            return "Individualidad";
        case 2:
            return "Dualidad";
        case 3:
            return "Razón";
        case 4:
            return "Estabilidad";
        case 5:
            return "Amor";
        case 6:
            return "Destrucción";
        case 7:
            return "Sabiduría";
        case 8:
            return "Poder";
        case 9:
            return "Generosidad";
        default:
            return "Número inválido";
    }
}

echo "Dime un numero: ";
$num1 = intval(fgets(STDIN));

echo "Dime otro un numero: ";
$num2 = intval(fgets(STDIN));

$num1Reducido = reduceNumber($num1);
$num2Reducido = reduceNumber($num2);

$num1Significado = obtenerSignificado($num1Reducido);
$num2Significado = obtenerSignificado($num2Reducido);

echo "Significado del numero " . $num1 . " es: " . $num1Significado. PHP_EOL;
echo "Significado del numero " . $num2 . " es: " . $num2Significado. PHP_EOL;


/*
define("EXIT_CODE",-1);
//descomponer el numero y obtener suma de valores.
function sumFigures(int $number): int {
    $sum = 0;
    while(($number / 10) > 0) {
        $sum += $number % 10;
        var_dump($sum);
        $number /= 10;
        var_dump($number);
    }// pq hace este calculo en en return?
    return $sum + $number % 10;
}

function reduceNumber(int $number): int {
    $sum_figures = $number;
    while ($sum_figures >= 10) {
        $sum_figures = sumFigures($number);
    }
    return $sum_figures;
}

function getNumberMeaning(int $number): string {
    return match($number) {
        0 => 'el tot',
        1 => 'individualitad',
        2 => 'dualidad',
        3 => 'raó',
        4 => 'estabilitat',
        5 => 'amor',
        6 => 'destrucció',
        7 => 'saviessa',
        8 => 'poder',
        9 => 'generositat'
    };
}

function printNumberMeaning(int $number): void {
    $reduced_number = reduceNumber($number);
    
    echo getNumberMeaning($reduced_number).PHP_EOL;
}

$num = 0;
while($num != EXIT_CODE) {
    $num = readline("Tell me a number! :)");
    //TODO: Input validation, now we are assuming that its a number!
    printNumberMeaning(intval($num));
}



/*
//function recibe el valor.
function reducirNum($num) : int {
    //mientras el valor sea mayor o igual a 10 se repetira el codigo.
    while ($num >= 10) {
        //coges el valor lo convirtes en una array con el str_split y luego se suman los valores de una 
        //a uno, se asigna el valor a $num y si el valor no es 10 o menos vuelve a repetirse el codigo.
        $numReducido = array_sum(str_split($num));
    }
    //retorna el valor reducido.
    return $numReducido;
}

function obtnerSignificado($numReducido) : string {
    switch ($numReducido) {
        case 0:
            return "El Todo";
        case 1:
            return "Individualidad";
        case 2:
            return "Dualidad";
        case 3:
            return "Razón";
        case 4:
            return "Estabilidad";
        case 5:
            return "Amor";
        case 6:
            return "Destrucción";
        case 7:
            return "Sabiduría";
        case 8:
            return "Poder";
        case 9:
            return "Generosidad";
        default:
            return "Número inválido";
    }
}

echo "Dime un numero: ";
$num1 = intval(fgets(STDIN));

echo "Dime otro un numero: ";
$num2 = intval(fgets(STDIN));

$num1Reducido = reducirNum($num1);
$num2Reducido = reducirNum($num2);
var_dump($num1Reducido);
var_dump($num2Reducido);
$num1Significado = obtnerSignificado($num1Reducido);
$num2Significado = obtnerSignificado($num2Reducido);

echo "Significado del numero " . $num1 . " es: " . $num1Significado. PHP_EOL;
echo "Significado del numero " . $num2 . " es: " . $num2Significado. PHP_EOL;*/
?>