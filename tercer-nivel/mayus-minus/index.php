<?php
/**
 *
 * Reto #5 Mayúsculas y minúsculas
 *
 * Solicita a tu usuario que indique 2 palabras, donde al mostrarlas en pantalla una estará totalmente en
 * mayúsculas y otra en minúsculas ¿fácil, no?
 */

#pedimos al usuario ingresar dos palabras

$palabra1 = readLine("Ingrese la primera palabra \n");
$palabra2 = readLine("Ingrese la segunda palabra \n");

#convertimos las palabras a mayúsculas y minúsculas respectivamente

$palabra1 = strtoupper($palabra1);
$palabra2 = strtolower($palabra2);

#Mostramos en pantalla palabra 1 en mayúscula
echo $palabra1 . " en mayúscula\n";

#Mostramos en pantalla palabra 2 en minúscula
echo $palabra2 . " en minúscula";
