<?php
function esMultiploDe5y7($num) {
    return ($num % 5 == 0 && $num % 7 == 0);
}

function esImpar($num) {
    return $num % 2 != 0;
}

function esPar($num) {
    return $num % 2 == 0;
}

function generarSecuencia() {
    $secuencias = [];
    $iteraciones = 0;

    do {
        $iteraciones++;
        $num1 = rand(1, 1000);
        $num2 = rand(1, 1000);
        $num3 = rand(1, 1000);

        if (esImpar($num1) && esPar($num2) && esImpar($num3)) {
            $secuencias[] = [$num1, $num2, $num3];
            break;
        } else {
            $secuencias[] = [$num1, $num2, $num3];
        }
    } while (true);

    return [$secuencias, $iteraciones];
}

function encontrarMultiploWhile($num) {
    $iteraciones = 0;
    $encontrado = false;
    $numeroAleatorio = 0;

    while (!$encontrado) {
        $iteraciones++;
        $numeroAleatorio = rand(1, 1000);
        if ($numeroAleatorio % $num == 0) {
            $encontrado = true;
        }
    }

    return [$numeroAleatorio, $iteraciones];
}

function encontrarMultiploDoWhile($num) {
    $iteraciones = 0;
    $numeroAleatorio = 0;

    do {
        $iteraciones++;
        $numeroAleatorio = rand(1, 1000);
    } while ($numeroAleatorio % $num != 0);

    return [$numeroAleatorio, $iteraciones];
}
function crearArregloAscii() {
    $arreglo = [];
    for ($i = 97; $i <= 122; $i++) {
        $arreglo[$i] = chr($i);
    }
    return $arreglo;
}
?>