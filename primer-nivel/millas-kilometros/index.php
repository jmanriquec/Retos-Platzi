<?php

/**
 *
 * Reto #10 “Conversor de millas”
 *
 * Instrucciones: hay 1.609344 km en una milla (mi). Escribe un programa en el que el usuario indique una
 * cantidad de millas y muestre en pantalla el resultado convertido a kilómetros.
 */

// Leemo el número de millas que desea convertir el usuario a kilómetros

$millas = readLine("Ingrese las millas que desea convertir a kilómetros ");

/**
 *
 * realizamos la conversión
 */

$una_milla = 1.609344; #Una milla equivale a 1.609344 km
$mi_km = $una_milla * $millas;

/**
 *
 * Mostramos el resultado en pantalla
 */

echo $millas . " (mi) equivalen a " . $mi_km . " (Km)";
