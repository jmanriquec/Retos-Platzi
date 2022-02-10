<?php

/**
 * Reto #2 - En el rango, por favor.
 *
 * Pide al usuario que indique 2 números: uno que servirá como límite y otro para comparar. Si el segundo
 * número es menor al primero, mostrarás un mensaje diciendo “El número ‘x’ se encuentra en el rango,
 * gracias” y en caso contrario dirá “El número ‘x’ excede el límite permitido”.
 */

$numero_1 = readLine("Ingrese un número para especificar el límite  ");
$numero_2 = readLine("Ingrese un número ");

if ($numero_1 < $numero_2) {
    echo "El número " . $numero_2 . " excede el límite permitido";
} else {
    echo "El número " . $numero_2 . " se encuentra dentro del rango";
}
