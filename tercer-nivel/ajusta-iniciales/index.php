<?php

/**
 * Reto #3 Ajusta las iniciales
 *
 * Ahora, pedirás a tu usuario que ingrese su nombre, apellido y país de origen en minúsculas. Después
 * mostrarás los datos de salida con mayúscula inicial al tratarse de nombres propios.
 *
 */

$nombre = readLine("Ingrese su nombre en minúscula. \n");
$apellido = readLine("Ingrese su apellido en minúscula. \n");
$pais_origen = readLine("Ingrese su pais de origen en minúscula. \n");

$nombre = ucwords($nombre);
$apellido = ucwords($apellido);
$pais_origen = ucwords($pais_origen);

echo "Hola, " . $nombre . " " . $apellido . " su país de origen es " . $pais_origen;
