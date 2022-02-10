<?php

/**
 * Reto #6 - Edad permitida
 *
 * Pide al usuario que ingrese su edad y mostrarás un mensaje correspondiente si esta coincide con las
 * siguientes condiciones:
 * Más de 30 años: Nunca es tarde para aprender ¿Qué curso tomaremos?
 * Entre 29 y 18 años: Es un momento excelente para impulsar tu carrera.
 * Menos de 18 años: ¿Sabes hacia dónde dirigir tu futuro? Seguro puedo ayudarte.
 */

#Capturamo nombre y edad del usuario

$nombre = readLine("Ingrese su nombre: \n");
$edad = readLine("Ingrese su edad: \n");

#mediante una condición if mostramos los posibles casos

if ($edad < 18) {
    echo "Hola, " . $nombre . ", ¿Sabes hacia dónde dirigir tu futuro? Seguro puedo ayudarte.";
} else {
    if ($edad >= 18 && $edad <= 29) {
        echo "Hola, " . $nombre . ", Es un momento excelente para impulsar tu carrera.";
    } else {
        echo "Hola, " . $nombre . ", Nunca es tarde para aprender ¿Qué curso tomaremos?";
    }
}
