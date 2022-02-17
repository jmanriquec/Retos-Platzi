<?php
/**
 * Reto #4 - Calcular área de un círculo
 *
 * Solicita a tu usuario que ingrese un número el cual será el radio de un círculo y con este dato
 * calcula el área de un círculo.
 * Si tu lenguaje cuenta con librerías específicas para este propósito haz uso de las mismas.
 */

//Funcion que calcula el área del circulo

function areaCirculo($radio)
{
    $pi = pi();
    $area = $pi * ($radio * $radio);
    $area = round($area, 2);

    echo "El area del circulo es: " . $area;
}
