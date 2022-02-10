<?php

/**
 *Reto #4 “Suma de enteros”
 *
 * Instrucciones: otro clásico conocido, donde pedirás al usuario que ingrese 2 números y muestre en
 * pantalla el resultado. Si quieres añadir más dificultad puedes utilizar números con punto decimal y
 * especificar el número de decimales después del punto.
 * Ejemplo: 2.5633 + 5.6883 = 8.25
 *
 */

#Recibimos los datos ingresados por el usuario

$num1 = (int) readLine(" Ingrese el Número 1: ");
$num2 = (int) readLine(" Ingrese el Número 2: ");

#realizamos la operación de la suma
$suma = ($num1 + $num2);

#Mostramos el resultado de  la suma en pantalla
echo "\nEl resultado de la suma $num1 + $num2 es: " . $suma . "\n";
