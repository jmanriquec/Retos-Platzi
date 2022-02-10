<?php

/**
 * Reto #3 - Rangos cambiantes.
 *
 * Nuevamente pide a tu usuario que indique 3 números: un límite superior, un límite inferior y uno de
 * comparación. Si el número de comparación se encuentra entre los 2 primeros, comunicarlo en pantalla.
 * En caso estar por debajo del límite inferior o por arriba del límite superior, también mostrarlo en
 * pantalla.
 *
 */

#Solicitamos al usuario ingresar tres números

$limite_superior = readLine("Ingrese el límite superior ");
$limite_inferior = readLine("Ingrese el límite inferior ");
$comparacion = readLine("Ingrese el número de comparación ");

if (($comparacion <= $limite_superior) && ($comparacion >= $limite_inferior)) {
    echo "El número " . $comparacion . " se encuetra dentro del rango superior e inferior";
} elseif ($comparacion > $limite_superior) {
    echo "El número " . $comparacion . " esta por encima del rango superior";
} elseif ($comparacion < $limite_inferior) {
    echo "El número " . $comparacion . " esta por debajo del rango inferior";
}
