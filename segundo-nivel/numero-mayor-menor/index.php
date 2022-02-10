<?php

/**
 * Reto #1 - Número mayor y menor
 * Escribe un programa que pida al usuario 2 números, mostrando como salida cuál es el número mayor y la
 * diferencia de uno respecto al otro. En caso de que los números sean iguales, mostrarlo también en
 * pantalla.
 */

$numero_1 = readLine("Ingrese el número 1 ");
$numero_2 = readLine("Ingrese el número 2 ");

if ($numero_1 > $numero_2) {
    $diferencia = $numero_1 - $numero_2;
    echo "El número " . $numero_1 . " es mayor que el número " . $numero_2 . "\n" .
        "La diferencia es de " . $diferencia;
} elseif ($numero_1 < $numero_2) {
    $diferencia = $numero_2 - $numero_1;
    echo "El número " . $numero_2 . " es mayor que el número " . $numero_1 . "\n" .
        "La diferencia es de " . $diferencia;
} else {
    echo "¡Los números son iguales!";
}
