<?php

/**
 * Reto #3 - Raíces cuadradas redondeadas
 *
 * Pide a tu usuario que ingrese un número, cuyo valor debe ser mayor a 20, luego calcula su raíz
 * cuadrada y reduce a 2 o 3 decimales el resultado final.
 */

#Creamos una función que nos realizara la operación de la raiz cuadrada redondeada

function raizCuadradaRedondeada($numero)
{
    if ($numero > 20) { //Si número ingresado es mayor que 20 realizamos la operación
        $raiz = sqrt($numero); //Calculamos la raíz con la funcion sqrt()
        $raiz = round($raiz, 2); //Redondeamos el valor de la raíz a dos decimales

        //Imprimimos en pantalla
        echo "<p><hr>Hola, la raíz cuadrada de " . $numero . " es: <strong>" . $raiz . "</strong></p>";
    } else { // si el número es igual ó menor a 20
        //mostramos mensaje en pantalla
        echo "<p>Ingresaste un número igual ó menor a 20, por favor verifica e intenta de nuevo.</p>";
    }
}
