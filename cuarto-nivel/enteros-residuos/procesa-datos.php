<?php

/**
 * Reto #6 - Mostrar enteros y residuos
 *
 * Pide al usuario que ingrese 2 números, divídelos, muestra un resultado como enteros y además el
 * residuo por separado de una forma que seal fácil de entender al usuario.
 * Por ejemplo: “9 dividido entre 2 es 4 y sobra 1”.
 */

function dividirNumeros($numero1, $numero2)
{
    $division = (int) ($numero1 / $numero2);
    $residuo = (int) ($numero1 % $numero2);

    echo "<hr>Resulatado de la división: " . $division . "<br>" .
        "Residuo:  " . $residuo;

}
