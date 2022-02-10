<?php

/**
 * Reto #4 String fragmentado
 *
 * Pongámonos más exigentes
 * Solicita a tu usuario que indique una oración de 10 o más caracteres, la línea de un poema o canción
 * funcioona excelente. Calcula la longitud del string, pide un número de rango inicial y final que esté
 * entre la longitud del string para al final mostrar el fragmento que incluya los caracteres en ese
 * intervalo.
 *
 */

#Solicitamos al usuario ingresar el una oracion de 10 ó más carácteres
$string = readLine("Ingrese una oración de 10 carácteres ó más \n");
$rango_i = readLine("Ingrese un número de rango inicial \n");
$rango_f = readLine("Ingrese un número de rango final \n");

#convertimos el string en array
$array_string = str_split($string);

#contamos cuantos carácteres tiene el string
$cuenta_string = count($array_string);

if ($cuenta_string >= 10) {
    if (($rango_i >= 0) && ($rango_f <= $cuenta_string)) {
        for ($i = $rango_i; $i < $rango_f; $i++) {
            echo $array_string[$i];
        }
    } else {
        echo "Lo siento ingresaste un rango no valido. Por favor verifica e intenta de nuevo (Rango minimo es 0 y rango máximo es " . $cuenta_string . " para esta oración)";
    }

} else {
    echo "El string tiene menos de 10 carácteres";
}

//print_r($arr);
