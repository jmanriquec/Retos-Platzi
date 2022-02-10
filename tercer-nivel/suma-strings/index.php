<?php

/**
 *
 * Reto #2 ‘Suma’ de strings
 *
 * Crea un programa en el que le pidas en 3 variables distintas: nombre, apellido y comida favorita. Como
 * salida mostrarás el mensaje Hola, mi nombres es {nombre} {apellido} y mi comida favorita es {comida}
 * en un solo string.
 */

$nombre = readLine("Ingrese sus nombres: \n");
$apellido = readLine("Ingrese sus apellidos: \n");
$comida_favorita = readLine("Ingrese sus comida favorita: \n");

echo "mi nombre es " . $nombre . " " . $apellido . " y mi comida favorito es " . $comida_favorita;
