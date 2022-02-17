<?php

/**
 * Reto #2 - Reducir los decimales
 *
 * Toma como base el reto anterior, pero ajústalo para que el resultado muestre solamente 1, 2, 3 o 4
 * decimales.
 *
 */

#creamos una funcion que nos realice la operación

function multipicaDecimales($numero1, $numero2)
{
    $resultado = $numero1 * $numero2;

    #Reducimos el número de decimales a 2
    $resultado = round($resultado, 2);

    #Imprimimos el resultado en pantalla
    echo "El resultado de " . $numero1 . " x " . $numero2 . " = " . $resultado;

}
