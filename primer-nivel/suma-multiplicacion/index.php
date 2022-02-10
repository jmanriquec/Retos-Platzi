<?php

/**
 *Reto #5 “Suma y multiplicación”
 *
 * Instrucciones: añadiendo un extra al reto anterior ahora el usuario ingresará 3 números, sumarás los 2
 * primeros y el resultado será multiplicado por el tercero. Añade las consideraciones del punto decimal
 * del reto anterior.
 * Ejemplo:
 *
 */

#Recibimos los datos ingresados por el usuario

$num1 = (int) readLine(" Ingrese el Número 1: ");
$num2 = (int) readLine(" Ingrese el Número 2: ");
$num3 = (int) readLine(" Ingrese el Número 3: ");

$multipicacion = ($num1 + $num2) * $num3;

#Mostramos el resultado de sumar y multiplicar
echo "El resultado de ($num1 + $num2) * $num3 es: " . $multipicacion . "\n";
