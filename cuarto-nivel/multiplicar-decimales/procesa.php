<?php

/**
 * Reto #1 - Multiplicar decimales
 *
 * Pide a tu usuario que ingrese 2 números con decimales (cuantos más mejor) y muestra el resultado de
 * multiplicarlos ¿fácil, no?
 *
 */

#Usuario ingresa 2 numeros con decimales

function multipicaDecimales($numero1, $numero2)
{
    $resultado = $numero1 * $numero2;

    echo "El resultado de " . $numero1 . " x " . $numero2 . " = " . $resultado;

}
