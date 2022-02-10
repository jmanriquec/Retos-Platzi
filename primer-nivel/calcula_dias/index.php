<?php
/**
 *Reto #9 “Calculando días”
 *
 * Instrucciones: escribe un programa al que le indiques una cantidad de días y como resultado deberá
 * mostrar cuantas horas, minutos y segundos hay en dicha cantidad de días.
 */

// El usuario digita el número de días que desea convertir

$dias = readLine("Ingrese el número de días ");

/**
 *
 * realizamos el proceso de convercion
 */
$horas = $dias * 24;
$segundos = $horas * 3600;
$minutos = $segundos / 60;
$minutos = $minutos % 60;
$segundos = $segundos % 60;

/**
 * Mostramo los datos en pantalla
 */

echo "horas: " . (int) $horas . "\n";
echo "minutos: " . $minutos . "\n";
echo "segundos: " . $segundos . "\n";
