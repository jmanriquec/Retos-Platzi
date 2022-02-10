<?php
/**
 * Reto #7 “Edad futura y pasada”
 *
 * Instrucciones: pide al usuario que indique su nombre y su edad. Como mensaje de salida le indicarás
 * que edad tuvo el año pasado y cuantos años tendrá el siguiente año.
 * Ejemplo: [nombre] el año pasado tenías X años y el próximo año cumplirás Y años.
 *
 */

// Declaramos las variables y recibimos los datos

$nombre = readLine("Ingrese su nombre ");
$edad = readLine("Ingrese su edad ");

//imprimimos en pantalla
echo "Hola, " . $nombre . " el año pasado tenias " . ($edad - 1) . " años y dentro de una año tendras " . ($edad + 1) . " años";
