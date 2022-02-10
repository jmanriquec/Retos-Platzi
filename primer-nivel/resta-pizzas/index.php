<?php
/**
 * Reto #6 “Resta de pizzas”
 *
 * Instrucciones: llegaste a una fiesta con X cantidad de rebanadas de pizza (indicadas por el usuario),
 * después de un rato se consumió Y cantidad de rebanadas y quedan Z. Fácil ¿cierto?
 * El reto está en que expreses lo que sucede es una forma comprensible para cualquier persona,
 * imprescindible pensar en tus usuarios
 */

$x = readLine("Ingrese la cantidad de rebanadas de pizza que ingresaron ");
$y = readLine("Ingrese la cantidad de rebanadas de pizza consumidas ");
$z = ($x - $y);

echo "De " . $x . " rebanadas ingresadas se consumieron " . $y . " rebanadas y sobran " . $z . " rebanadas";
